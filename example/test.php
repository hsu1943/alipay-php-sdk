<?php
/**
 * Created by PhpStorm.
 * User: Huan
 * Date: 2021/1/20
 * Time: 18:42
 */

use duckSoft\alipay\aop\request\AlipayTradeQueryRequest;
use duckSoft\alipay\model\builder\AlipayTradeQueryContentBuilder;

require_once './DefaultAlipayClientFactory.php';

$content = new AlipayTradeQueryContentBuilder();

$content->setOutTradeNo($_POST['outTradeNo']);
$content->setTradeNo($_POST['tradeNo']);

$request = new AlipayTradeQueryRequest();
$request->setBizContent ( $content->getBizContent() );

$ext= new DefaultAlipayClientFactory();
//因为是接口服务，使用exexcute方法获取到返回值
$response = $ext->aopclientRequestExecute ($request, NULL ,$content->getAppAuthToken());
echo json_encode($response);