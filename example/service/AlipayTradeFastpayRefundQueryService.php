<?php

use duckSoft\alipay\aop\request\AlipayTradeFastpayRefundQueryRequest;
use duckSoft\alipay\model\builder\AlipayTradeFastpayRefundQueryContentBuilder;

require dirname(__FILE__) . DIRECTORY_SEPARATOR . '../DefaultAlipayClientFactory.php';

$req = new AlipayTradeFastpayRefundQueryContentBuilder();

$req->setOutRequestNo($_POST['outRequestNo']);
    $req->setTradeNo($_POST['tradeNo']);
    $req->setOutTradeNo($_POST['outTradeNo']);
    
    $request = new AlipayTradeFastpayRefundQueryRequest();
	$request->setBizContent ( $req->getBizContent() );
	
    $ext= new DefaultAlipayClientFactory(); 
	//因为是接口服务，使用exexcute方法获取到返回值
    $response = $ext->aopclientRequestExecute ( $request, NULL ,$req->getAppAuthToken() );
    echo json_encode($response);
?>