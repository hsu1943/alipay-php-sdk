<?php

use duckSoft\alipay\aop\request\AlipayTradeQueryRequest;
use duckSoft\alipay\model\builder\AlipayTradeQueryContentBuilder;

require dirname(__FILE__) . DIRECTORY_SEPARATOR . '../DefaultAlipayClientFactory.php';

$req = new AlipayTradeQueryContentBuilder();

$req->setOutTradeNo($_POST['outTradeNo']);
    $req->setTradeNo($_POST['tradeNo']);
    
    $request = new AlipayTradeQueryRequest();
	$request->setBizContent ($req->getBizContent());
	
    $ext= new DefaultAlipayClientFactory(); 
	//因为是接口服务，使用exexcute方法获取到返回值
    $response = $ext->aopclientRequestExecute ( $request, NULL ,$req->getAppAuthToken() );
    echo json_encode($response);
?>