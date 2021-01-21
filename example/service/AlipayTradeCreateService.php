<?php

use duckSoft\alipay\model\builder\AlipayTradeCreateContentBuilder;

require dirname(__FILE__) . DIRECTORY_SEPARATOR . '../AlipayConfig.php';

    $req = new AlipayTradeCreateContentBuilder();

    $req->setOutTradeNo($_POST['outTradeNo']);
    $req->setTotalAmount($_POST['totalAmount']);
    $req->setSubject($_POST['subject']);
    $req->setSellerId($_POST['sellerId']);
    $req->setDiscountableAmount($_POST['discountableAmount']);
    $req->setUndiscountableAmount($_POST['undiscountableAmount']);
    $req->setBody($_POST['body']);
    $req->setGoodsDetail($_POST['goodsDetail[0]']);
    $req->setOperatorId($_POST['operatorId']);
    $req->setEnablePayChannels($_POST['enablePayChannels']);
    $req->setStoreId($_POST['storeId']);
    $req->setDisablePayChannels($_POST['disablePayChannels']);
    $req->setTerminalId($_POST['terminalId']);
    $req->setExtendParams($_POST['extendParams']);
    $req->setTimeoutExpress($_POST['timeoutExpress']);
    $req->setRoyaltyInfo($_POST['royaltyInfo']);
    $req->setSettleInfo($_POST['settleInfo']);
    $req->setAlipayStoreId($_POST['alipayStoreId']);
    $req->setSubMerchant($_POST['subMerchant']);
    $req->setMerchantOrderNo($_POST['merchantOrderNo']);
    $req->setExtUserInfo($_POST['extUserInfo']);
    $req->setBusinessParams($_POST['businessParams']);
    $req->setReceiverAddressInfo($_POST['receiverAddressInfo']);
    $req->setLogisticsDetail($_POST['logisticsDetail']);
    $req->setBuyerLogonId($_POST['buyerLogonId']);
    $req->setBuyerId($_POST['buyerId']);

    $ext= new DefaultAlipayClientFactory(); 
	//因为是接口服务，使用exexcute方法获取到返回值
    $response = $ext->aopclientRequestExecute ( $request, NULL ,$req->getAppAuthToken() );
    echo json_encode($response);
?>