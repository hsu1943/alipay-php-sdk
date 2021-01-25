<?php
/**
 * Created by PhpStorm.
 * User: Huan
 * Date: 2021/1/22
 * Time: 10:05
 */
namespace duckSoft\alipay;

class AopResult
{
    public $response;
    public $sign;

    public function __construct($result, $apiName)
    {
        $responseNode = str_replace(".", "_", $apiName) . "_response";
        $this->response = $result->$responseNode;
    }

    public function getResponse()
    {
        return $this->response;
    }

}
