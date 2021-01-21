<?php

use duckSoft\alipay\aop\AopClient;

class DefaultAlipayClientFactory {
    /**
     * 使用SDK执行提交页面接口请求
     * @param $request
     * @param string $token
     * @param string $appAuthToken
     * @return string $$result
     */
	public function aopClientRequestExecute($request, $token = NULL, $appAuthToken = NULL) {
		$alipayConfig = new AlipayConfig();
		$aop = new AopClient ();
		$aop->gatewayUrl = $alipayConfig->gatewayUrl;
		$aop->appId = $alipayConfig->appId;
		$aop->alipayrsaPublicKey = $alipayConfig->alipayrsaPublicKey;
		$aop->rsaPrivateKey = $alipayConfig->rsaPrivateKey;
		$aop->postCharset = $alipayConfig->postCharset;
		$aop->format = $alipayConfig->format;
		$aop->signType = $alipayConfig->signType;
		$aop->apiVersion = "1.0";
		$result = $aop->execute($request,$token,$appAuthToken);
		return $result;
	}

	public function aopClientRequestPageExecute($request, $httpMethod = "POST") {
		$alipayConfig = new AlipayConfig();
		$aop = new AopClient ();
		$aop->gatewayUrl = $alipayConfig->gatewayUrl;
		$aop->appId = $alipayConfig->appId;
		$aop->alipayrsaPublicKey = $alipayConfig->alipayrsaPublicKey;
		$aop->rsaPrivateKey = $alipayConfig->rsaPrivateKey;
		$aop->postCharset = $alipayConfig->postCharset;
		$aop->format = $alipayConfig->format;
		$aop->signType = $alipayConfig->signType;
		$aop->apiVersion = "1.0";
		$result = $aop->pageExecute($request,$httpMethod);
		return $result;
	}
}
