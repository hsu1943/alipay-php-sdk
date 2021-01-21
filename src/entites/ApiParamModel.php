<?php
/**
 * Created by PhpStorm.
 * User: junying.wjy
 * Date: 17/10/31
 * Time: 下午2:09
 */

namespace duckSoft\alipay\entites;

class ApiParamModel
{
    /**
     * 基础类型
     */
    public static $TYPE_BASETYPE = 0;
    /**
     * 复杂类型
     */
    public static $TYPE_COMPLEXTYPE = 1;

    /** API参数模型列表*/
    private $childs = array();

    /** 是否列表类型 */
    private $isListType;

    /** 是否必须,非空 */
    private $isMust;

    /** 类型 */
    private $baseType;
    
    private $description;


    private $enName;
    private $fullParamName;
    private $title;
    private $desc;

    private $bizContentArr = array();

    public function getBizContent()
    {
        if(!empty($this->bizContentArr)){
            $this->bizContent = json_encode($this->bizContentArr,JSON_UNESCAPED_UNICODE);
        }
        return $this->bizContent;
    }


    public function getChilds() {
        return $this->childs;
    }

    public function setChilds($childs) {
        if($childs == ""){
            $this->childs = array();
            $this->bizContentArr['childs'] = array();
        }else{
           $this->childs = $childs;
           $this->bizContentArr['childs'] = $childs;
        }      
    }


    public function getFullParamName() {
        return $this->fullParamName;
    }

    public function setFullParamName($fullParamName) {
        $this->fullParamName = $fullParamName;
        $this->bizContentArr['fullParamName'] = $fullParamName;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
        $this->bizContentArr['title'] = $title;
    }

    public function getDesc() {
        return $this->desc;
    }

    public function setDesc($desc) {
        $this->desc = $desc;
        $this->bizContentArr['desc'] = $desc;
    }

    public function getIsListType() {
        return $this->isListType;
    }

    public function setIsListType($isListType) {
        $this->isListType = $isListType;
        $this->bizContentArr['isListType'] = $isListType;
    }

    public function getIsMust() {
        return $this->isMust;
    }

    public function setIsMust($isMust) {
        $this->isMust = $isMust;
        $this->bizContentArr['isMust'] = $isMust;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
        $this->bizContentArr['description'] = $description;
    }

    public function getEnName() {
        return $this->enName;
    }

    public function setEnName($enName) {
        $this->enName = $enName;
        $this->bizContentArr['enName'] = $enName;
    }

    public function getBaseType() {
        return $this->baseType;
    }

    public function setBaseType($baseType) {
        $this->baseType = $baseType;
        $this->bizContentArr['baseType'] = $baseType;
    }
}

?>