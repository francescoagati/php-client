<?php

namespace Veespo;
		
class Api {
	
	function __construct($params) {
		$this->token   = $params['token'];
		$this->apiPath = $params['api_path'];
	}

	function get($path,$params) {
		$params['token'] = $this->token;
		return Api::httpGet($this->apiPath,$path,$params);
	}

	static function getToken($params) {
		$url = "v1/auth/category/".$params['category']."/user-token";
		return Api::httpGet($params['api_path'],$url,array('api_key' => $params['api_key'],'user' => $params['user']))->token;
	}

	private static function httpGet($apiPath,$path,$params) {
		$response = \Guzzle\Http\StaticClient::get("$apiPath/$path",array('query' => $params));
		return json_decode($response->getBody())->data; //json_decode($response)["data"];
	}

}

