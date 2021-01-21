<?php
/**
 * Created by PhpStorm.
 * User: junying.wei
 * Date: 17/11/05
 * Time: 下午2:09
 */

namespace duckSoft\alipay\model\builder;

// require_once 'ContentBuilder.php';

class AlipayTradeOrderSettleContentBuilder extends ContentBuilder
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
    //         private $royaltyParameters[0];
    //
    // public function getRoyaltyParameters[0]()
    // {
    //     return $this->royaltyParameters[0];
    // }
    //
    // public function setRoyaltyParameters[0]($royaltyParameters[0])
    // {
    //     $this->royaltyParameters[0] = $royaltyParameters[0];
    //     $this->bizContentArr['royalty_parameters'] = $royaltyParameters[0];
    // }
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
        

}