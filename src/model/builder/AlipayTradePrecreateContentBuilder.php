<?php
/**
 * Created by PhpStorm.
 * User: junying.wei
 * Date: 17/11/05
 * Time: 下午2:09
 */

namespace duckSoft\alipay\model\builder;

// require_once 'ContentBuilder.php';

class AlipayTradePrecreateContentBuilder extends ContentBuilder
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
            private $totalAmount;

    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;
        $this->bizContentArr['total_amount'] = $totalAmount;
    }
            private $subject;

    public function getSubject()
    {
        return $this->subject;
    }

    public function setSubject($subject)
    {
        $this->subject = $subject;
        $this->bizContentArr['subject'] = $subject;
    }
            private $sellerId;

    public function getSellerId()
    {
        return $this->sellerId;
    }

    public function setSellerId($sellerId)
    {
        $this->sellerId = $sellerId;
        $this->bizContentArr['seller_id'] = $sellerId;
    }
            private $discountableAmount;

    public function getDiscountableAmount()
    {
        return $this->discountableAmount;
    }

    public function setDiscountableAmount($discountableAmount)
    {
        $this->discountableAmount = $discountableAmount;
        $this->bizContentArr['discountable_amount'] = $discountableAmount;
    }
            private $undiscountableAmount;

    public function getUndiscountableAmount()
    {
        return $this->undiscountableAmount;
    }

    public function setUndiscountableAmount($undiscountableAmount)
    {
        $this->undiscountableAmount = $undiscountableAmount;
        $this->bizContentArr['undiscountable_amount'] = $undiscountableAmount;
    }
            private $buyerLogonId;

    public function getBuyerLogonId()
    {
        return $this->buyerLogonId;
    }

    public function setBuyerLogonId($buyerLogonId)
    {
        $this->buyerLogonId = $buyerLogonId;
        $this->bizContentArr['buyer_logon_id'] = $buyerLogonId;
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
            private $body;

    public function getBody()
    {
        return $this->body;
    }

    public function setBody($body)
    {
        $this->body = $body;
        $this->bizContentArr['body'] = $body;
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
            private $disablePayChannels;

    public function getDisablePayChannels()
    {
        return $this->disablePayChannels;
    }

    public function setDisablePayChannels($disablePayChannels)
    {
        $this->disablePayChannels = $disablePayChannels;
        $this->bizContentArr['disable_pay_channels'] = $disablePayChannels;
    }
            private $enablePayChannels;

    public function getEnablePayChannels()
    {
        return $this->enablePayChannels;
    }

    public function setEnablePayChannels($enablePayChannels)
    {
        $this->enablePayChannels = $enablePayChannels;
        $this->bizContentArr['enable_pay_channels'] = $enablePayChannels;
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
            private $extendParams;

    public function getExtendParams()
    {
        return $this->extendParams;
    }

    public function setExtendParams($extendParams)
    {
        $this->extendParams = $extendParams;
        $this->bizContentArr['extend_params'] = $extendParams;
    }
            private $timeoutExpress;

    public function getTimeoutExpress()
    {
        return $this->timeoutExpress;
    }

    public function setTimeoutExpress($timeoutExpress)
    {
        $this->timeoutExpress = $timeoutExpress;
        $this->bizContentArr['timeout_express'] = $timeoutExpress;
    }
            private $royaltyInfo;

    public function getRoyaltyInfo()
    {
        return $this->royaltyInfo;
    }

    public function setRoyaltyInfo($royaltyInfo)
    {
        $this->royaltyInfo = $royaltyInfo;
        $this->bizContentArr['royalty_info'] = $royaltyInfo;
    }
            private $settleInfo;

    public function getSettleInfo()
    {
        return $this->settleInfo;
    }

    public function setSettleInfo($settleInfo)
    {
        $this->settleInfo = $settleInfo;
        $this->bizContentArr['settle_info'] = $settleInfo;
    }
            private $subMerchant;

    public function getSubMerchant()
    {
        return $this->subMerchant;
    }

    public function setSubMerchant($subMerchant)
    {
        $this->subMerchant = $subMerchant;
        $this->bizContentArr['sub_merchant'] = $subMerchant;
    }
            private $alipayStoreId;

    public function getAlipayStoreId()
    {
        return $this->alipayStoreId;
    }

    public function setAlipayStoreId($alipayStoreId)
    {
        $this->alipayStoreId = $alipayStoreId;
        $this->bizContentArr['alipay_store_id'] = $alipayStoreId;
    }
            private $extUserInfo;

    public function getExtUserInfo()
    {
        return $this->extUserInfo;
    }

    public function setExtUserInfo($extUserInfo)
    {
        $this->extUserInfo = $extUserInfo;
        $this->bizContentArr['ext_user_info'] = $extUserInfo;
    }
            private $businessParams;

    public function getBusinessParams()
    {
        return $this->businessParams;
    }

    public function setBusinessParams($businessParams)
    {
        $this->businessParams = $businessParams;
        $this->bizContentArr['business_params'] = $businessParams;
    }
            private $qrCodeTimeoutExpress;

    public function getQrCodeTimeoutExpress()
    {
        return $this->qrCodeTimeoutExpress;
    }

    public function setQrCodeTimeoutExpress($qrCodeTimeoutExpress)
    {
        $this->qrCodeTimeoutExpress = $qrCodeTimeoutExpress;
        $this->bizContentArr['qr_code_timeout_express'] = $qrCodeTimeoutExpress;
    }
        

}
