<?php

use duckSoft\alipay\aop\request\AlipayTradePrecreateRequest;
use duckSoft\alipay\model\builder\AlipayTradePrecreateContentBuilder;

require dirname(__FILE__) . DIRECTORY_SEPARATOR . '../DefaultAlipayClientFactory.php';

    $req = new AlipayTradePrecreateContentBuilder();

    $req->setOutTradeNo($_POST['outTradeNo']);
    $req->setTotalAmount($_POST['totalAmount']);
    $req->setSubject($_POST['subject']);
    $req->setSellerId($_POST['sellerId']);
    $req->setDiscountableAmount($_POST['discountableAmount']);
    $req->setUndiscountableAmount($_POST['undiscountableAmount']);
    $req->setBuyerLogonId($_POST['buyerLogonId']);
    $req->setGoodsDetail($_POST['goodsDetail[0]']);
    $req->setBody($_POST['body']);
    $req->setOperatorId($_POST['operatorId']);
    $req->setStoreId($_POST['storeId']);
    $req->setDisablePayChannels($_POST['disablePayChannels']);
    $req->setEnablePayChannels($_POST['enablePayChannels']);
    $req->setTerminalId($_POST['terminalId']);
    $req->setExtendParams($_POST['extendParams']);
    $req->setTimeoutExpress($_POST['timeoutExpress']);
    $req->setRoyaltyInfo($_POST['royaltyInfo']);
    $req->setSettleInfo($_POST['settleInfo']);
    $req->setSubMerchant($_POST['subMerchant']);
    $req->setAlipayStoreId($_POST['alipayStoreId']);
    $req->setExtUserInfo($_POST['extUserInfo']);
    $req->setBusinessParams($_POST['businessParams']);
    $req->setQrCodeTimeoutExpress($_POST['qrCodeTimeoutExpress']);

    $request = new AlipayTradePrecreateRequest();
	$request->setBizContent ( $req->getBizContent() );
    $config = new AlipayConfig();
	$request->setNotifyUrl($config->notifyUrl);
	
    $ext= new DefaultAlipayClientFactory(); 
	//因为是接口服务，使用exexcute方法获取到返回值
    $response = $ext->aopclientRequestExecute ( $request, NULL ,$req->getAppAuthToken() );
    echo json_encode($response);
?>