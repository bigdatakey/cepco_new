<?php


namespace App\Service;

use Artisaninweb\SoapWrapper\Service;
use Artisaninweb\SoapWrapper\SoapWrapper;

class Cepco1C {

    /**
     * @var SoapWrapper
     */
    private $_soapWrapper;

    /**
     * Cepco constructor.
     * @param SoapWrapper $wrapper
     * @throws \Artisaninweb\SoapWrapper\Exceptions\ServiceAlreadyExists
     */
    public function __construct(SoapWrapper $wrapper) {
        $this->_soapWrapper = $wrapper;
        $this->_initService();
    }

    /**
     * @param string $id
     * @param string $phone
     * @return Entity\Order
     */
    public function loadOrderByIdAndPhone($id, $phone) {
        $response = $this->_callMethod('CheckRepair', $this->_getOrderParams($id, $phone));
        return $this->_convertResponseToOrder($response);
    }

    /**
     * @param string $orderId
     * @param string $sum
     */
    public function confirmOrderPayment($orderId, $sum) {
        $this->_callMethod('getPaid', $this->_getConfirmPayParams($orderId, $sum));
    }

    /**
     * @param Entity\Order $order
     * @return string
     */
    public function createCallForOrder(Entity\Order $order) {
    //    $response = $this->_callMethod('CreateCall', $this->_getCreateCallParams($order));
        $response = $this->_callMethodResponceOrderId('CreateCall', $this->_getCreateCallParams($order));
    //    $this->_validateCreateCallResponse($response);
        return $response;
    }

    /**
     * @param string $method
     * @param array $params
     * @return mixed
     * @throws \Exception
     */
    private function _callMethod($method, array $params) {
        $response = $this->_soapWrapper->call("cepco.{$method}", [$method => $params]);
        if (!array_key_exists('return', $response)) {
            throw new \Exception('No return key in response');
        }
        return $response->return;
    }
    
    private function _callMethodResponceOrderId($method, array $params) {
        $response = $this->_soapWrapper->call("cepco.{$method}", [$method => $params]);
        if (!array_key_exists('OrderID', $response)) {
            throw new \Exception('No return key in response');
        }
        return $response->OrderID;
    }    

    /**
     * @param Entity\Order $order
     * @return array
     */
    private function _getCreateCallParams(Entity\Order $order) {
        return [
            'CustomerName' => $order->clientName,
            'CustomerPhone' => $order->clientPhone,
            'OrderDefect' => $order->defect,
            'DeviceType' => $order->deviceType,
            'DeviceBrand' => $order->model,
            'Courier' => (string)$order->isCourier,
        ];
    }

    private function _validateCreateCallResponse($response) {
        // TODO: Implement method
        return;
    }

    /**
     * @param string $orderId
     * @param string $sum
     * @return array
     */
    private function _getConfirmPayParams($orderId, $sum) {
        return ['OrderID' => $orderId, 'OrderStatus' => "{$sum} RUB - Оплачен"];
    }

    /**
     * @param string $id
     * @param string $phone
     * @return array
     */
    private function _getOrderParams($id, $phone) {
        return [
            'OrderID'       => $id,
            'CustomerPhone' => $phone,
        ];
    }

    /**
     * @param string $response
     * @return Entity\Order
     */
    private function _convertResponseToOrder($response) {
        $data = explode('`', $response);
        
        if (count($data) < 13) {
            return null;
        }

        $order = new \App\Order([
        'id'           => $data[1],
        'created_at'    => date("Y-m-d", strtotime($data[3])),
        'date_repair_two' => !empty($data[4]) ? $data[4] : null,
        'serial_number' => $data[5],
        'manufacturer'  => $data[6],
        'type'          => $data[7],
        'description'   => $data[8],
        'price'         => (int)str_replace(' ', '', $data[9]),
        'price_status'  => $data[10],
    //    'status'       => $this->_getOrderStatusBy1CStatus($data[11]),
        'status'       => $this->getOrderStatusOnName($data[11]),
         'conclusion'   => $data[11],
         
        'type_of_repair' => $data[13],
        ]);    
        return $order;
        
    }

    
    private function getOrderStatusOnName($nameStatus) {
        switch ($nameStatus) {
            case 'status_diagnostics':
                return '0';
            case 'status_in_work':
                return '1';
            case 'status_fixed':
                return '2';
            case 'status_ready':
                return '3';
            case 'status_given':
                return '4';
            default:
                return '0';
        }
    }
    
    
    /**
     * @param $status
     * @return string
     */
    private function _getOrderStatusBy1CStatus($status) {
        $status = trim($status);
        $orderStatusTo1CStatusMap = [
            Entity\Order::STATUS_DIAGNOSTICS => [
                'Диагностика', 'Доставка (в диагностику)',
            ],
            Entity\Order::STATUS_IN_WORK     => [
                'Ремонт', 'Ожидание ответа ТП', 'Ожидание продления гарантии', 'Ожидание док для списание',
                'Запрос на согласование цен', 'Запрос на деталь', 'Ожидание согласования плат.рем.',
                'Ожидание ответа ТП', 'Ожидание продления гарантии', 'Ожидание док для списание',
                'Заявка', 'Заявка поставщику', 'У мастера',
            ],
            Entity\Order::STATUS_FIXED => [
                'Отремонтирован',
            ],
            Entity\Order::STATUS_READY => [
                'ДоставкаНаВыдачу', 'Готов (к выдаче)',
            ],
            Entity\Order::STATUS_GIVEN => [
                'Выдан', 'Хранение',
            ],
            Entity\Order::STATUS_IMPOSSIBLE => [
                'Окончен без ремонта',
            ],
            Entity\Order::STATUS_COMPENSATION_NOTE => [
                'Окончен (справка)',
            ],
            Entity\Order::STATUS_DEFECT_NOT_FOUND => [
                'Дефект не обнаружен',
            ],
            Entity\Order::STATUS_WARRANTY_REJECTED => [
                'Отказ в гарантии',
            ],
            Entity\Order::STATUS_REFUSED => [
                'Отказ от ремонта',
            ],
        ];
        foreach ($orderStatusTo1CStatusMap as $orderStatus => $titles) {
            if (in_array($status, $titles)) {
                return $orderStatus;
            }
        }
        return null;
    }

    private function _initService() {
        $service = 'cepco';
        if ($this->_soapWrapper->has($service)) {
            return;
        }
        $contextOptions = [
            'ssl' => [
                // TODO: Fix this, once wsdl service goes ssl
                'verify_peer'       => false,
                'verify_peer_name'  => false,
                'allow_self_signed' => true
            ]
        ];

        $context = stream_context_create($contextOptions);
        $soapClientOptions = [
            'stream_context' => $context,
            'cache_wsdl'     => WSDL_CACHE_NONE,
            'login'          => config('app.1c_cepco.login'),
            'password'       => config('app.1c_cepco.password'),
            'trace'          => true,
        ];
        // TODO: register service on init
        $this->_soapWrapper->add('cepco', function (Service $service) use ($soapClientOptions) {
            $service
                ->wsdl('http://gate.cepco.ru:8080/SC_82/ws/cepcoRU.1cws?wsdl')
                ->options($soapClientOptions)
                ->trace(true);
        });
    }
}