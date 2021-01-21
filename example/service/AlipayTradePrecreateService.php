<?php
/**
 * User: junying.wei
 * Date: 18/08/05
 * Time: 下午2:09
 */
    require_once dirname ( __FILE__ ).DIRECTORY_SEPARATOR.'./../../AopSdk.php';
    require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . './../entites/ApiParamModel.php';
    require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . './../entites/ApiInfoModel.php';
    require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . '../model/result/AlipayTradePrecreateResult.php';
    require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . '../model/builder/AlipayTradePrecreateContentBuilder.php';
    require dirname(__FILE__) . DIRECTORY_SEPARATOR . './../config/DefaultAlipayClientFactory.php';

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