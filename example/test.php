<?php
/**
 * Created by PhpStorm.
 * User: Huan
 * Date: 2021/1/20
 * Time: 18:42
 */
use duckSoft\alipay\aop\request\AlipayTradeQueryRequest;
use duckSoft\alipay\AopClientBuilder;

$bizContent = [
    'out_trade_no' => '系统订单号',
];
$request = new AlipayTradeQueryRequest();
$request->setBizContent(json_encode($bizContent));
$config = require __DIR__ . '/AlipayConfig.php';
try {
    $aop = (new AopClientBuilder($config))->getAopClient();
    $response = $aop->execute($request);
    $responseNode = str_replace(".", "_", $request->getApiMethodName()) . "_response";
    return $response->$responseNode;
} catch (\ErrorException $e) {
    return ['status' => 'error', 'message' => $e->getMessage()];
}