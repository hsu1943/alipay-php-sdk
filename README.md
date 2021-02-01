# alipay-php-sdk
官方 php sdk 的 compose 自动加载包，遵循 PSR 自动加载，只保留了 Trade 部分的 Request 和一些简单的封装，简单易用。

## 安装

```bash
composer require ducksoft/alipay-php-sdk
```

### 配置

配置 `/example/AlipayConfig.php` 中的必要参数；

```php
$config = [
    // 支付宝网关 此为沙盒测试网关，请修改为正式网关
    'gatewayUrl'            => 'https://openapi.alipaydev.com/gateway.do',
    // 应用ID 请求改为你的应用appId
    'appId'                 => '2016051900098985',
    // 支付宝公钥
    'alipayrsaPublicKey'    => '',
    // 应用私钥
    'rsaPrivateKey'         => '',
    // 加密方式
    'signType'              => 'RSA2',
    'postCharset'           => 'UTF-8',
    'format'                => 'json',
    // 异步通知地址
    'notifyUrl'             => '',
];
```

### 使用官方API请求

参考 `/example/test.php` 

```php
use duckSoft\alipay\aop\request\AlipayTradeQueryRequest;
use duckSoft\alipay\aop\request\AlipayTradePrecreateRequest;
use duckSoft\alipay\AopClientBuilder;
use duckSoft\alipay\AopResult;

require_once __DIR__ . '/../vendor/autoload.php';

$config = require __DIR__ . '/AlipayConfig.php';
$aop = (new AopClientBuilder($config))->getAopClient();

// 查询订单
$bizContent = [
    'out_trade_no' => '商家订单号',
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
```

### 接受异步通知

参考 `/example/notify.php` 接受异步通知。

```php
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
```

非常易用，如果你需要其他接口，将官方 sdk 中对应的 Request 模型加入进来即可。
