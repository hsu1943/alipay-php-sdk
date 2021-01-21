<?php
/**
 * User: junying.wei
 * Date: 18/08/05
 * Time: 下午2:09
 */
require_once dirname ( __FILE__ ).DIRECTORY_SEPARATOR.'./../../AopSdk.php';
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . './../entites/ApiParamModel.php';
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . './../entites/ApiInfoModel.php';
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . '../model/result/AlipayTradePayResult.php';
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . '../model/builder/AlipayTradePayContentBuilder.php';
require dirname(__FILE__) . DIRECTORY_SEPARATOR . './../config/DefaultAlipayClientFactory.php';

$req = new AlipayTradePayContentBuilder();

$req->setOutTradeNo($_POST['outTradeNo']);
    $req->setScene($_POST['scene']);
    $req->setAuthCode($_POST['authCode']);
    $req->setSubject($_POST['subject']);
    $req->setProductCode($_POST['productCode']);
    $req->setBuyerId($_POST['buyerId']);
    $req->setSellerId($_POST['sellerId']);
    $req->setTotalAmount($_POST['totalAmount']);
    $req->setTransCurrency($_POST['transCurrency']);
    $req->setSettleCurrency($_POST['settleCurrency']);
    $req->setDiscountableAmount($_POST['discountableAmount']);
    $req->setUndiscountableAmount($_POST['undiscountableAmount']);
    $req->setBody($_POST['body']);
    $req->setGoodsDetail($_POST['goodsDetail[0]']);
    $req->setOperatorId($_POST['operatorId']);
    $req->setStoreId($_POST['storeId']);
    $req->setTerminalId($_POST['terminalId']);
    $req->setAlipayStoreId($_POST['alipayStoreId']);
    $req->setExtendParams($_POST['extendParams']);
    $req->setTimeoutExpress($_POST['timeoutExpress']);
    $req->setAgreementParams($_POST['agreementParams']);
    $req->setRoyaltyInfo($_POST['royaltyInfo']);
    $req->setSettleInfo($_POST['settleInfo']);
    $req->setSubMerchant($_POST['subMerchant']);
    $req->setDisablePayChannels($_POST['disablePayChannels']);
    $req->setMerchantOrderNo($_POST['merchantOrderNo']);
    $req->setAuthNo($_POST['authNo']);
    $req->setExtUserInfo($_POST['extUserInfo']);
    $req->setAuthConfirmMode($_POST['authConfirmMode']);
    $req->setTerminalParams($_POST['terminalParams']);
    $req->setBusinessParams($_POST['businessParams']);
    
    $request = new AlipayTradePayRequest();
	$request->setBizContent ( $req->getBizContent() );
	
    $ext= new DefaultAlipayClientFactory(); 
	//因为是接口服务，使用exexcute方法获取到返回值
    $response = $ext->aopclientRequestExecute ( $request, NULL ,$req->getAppAuthToken() );
    echo json_encode($response);
?>