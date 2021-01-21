<?php
/**
 * User: junying.wei
 * Date: 18/08/05
 * Time: 下午2:09
 */
require_once dirname ( __FILE__ ).DIRECTORY_SEPARATOR.'./../../AopSdk.php';
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . './../entites/ApiParamModel.php';
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . './../entites/ApiInfoModel.php';
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . '../model/result/AlipayTradeOrderSettleResult.php';
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . '../model/builder/AlipayTradeOrderSettleContentBuilder.php';
require dirname(__FILE__) . DIRECTORY_SEPARATOR . './../config/DefaultAlipayClientFactory.php';

$req = new AlipayTradeOrderSettleContentBuilder();

$req->setOutRequestNo($_POST['outRequestNo']);
    $req->setTradeNo($_POST['tradeNo']);
    $req->setRoyaltyParameters[0]($_POST['royaltyParameters[0]']);
    $req->setOperatorId($_POST['operatorId']);
    
    $request = new AlipayTradeOrderSettleRequest();
	$request->setBizContent ( $req->getBizContent() );
	
    $ext= new DefaultAlipayClientFactory(); 
	//因为是接口服务，使用exexcute方法获取到返回值
    $response = $ext->aopclientRequestExecute ( $request, NULL ,$req->getAppAuthToken() );
    echo json_encode($response);
?>