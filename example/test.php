<?php
/**
 * Created by PhpStorm.
 * User: Huan
 * Date: 2021/1/20
 * Time: 18:42
 */
use duckSoft\alipay\aop\request\AlipayTradeQueryRequest;
use duckSoft\alipay\AopClientBuilder;
use duckSoft\alipay\AopResult;

$bizContent = [
    'out_trade_no' => '系统订单号',
];
$request = new AlipayTradeQueryRequest();
$request->setBizContent(json_encode($bizContent));
$config = require __DIR__ . '/AlipayConfig.php';
try {
    $aop = (new AopClientBuilder($config))->getAopClient();
    $result = $aop->execute($request);
    $response = (new AopResult($result, $request->getApiMethodName()))->getResponse();
    if ($aop->rsaCheckV1(json_decode($result, true), null, $config['signType'])) {
        echo "校验签名成功" .PHP_EOL;
    } else {
        echo "校验签名失败" .PHP_EOL;
    }
    return $response;
} catch (\ErrorException $e) {
    return ['status' => 'error', 'message' => $e->getMessage()];
}