<?php

use duckSoft\alipay\aop\request\AlipayTradeRefundRequest;
use duckSoft\alipay\model\builder\AlipayTradeRefundContentBuilder;

require dirname(__FILE__) . DIRECTORY_SEPARATOR . '../DefaultAlipayClientFactory.php';

$req = new AlipayTradeRefundContentBuilder();

$req->setRefundAmount($_POST['refundAmount']);
    $req->setRefundCurrency($_POST['refundCurrency']);
    $req->setRefundReason($_POST['refundReason']);
    $req->setOutRequestNo($_POST['outRequestNo']);
    $req->setOperatorId($_POST['operatorId']);
    $req->setStoreId($_POST['storeId']);
    $req->setTerminalId($_POST['terminalId']);
    $req->setGoodsDetail($_POST['goodsDetail[0]']);
    $req->setRefundRoyaltyParameters($_POST['refundRoyaltyParameters']);
    $req->setOutTradeNo($_POST['outTradeNo']);
    $req->setTradeNo($_POST['tradeNo']);
    
    $request = new AlipayTradeRefundRequest();
	$request->setBizContent ( $req->getBizContent() );
	
    $ext= new DefaultAlipayClientFactory(); 
	//因为是接口服务，使用exexcute方法获取到返回值
    $response = $ext->aopclientRequestExecute ( $request, NULL ,$req->getAppAuthToken() );
    echo json_encode($response);
?>