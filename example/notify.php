<?php
/**
 * Created by PhpStorm.
 * User: Huan
 * Date: 2021/1/25
 * Time: 11:10
 */

use duckSoft\alipay\AopClientBuilder;

$config = require __DIR__ . '/AlipayConfig.php';
$aop = (new AopClientBuilder($config))->getAopClient();

if ($aop->rsaCheckV1($_POST, null, $config['signType'])) {
    // 校验签名成功
    if ($_POST['trade_status'] === "TRADE_SUCCESS") {
        // 处理订单逻辑
    } else {
        // 订单失败逻辑
    }
    echo 'success';
} else {
    echo 'error';
}