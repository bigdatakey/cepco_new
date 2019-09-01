<?php

namespace App\Service;
use Curl\Curl;

class PayKeeper {

    const DEFAULT_SERVICE_NAME = 'Услуга';
    const AUTH_TOKEN_URL       = '/info/settings/token/';
    const PAYMENTS_INFO_URL    = '/info/payments/search/';
    const CREATE_INVOICE_URL   = '/change/invoice/preview/';
	const BASE_URL             = 'https://cepco.server.paykeeper.ru';
	
	/**
     * @var string
     */
    private $_token;

	 /**
     * @param string $url
     * @param array $data
     * @return array
     */
    private function _post($url, array $data = []) {
        $data['token'] = $this->_getToken();
        $curl = $this->_curl;
        foreach ($this->_getHeaders() as $key => $header) {
            $curl->setHeader($key, $header);
        }
        $response = $this->_curl->post($url, $data);
        return json_decode($response->getResponse(), true) ?: [];
	}
	
	/**
    * @return string
    */
    private function _getToken() {
        if ($this->_token === null) {
            $this->_updateToken();
        }
        return $this->_token;
	}
	
	private function _updateToken() {
        $response = $this->_curl
            ->setHeader('Authorization', $this->_getAuthHeader())
            ->post(self::BASE_URL . self::AUTH_TOKEN_URL)
            ->getResponse();
        $data = json_decode($response, true) ?: [];
        $this->_token = array_key_exists('token', $data) ? $data['token'] : null;
	}
	
	/**
     * @return string
     */
    private function _getAuthHeader() {
        $user = config('app.paykeeper.login');
        $password = config('app.paykeeper.password');
        $hash = base64_encode("$user:$password");
        return "Basic {$hash}";
    }
}