<?php

use duckSoft\alipay\aop\request\AlipayTradeOrderSettleRequest;
use duckSoft\alipay\model\builder\AlipayTradeOrderSettleContentBuilder;

require dirname(__FILE__) . DIRECTORY_SEPARATOR . '../DefaultAlipayClientFactory.php';

$req = new AlipayTradeOrderSettleContentBuilder();

$req->setOutRequestNo($_POST['outRequestNo']);
    $req->setTradeNo($_POST['tradeNo']);
    $req->setRoyaltyParameters($_POST['royaltyParameters']);
    $req->setOperatorId($_POST['operatorId']);
    
    $request = new AlipayTradeOrderSettleRequest();
	$request->setBizContent ( $req->getBizContent() );
	
    $ext= new DefaultAlipayClientFactory(); 
	//因为是接口服务，使用exexcute方法获取到返回值
    $response = $ext->aopclientRequestExecute ( $request, NULL ,$req->getAppAuthToken() );
    echo json_encode($response);
?>