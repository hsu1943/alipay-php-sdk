<?php

use duckSoft\alipay\model\builder\AlipayDataDataserviceBillDownloadurlQueryContentBuilder;

require dirname(__FILE__) . DIRECTORY_SEPARATOR . '../DefaultAlipayClientFactory.php';

$req = new AlipayDataDataserviceBillDownloadurlQueryContentBuilder();

$req->setBillType($_POST['billType']);
    $req->setBillDate($_POST['billDate']);
    
    $request = new AlipayDataDataserviceBillDownloadurlQueryRequest();
	$request->setBizContent ( $req->getBizContent() );
	
    $ext= new DefaultAlipayClientFactory(); 
	//因为是接口服务，使用exexcute方法获取到返回值
    $response = $ext->aopclientRequestExecute ( $request, NULL ,$req->getAppAuthToken() );
    echo json_encode($response);
?>