<?php
/**
 * Created by PhpStorm.
 * User: Huan
 * Date: 2021/1/20
 * Time: 18:42
 */
use duckSoft\alipay\aop\request\AlipayTradePrecreateRequest;
use duckSoft\alipay\aop\request\AlipayTradeQueryRequest;
use duckSoft\alipay\AopClientBuilder;
use duckSoft\alipay\AopResult;

require_once __DIR__ . '/../vendor/autoload.php';

$config = require __DIR__ . '/AlipayConfig.php';
$aop = (new AopClientBuilder($config))->getAopClient();


// 创建订单
$bizContent = [
    'out_trade_no' => '7895552OPUTYGG',
    'subject' => '测试订单',
    'total_amount' => '0.01'
];

$request = new AlipayTradePrecreateRequest();
$request->setBizContent(json_encode($bizContent, JSON_UNESCAPED_UNICODE));
$request->setNotifyUrl($config['notifyUrl']);
try {
    $result = $aop->execute($request);
    $response = (new AopResult($result, $request->getApiMethodName()))->getResponse();
    var_dump($response);
} catch (\ErrorException $e) {
    return ['status' => 'error', 'message' => $e->getMessage()];
}


// 查询订单
$bizContent = [
    'out_trade_no' => '78945564561UIHYU',
];
$request = new AlipayTradeQueryRequest();
$request->setBizContent(json_encode($bizContent, JSON_UNESCAPED_UNICODE));
try {
    $result = $aop->execute($request);
    $response = (new AopResult($result, $request->getApiMethodName()))->getResponse();
    var_dump($response);
} catch (\ErrorException $e) {
    return ['status' => 'error', 'message' => $e->getMessage()];
}