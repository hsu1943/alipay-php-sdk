<?php
/**
 * User: junying.wei
 * Date: 18/08/05
 * Time: 下午2:09
 */
require_once dirname ( __FILE__ ).DIRECTORY_SEPARATOR.'./../../AopSdk.php';
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . './../entites/ApiParamModel.php';
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . './../entites/ApiInfoModel.php';
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . '../model/result/AlipayTradeRefundResult.php';
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . '../model/builder/AlipayTradeRefundContentBuilder.php';
require dirname(__FILE__) . DIRECTORY_SEPARATOR . './../config/DefaultAlipayClientFactory.php';

$req = new AlipayTradeRefundContentBuilder();

$req->setRefundAmount($_POST['refundAmount']);
    $req->setRefundCurrency($_POST['refundCurrency']);
    $req->setRefundReason($_POST['refundReason']);
    $req->setOutRequestNo($_POST['outRequestNo']);
    $req->setOperatorId($_POST['operatorId']);
    $req->setStoreId($_POST['storeId']);
    $req->setTerminalId($_POST['terminalId']);
    $req->setGoodsDetail($_POST['goodsDetail[0]']);
    $req->setRefundRoyaltyParameters[0]($_POST['refundRoyaltyParameters[0]']);
    $req->setOutTradeNo($_POST['outTradeNo']);
    $req->setTradeNo($_POST['tradeNo']);
    
    $request = new AlipayTradeRefundRequest();
	$request->setBizContent ( $req->getBizContent() );
	
    $ext= new DefaultAlipayClientFactory(); 
	//因为是接口服务，使用exexcute方法获取到返回值
    $response = $ext->aopclientRequestExecute ( $request, NULL ,$req->getAppAuthToken() );
    echo json_encode($response);
?>