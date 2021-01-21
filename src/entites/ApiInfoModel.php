<?php
/**
 * Created by PhpStorm.
 * User: junying.wjy
 * Date: 17/10/31
 * Time: 下午2:09
 */

namespace duckSoft\alipay\entites;

// require_once dirname ( __FILE__ ).DIRECTORY_SEPARATOR.'./ApiParamModel.php';

class ApiInfoModel
{
    
    /**
     * 接口请求
     */
    public static $INVOKE_TYPE_REQUEST = 1;
    /**
     * 页面跳转
     */
    public static $INVOKE_TYPE_REDIRECT = 2;
    
    private $apiName;
    private $apiZhName;
    /**
     * 字段说明
     * 1:接口请求
     * 2：页面跳转
     */
    private $invokeType;

    private $apiInParam;
    private $apiOutParam;
    private $bizContentArr = array();

    public function getBizContent()
    {
        if(!empty($this->bizContentArr)){
            $this->bizContent = json_encode($this->bizContentArr,JSON_UNESCAPED_UNICODE);
        }
        return $this->bizContent;
    }

    // public function getApiNameFirstLower(){
    //     return $this->apiName;
    // }

    // public function setApiNameFirstUpper(){
    //     $this->apiName = $apiName;
    //     $this->bizContentArr['apiNameFirstLower'] = $apiName;
    // }

    public function setInvokeType($invokeType) {
        $this->invokeType = $invokeType;
        $this->bizContentArr['invokeType'] = $invokeType;
    }
    public function getInvokeType() {
        return $this->invokeType;
    }

    public function getApiName() {
        return $this->apiName;
    }
    
    public function setApiName($apiName) {
        $this->apiName = $apiName;
        $this->bizContentArr['apiName'] = $apiName;
        $this->bizContentArr['apiNameFirstLower'] = str_replace(".","",$apiName);
    }

    public function getApiZhName() {
        return $this->apiZhName;
    }

    public function setApiZhName($apiZhName) {
        $this->apiZhName = $apiZhName;
        $this->bizContentArr['apiZhName'] = $apiZhName;
    }
    public function getApiInParam() {
        return $this->apiOutParam = new ApiParamModel();
    }

    public function setApiInParam($apiInParam) {
        $this->apiInParam = $apiInParam;
        $this->bizContentArr['apiInParam'] = $apiInParam;
    }

    public function getApiOutParam() {
        return $this->apiOutParam = new ApiParamModel();
    }

    public function setApiOutParam($apiOutParam) {
        $this->apiOutParam = $apiOutParam;
        $this->bizContentArr['apiOutParam'] = $apiOutParam;
    }
}
