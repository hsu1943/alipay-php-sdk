<?php

use duckSoft\alipay\aop\request\AlipayTradeCloseRequest;
use duckSoft\alipay\model\builder\AlipayTradeCloseContentBuilder;

require dirname(__FILE__) . DIRECTORY_SEPARATOR . '../DefaultAlipayClientFactory.php';

$req = new AlipayTradeCloseContentBuilder();

$req->setOperatorId($_POST['operatorId']);
    $req->setTradeNo($_POST['tradeNo']);
    $req->setOutTradeNo($_POST['outTradeNo']);
    
    $request = new AlipayTradeCloseRequest();
	$request->setBizContent ( $req->getBizContent() );
	
    $ext= new DefaultAlipayClientFactory(); 
	//因为是接口服务，使用exexcute方法获取到返回值
    $response = $ext->aopclientRequestExecute ( $request, NULL ,$req->getAppAuthToken() );
    echo json_encode($response);
?>