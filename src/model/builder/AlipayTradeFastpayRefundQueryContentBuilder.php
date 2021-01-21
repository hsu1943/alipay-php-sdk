<?php
/**
 * Created by PhpStorm.
 * User: junying.wei
 * Date: 17/11/05
 * Time: 下午2:09
 */

namespace duckSoft\alipay\model\builder;

// require_once 'ContentBuilder.php';

class AlipayTradeFastpayRefundQueryContentBuilder extends ContentBuilder
{

    private $bizContentArr = array();

    private $bizContent = NULL;

    public function getBizContent()
    {
        if(!empty($this->bizContentArr)){
            $this->bizContent = json_encode($this->bizContentArr,JSON_UNESCAPED_UNICODE);
        }
        return $this->bizContent;
    }

            private $outRequestNo;

    public function getOutRequestNo()
    {
        return $this->outRequestNo;
    }

    public function setOutRequestNo($outRequestNo)
    {
        $this->outRequestNo = $outRequestNo;
        $this->bizContentArr['out_request_no'] = $outRequestNo;
    }
            private $tradeNo;

    public function getTradeNo()
    {
        return $this->tradeNo;
    }

    public function setTradeNo($tradeNo)
    {
        $this->tradeNo = $tradeNo;
        $this->bizContentArr['trade_no'] = $tradeNo;
    }
            private $outTradeNo;

    public function getOutTradeNo()
    {
        return $this->outTradeNo;
    }

    public function setOutTradeNo($outTradeNo)
    {
        $this->outTradeNo = $outTradeNo;
        $this->bizContentArr['out_trade_no'] = $outTradeNo;
    }
        

}
