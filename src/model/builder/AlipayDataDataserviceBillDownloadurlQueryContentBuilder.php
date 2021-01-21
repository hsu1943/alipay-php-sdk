<?php
/**
 * Created by PhpStorm.
 * User: junying.wei
 * Date: 17/11/05
 * Time: 下午2:09
 */

namespace duckSoft\alipay\model\builder;

// require_once 'ContentBuilder.php';

class AlipayDataDataserviceBillDownloadurlQueryContentBuilder extends ContentBuilder
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

            private $billType;

    public function getBillType()
    {
        return $this->billType;
    }

    public function setBillType($billType)
    {
        $this->billType = $billType;
        $this->bizContentArr['bill_type'] = $billType;
    }
            private $billDate;

    public function getBillDate()
    {
        return $this->billDate;
    }

    public function setBillDate($billDate)
    {
        $this->billDate = $billDate;
        $this->bizContentArr['bill_date'] = $billDate;
    }
        

}
