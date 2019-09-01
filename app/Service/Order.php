<?php

namespace App\Service;

use Illuminate\Support\Facades\Redis;

class Order {

    const CACHE_ORDER_EXPIRE_SECONDS = 300;
    const CACHE_ORDER_KEY_PREFIX     = 'order_';

    /**
     * @var Cepco1C
     */
    private $_api;

    /**
     * @var Utils
     */
    private $_utils;

    /**
     * @var \Illuminate\Redis\Connections\Connection
     */
    private $_redis;

    public function __construct(Cepco1C $api, Utils $utils) {
        $this->_api = $api;
        $this->_utils = $utils;
        $this->_redis = Redis::connection();
    }

    /**
     * @param string $clientName
     * @param string $clientPhone
     * @param string $deviceType
     * @param string $model
     * @param string $defect
     * @param string $isCourier
     * @return Entity\Order
     */
    public function createOrder($clientName, $clientPhone, $deviceType, $model, $defect, $isCourier) {
        $order              = new Entity\Order();
        $order->clientName  = $clientName;
        $order->clientPhone = $clientPhone;
        $order->defect      = $defect;
        $order->deviceType  = $deviceType;
        $order->model       = $model;
        $order->isCourier   = (int)($isCourier > 0);
    //    $order->isCourier   = $isCourier;
        return $order;
    }

    /**
     * @param int $orderId
     * @param string $phone
     * @return Entity\Order
     */
    public function getOrderByIdAndPhone($orderId, $phone = null) {
        $cachedOrder = $this->_getCachedOrder($orderId);
        if ($cachedOrder !== null) {
            var_dump($cachedOrder);
            return $cachedOrder;
        }

        $order = $this->_api->loadOrderByIdAndPhone($orderId, $phone);
        if ($order !== null) {
            $this->_cacheOrder($order);
            var_dump($order);
        }
        return $order;
    }

    /**
     * @return string[]
     */
    public function getStatusesIds() {
        $statusesDataById = $this->getStatusesDataById();
        return array_keys($statusesDataById);
    }

    /**
     * @return array
     */
    public function getStatusesDataById() {
        $result = [];
        foreach ($this->_getStatusesData() as $data) {
            $result[$data['id']] = $data;
        }
        return $result;
    }

    /**
     * @param int $orderId
     * @return Entity\Order
     */
    public function _getCachedOrder($orderId) {
        $cachedOrder = $this->_redis->get($this->_getOrderCacheKey($orderId));
        if ($cachedOrder === null) {
            return null;
        }
        $orderObject = json_decode($cachedOrder);
        return $this->_utils->cast($orderObject, Entity\Order::class);
    }

    /**
     * @param Entity\Order $order
     */
    private function _cacheOrder(Entity\Order $order) {
        $orderForCache = json_encode($order, JSON_UNESCAPED_UNICODE);
        $this->_redis->setex($this->_getOrderCacheKey($order->id), self::CACHE_ORDER_EXPIRE_SECONDS, $orderForCache);
    }

    /**
     * @param $orderId
     * @return string
     */
    private function _getOrderCacheKey($orderId) {
        return self::CACHE_ORDER_KEY_PREFIX . $orderId;
    }

    /**
     * @return array
     */
    private function _getStatusesData() {
        // TODO: unused class prop
        return [
            [
                'id' => Entity\Order::STATUS_DIAGNOSTICS,
                'title' => 'Диагностика',
                'class' => '',
                'order' => '1',
                'image' => 'diagnostic'
                ],
            [
                'id' => Entity\Order::STATUS_IN_WORK,
                'title' => 'В ремонте',
                'class' => '',
                'order' => '2',
                'image' => 'infix'
            ],
            [
                'id' => Entity\Order::STATUS_FIXED,
                'title' => 'Отремонтирован',
                'class' => '',
                'order' => '3',
                'image' => 'fixed'
            ],
            [
                'id' => Entity\Order::STATUS_COMPENSATION_NOTE,
                'title' => 'Справка',
                'class' => '',
                'order' => '3',
                'image' => 'rejected'
            ],
            [
                'id' => Entity\Order::STATUS_DEFECT_NOT_FOUND,
                'title' => 'Дефект не найден',
                'class' => '',
                'order' => '3',
                'image' => 'rejected'
            ],
            [
                'id' => Entity\Order::STATUS_IMPOSSIBLE,
                'title' => 'Невозможно отремонтировать',
                'class' => '',
                'order' => '3',
                'image' => 'rejected'
            ],
            [
                'id' => Entity\Order::STATUS_REFUSED,
                'title' => 'Отказ от ремонта',
                'class' => '',
                'order' => '3',
                'image' => 'rejected'
            ],
            [
                'id' => Entity\Order::STATUS_WARRANTY_REJECTED,
                'title' => 'Отказ в гарантии',
                'class' => '',
                'order' => '3',
                'image' => 'rejected'
            ],
            [
                'id' => Entity\Order::STATUS_READY,
                'title' => 'Готов к выдаче',
                'class' => '',
                'order' => '4',
                'image' => 'ready'
            ],
            [
                'id' => Entity\Order::STATUS_GIVEN,
                'title' => 'Выдан',
                'class' => '',
                'order' => '5',
                'image' => 'end'
            ],
        ];
    }
}