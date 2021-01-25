# alipay-php-sdk
一个来自官方php sdk 打包的 composer 自动加载包，只保留了 Trade 部分的 Request。

## 使用参考

```bash
composer require ducksoft/alipay-php-sdk
```

配置 `/example/AlipayConfig.php` 中的必要参数；

参考 `/example/test.php` 使用官方API请求。

参考 `/example/notify.php` 接受异步通知。
