<?php
/**
 * Created by PhpStorm.
 * User: junying.wei
 * Date: 17/11/05
 * Time: 下午2:09
 */

namespace duckSoft\alipay\model\builder;

// require_once 'ContentBuilder.php';

class AlipayTradeRefundContentBuilder extends ContentBuilder
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

            private $refundAmount;

    public function getRefundAmount()
    {
        return $this->refundAmount;
    }

    public function setRefundAmount($refundAmount)
    {
        $this->refundAmount = $refundAmount;
        $this->bizContentArr['refund_amount'] = $refundAmount;
    }
            private $refundCurrency;

    public function getRefundCurrency()
    {
        return $this->refundCurrency;
    }

    public function setRefundCurrency($refundCurrency)
    {
        $this->refundCurrency = $refundCurrency;
        $this->bizContentArr['refund_currency'] = $refundCurrency;
    }
            private $refundReason;

    public function getRefundReason()
    {
        return $this->refundReason;
    }

    public function setRefundReason($refundReason)
    {
        $this->refundReason = $refundReason;
        $this->bizContentArr['refund_reason'] = $refundReason;
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
            private $operatorId;

    public function getOperatorId()
    {
        return $this->operatorId;
    }

    public function setOperatorId($operatorId)
    {
        $this->operatorId = $operatorId;
        $this->bizContentArr['operator_id'] = $operatorId;
    }
            private $storeId;

    public function getStoreId()
    {
        return $this->storeId;
    }

    public function setStoreId($storeId)
    {
        $this->storeId = $storeId;
        $this->bizContentArr['store_id'] = $storeId;
    }
            private $terminalId;

    public function getTerminalId()
    {
        return $this->terminalId;
    }

    public function setTerminalId($terminalId)
    {
        $this->terminalId = $terminalId;
        $this->bizContentArr['terminal_id'] = $terminalId;
    }
                private $goodsDetail;

    public function getGoodsDetail()
    {
        return $this->goodsDetail;
    }

    public function setGoodsDetail($goodsDetail)
    {
        $this->goodsDetail = $goodsDetail;
        $this->bizContentArr['goods_detail'] = $goodsDetail;
    }
    //         private $refundRoyaltyParameters[0];
    //
    // public function getRefundRoyaltyParameters[0]()
    // {
    //     return $this->refundRoyaltyParameters[0];
    // }
    //
    // public function setRefundRoyaltyParameters[0]($refundRoyaltyParameters[0])
    // {
    //     $this->refundRoyaltyParameters[0] = $refundRoyaltyParameters[0];
    //     $this->bizContentArr['refund_royalty_parameters'] = $refundRoyaltyParameters[0];
    // }
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
        

}
