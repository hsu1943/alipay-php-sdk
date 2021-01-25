<?php
/**
 * Created by PhpStorm.
 * User: Huan
 * Date: 2021/1/21
 * Time: 17:05
 */
namespace duckSoft\alipay;

use duckSoft\alipay\aop\AopClient;

class AopClientBuilder
{
    private $_client = null;

    /**
     * AopClientBuilder constructor.
     * @param $config
     */
    public function __construct($config)
    {
        if (!$this->_client){
            $aop = new AopClient();
            foreach ($config as $k => $v) {
                if (property_exists(AopClient::class, $k)) {
                    $aop->$k = $v;
                }
            }
            $this->_client = $aop;
        }
    }

    public function getAopClient()
    {
        return $this->_client;
    }

}