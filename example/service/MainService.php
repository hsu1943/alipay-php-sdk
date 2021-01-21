<?php
/**
 * User: junying.wei
 * Date: 18/08/05
 * Time: 下午2:09
 */
header('Content-Type: application/json');

require_once dirname ( __FILE__ ).DIRECTORY_SEPARATOR.'./../../AopSdk.php';
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . './../entites/ApiParamModel.php';
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . './../entites/ApiInfoModel.php';

$list = array();

        $alipayTradePayInfoModel = new ApiInfoModel();
        
        $alipayTradePayInfoModel->setApiName("alipay.trade.pay");
        $alipayTradePayInfoModel->setApiZhName("统一收单交易支付接口");
        $alipayTradePayInfoModel->setInvokeType($alipayTradePayInfoModel::$INVOKE_TYPE_REQUEST);
            // $alipayTradePayApiInParamChilds[] = new ApiParamModel();
            $alipayTradePayApiInParam_0 = new ApiParamModel();
        $alipayTradePayApiInParam_0->setBaseType($alipayTradePayApiInParam_0::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_0->setTitle("商户订单号");
        $alipayTradePayApiInParam_0->setDesc("64个字符以内、可包含字母、数字、下划线；需保证在商户端不重复");
        $alipayTradePayApiInParam_0->setIsMust(1);
        $alipayTradePayApiInParam_0->setIsListType(false);
        $alipayTradePayApiInParam_0->setFullParamName("outTradeNo");
        $alipayTradePayApiInParam_0->setEnName("out_trade_no");
        $alipayTradePayApiInParam_0->setChilds("");
        $alipayTradePayApiInParamChilds[] = json_decode($alipayTradePayApiInParam_0->getBizContent());

        $alipayTradePayApiInParam_1 = new ApiParamModel();
        $alipayTradePayApiInParam_1->setBaseType($alipayTradePayApiInParam_1::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_1->setTitle("支付场景");
        $alipayTradePayApiInParam_1->setDesc(" 条码支付，取值：bar_code  声波支付，取值：wave_code");
        $alipayTradePayApiInParam_1->setIsMust(1);
        $alipayTradePayApiInParam_1->setIsListType(false);
        $alipayTradePayApiInParam_1->setFullParamName("scene");
        $alipayTradePayApiInParam_1->setEnName("scene");
        $alipayTradePayApiInParam_1->setChilds("");
        $alipayTradePayApiInParamChilds[] = json_decode($alipayTradePayApiInParam_1->getBizContent());

        $alipayTradePayApiInParam_2 = new ApiParamModel();
        $alipayTradePayApiInParam_2->setBaseType($alipayTradePayApiInParam_2::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_2->setTitle("支付授权码");
        $alipayTradePayApiInParam_2->setDesc("25~30开头的长度为16~24位的数字，实际字符串长度以开发者获取的付款码长度为准");
        $alipayTradePayApiInParam_2->setIsMust(1);
        $alipayTradePayApiInParam_2->setIsListType(false);
        $alipayTradePayApiInParam_2->setFullParamName("authCode");
        $alipayTradePayApiInParam_2->setEnName("auth_code");
        $alipayTradePayApiInParam_2->setChilds("");
        $alipayTradePayApiInParamChilds[] = json_decode($alipayTradePayApiInParam_2->getBizContent());

        $alipayTradePayApiInParam_4 = new ApiParamModel();
        $alipayTradePayApiInParam_4->setBaseType($alipayTradePayApiInParam_4::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_4->setTitle("订单标题");
        $alipayTradePayApiInParam_4->setDesc("");
        $alipayTradePayApiInParam_4->setIsMust(1);
        $alipayTradePayApiInParam_4->setIsListType(false);
        $alipayTradePayApiInParam_4->setFullParamName("subject");
        $alipayTradePayApiInParam_4->setEnName("subject");
        $alipayTradePayApiInParam_4->setChilds("");
        $alipayTradePayApiInParamChilds[] = json_decode($alipayTradePayApiInParam_4->getBizContent());

        $alipayTradePayApiInParam_3 = new ApiParamModel();
        $alipayTradePayApiInParam_3->setBaseType($alipayTradePayApiInParam_3::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_3->setTitle("销售产品码");
        $alipayTradePayApiInParam_3->setDesc("");
        $alipayTradePayApiInParam_3->setIsMust(3);
        $alipayTradePayApiInParam_3->setIsListType(false);
        $alipayTradePayApiInParam_3->setFullParamName("productCode");
        $alipayTradePayApiInParam_3->setEnName("product_code");
        $alipayTradePayApiInParam_3->setChilds("");
        $alipayTradePayApiInParamChilds[] = json_decode($alipayTradePayApiInParam_3->getBizContent());

        $alipayTradePayApiInParam_5 = new ApiParamModel();
        $alipayTradePayApiInParam_5->setBaseType($alipayTradePayApiInParam_5::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_5->setTitle("买家的支付宝用户id");
        $alipayTradePayApiInParam_5->setDesc("如果为空，会从传入了码值信息中获取买家ID");
        $alipayTradePayApiInParam_5->setIsMust(3);
        $alipayTradePayApiInParam_5->setIsListType(false);
        $alipayTradePayApiInParam_5->setFullParamName("buyerId");
        $alipayTradePayApiInParam_5->setEnName("buyer_id");
        $alipayTradePayApiInParam_5->setChilds("");
        $alipayTradePayApiInParamChilds[] = json_decode($alipayTradePayApiInParam_5->getBizContent());

        $alipayTradePayApiInParam_6 = new ApiParamModel();
        $alipayTradePayApiInParam_6->setBaseType($alipayTradePayApiInParam_6::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_6->setTitle("如果该值为空");
        $alipayTradePayApiInParam_6->setDesc("则默认为商户签约账号对应的支付宝用户ID");
        $alipayTradePayApiInParam_6->setIsMust(3);
        $alipayTradePayApiInParam_6->setIsListType(false);
        $alipayTradePayApiInParam_6->setFullParamName("sellerId");
        $alipayTradePayApiInParam_6->setEnName("seller_id");
        $alipayTradePayApiInParam_6->setChilds("");
        $alipayTradePayApiInParamChilds[] = json_decode($alipayTradePayApiInParam_6->getBizContent());

        $alipayTradePayApiInParam_7 = new ApiParamModel();
        $alipayTradePayApiInParam_7->setBaseType($alipayTradePayApiInParam_7::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_7->setTitle("订单总金额");
        $alipayTradePayApiInParam_7->setDesc("单位为元，精确到小数点后两位，取值范围[0.01,100000000]  如果同时传入【可打折金额】和【不可打折金额】，该参数可以不用传入；  如果同时传入了【可打折金额】，【不可打折金额】，【订单总金额】三者，则必须满足如下条件：【订单总金额】=【可打折金额】+【不可打折金额】");
        $alipayTradePayApiInParam_7->setIsMust(3);
        $alipayTradePayApiInParam_7->setIsListType(false);
        $alipayTradePayApiInParam_7->setFullParamName("totalAmount");
        $alipayTradePayApiInParam_7->setEnName("total_amount");
        $alipayTradePayApiInParam_7->setChilds("");
        $alipayTradePayApiInParamChilds[] = json_decode($alipayTradePayApiInParam_7->getBizContent());

        $alipayTradePayApiInParam_8 = new ApiParamModel();
        $alipayTradePayApiInParam_8->setBaseType($alipayTradePayApiInParam_8::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_8->setTitle("标价币种");
        $alipayTradePayApiInParam_8->setDesc("  total_amount 对应的币种单位。支持英镑：GBP、港币：HKD、美元：USD、新加坡元：SGD、日元：JPY、加拿大元：CAD、澳元：AUD、欧元：EUR、新西兰元：NZD、韩元：KRW、泰铢：THB、瑞士法郎：CHF、瑞典克朗：SEK、丹麦克朗：DKK、挪威克朗：NOK、马来西亚林吉特：MYR、印尼卢比：IDR、菲律宾比索：PHP、毛里求斯卢比：MUR、以色列新谢克尔：ILS、斯里兰卡卢比：LKR、俄罗斯卢布：RUB、阿联酋迪拉姆：AED、捷克克朗：CZK、南非兰特：ZAR、人民币：CNY");
        $alipayTradePayApiInParam_8->setIsMust(3);
        $alipayTradePayApiInParam_8->setIsListType(false);
        $alipayTradePayApiInParam_8->setFullParamName("transCurrency");
        $alipayTradePayApiInParam_8->setEnName("trans_currency");
        $alipayTradePayApiInParam_8->setChilds("");
        $alipayTradePayApiInParamChilds[] = json_decode($alipayTradePayApiInParam_8->getBizContent());

        $alipayTradePayApiInParam_9 = new ApiParamModel();
        $alipayTradePayApiInParam_9->setBaseType($alipayTradePayApiInParam_9::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_9->setTitle("商户指定的结算币种");
        $alipayTradePayApiInParam_9->setDesc("支持英镑：GBP、港币：HKD、美元：USD、新加坡元：SGD、日元：JPY、加拿大元：CAD、澳元：AUD、欧元：EUR、新西兰元：NZD、韩元：KRW、泰铢：THB、瑞士法郎：CHF、瑞典克朗：SEK、丹麦克朗：DKK、挪威克朗：NOK、马来西亚林吉特：MYR、印尼卢比：IDR、菲律宾比索：PHP、毛里求斯卢比：MUR、以色列新谢克尔：ILS、斯里兰卡卢比：LKR、俄罗斯卢布：RUB、阿联酋迪拉姆：AED、捷克克朗：CZK、南非兰特：ZAR、人民币：CNY");
        $alipayTradePayApiInParam_9->setIsMust(3);
        $alipayTradePayApiInParam_9->setIsListType(false);
        $alipayTradePayApiInParam_9->setFullParamName("settleCurrency");
        $alipayTradePayApiInParam_9->setEnName("settle_currency");
        $alipayTradePayApiInParam_9->setChilds("");
        $alipayTradePayApiInParamChilds[] = json_decode($alipayTradePayApiInParam_9->getBizContent());

        $alipayTradePayApiInParam_10 = new ApiParamModel();
        $alipayTradePayApiInParam_10->setBaseType($alipayTradePayApiInParam_10::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_10->setTitle("参与优惠计算的金额");
        $alipayTradePayApiInParam_10->setDesc("单位为元，精确到小数点后两位，取值范围[0.01,100000000]。  如果该值未传入，但传入了【订单总金额】和【不可打折金额】，则该值默认为【订单总金额】-【不可打折金额】");
        $alipayTradePayApiInParam_10->setIsMust(3);
        $alipayTradePayApiInParam_10->setIsListType(false);
        $alipayTradePayApiInParam_10->setFullParamName("discountableAmount");
        $alipayTradePayApiInParam_10->setEnName("discountable_amount");
        $alipayTradePayApiInParam_10->setChilds("");
        $alipayTradePayApiInParamChilds[] = json_decode($alipayTradePayApiInParam_10->getBizContent());

        $alipayTradePayApiInParam_11 = new ApiParamModel();
        $alipayTradePayApiInParam_11->setBaseType($alipayTradePayApiInParam_11::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_11->setTitle("不参与优惠计算的金额");
        $alipayTradePayApiInParam_11->setDesc("单位为元，精确到小数点后两位，取值范围[0.01,100000000]。如果该值未传入，但传入了【订单总金额】和【可打折金额】，则该值默认为【订单总金额】-【可打折金额】");
        $alipayTradePayApiInParam_11->setIsMust(3);
        $alipayTradePayApiInParam_11->setIsListType(false);
        $alipayTradePayApiInParam_11->setFullParamName("undiscountableAmount");
        $alipayTradePayApiInParam_11->setEnName("undiscountable_amount");
        $alipayTradePayApiInParam_11->setChilds("");
        $alipayTradePayApiInParamChilds[] = json_decode($alipayTradePayApiInParam_11->getBizContent());

        $alipayTradePayApiInParam_12 = new ApiParamModel();
        $alipayTradePayApiInParam_12->setBaseType($alipayTradePayApiInParam_12::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_12->setTitle("订单描述");
        $alipayTradePayApiInParam_12->setDesc("");
        $alipayTradePayApiInParam_12->setIsMust(3);
        $alipayTradePayApiInParam_12->setIsListType(false);
        $alipayTradePayApiInParam_12->setFullParamName("body");
        $alipayTradePayApiInParam_12->setEnName("body");
        $alipayTradePayApiInParam_12->setChilds("");
        $alipayTradePayApiInParamChilds[] = json_decode($alipayTradePayApiInParam_12->getBizContent());

        $alipayTradePayApiInParam_13 = new ApiParamModel();
        $alipayTradePayApiInParam_13->setBaseType($alipayTradePayApiInParam_13::$TYPE_COMPLEXTYPE);
        $alipayTradePayApiInParam_13->setTitle("订单包含的商品列表信息");
        $alipayTradePayApiInParam_13->setDesc("json格式，其它说明详见商品明细说明");
        $alipayTradePayApiInParam_13->setIsMust(3);
        $alipayTradePayApiInParam_13->setIsListType(true);
        $alipayTradePayApiInParam_13->setFullParamName("goodsDetail[0]");
        $alipayTradePayApiInParam_13->setEnName("goods_detail");
        $alipayTradePayApiInParam_13->setChilds("");
    
    // $alipayTradePayApiInParam_13Childs[] = new ApiParamModel();

            $alipayTradePayApiInParam_13_0 = new ApiParamModel();
        $alipayTradePayApiInParam_13_0->setBaseType($alipayTradePayApiInParam_13_0::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_13_0->setTitle("商品的编号");
        $alipayTradePayApiInParam_13_0->setDesc("");
        $alipayTradePayApiInParam_13_0->setIsMust(1);
        $alipayTradePayApiInParam_13_0->setIsListType(false);
        $alipayTradePayApiInParam_13_0->setFullParamName("goodsDetail[0].goodsId");
        $alipayTradePayApiInParam_13_0->setEnName("goods_id");
        $alipayTradePayApiInParam_13_0->setChilds("");
        $alipayTradePayApiInParam_13Childs[] = json_decode($alipayTradePayApiInParam_13_0->getBizContent());

        $alipayTradePayApiInParam_13_2 = new ApiParamModel();
        $alipayTradePayApiInParam_13_2->setBaseType($alipayTradePayApiInParam_13_2::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_13_2->setTitle("商品名称");
        $alipayTradePayApiInParam_13_2->setDesc("");
        $alipayTradePayApiInParam_13_2->setIsMust(1);
        $alipayTradePayApiInParam_13_2->setIsListType(false);
        $alipayTradePayApiInParam_13_2->setFullParamName("goodsDetail[0].goodsName");
        $alipayTradePayApiInParam_13_2->setEnName("goods_name");
        $alipayTradePayApiInParam_13_2->setChilds("");
        $alipayTradePayApiInParam_13Childs[] = json_decode($alipayTradePayApiInParam_13_2->getBizContent());

        $alipayTradePayApiInParam_13_3 = new ApiParamModel();
        $alipayTradePayApiInParam_13_3->setBaseType($alipayTradePayApiInParam_13_3::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_13_3->setTitle("商品数量");
        $alipayTradePayApiInParam_13_3->setDesc("");
        $alipayTradePayApiInParam_13_3->setIsMust(1);
        $alipayTradePayApiInParam_13_3->setIsListType(false);
        $alipayTradePayApiInParam_13_3->setFullParamName("goodsDetail[0].quantity");
        $alipayTradePayApiInParam_13_3->setEnName("quantity");
        $alipayTradePayApiInParam_13_3->setChilds("");
        $alipayTradePayApiInParam_13Childs[] = json_decode($alipayTradePayApiInParam_13_3->getBizContent());

        $alipayTradePayApiInParam_13_4 = new ApiParamModel();
        $alipayTradePayApiInParam_13_4->setBaseType($alipayTradePayApiInParam_13_4::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_13_4->setTitle("商品单价");
        $alipayTradePayApiInParam_13_4->setDesc("单位为元");
        $alipayTradePayApiInParam_13_4->setIsMust(1);
        $alipayTradePayApiInParam_13_4->setIsListType(false);
        $alipayTradePayApiInParam_13_4->setFullParamName("goodsDetail[0].price");
        $alipayTradePayApiInParam_13_4->setEnName("price");
        $alipayTradePayApiInParam_13_4->setChilds("");
        $alipayTradePayApiInParam_13Childs[] = json_decode($alipayTradePayApiInParam_13_4->getBizContent());

        $alipayTradePayApiInParam_13_1 = new ApiParamModel();
        $alipayTradePayApiInParam_13_1->setBaseType($alipayTradePayApiInParam_13_1::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_13_1->setTitle("支付宝定义的统一商品编号");
        $alipayTradePayApiInParam_13_1->setDesc("");
        $alipayTradePayApiInParam_13_1->setIsMust(3);
        $alipayTradePayApiInParam_13_1->setIsListType(false);
        $alipayTradePayApiInParam_13_1->setFullParamName("goodsDetail[0].alipayGoodsId");
        $alipayTradePayApiInParam_13_1->setEnName("alipay_goods_id");
        $alipayTradePayApiInParam_13_1->setChilds("");
        $alipayTradePayApiInParam_13Childs[] = json_decode($alipayTradePayApiInParam_13_1->getBizContent());

        $alipayTradePayApiInParam_13_5 = new ApiParamModel();
        $alipayTradePayApiInParam_13_5->setBaseType($alipayTradePayApiInParam_13_5::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_13_5->setTitle("商品类目");
        $alipayTradePayApiInParam_13_5->setDesc("");
        $alipayTradePayApiInParam_13_5->setIsMust(3);
        $alipayTradePayApiInParam_13_5->setIsListType(false);
        $alipayTradePayApiInParam_13_5->setFullParamName("goodsDetail[0].goodsCategory");
        $alipayTradePayApiInParam_13_5->setEnName("goods_category");
        $alipayTradePayApiInParam_13_5->setChilds("");
        $alipayTradePayApiInParam_13Childs[] = json_decode($alipayTradePayApiInParam_13_5->getBizContent());

        $alipayTradePayApiInParam_13_6 = new ApiParamModel();
        $alipayTradePayApiInParam_13_6->setBaseType($alipayTradePayApiInParam_13_6::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_13_6->setTitle("商品描述信息");
        $alipayTradePayApiInParam_13_6->setDesc("");
        $alipayTradePayApiInParam_13_6->setIsMust(3);
        $alipayTradePayApiInParam_13_6->setIsListType(false);
        $alipayTradePayApiInParam_13_6->setFullParamName("goodsDetail[0].body");
        $alipayTradePayApiInParam_13_6->setEnName("body");
        $alipayTradePayApiInParam_13_6->setChilds("");
        $alipayTradePayApiInParam_13Childs[] = json_decode($alipayTradePayApiInParam_13_6->getBizContent());

        $alipayTradePayApiInParam_13_7 = new ApiParamModel();
        $alipayTradePayApiInParam_13_7->setBaseType($alipayTradePayApiInParam_13_7::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_13_7->setTitle("商品的展示地址");
        $alipayTradePayApiInParam_13_7->setDesc("");
        $alipayTradePayApiInParam_13_7->setIsMust(3);
        $alipayTradePayApiInParam_13_7->setIsListType(false);
        $alipayTradePayApiInParam_13_7->setFullParamName("goodsDetail[0].showUrl");
        $alipayTradePayApiInParam_13_7->setEnName("show_url");
        $alipayTradePayApiInParam_13_7->setChilds("");
        $alipayTradePayApiInParam_13Childs[] = json_decode($alipayTradePayApiInParam_13_7->getBizContent());

            $alipayTradePayApiInParam_13->setChilds($alipayTradePayApiInParam_13Childs);

        $alipayTradePayApiInParamChilds[] = json_decode($alipayTradePayApiInParam_13->getBizContent());

        $alipayTradePayApiInParam_14 = new ApiParamModel();
        $alipayTradePayApiInParam_14->setBaseType($alipayTradePayApiInParam_14::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_14->setTitle("商户操作员编号");
        $alipayTradePayApiInParam_14->setDesc("");
        $alipayTradePayApiInParam_14->setIsMust(3);
        $alipayTradePayApiInParam_14->setIsListType(false);
        $alipayTradePayApiInParam_14->setFullParamName("operatorId");
        $alipayTradePayApiInParam_14->setEnName("operator_id");
        $alipayTradePayApiInParam_14->setChilds("");
        $alipayTradePayApiInParamChilds[] = json_decode($alipayTradePayApiInParam_14->getBizContent());

        $alipayTradePayApiInParam_15 = new ApiParamModel();
        $alipayTradePayApiInParam_15->setBaseType($alipayTradePayApiInParam_15::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_15->setTitle("商户门店编号");
        $alipayTradePayApiInParam_15->setDesc("");
        $alipayTradePayApiInParam_15->setIsMust(3);
        $alipayTradePayApiInParam_15->setIsListType(false);
        $alipayTradePayApiInParam_15->setFullParamName("storeId");
        $alipayTradePayApiInParam_15->setEnName("store_id");
        $alipayTradePayApiInParam_15->setChilds("");
        $alipayTradePayApiInParamChilds[] = json_decode($alipayTradePayApiInParam_15->getBizContent());

        $alipayTradePayApiInParam_16 = new ApiParamModel();
        $alipayTradePayApiInParam_16->setBaseType($alipayTradePayApiInParam_16::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_16->setTitle("商户机具终端编号");
        $alipayTradePayApiInParam_16->setDesc("");
        $alipayTradePayApiInParam_16->setIsMust(3);
        $alipayTradePayApiInParam_16->setIsListType(false);
        $alipayTradePayApiInParam_16->setFullParamName("terminalId");
        $alipayTradePayApiInParam_16->setEnName("terminal_id");
        $alipayTradePayApiInParam_16->setChilds("");
        $alipayTradePayApiInParamChilds[] = json_decode($alipayTradePayApiInParam_16->getBizContent());

        $alipayTradePayApiInParam_17 = new ApiParamModel();
        $alipayTradePayApiInParam_17->setBaseType($alipayTradePayApiInParam_17::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_17->setTitle("支付宝的店铺编号");
        $alipayTradePayApiInParam_17->setDesc("");
        $alipayTradePayApiInParam_17->setIsMust(3);
        $alipayTradePayApiInParam_17->setIsListType(false);
        $alipayTradePayApiInParam_17->setFullParamName("alipayStoreId");
        $alipayTradePayApiInParam_17->setEnName("alipay_store_id");
        $alipayTradePayApiInParam_17->setChilds("");
        $alipayTradePayApiInParamChilds[] = json_decode($alipayTradePayApiInParam_17->getBizContent());

        $alipayTradePayApiInParam_18 = new ApiParamModel();
        $alipayTradePayApiInParam_18->setBaseType($alipayTradePayApiInParam_18::$TYPE_COMPLEXTYPE);
        $alipayTradePayApiInParam_18->setTitle("业务扩展参数");
        $alipayTradePayApiInParam_18->setDesc("");
        $alipayTradePayApiInParam_18->setIsMust(3);
        $alipayTradePayApiInParam_18->setIsListType(false);
        $alipayTradePayApiInParam_18->setFullParamName("extendParams");
        $alipayTradePayApiInParam_18->setEnName("extend_params");
        $alipayTradePayApiInParam_18->setChilds("");
    
    // $alipayTradePayApiInParam_18Childs[] = new ApiParamModel();

            $alipayTradePayApiInParam_18_0 = new ApiParamModel();
        $alipayTradePayApiInParam_18_0->setBaseType($alipayTradePayApiInParam_18_0::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_18_0->setTitle("系统商编号");
        $alipayTradePayApiInParam_18_0->setDesc(" 该参数作为系统商返佣数据提取的依据，请填写系统商签约协议的PID");
        $alipayTradePayApiInParam_18_0->setIsMust(3);
        $alipayTradePayApiInParam_18_0->setIsListType(false);
        $alipayTradePayApiInParam_18_0->setFullParamName("extendParams.sysServiceProviderId");
        $alipayTradePayApiInParam_18_0->setEnName("sys_service_provider_id");
        $alipayTradePayApiInParam_18_0->setChilds("");
        $alipayTradePayApiInParam_18Childs[] = json_decode($alipayTradePayApiInParam_18_0->getBizContent());

        $alipayTradePayApiInParam_18_1 = new ApiParamModel();
        $alipayTradePayApiInParam_18_1->setBaseType($alipayTradePayApiInParam_18_1::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_18_1->setTitle("使用花呗分期要进行的分期数");
        $alipayTradePayApiInParam_18_1->setDesc("");
        $alipayTradePayApiInParam_18_1->setIsMust(3);
        $alipayTradePayApiInParam_18_1->setIsListType(false);
        $alipayTradePayApiInParam_18_1->setFullParamName("extendParams.hbFqNum");
        $alipayTradePayApiInParam_18_1->setEnName("hb_fq_num");
        $alipayTradePayApiInParam_18_1->setChilds("");
        $alipayTradePayApiInParam_18Childs[] = json_decode($alipayTradePayApiInParam_18_1->getBizContent());

        $alipayTradePayApiInParam_18_2 = new ApiParamModel();
        $alipayTradePayApiInParam_18_2->setBaseType($alipayTradePayApiInParam_18_2::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_18_2->setTitle("使用花呗分期需要卖家承担的手续费比例的百分值");
        $alipayTradePayApiInParam_18_2->setDesc("传入100代表100%");
        $alipayTradePayApiInParam_18_2->setIsMust(3);
        $alipayTradePayApiInParam_18_2->setIsListType(false);
        $alipayTradePayApiInParam_18_2->setFullParamName("extendParams.hbFqSellerPercent");
        $alipayTradePayApiInParam_18_2->setEnName("hb_fq_seller_percent");
        $alipayTradePayApiInParam_18_2->setChilds("");
        $alipayTradePayApiInParam_18Childs[] = json_decode($alipayTradePayApiInParam_18_2->getBizContent());

        $alipayTradePayApiInParam_18_3 = new ApiParamModel();
        $alipayTradePayApiInParam_18_3->setBaseType($alipayTradePayApiInParam_18_3::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_18_3->setTitle("行业数据回流信息");
        $alipayTradePayApiInParam_18_3->setDesc(" 详见：地铁支付接口参数补充说明");
        $alipayTradePayApiInParam_18_3->setIsMust(3);
        $alipayTradePayApiInParam_18_3->setIsListType(false);
        $alipayTradePayApiInParam_18_3->setFullParamName("extendParams.industryRefluxInfo");
        $alipayTradePayApiInParam_18_3->setEnName("industry_reflux_info");
        $alipayTradePayApiInParam_18_3->setChilds("");
        $alipayTradePayApiInParam_18Childs[] = json_decode($alipayTradePayApiInParam_18_3->getBizContent());

        $alipayTradePayApiInParam_18_4 = new ApiParamModel();
        $alipayTradePayApiInParam_18_4->setBaseType($alipayTradePayApiInParam_18_4::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_18_4->setTitle("卡类型");
        $alipayTradePayApiInParam_18_4->setDesc("");
        $alipayTradePayApiInParam_18_4->setIsMust(3);
        $alipayTradePayApiInParam_18_4->setIsListType(false);
        $alipayTradePayApiInParam_18_4->setFullParamName("extendParams.cardType");
        $alipayTradePayApiInParam_18_4->setEnName("card_type");
        $alipayTradePayApiInParam_18_4->setChilds("");
        $alipayTradePayApiInParam_18Childs[] = json_decode($alipayTradePayApiInParam_18_4->getBizContent());

            $alipayTradePayApiInParam_18->setChilds($alipayTradePayApiInParam_18Childs);

        $alipayTradePayApiInParamChilds[] = json_decode($alipayTradePayApiInParam_18->getBizContent());

        $alipayTradePayApiInParam_19 = new ApiParamModel();
        $alipayTradePayApiInParam_19->setBaseType($alipayTradePayApiInParam_19::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_19->setTitle("该笔订单允许的最晚付款时间");
        $alipayTradePayApiInParam_19->setDesc("逾期将关闭交易。取值范围：1m～15d。m-分钟，h-小时，d-天，1c-当天（1c-当天的情况下，无论交易何时创建，都在0点关闭）。 该参数数值不接受小数点， 如 1.5h，可转换为 90m");
        $alipayTradePayApiInParam_19->setIsMust(3);
        $alipayTradePayApiInParam_19->setIsListType(false);
        $alipayTradePayApiInParam_19->setFullParamName("timeoutExpress");
        $alipayTradePayApiInParam_19->setEnName("timeout_express");
        $alipayTradePayApiInParam_19->setChilds("");
        $alipayTradePayApiInParamChilds[] = json_decode($alipayTradePayApiInParam_19->getBizContent());

        $alipayTradePayApiInParam_20 = new ApiParamModel();
        $alipayTradePayApiInParam_20->setBaseType($alipayTradePayApiInParam_20::$TYPE_COMPLEXTYPE);
        $alipayTradePayApiInParam_20->setTitle("代扣业务需要传入协议相关信息");
        $alipayTradePayApiInParam_20->setDesc("");
        $alipayTradePayApiInParam_20->setIsMust(3);
        $alipayTradePayApiInParam_20->setIsListType(false);
        $alipayTradePayApiInParam_20->setFullParamName("agreementParams");
        $alipayTradePayApiInParam_20->setEnName("agreement_params");
        $alipayTradePayApiInParam_20->setChilds("");
    
    // $alipayTradePayApiInParam_20Childs[] = new ApiParamModel();

            $alipayTradePayApiInParam_20_0 = new ApiParamModel();
        $alipayTradePayApiInParam_20_0->setBaseType($alipayTradePayApiInParam_20_0::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_20_0->setTitle("支付宝系统中用以唯一标识用户签约记录的编号（用户签约成功后的协议号");
        $alipayTradePayApiInParam_20_0->setDesc("）");
        $alipayTradePayApiInParam_20_0->setIsMust(3);
        $alipayTradePayApiInParam_20_0->setIsListType(false);
        $alipayTradePayApiInParam_20_0->setFullParamName("agreementParams.agreementNo");
        $alipayTradePayApiInParam_20_0->setEnName("agreement_no");
        $alipayTradePayApiInParam_20_0->setChilds("");
        $alipayTradePayApiInParam_20Childs[] = json_decode($alipayTradePayApiInParam_20_0->getBizContent());

        $alipayTradePayApiInParam_20_1 = new ApiParamModel();
        $alipayTradePayApiInParam_20_1->setBaseType($alipayTradePayApiInParam_20_1::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_20_1->setTitle("鉴权确认码");
        $alipayTradePayApiInParam_20_1->setDesc("在需要做支付鉴权校验时，该参数不能为空");
        $alipayTradePayApiInParam_20_1->setIsMust(3);
        $alipayTradePayApiInParam_20_1->setIsListType(false);
        $alipayTradePayApiInParam_20_1->setFullParamName("agreementParams.authConfirmNo");
        $alipayTradePayApiInParam_20_1->setEnName("auth_confirm_no");
        $alipayTradePayApiInParam_20_1->setChilds("");
        $alipayTradePayApiInParam_20Childs[] = json_decode($alipayTradePayApiInParam_20_1->getBizContent());

        $alipayTradePayApiInParam_20_2 = new ApiParamModel();
        $alipayTradePayApiInParam_20_2->setBaseType($alipayTradePayApiInParam_20_2::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_20_2->setTitle("鉴权申请token");
        $alipayTradePayApiInParam_20_2->setDesc("其格式和内容，由支付宝定义。在需要做支付鉴权校验时，该参数不能为空。");
        $alipayTradePayApiInParam_20_2->setIsMust(3);
        $alipayTradePayApiInParam_20_2->setIsListType(false);
        $alipayTradePayApiInParam_20_2->setFullParamName("agreementParams.applyToken");
        $alipayTradePayApiInParam_20_2->setEnName("apply_token");
        $alipayTradePayApiInParam_20_2->setChilds("");
        $alipayTradePayApiInParam_20Childs[] = json_decode($alipayTradePayApiInParam_20_2->getBizContent());

            $alipayTradePayApiInParam_20->setChilds($alipayTradePayApiInParam_20Childs);

        $alipayTradePayApiInParamChilds[] = json_decode($alipayTradePayApiInParam_20->getBizContent());

        $alipayTradePayApiInParam_21 = new ApiParamModel();
        $alipayTradePayApiInParam_21->setBaseType($alipayTradePayApiInParam_21::$TYPE_COMPLEXTYPE);
        $alipayTradePayApiInParam_21->setTitle("描述分账信息");
        $alipayTradePayApiInParam_21->setDesc("json格式，其它说明详见分账说明");
        $alipayTradePayApiInParam_21->setIsMust(3);
        $alipayTradePayApiInParam_21->setIsListType(false);
        $alipayTradePayApiInParam_21->setFullParamName("royaltyInfo");
        $alipayTradePayApiInParam_21->setEnName("royalty_info");
        $alipayTradePayApiInParam_21->setChilds("");
    
    // $alipayTradePayApiInParam_21Childs[] = new ApiParamModel();

            $alipayTradePayApiInParam_21_1 = new ApiParamModel();
        $alipayTradePayApiInParam_21_1->setBaseType($alipayTradePayApiInParam_21_1::$TYPE_COMPLEXTYPE);
        $alipayTradePayApiInParam_21_1->setTitle("分账明细的信息");
        $alipayTradePayApiInParam_21_1->setDesc("可以描述多条分账指令，json数组。");
        $alipayTradePayApiInParam_21_1->setIsMust(1);
        $alipayTradePayApiInParam_21_1->setIsListType(true);
        $alipayTradePayApiInParam_21_1->setFullParamName("royaltyInfo.royaltyDetailInfos[0]");
        $alipayTradePayApiInParam_21_1->setEnName("royalty_detail_infos");
        $alipayTradePayApiInParam_21_1->setChilds("");
    
    // $alipayTradePayApiInParam_21_1Childs[] = new ApiParamModel();

            $alipayTradePayApiInParam_21_1_2 = new ApiParamModel();
        $alipayTradePayApiInParam_21_1_2->setBaseType($alipayTradePayApiInParam_21_1_2::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_21_1_2->setTitle("分账批次号");
        $alipayTradePayApiInParam_21_1_2->setDesc(" 分账批次号。  目前需要和转入账号类型为bankIndex配合使用。");
        $alipayTradePayApiInParam_21_1_2->setIsMust(1);
        $alipayTradePayApiInParam_21_1_2->setIsListType(false);
        $alipayTradePayApiInParam_21_1_2->setFullParamName("royaltyInfo.royaltyDetailInfos[0].batchNo");
        $alipayTradePayApiInParam_21_1_2->setEnName("batch_no");
        $alipayTradePayApiInParam_21_1_2->setChilds("");
        $alipayTradePayApiInParam_21_1Childs[] = json_decode($alipayTradePayApiInParam_21_1_2->getBizContent());

        $alipayTradePayApiInParam_21_1_4 = new ApiParamModel();
        $alipayTradePayApiInParam_21_1_4->setBaseType($alipayTradePayApiInParam_21_1_4::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_21_1_4->setTitle("要分账的账户类型");
        $alipayTradePayApiInParam_21_1_4->setDesc("  目前只支持userId：支付宝账号对应的支付宝唯一用户号。  默认值为userId。");
        $alipayTradePayApiInParam_21_1_4->setIsMust(1);
        $alipayTradePayApiInParam_21_1_4->setIsListType(false);
        $alipayTradePayApiInParam_21_1_4->setFullParamName("royaltyInfo.royaltyDetailInfos[0].transOutType");
        $alipayTradePayApiInParam_21_1_4->setEnName("trans_out_type");
        $alipayTradePayApiInParam_21_1_4->setChilds("");
        $alipayTradePayApiInParam_21_1Childs[] = json_decode($alipayTradePayApiInParam_21_1_4->getBizContent());

        $alipayTradePayApiInParam_21_1_5 = new ApiParamModel();
        $alipayTradePayApiInParam_21_1_5->setBaseType($alipayTradePayApiInParam_21_1_5::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_21_1_5->setTitle("如果转出账号类型为userId");
        $alipayTradePayApiInParam_21_1_5->setDesc("本参数为要分账的支付宝账号对应的支付宝唯一用户号。以2088开头的纯16位数字。");
        $alipayTradePayApiInParam_21_1_5->setIsMust(1);
        $alipayTradePayApiInParam_21_1_5->setIsListType(false);
        $alipayTradePayApiInParam_21_1_5->setFullParamName("royaltyInfo.royaltyDetailInfos[0].transOut");
        $alipayTradePayApiInParam_21_1_5->setEnName("trans_out");
        $alipayTradePayApiInParam_21_1_5->setChilds("");
        $alipayTradePayApiInParam_21_1Childs[] = json_decode($alipayTradePayApiInParam_21_1_5->getBizContent());

        $alipayTradePayApiInParam_21_1_6 = new ApiParamModel();
        $alipayTradePayApiInParam_21_1_6->setBaseType($alipayTradePayApiInParam_21_1_6::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_21_1_6->setTitle("如果转入账号类型为userId");
        $alipayTradePayApiInParam_21_1_6->setDesc("本参数为接受分账金额的支付宝账号对应的支付宝唯一用户号。以2088开头的纯16位数字。  &#61548;	如果转入账号类型为bankIndex，本参数为28位的银行编号（商户和支付宝签约时确定）。  如果转入账号类型为storeId，本参数为商户的门店ID。");
        $alipayTradePayApiInParam_21_1_6->setIsMust(1);
        $alipayTradePayApiInParam_21_1_6->setIsListType(false);
        $alipayTradePayApiInParam_21_1_6->setFullParamName("royaltyInfo.royaltyDetailInfos[0].transIn");
        $alipayTradePayApiInParam_21_1_6->setEnName("trans_in");
        $alipayTradePayApiInParam_21_1_6->setChilds("");
        $alipayTradePayApiInParam_21_1Childs[] = json_decode($alipayTradePayApiInParam_21_1_6->getBizContent());

        $alipayTradePayApiInParam_21_1_7 = new ApiParamModel();
        $alipayTradePayApiInParam_21_1_7->setBaseType($alipayTradePayApiInParam_21_1_7::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_21_1_7->setTitle("分账的金额");
        $alipayTradePayApiInParam_21_1_7->setDesc("单位为元");
        $alipayTradePayApiInParam_21_1_7->setIsMust(1);
        $alipayTradePayApiInParam_21_1_7->setIsListType(false);
        $alipayTradePayApiInParam_21_1_7->setFullParamName("royaltyInfo.royaltyDetailInfos[0].amount");
        $alipayTradePayApiInParam_21_1_7->setEnName("amount");
        $alipayTradePayApiInParam_21_1_7->setChilds("");
        $alipayTradePayApiInParam_21_1Childs[] = json_decode($alipayTradePayApiInParam_21_1_7->getBizContent());

        $alipayTradePayApiInParam_21_1_0 = new ApiParamModel();
        $alipayTradePayApiInParam_21_1_0->setBaseType($alipayTradePayApiInParam_21_1_0::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_21_1_0->setTitle("分账序列号");
        $alipayTradePayApiInParam_21_1_0->setDesc("表示分账执行的顺序，必须为正整数");
        $alipayTradePayApiInParam_21_1_0->setIsMust(3);
        $alipayTradePayApiInParam_21_1_0->setIsListType(false);
        $alipayTradePayApiInParam_21_1_0->setFullParamName("royaltyInfo.royaltyDetailInfos[0].serialNo");
        $alipayTradePayApiInParam_21_1_0->setEnName("serial_no");
        $alipayTradePayApiInParam_21_1_0->setChilds("");
        $alipayTradePayApiInParam_21_1Childs[] = json_decode($alipayTradePayApiInParam_21_1_0->getBizContent());

        $alipayTradePayApiInParam_21_1_1 = new ApiParamModel();
        $alipayTradePayApiInParam_21_1_1->setBaseType($alipayTradePayApiInParam_21_1_1::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_21_1_1->setTitle("接受分账金额的账户类型：");
        $alipayTradePayApiInParam_21_1_1->setDesc(" &#61548;	userId：支付宝账号对应的支付宝唯一用户号。  &#61548;	bankIndex：分账到银行账户的银行编号。目前暂时只支持分账到一个银行编号。  storeId：分账到门店对应的银行卡编号。  默认值为userId。");
        $alipayTradePayApiInParam_21_1_1->setIsMust(3);
        $alipayTradePayApiInParam_21_1_1->setIsListType(false);
        $alipayTradePayApiInParam_21_1_1->setFullParamName("royaltyInfo.royaltyDetailInfos[0].transInType");
        $alipayTradePayApiInParam_21_1_1->setEnName("trans_in_type");
        $alipayTradePayApiInParam_21_1_1->setChilds("");
        $alipayTradePayApiInParam_21_1Childs[] = json_decode($alipayTradePayApiInParam_21_1_1->getBizContent());

        $alipayTradePayApiInParam_21_1_3 = new ApiParamModel();
        $alipayTradePayApiInParam_21_1_3->setBaseType($alipayTradePayApiInParam_21_1_3::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_21_1_3->setTitle("商户分账的外部关联号");
        $alipayTradePayApiInParam_21_1_3->setDesc("用于关联到每一笔分账信息，商户需保证其唯一性。  如果为空，该值则默认为“商户网站唯一订单号+分账序列号”");
        $alipayTradePayApiInParam_21_1_3->setIsMust(3);
        $alipayTradePayApiInParam_21_1_3->setIsListType(false);
        $alipayTradePayApiInParam_21_1_3->setFullParamName("royaltyInfo.royaltyDetailInfos[0].outRelationId");
        $alipayTradePayApiInParam_21_1_3->setEnName("out_relation_id");
        $alipayTradePayApiInParam_21_1_3->setChilds("");
        $alipayTradePayApiInParam_21_1Childs[] = json_decode($alipayTradePayApiInParam_21_1_3->getBizContent());

        $alipayTradePayApiInParam_21_1_8 = new ApiParamModel();
        $alipayTradePayApiInParam_21_1_8->setBaseType($alipayTradePayApiInParam_21_1_8::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_21_1_8->setTitle("分账描述信息");
        $alipayTradePayApiInParam_21_1_8->setDesc("");
        $alipayTradePayApiInParam_21_1_8->setIsMust(3);
        $alipayTradePayApiInParam_21_1_8->setIsListType(false);
        $alipayTradePayApiInParam_21_1_8->setFullParamName("royaltyInfo.royaltyDetailInfos[0].desc");
        $alipayTradePayApiInParam_21_1_8->setEnName("desc");
        $alipayTradePayApiInParam_21_1_8->setChilds("");
        $alipayTradePayApiInParam_21_1Childs[] = json_decode($alipayTradePayApiInParam_21_1_8->getBizContent());

        $alipayTradePayApiInParam_21_1_9 = new ApiParamModel();
        $alipayTradePayApiInParam_21_1_9->setBaseType($alipayTradePayApiInParam_21_1_9::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_21_1_9->setTitle("分账的比例");
        $alipayTradePayApiInParam_21_1_9->setDesc("值为20代表按20%的比例分账");
        $alipayTradePayApiInParam_21_1_9->setIsMust(3);
        $alipayTradePayApiInParam_21_1_9->setIsListType(false);
        $alipayTradePayApiInParam_21_1_9->setFullParamName("royaltyInfo.royaltyDetailInfos[0].amountPercentage");
        $alipayTradePayApiInParam_21_1_9->setEnName("amount_percentage");
        $alipayTradePayApiInParam_21_1_9->setChilds("");
        $alipayTradePayApiInParam_21_1Childs[] = json_decode($alipayTradePayApiInParam_21_1_9->getBizContent());

            $alipayTradePayApiInParam_21_1->setChilds($alipayTradePayApiInParam_21_1Childs);

        $alipayTradePayApiInParam_21Childs[] = json_decode($alipayTradePayApiInParam_21_1->getBizContent());

        $alipayTradePayApiInParam_21_0 = new ApiParamModel();
        $alipayTradePayApiInParam_21_0->setBaseType($alipayTradePayApiInParam_21_0::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_21_0->setTitle("分账类型");
        $alipayTradePayApiInParam_21_0->setDesc(" 卖家的分账类型，目前只支持传入ROYALTY（普通分账类型）。");
        $alipayTradePayApiInParam_21_0->setIsMust(3);
        $alipayTradePayApiInParam_21_0->setIsListType(false);
        $alipayTradePayApiInParam_21_0->setFullParamName("royaltyInfo.royaltyType");
        $alipayTradePayApiInParam_21_0->setEnName("royalty_type");
        $alipayTradePayApiInParam_21_0->setChilds("");
        $alipayTradePayApiInParam_21Childs[] = json_decode($alipayTradePayApiInParam_21_0->getBizContent());

            $alipayTradePayApiInParam_21->setChilds($alipayTradePayApiInParam_21Childs);

        $alipayTradePayApiInParamChilds[] = json_decode($alipayTradePayApiInParam_21->getBizContent());

        $alipayTradePayApiInParam_22 = new ApiParamModel();
        $alipayTradePayApiInParam_22->setBaseType($alipayTradePayApiInParam_22::$TYPE_COMPLEXTYPE);
        $alipayTradePayApiInParam_22->setTitle("描述结算信息");
        $alipayTradePayApiInParam_22->setDesc("json格式，详见结算参数说明");
        $alipayTradePayApiInParam_22->setIsMust(3);
        $alipayTradePayApiInParam_22->setIsListType(false);
        $alipayTradePayApiInParam_22->setFullParamName("settleInfo");
        $alipayTradePayApiInParam_22->setEnName("settle_info");
        $alipayTradePayApiInParam_22->setChilds("");
    
    // $alipayTradePayApiInParam_22Childs[] = new ApiParamModel();

            $alipayTradePayApiInParam_22_0 = new ApiParamModel();
        $alipayTradePayApiInParam_22_0->setBaseType($alipayTradePayApiInParam_22_0::$TYPE_COMPLEXTYPE);
        $alipayTradePayApiInParam_22_0->setTitle("结算详细信息");
        $alipayTradePayApiInParam_22_0->setDesc("json数组，目前只支持一条。");
        $alipayTradePayApiInParam_22_0->setIsMust(1);
        $alipayTradePayApiInParam_22_0->setIsListType(true);
        $alipayTradePayApiInParam_22_0->setFullParamName("settleInfo.settleDetailInfos[0]");
        $alipayTradePayApiInParam_22_0->setEnName("settle_detail_infos");
        $alipayTradePayApiInParam_22_0->setChilds("");
    
    // $alipayTradePayApiInParam_22_0Childs[] = new ApiParamModel();

            $alipayTradePayApiInParam_22_0_0 = new ApiParamModel();
        $alipayTradePayApiInParam_22_0_0->setBaseType($alipayTradePayApiInParam_22_0_0::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_22_0_0->setTitle("结算收款方的账户类型");
        $alipayTradePayApiInParam_22_0_0->setDesc("    cardSerialNo：结算收款方的银行卡编号;    userId：表示是支付宝账号对应的支付宝唯一用户号;  loginName：表示是支付宝登录号；");
        $alipayTradePayApiInParam_22_0_0->setIsMust(1);
        $alipayTradePayApiInParam_22_0_0->setIsListType(false);
        $alipayTradePayApiInParam_22_0_0->setFullParamName("settleInfo.settleDetailInfos[0].transInType");
        $alipayTradePayApiInParam_22_0_0->setEnName("trans_in_type");
        $alipayTradePayApiInParam_22_0_0->setChilds("");
        $alipayTradePayApiInParam_22_0Childs[] = json_decode($alipayTradePayApiInParam_22_0_0->getBizContent());

        $alipayTradePayApiInParam_22_0_1 = new ApiParamModel();
        $alipayTradePayApiInParam_22_0_1->setBaseType($alipayTradePayApiInParam_22_0_1::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_22_0_1->setTitle("结算收款方");
        $alipayTradePayApiInParam_22_0_1->setDesc("当结算收款方类型是cardSerialNo时，本参数为用户在支付宝绑定的卡编号；结算收款方类型是userId时，本参数为用户的支付宝账号对应的支付宝唯一用户号，以2088开头的纯16位数字；当结算收款方类型是loginName时，本参数为用户的支付宝登录号");
        $alipayTradePayApiInParam_22_0_1->setIsMust(1);
        $alipayTradePayApiInParam_22_0_1->setIsListType(false);
        $alipayTradePayApiInParam_22_0_1->setFullParamName("settleInfo.settleDetailInfos[0].transIn");
        $alipayTradePayApiInParam_22_0_1->setEnName("trans_in");
        $alipayTradePayApiInParam_22_0_1->setChilds("");
        $alipayTradePayApiInParam_22_0Childs[] = json_decode($alipayTradePayApiInParam_22_0_1->getBizContent());

        $alipayTradePayApiInParam_22_0_5 = new ApiParamModel();
        $alipayTradePayApiInParam_22_0_5->setBaseType($alipayTradePayApiInParam_22_0_5::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_22_0_5->setTitle("结算的金额");
        $alipayTradePayApiInParam_22_0_5->setDesc("单位为元。目前必须和交易金额相同");
        $alipayTradePayApiInParam_22_0_5->setIsMust(1);
        $alipayTradePayApiInParam_22_0_5->setIsListType(false);
        $alipayTradePayApiInParam_22_0_5->setFullParamName("settleInfo.settleDetailInfos[0].amount");
        $alipayTradePayApiInParam_22_0_5->setEnName("amount");
        $alipayTradePayApiInParam_22_0_5->setChilds("");
        $alipayTradePayApiInParam_22_0Childs[] = json_decode($alipayTradePayApiInParam_22_0_5->getBizContent());

        $alipayTradePayApiInParam_22_0_2 = new ApiParamModel();
        $alipayTradePayApiInParam_22_0_2->setBaseType($alipayTradePayApiInParam_22_0_2::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_22_0_2->setTitle("结算汇总维度");
        $alipayTradePayApiInParam_22_0_2->setDesc("按照这个维度汇总成批次结算，由商户指定。    目前需要和结算收款方账户类型为cardSerialNo配合使用");
        $alipayTradePayApiInParam_22_0_2->setIsMust(3);
        $alipayTradePayApiInParam_22_0_2->setIsListType(false);
        $alipayTradePayApiInParam_22_0_2->setFullParamName("settleInfo.settleDetailInfos[0].summaryDimension");
        $alipayTradePayApiInParam_22_0_2->setEnName("summary_dimension");
        $alipayTradePayApiInParam_22_0_2->setChilds("");
        $alipayTradePayApiInParam_22_0Childs[] = json_decode($alipayTradePayApiInParam_22_0_2->getBizContent());

        $alipayTradePayApiInParam_22_0_3 = new ApiParamModel();
        $alipayTradePayApiInParam_22_0_3->setBaseType($alipayTradePayApiInParam_22_0_3::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_22_0_3->setTitle("结算主体标识");
        $alipayTradePayApiInParam_22_0_3->setDesc("当结算主体类型为SecondMerchant时，为二级商户的SecondMerchantID；当结算主体类型为Store时，为门店的外标。");
        $alipayTradePayApiInParam_22_0_3->setIsMust(3);
        $alipayTradePayApiInParam_22_0_3->setIsListType(false);
        $alipayTradePayApiInParam_22_0_3->setFullParamName("settleInfo.settleDetailInfos[0].settleEntityId");
        $alipayTradePayApiInParam_22_0_3->setEnName("settle_entity_id");
        $alipayTradePayApiInParam_22_0_3->setChilds("");
        $alipayTradePayApiInParam_22_0Childs[] = json_decode($alipayTradePayApiInParam_22_0_3->getBizContent());

        $alipayTradePayApiInParam_22_0_4 = new ApiParamModel();
        $alipayTradePayApiInParam_22_0_4->setBaseType($alipayTradePayApiInParam_22_0_4::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_22_0_4->setTitle("结算主体类型");
        $alipayTradePayApiInParam_22_0_4->setDesc("  二级商户:SecondMerchant;商户或者直连商户门店:Store");
        $alipayTradePayApiInParam_22_0_4->setIsMust(3);
        $alipayTradePayApiInParam_22_0_4->setIsListType(false);
        $alipayTradePayApiInParam_22_0_4->setFullParamName("settleInfo.settleDetailInfos[0].settleEntityType");
        $alipayTradePayApiInParam_22_0_4->setEnName("settle_entity_type");
        $alipayTradePayApiInParam_22_0_4->setChilds("");
        $alipayTradePayApiInParam_22_0Childs[] = json_decode($alipayTradePayApiInParam_22_0_4->getBizContent());

            $alipayTradePayApiInParam_22_0->setChilds($alipayTradePayApiInParam_22_0Childs);

        $alipayTradePayApiInParam_22Childs[] = json_decode($alipayTradePayApiInParam_22_0->getBizContent());

            $alipayTradePayApiInParam_22->setChilds($alipayTradePayApiInParam_22Childs);

        $alipayTradePayApiInParamChilds[] = json_decode($alipayTradePayApiInParam_22->getBizContent());

        $alipayTradePayApiInParam_23 = new ApiParamModel();
        $alipayTradePayApiInParam_23->setBaseType($alipayTradePayApiInParam_23::$TYPE_COMPLEXTYPE);
        $alipayTradePayApiInParam_23->setTitle("间连受理商户信息体");
        $alipayTradePayApiInParam_23->setDesc("当前只对特殊银行机构特定场景下使用此字段");
        $alipayTradePayApiInParam_23->setIsMust(3);
        $alipayTradePayApiInParam_23->setIsListType(false);
        $alipayTradePayApiInParam_23->setFullParamName("subMerchant");
        $alipayTradePayApiInParam_23->setEnName("sub_merchant");
        $alipayTradePayApiInParam_23->setChilds("");
    
    // $alipayTradePayApiInParam_23Childs[] = new ApiParamModel();

            $alipayTradePayApiInParam_23_0 = new ApiParamModel();
        $alipayTradePayApiInParam_23_0->setBaseType($alipayTradePayApiInParam_23_0::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_23_0->setTitle("间连受理商户的支付宝商户编号");
        $alipayTradePayApiInParam_23_0->setDesc("通过间连商户入驻后得到。间连业务下必传，并且需要按规范传递受理商户编号。");
        $alipayTradePayApiInParam_23_0->setIsMust(1);
        $alipayTradePayApiInParam_23_0->setIsListType(false);
        $alipayTradePayApiInParam_23_0->setFullParamName("subMerchant.merchantId");
        $alipayTradePayApiInParam_23_0->setEnName("merchant_id");
        $alipayTradePayApiInParam_23_0->setChilds("");
        $alipayTradePayApiInParam_23Childs[] = json_decode($alipayTradePayApiInParam_23_0->getBizContent());

        $alipayTradePayApiInParam_23_1 = new ApiParamModel();
        $alipayTradePayApiInParam_23_1->setBaseType($alipayTradePayApiInParam_23_1::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_23_1->setTitle("商户id类型");
        $alipayTradePayApiInParam_23_1->setDesc("");
        $alipayTradePayApiInParam_23_1->setIsMust(3);
        $alipayTradePayApiInParam_23_1->setIsListType(false);
        $alipayTradePayApiInParam_23_1->setFullParamName("subMerchant.merchantType");
        $alipayTradePayApiInParam_23_1->setEnName("merchant_type");
        $alipayTradePayApiInParam_23_1->setChilds("");
        $alipayTradePayApiInParam_23Childs[] = json_decode($alipayTradePayApiInParam_23_1->getBizContent());

            $alipayTradePayApiInParam_23->setChilds($alipayTradePayApiInParam_23Childs);

        $alipayTradePayApiInParamChilds[] = json_decode($alipayTradePayApiInParam_23->getBizContent());

        $alipayTradePayApiInParam_24 = new ApiParamModel();
        $alipayTradePayApiInParam_24->setBaseType($alipayTradePayApiInParam_24::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_24->setTitle("禁用支付渠道");
        $alipayTradePayApiInParam_24->setDesc("多个渠道以逗号分割，如同时禁用信用支付类型和积分，则disable_pay_channels=\"credit_group,point\"");
        $alipayTradePayApiInParam_24->setIsMust(3);
        $alipayTradePayApiInParam_24->setIsListType(false);
        $alipayTradePayApiInParam_24->setFullParamName("disablePayChannels");
        $alipayTradePayApiInParam_24->setEnName("disable_pay_channels");
        $alipayTradePayApiInParam_24->setChilds("");
        $alipayTradePayApiInParamChilds[] = json_decode($alipayTradePayApiInParam_24->getBizContent());

        $alipayTradePayApiInParam_25 = new ApiParamModel();
        $alipayTradePayApiInParam_25->setBaseType($alipayTradePayApiInParam_25::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_25->setTitle("商户的原始订单号");
        $alipayTradePayApiInParam_25->setDesc("");
        $alipayTradePayApiInParam_25->setIsMust(3);
        $alipayTradePayApiInParam_25->setIsListType(false);
        $alipayTradePayApiInParam_25->setFullParamName("merchantOrderNo");
        $alipayTradePayApiInParam_25->setEnName("merchant_order_no");
        $alipayTradePayApiInParam_25->setChilds("");
        $alipayTradePayApiInParamChilds[] = json_decode($alipayTradePayApiInParam_25->getBizContent());

        $alipayTradePayApiInParam_26 = new ApiParamModel();
        $alipayTradePayApiInParam_26->setBaseType($alipayTradePayApiInParam_26::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_26->setTitle("预授权号");
        $alipayTradePayApiInParam_26->setDesc("预授权转交易请求中传入，适用于预授权转交易业务使用，目前只支持FUND_TRADE_FAST_PAY（资金订单即时到帐交易）、境外预授权产品（OVERSEAS_AUTH_PAY）两个产品。");
        $alipayTradePayApiInParam_26->setIsMust(3);
        $alipayTradePayApiInParam_26->setIsListType(false);
        $alipayTradePayApiInParam_26->setFullParamName("authNo");
        $alipayTradePayApiInParam_26->setEnName("auth_no");
        $alipayTradePayApiInParam_26->setChilds("");
        $alipayTradePayApiInParamChilds[] = json_decode($alipayTradePayApiInParam_26->getBizContent());

        $alipayTradePayApiInParam_27 = new ApiParamModel();
        $alipayTradePayApiInParam_27->setBaseType($alipayTradePayApiInParam_27::$TYPE_COMPLEXTYPE);
        $alipayTradePayApiInParam_27->setTitle("外部指定买家");
        $alipayTradePayApiInParam_27->setDesc("");
        $alipayTradePayApiInParam_27->setIsMust(3);
        $alipayTradePayApiInParam_27->setIsListType(false);
        $alipayTradePayApiInParam_27->setFullParamName("extUserInfo");
        $alipayTradePayApiInParam_27->setEnName("ext_user_info");
        $alipayTradePayApiInParam_27->setChilds("");
    
    // $alipayTradePayApiInParam_27Childs[] = new ApiParamModel();

            $alipayTradePayApiInParam_27_0 = new ApiParamModel();
        $alipayTradePayApiInParam_27_0->setBaseType($alipayTradePayApiInParam_27_0::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_27_0->setTitle("姓名");
        $alipayTradePayApiInParam_27_0->setDesc("   注： need_check_info=T时该参数才有效");
        $alipayTradePayApiInParam_27_0->setIsMust(3);
        $alipayTradePayApiInParam_27_0->setIsListType(false);
        $alipayTradePayApiInParam_27_0->setFullParamName("extUserInfo.name");
        $alipayTradePayApiInParam_27_0->setEnName("name");
        $alipayTradePayApiInParam_27_0->setChilds("");
        $alipayTradePayApiInParam_27Childs[] = json_decode($alipayTradePayApiInParam_27_0->getBizContent());

        $alipayTradePayApiInParam_27_1 = new ApiParamModel();
        $alipayTradePayApiInParam_27_1->setBaseType($alipayTradePayApiInParam_27_1::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_27_1->setTitle("手机号");
        $alipayTradePayApiInParam_27_1->setDesc(" 注：该参数暂不校验");
        $alipayTradePayApiInParam_27_1->setIsMust(3);
        $alipayTradePayApiInParam_27_1->setIsListType(false);
        $alipayTradePayApiInParam_27_1->setFullParamName("extUserInfo.mobile");
        $alipayTradePayApiInParam_27_1->setEnName("mobile");
        $alipayTradePayApiInParam_27_1->setChilds("");
        $alipayTradePayApiInParam_27Childs[] = json_decode($alipayTradePayApiInParam_27_1->getBizContent());

        $alipayTradePayApiInParam_27_2 = new ApiParamModel();
        $alipayTradePayApiInParam_27_2->setBaseType($alipayTradePayApiInParam_27_2::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_27_2->setTitle("身份证：IDENTITY_CARD、护照：PASSPORT、军官证：OFFICER_CARD、士兵证：SOLDIER_CARD、户口本：HOKOU等");
        $alipayTradePayApiInParam_27_2->setDesc("如有其它类型需要支持，请与蚂蚁金服工作人员联系。    注： need_check_info=T时该参数才有效");
        $alipayTradePayApiInParam_27_2->setIsMust(3);
        $alipayTradePayApiInParam_27_2->setIsListType(false);
        $alipayTradePayApiInParam_27_2->setFullParamName("extUserInfo.certType");
        $alipayTradePayApiInParam_27_2->setEnName("cert_type");
        $alipayTradePayApiInParam_27_2->setChilds("");
        $alipayTradePayApiInParam_27Childs[] = json_decode($alipayTradePayApiInParam_27_2->getBizContent());

        $alipayTradePayApiInParam_27_3 = new ApiParamModel();
        $alipayTradePayApiInParam_27_3->setBaseType($alipayTradePayApiInParam_27_3::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_27_3->setTitle("证件号");
        $alipayTradePayApiInParam_27_3->setDesc("   注：need_check_info=T时该参数才有效");
        $alipayTradePayApiInParam_27_3->setIsMust(3);
        $alipayTradePayApiInParam_27_3->setIsListType(false);
        $alipayTradePayApiInParam_27_3->setFullParamName("extUserInfo.certNo");
        $alipayTradePayApiInParam_27_3->setEnName("cert_no");
        $alipayTradePayApiInParam_27_3->setChilds("");
        $alipayTradePayApiInParam_27Childs[] = json_decode($alipayTradePayApiInParam_27_3->getBizContent());

        $alipayTradePayApiInParam_27_4 = new ApiParamModel();
        $alipayTradePayApiInParam_27_4->setBaseType($alipayTradePayApiInParam_27_4::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_27_4->setTitle("允许的最小买家年龄");
        $alipayTradePayApiInParam_27_4->setDesc("买家年龄必须大于等于所传数值   注：  1. need_check_info=T时该参数才有效  2. min_age为整数，必须大于等于0");
        $alipayTradePayApiInParam_27_4->setIsMust(3);
        $alipayTradePayApiInParam_27_4->setIsListType(false);
        $alipayTradePayApiInParam_27_4->setFullParamName("extUserInfo.minAge");
        $alipayTradePayApiInParam_27_4->setEnName("min_age");
        $alipayTradePayApiInParam_27_4->setChilds("");
        $alipayTradePayApiInParam_27Childs[] = json_decode($alipayTradePayApiInParam_27_4->getBizContent());

        $alipayTradePayApiInParam_27_5 = new ApiParamModel();
        $alipayTradePayApiInParam_27_5->setBaseType($alipayTradePayApiInParam_27_5::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_27_5->setTitle("是否强制校验付款人身份信息");
        $alipayTradePayApiInParam_27_5->setDesc(" T:强制校验，F：不强制");
        $alipayTradePayApiInParam_27_5->setIsMust(3);
        $alipayTradePayApiInParam_27_5->setIsListType(false);
        $alipayTradePayApiInParam_27_5->setFullParamName("extUserInfo.fixBuyer");
        $alipayTradePayApiInParam_27_5->setEnName("fix_buyer");
        $alipayTradePayApiInParam_27_5->setChilds("");
        $alipayTradePayApiInParam_27Childs[] = json_decode($alipayTradePayApiInParam_27_5->getBizContent());

        $alipayTradePayApiInParam_27_6 = new ApiParamModel();
        $alipayTradePayApiInParam_27_6->setBaseType($alipayTradePayApiInParam_27_6::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_27_6->setTitle("是否强制校验身份信息");
        $alipayTradePayApiInParam_27_6->setDesc(" T:强制校验，F：不强制");
        $alipayTradePayApiInParam_27_6->setIsMust(3);
        $alipayTradePayApiInParam_27_6->setIsListType(false);
        $alipayTradePayApiInParam_27_6->setFullParamName("extUserInfo.needCheckInfo");
        $alipayTradePayApiInParam_27_6->setEnName("need_check_info");
        $alipayTradePayApiInParam_27_6->setChilds("");
        $alipayTradePayApiInParam_27Childs[] = json_decode($alipayTradePayApiInParam_27_6->getBizContent());

            $alipayTradePayApiInParam_27->setChilds($alipayTradePayApiInParam_27Childs);

        $alipayTradePayApiInParamChilds[] = json_decode($alipayTradePayApiInParam_27->getBizContent());

        $alipayTradePayApiInParam_28 = new ApiParamModel();
        $alipayTradePayApiInParam_28->setBaseType($alipayTradePayApiInParam_28::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_28->setTitle("预授权确认模式");
        $alipayTradePayApiInParam_28->setDesc("授权转交易请求中传入，适用于预授权转交易业务使用，目前只支持PRE_AUTH(预授权产品码)  COMPLETE：转交易支付完成结束预授权，解冻剩余金额; NOT_COMPLETE：转交易支付完成不结束预授权，不解冻剩余金额");
        $alipayTradePayApiInParam_28->setIsMust(3);
        $alipayTradePayApiInParam_28->setIsListType(false);
        $alipayTradePayApiInParam_28->setFullParamName("authConfirmMode");
        $alipayTradePayApiInParam_28->setEnName("auth_confirm_mode");
        $alipayTradePayApiInParam_28->setChilds("");
        $alipayTradePayApiInParamChilds[] = json_decode($alipayTradePayApiInParam_28->getBizContent());

        $alipayTradePayApiInParam_29 = new ApiParamModel();
        $alipayTradePayApiInParam_29->setBaseType($alipayTradePayApiInParam_29::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_29->setTitle("商户传入终端设备相关信息");
        $alipayTradePayApiInParam_29->setDesc("具体值要和支付宝约定");
        $alipayTradePayApiInParam_29->setIsMust(3);
        $alipayTradePayApiInParam_29->setIsListType(false);
        $alipayTradePayApiInParam_29->setFullParamName("terminalParams");
        $alipayTradePayApiInParam_29->setEnName("terminal_params");
        $alipayTradePayApiInParam_29->setChilds("");
        $alipayTradePayApiInParamChilds[] = json_decode($alipayTradePayApiInParam_29->getBizContent());

        $alipayTradePayApiInParam_30 = new ApiParamModel();
        $alipayTradePayApiInParam_30->setBaseType($alipayTradePayApiInParam_30::$TYPE_BASETYPE);
        $alipayTradePayApiInParam_30->setTitle("商户传入业务信息");
        $alipayTradePayApiInParam_30->setDesc("具体值要和支付宝约定，应用于安全，营销等参数直传场景，格式为json格式");
        $alipayTradePayApiInParam_30->setIsMust(3);
        $alipayTradePayApiInParam_30->setIsListType(false);
        $alipayTradePayApiInParam_30->setFullParamName("businessParams");
        $alipayTradePayApiInParam_30->setEnName("business_params");
        $alipayTradePayApiInParam_30->setChilds("");
        $alipayTradePayApiInParamChilds[] = json_decode($alipayTradePayApiInParam_30->getBizContent());

        $alipayTradePayInfoModel->setApiInParam($alipayTradePayApiInParamChilds);

        $alipayTradePayApiOutParamChilds[] = new ApiParamModel();

            $alipayTradePayApiOutParam_0 = new ApiParamModel();
        $alipayTradePayApiOutParam_0->setBaseType($alipayTradePayApiOutParam_0::$TYPE_BASETYPE);
        $alipayTradePayApiOutParam_0->setTitle("支付宝交易号");
        $alipayTradePayApiOutParam_0->setDesc("");
        $alipayTradePayApiOutParam_0->setIsMust(1);
        $alipayTradePayApiOutParam_0->setIsListType(false);
        $alipayTradePayApiOutParam_0->setFullParamName("tradeNo");
        $alipayTradePayApiOutParam_0->setEnName("trade_no");
        $alipayTradePayApiOutParam_0->setChilds("");
        $alipayTradePayApiOutParamChilds[] = json_decode($alipayTradePayApiOutParam_0->getBizContent());

        $alipayTradePayApiOutParam_1 = new ApiParamModel();
        $alipayTradePayApiOutParam_1->setBaseType($alipayTradePayApiOutParam_1::$TYPE_BASETYPE);
        $alipayTradePayApiOutParam_1->setTitle("商户订单号");
        $alipayTradePayApiOutParam_1->setDesc("");
        $alipayTradePayApiOutParam_1->setIsMust(1);
        $alipayTradePayApiOutParam_1->setIsListType(false);
        $alipayTradePayApiOutParam_1->setFullParamName("outTradeNo");
        $alipayTradePayApiOutParam_1->setEnName("out_trade_no");
        $alipayTradePayApiOutParam_1->setChilds("");
        $alipayTradePayApiOutParamChilds[] = json_decode($alipayTradePayApiOutParam_1->getBizContent());

        $alipayTradePayApiOutParam_2 = new ApiParamModel();
        $alipayTradePayApiOutParam_2->setBaseType($alipayTradePayApiOutParam_2::$TYPE_BASETYPE);
        $alipayTradePayApiOutParam_2->setTitle("买家支付宝用户号");
        $alipayTradePayApiOutParam_2->setDesc("该参数已废弃，请不要使用");
        $alipayTradePayApiOutParam_2->setIsMust(1);
        $alipayTradePayApiOutParam_2->setIsListType(false);
        $alipayTradePayApiOutParam_2->setFullParamName("openId");
        $alipayTradePayApiOutParam_2->setEnName("open_id");
        $alipayTradePayApiOutParam_2->setChilds("");
        $alipayTradePayApiOutParamChilds[] = json_decode($alipayTradePayApiOutParam_2->getBizContent());

        $alipayTradePayApiOutParam_3 = new ApiParamModel();
        $alipayTradePayApiOutParam_3->setBaseType($alipayTradePayApiOutParam_3::$TYPE_BASETYPE);
        $alipayTradePayApiOutParam_3->setTitle("买家支付宝账号");
        $alipayTradePayApiOutParam_3->setDesc("");
        $alipayTradePayApiOutParam_3->setIsMust(1);
        $alipayTradePayApiOutParam_3->setIsListType(false);
        $alipayTradePayApiOutParam_3->setFullParamName("buyerLogonId");
        $alipayTradePayApiOutParam_3->setEnName("buyer_logon_id");
        $alipayTradePayApiOutParam_3->setChilds("");
        $alipayTradePayApiOutParamChilds[] = json_decode($alipayTradePayApiOutParam_3->getBizContent());

        $alipayTradePayApiOutParam_4 = new ApiParamModel();
        $alipayTradePayApiOutParam_4->setBaseType($alipayTradePayApiOutParam_4::$TYPE_BASETYPE);
        $alipayTradePayApiOutParam_4->setTitle("交易金额");
        $alipayTradePayApiOutParam_4->setDesc("");
        $alipayTradePayApiOutParam_4->setIsMust(1);
        $alipayTradePayApiOutParam_4->setIsListType(false);
        $alipayTradePayApiOutParam_4->setFullParamName("totalAmount");
        $alipayTradePayApiOutParam_4->setEnName("total_amount");
        $alipayTradePayApiOutParam_4->setChilds("");
        $alipayTradePayApiOutParamChilds[] = json_decode($alipayTradePayApiOutParam_4->getBizContent());

        $alipayTradePayApiOutParam_12 = new ApiParamModel();
        $alipayTradePayApiOutParam_12->setBaseType($alipayTradePayApiOutParam_12::$TYPE_BASETYPE);
        $alipayTradePayApiOutParam_12->setTitle("实收金额");
        $alipayTradePayApiOutParam_12->setDesc("");
        $alipayTradePayApiOutParam_12->setIsMust(1);
        $alipayTradePayApiOutParam_12->setIsListType(false);
        $alipayTradePayApiOutParam_12->setFullParamName("receiptAmount");
        $alipayTradePayApiOutParam_12->setEnName("receipt_amount");
        $alipayTradePayApiOutParam_12->setChilds("");
        $alipayTradePayApiOutParamChilds[] = json_decode($alipayTradePayApiOutParam_12->getBizContent());

        $alipayTradePayApiOutParam_16 = new ApiParamModel();
        $alipayTradePayApiOutParam_16->setBaseType($alipayTradePayApiOutParam_16::$TYPE_BASETYPE);
        $alipayTradePayApiOutParam_16->setTitle("交易支付时间");
        $alipayTradePayApiOutParam_16->setDesc("");
        $alipayTradePayApiOutParam_16->setIsMust(1);
        $alipayTradePayApiOutParam_16->setIsListType(false);
        $alipayTradePayApiOutParam_16->setFullParamName("gmtPayment");
        $alipayTradePayApiOutParam_16->setEnName("gmt_payment");
        $alipayTradePayApiOutParam_16->setChilds("");
        $alipayTradePayApiOutParamChilds[] = json_decode($alipayTradePayApiOutParam_16->getBizContent());

        $alipayTradePayApiOutParam_17 = new ApiParamModel();
        $alipayTradePayApiOutParam_17->setBaseType($alipayTradePayApiOutParam_17::$TYPE_COMPLEXTYPE);
        $alipayTradePayApiOutParam_17->setTitle("交易支付使用的资金渠道");
        $alipayTradePayApiOutParam_17->setDesc("");
        $alipayTradePayApiOutParam_17->setIsMust(1);
        $alipayTradePayApiOutParam_17->setIsListType(true);
        $alipayTradePayApiOutParam_17->setFullParamName("fundBillList[0]");
        $alipayTradePayApiOutParam_17->setEnName("fund_bill_list");
        $alipayTradePayApiOutParam_17->setChilds("");
    
    // $alipayTradePayApiOutParam_17Childs[] = new ApiParamModel();

            $alipayTradePayApiOutParam_17_0 = new ApiParamModel();
        $alipayTradePayApiOutParam_17_0->setBaseType($alipayTradePayApiOutParam_17_0::$TYPE_BASETYPE);
        $alipayTradePayApiOutParam_17_0->setTitle("交易使用的资金渠道");
        $alipayTradePayApiOutParam_17_0->setDesc("详见 <a href=\"https://doc.open.alipay.com/doc2/detail?treeId=26&articleId=103259&docType=1\">支付渠道列表</a>");
        $alipayTradePayApiOutParam_17_0->setIsMust(1);
        $alipayTradePayApiOutParam_17_0->setIsListType(false);
        $alipayTradePayApiOutParam_17_0->setFullParamName("fundBillList[0].fundChannel");
        $alipayTradePayApiOutParam_17_0->setEnName("fund_channel");
        $alipayTradePayApiOutParam_17_0->setChilds("");
        $alipayTradePayApiOutParam_17Childs[] = json_decode($alipayTradePayApiOutParam_17_0->getBizContent());

        $alipayTradePayApiOutParam_17_1 = new ApiParamModel();
        $alipayTradePayApiOutParam_17_1->setBaseType($alipayTradePayApiOutParam_17_1::$TYPE_BASETYPE);
        $alipayTradePayApiOutParam_17_1->setTitle("该支付工具类型所使用的金额");
        $alipayTradePayApiOutParam_17_1->setDesc("");
        $alipayTradePayApiOutParam_17_1->setIsMust(1);
        $alipayTradePayApiOutParam_17_1->setIsListType(false);
        $alipayTradePayApiOutParam_17_1->setFullParamName("fundBillList[0].amount");
        $alipayTradePayApiOutParam_17_1->setEnName("amount");
        $alipayTradePayApiOutParam_17_1->setChilds("");
        $alipayTradePayApiOutParam_17Childs[] = json_decode($alipayTradePayApiOutParam_17_1->getBizContent());

        $alipayTradePayApiOutParam_17_2 = new ApiParamModel();
        $alipayTradePayApiOutParam_17_2->setBaseType($alipayTradePayApiOutParam_17_2::$TYPE_BASETYPE);
        $alipayTradePayApiOutParam_17_2->setTitle("渠道实际付款金额");
        $alipayTradePayApiOutParam_17_2->setDesc("");
        $alipayTradePayApiOutParam_17_2->setIsMust(3);
        $alipayTradePayApiOutParam_17_2->setIsListType(false);
        $alipayTradePayApiOutParam_17_2->setFullParamName("fundBillList[0].realAmount");
        $alipayTradePayApiOutParam_17_2->setEnName("real_amount");
        $alipayTradePayApiOutParam_17_2->setChilds("");
        $alipayTradePayApiOutParam_17Childs[] = json_decode($alipayTradePayApiOutParam_17_2->getBizContent());

        $alipayTradePayApiOutParam_17_3 = new ApiParamModel();
        $alipayTradePayApiOutParam_17_3->setBaseType($alipayTradePayApiOutParam_17_3::$TYPE_BASETYPE);
        $alipayTradePayApiOutParam_17_3->setTitle("渠道所使用的资金类型");
        $alipayTradePayApiOutParam_17_3->setDesc("目前只在资金渠道(fund_channel)是银行卡渠道(BANKCARD)的情况下才返回该信息(DEBIT_CARD:借记卡,CREDIT_CARD:信用卡,MIXED_CARD:借贷合一卡)");
        $alipayTradePayApiOutParam_17_3->setIsMust(3);
        $alipayTradePayApiOutParam_17_3->setIsListType(false);
        $alipayTradePayApiOutParam_17_3->setFullParamName("fundBillList[0].fundType");
        $alipayTradePayApiOutParam_17_3->setEnName("fund_type");
        $alipayTradePayApiOutParam_17_3->setChilds("");
        $alipayTradePayApiOutParam_17Childs[] = json_decode($alipayTradePayApiOutParam_17_3->getBizContent());

            $alipayTradePayApiOutParam_17->setChilds($alipayTradePayApiOutParam_17Childs);

        $alipayTradePayApiOutParamChilds[] = json_decode($alipayTradePayApiOutParam_17->getBizContent());

        $alipayTradePayApiOutParam_20 = new ApiParamModel();
        $alipayTradePayApiOutParam_20->setBaseType($alipayTradePayApiOutParam_20::$TYPE_BASETYPE);
        $alipayTradePayApiOutParam_20->setTitle("买家在支付宝的用户id");
        $alipayTradePayApiOutParam_20->setDesc("");
        $alipayTradePayApiOutParam_20->setIsMust(1);
        $alipayTradePayApiOutParam_20->setIsListType(false);
        $alipayTradePayApiOutParam_20->setFullParamName("buyerUserId");
        $alipayTradePayApiOutParam_20->setEnName("buyer_user_id");
        $alipayTradePayApiOutParam_20->setChilds("");
        $alipayTradePayApiOutParamChilds[] = json_decode($alipayTradePayApiOutParam_20->getBizContent());

        $alipayTradePayApiOutParam_5 = new ApiParamModel();
        $alipayTradePayApiOutParam_5->setBaseType($alipayTradePayApiOutParam_5::$TYPE_BASETYPE);
        $alipayTradePayApiOutParam_5->setTitle("标价币种");
        $alipayTradePayApiOutParam_5->setDesc(" total_amount对应的币种单位。目前支持英镑：GBP、港币：HKD、美元：USD、新加坡元：SGD、日元：JPY、加拿大元：CAD、澳元：AUD、欧元：EUR、新西兰元：NZD、韩元：KRW、泰铢：THB、瑞士法郎：CHF、瑞典克朗：SEK、丹麦克朗：DKK、挪威克朗：NOK、马来西亚林吉特：MYR、印尼卢比：IDR、菲律宾比索：PHP、毛里求斯卢比：MUR、以色列新谢克尔：ILS、斯里兰卡卢比：LKR、俄罗斯卢布：RUB、阿联酋迪拉姆：AED、捷克克朗：CZK、南非兰特：ZAR、人民币：CNY");
        $alipayTradePayApiOutParam_5->setIsMust(2);
        $alipayTradePayApiOutParam_5->setIsListType(false);
        $alipayTradePayApiOutParam_5->setFullParamName("transCurrency");
        $alipayTradePayApiOutParam_5->setEnName("trans_currency");
        $alipayTradePayApiOutParam_5->setChilds("");
        $alipayTradePayApiOutParamChilds[] = json_decode($alipayTradePayApiOutParam_5->getBizContent());

        $alipayTradePayApiOutParam_6 = new ApiParamModel();
        $alipayTradePayApiOutParam_6->setBaseType($alipayTradePayApiOutParam_6::$TYPE_BASETYPE);
        $alipayTradePayApiOutParam_6->setTitle("商户指定的结算币种");
        $alipayTradePayApiOutParam_6->setDesc("目前支持英镑：GBP、港币：HKD、美元：USD、新加坡元：SGD、日元：JPY、加拿大元：CAD、澳元：AUD、欧元：EUR、新西兰元：NZD、韩元：KRW、泰铢：THB、瑞士法郎：CHF、瑞典克朗：SEK、丹麦克朗：DKK、挪威克朗：NOK、马来西亚林吉特：MYR、印尼卢比：IDR、菲律宾比索：PHP、毛里求斯卢比：MUR、以色列新谢克尔：ILS、斯里兰卡卢比：LKR、俄罗斯卢布：RUB、阿联酋迪拉姆：AED、捷克克朗：CZK、南非兰特：ZAR、人民币：CNY");
        $alipayTradePayApiOutParam_6->setIsMust(2);
        $alipayTradePayApiOutParam_6->setIsListType(false);
        $alipayTradePayApiOutParam_6->setFullParamName("settleCurrency");
        $alipayTradePayApiOutParam_6->setEnName("settle_currency");
        $alipayTradePayApiOutParam_6->setChilds("");
        $alipayTradePayApiOutParamChilds[] = json_decode($alipayTradePayApiOutParam_6->getBizContent());

        $alipayTradePayApiOutParam_7 = new ApiParamModel();
        $alipayTradePayApiOutParam_7->setBaseType($alipayTradePayApiOutParam_7::$TYPE_BASETYPE);
        $alipayTradePayApiOutParam_7->setTitle("结算币种订单金额");
        $alipayTradePayApiOutParam_7->setDesc("");
        $alipayTradePayApiOutParam_7->setIsMust(2);
        $alipayTradePayApiOutParam_7->setIsListType(false);
        $alipayTradePayApiOutParam_7->setFullParamName("settleAmount");
        $alipayTradePayApiOutParam_7->setEnName("settle_amount");
        $alipayTradePayApiOutParam_7->setChilds("");
        $alipayTradePayApiOutParamChilds[] = json_decode($alipayTradePayApiOutParam_7->getBizContent());

        $alipayTradePayApiOutParam_8 = new ApiParamModel();
        $alipayTradePayApiOutParam_8->setBaseType($alipayTradePayApiOutParam_8::$TYPE_BASETYPE);
        $alipayTradePayApiOutParam_8->setTitle("支付币种");
        $alipayTradePayApiOutParam_8->setDesc("");
        $alipayTradePayApiOutParam_8->setIsMust(2);
        $alipayTradePayApiOutParam_8->setIsListType(false);
        $alipayTradePayApiOutParam_8->setFullParamName("payCurrency");
        $alipayTradePayApiOutParam_8->setEnName("pay_currency");
        $alipayTradePayApiOutParam_8->setChilds("");
        $alipayTradePayApiOutParamChilds[] = json_decode($alipayTradePayApiOutParam_8->getBizContent());

        $alipayTradePayApiOutParam_9 = new ApiParamModel();
        $alipayTradePayApiOutParam_9->setBaseType($alipayTradePayApiOutParam_9::$TYPE_BASETYPE);
        $alipayTradePayApiOutParam_9->setTitle("支付币种订单金额");
        $alipayTradePayApiOutParam_9->setDesc("");
        $alipayTradePayApiOutParam_9->setIsMust(2);
        $alipayTradePayApiOutParam_9->setIsListType(false);
        $alipayTradePayApiOutParam_9->setFullParamName("payAmount");
        $alipayTradePayApiOutParam_9->setEnName("pay_amount");
        $alipayTradePayApiOutParam_9->setChilds("");
        $alipayTradePayApiOutParamChilds[] = json_decode($alipayTradePayApiOutParam_9->getBizContent());

        $alipayTradePayApiOutParam_10 = new ApiParamModel();
        $alipayTradePayApiOutParam_10->setBaseType($alipayTradePayApiOutParam_10::$TYPE_BASETYPE);
        $alipayTradePayApiOutParam_10->setTitle("结算币种兑换标价币种汇率");
        $alipayTradePayApiOutParam_10->setDesc("");
        $alipayTradePayApiOutParam_10->setIsMust(2);
        $alipayTradePayApiOutParam_10->setIsListType(false);
        $alipayTradePayApiOutParam_10->setFullParamName("settleTransRate");
        $alipayTradePayApiOutParam_10->setEnName("settle_trans_rate");
        $alipayTradePayApiOutParam_10->setChilds("");
        $alipayTradePayApiOutParamChilds[] = json_decode($alipayTradePayApiOutParam_10->getBizContent());

        $alipayTradePayApiOutParam_11 = new ApiParamModel();
        $alipayTradePayApiOutParam_11->setBaseType($alipayTradePayApiOutParam_11::$TYPE_BASETYPE);
        $alipayTradePayApiOutParam_11->setTitle("标价币种兑换支付币种汇率");
        $alipayTradePayApiOutParam_11->setDesc("");
        $alipayTradePayApiOutParam_11->setIsMust(2);
        $alipayTradePayApiOutParam_11->setIsListType(false);
        $alipayTradePayApiOutParam_11->setFullParamName("transPayRate");
        $alipayTradePayApiOutParam_11->setEnName("trans_pay_rate");
        $alipayTradePayApiOutParam_11->setChilds("");
        $alipayTradePayApiOutParamChilds[] = json_decode($alipayTradePayApiOutParam_11->getBizContent());

        $alipayTradePayApiOutParam_13 = new ApiParamModel();
        $alipayTradePayApiOutParam_13->setBaseType($alipayTradePayApiOutParam_13::$TYPE_BASETYPE);
        $alipayTradePayApiOutParam_13->setTitle("买家付款的金额");
        $alipayTradePayApiOutParam_13->setDesc("");
        $alipayTradePayApiOutParam_13->setIsMust(2);
        $alipayTradePayApiOutParam_13->setIsListType(false);
        $alipayTradePayApiOutParam_13->setFullParamName("buyerPayAmount");
        $alipayTradePayApiOutParam_13->setEnName("buyer_pay_amount");
        $alipayTradePayApiOutParam_13->setChilds("");
        $alipayTradePayApiOutParamChilds[] = json_decode($alipayTradePayApiOutParam_13->getBizContent());

        $alipayTradePayApiOutParam_14 = new ApiParamModel();
        $alipayTradePayApiOutParam_14->setBaseType($alipayTradePayApiOutParam_14::$TYPE_BASETYPE);
        $alipayTradePayApiOutParam_14->setTitle("使用集分宝付款的金额");
        $alipayTradePayApiOutParam_14->setDesc("");
        $alipayTradePayApiOutParam_14->setIsMust(2);
        $alipayTradePayApiOutParam_14->setIsListType(false);
        $alipayTradePayApiOutParam_14->setFullParamName("pointAmount");
        $alipayTradePayApiOutParam_14->setEnName("point_amount");
        $alipayTradePayApiOutParam_14->setChilds("");
        $alipayTradePayApiOutParamChilds[] = json_decode($alipayTradePayApiOutParam_14->getBizContent());

        $alipayTradePayApiOutParam_15 = new ApiParamModel();
        $alipayTradePayApiOutParam_15->setBaseType($alipayTradePayApiOutParam_15::$TYPE_BASETYPE);
        $alipayTradePayApiOutParam_15->setTitle("交易中可给用户开具发票的金额");
        $alipayTradePayApiOutParam_15->setDesc("");
        $alipayTradePayApiOutParam_15->setIsMust(2);
        $alipayTradePayApiOutParam_15->setIsListType(false);
        $alipayTradePayApiOutParam_15->setFullParamName("invoiceAmount");
        $alipayTradePayApiOutParam_15->setEnName("invoice_amount");
        $alipayTradePayApiOutParam_15->setChilds("");
        $alipayTradePayApiOutParamChilds[] = json_decode($alipayTradePayApiOutParam_15->getBizContent());

        $alipayTradePayApiOutParam_18 = new ApiParamModel();
        $alipayTradePayApiOutParam_18->setBaseType($alipayTradePayApiOutParam_18::$TYPE_BASETYPE);
        $alipayTradePayApiOutParam_18->setTitle("支付宝卡余额");
        $alipayTradePayApiOutParam_18->setDesc("");
        $alipayTradePayApiOutParam_18->setIsMust(2);
        $alipayTradePayApiOutParam_18->setIsListType(false);
        $alipayTradePayApiOutParam_18->setFullParamName("cardBalance");
        $alipayTradePayApiOutParam_18->setEnName("card_balance");
        $alipayTradePayApiOutParam_18->setChilds("");
        $alipayTradePayApiOutParamChilds[] = json_decode($alipayTradePayApiOutParam_18->getBizContent());

        $alipayTradePayApiOutParam_19 = new ApiParamModel();
        $alipayTradePayApiOutParam_19->setBaseType($alipayTradePayApiOutParam_19::$TYPE_BASETYPE);
        $alipayTradePayApiOutParam_19->setTitle("发生支付交易的商户门店名称");
        $alipayTradePayApiOutParam_19->setDesc("");
        $alipayTradePayApiOutParam_19->setIsMust(2);
        $alipayTradePayApiOutParam_19->setIsListType(false);
        $alipayTradePayApiOutParam_19->setFullParamName("storeName");
        $alipayTradePayApiOutParam_19->setEnName("store_name");
        $alipayTradePayApiOutParam_19->setChilds("");
        $alipayTradePayApiOutParamChilds[] = json_decode($alipayTradePayApiOutParam_19->getBizContent());

        $alipayTradePayApiOutParam_21 = new ApiParamModel();
        $alipayTradePayApiOutParam_21->setBaseType($alipayTradePayApiOutParam_21::$TYPE_BASETYPE);
        $alipayTradePayApiOutParam_21->setTitle("本次交易支付所使用的单品券优惠的商品优惠信息");
        $alipayTradePayApiOutParam_21->setDesc("");
        $alipayTradePayApiOutParam_21->setIsMust(2);
        $alipayTradePayApiOutParam_21->setIsListType(false);
        $alipayTradePayApiOutParam_21->setFullParamName("discountGoodsDetail");
        $alipayTradePayApiOutParam_21->setEnName("discount_goods_detail");
        $alipayTradePayApiOutParam_21->setChilds("");
        $alipayTradePayApiOutParamChilds[] = json_decode($alipayTradePayApiOutParam_21->getBizContent());

        $alipayTradePayApiOutParam_22 = new ApiParamModel();
        $alipayTradePayApiOutParam_22->setBaseType($alipayTradePayApiOutParam_22::$TYPE_BASETYPE);
        $alipayTradePayApiOutParam_22->setTitle("异步支付模式");
        $alipayTradePayApiOutParam_22->setDesc("先享后付业务会返回该参数，目前有三种值：  ASYNC_DELAY_PAY(异步延时付款);  ASYNC_REALTIME_PAY(异步准实时付款);  SYNC_DIRECT_PAY(同步直接扣款);");
        $alipayTradePayApiOutParam_22->setIsMust(2);
        $alipayTradePayApiOutParam_22->setIsListType(false);
        $alipayTradePayApiOutParam_22->setFullParamName("asyncPaymentMode");
        $alipayTradePayApiOutParam_22->setEnName("async_payment_mode");
        $alipayTradePayApiOutParam_22->setChilds("");
        $alipayTradePayApiOutParamChilds[] = json_decode($alipayTradePayApiOutParam_22->getBizContent());

        $alipayTradePayApiOutParam_23 = new ApiParamModel();
        $alipayTradePayApiOutParam_23->setBaseType($alipayTradePayApiOutParam_23::$TYPE_COMPLEXTYPE);
        $alipayTradePayApiOutParam_23->setTitle("本交易支付时使用的所有优惠券信息");
        $alipayTradePayApiOutParam_23->setDesc("");
        $alipayTradePayApiOutParam_23->setIsMust(2);
        $alipayTradePayApiOutParam_23->setIsListType(true);
        $alipayTradePayApiOutParam_23->setFullParamName("voucherDetailList[0]");
        $alipayTradePayApiOutParam_23->setEnName("voucher_detail_list");
        $alipayTradePayApiOutParam_23->setChilds("");
    
    // $alipayTradePayApiOutParam_23Childs[] = new ApiParamModel();

            $alipayTradePayApiOutParam_23_0 = new ApiParamModel();
        $alipayTradePayApiOutParam_23_0->setBaseType($alipayTradePayApiOutParam_23_0::$TYPE_BASETYPE);
        $alipayTradePayApiOutParam_23_0->setTitle("券id");
        $alipayTradePayApiOutParam_23_0->setDesc("");
        $alipayTradePayApiOutParam_23_0->setIsMust(1);
        $alipayTradePayApiOutParam_23_0->setIsListType(false);
        $alipayTradePayApiOutParam_23_0->setFullParamName("voucherDetailList[0].id");
        $alipayTradePayApiOutParam_23_0->setEnName("id");
        $alipayTradePayApiOutParam_23_0->setChilds("");
        $alipayTradePayApiOutParam_23Childs[] = json_decode($alipayTradePayApiOutParam_23_0->getBizContent());

        $alipayTradePayApiOutParam_23_1 = new ApiParamModel();
        $alipayTradePayApiOutParam_23_1->setBaseType($alipayTradePayApiOutParam_23_1::$TYPE_BASETYPE);
        $alipayTradePayApiOutParam_23_1->setTitle("券名称");
        $alipayTradePayApiOutParam_23_1->setDesc("");
        $alipayTradePayApiOutParam_23_1->setIsMust(1);
        $alipayTradePayApiOutParam_23_1->setIsListType(false);
        $alipayTradePayApiOutParam_23_1->setFullParamName("voucherDetailList[0].name");
        $alipayTradePayApiOutParam_23_1->setEnName("name");
        $alipayTradePayApiOutParam_23_1->setChilds("");
        $alipayTradePayApiOutParam_23Childs[] = json_decode($alipayTradePayApiOutParam_23_1->getBizContent());

        $alipayTradePayApiOutParam_23_2 = new ApiParamModel();
        $alipayTradePayApiOutParam_23_2->setBaseType($alipayTradePayApiOutParam_23_2::$TYPE_BASETYPE);
        $alipayTradePayApiOutParam_23_2->setTitle("当前有三种类型：");
        $alipayTradePayApiOutParam_23_2->setDesc(" ALIPAY_FIX_VOUCHER - 全场代金券  ALIPAY_DISCOUNT_VOUCHER - 折扣券  ALIPAY_ITEM_VOUCHER - 单品优惠  注：不排除将来新增其他类型的可能，商家接入时注意兼容性避免硬编码");
        $alipayTradePayApiOutParam_23_2->setIsMust(1);
        $alipayTradePayApiOutParam_23_2->setIsListType(false);
        $alipayTradePayApiOutParam_23_2->setFullParamName("voucherDetailList[0].type");
        $alipayTradePayApiOutParam_23_2->setEnName("type");
        $alipayTradePayApiOutParam_23_2->setChilds("");
        $alipayTradePayApiOutParam_23Childs[] = json_decode($alipayTradePayApiOutParam_23_2->getBizContent());

        $alipayTradePayApiOutParam_23_3 = new ApiParamModel();
        $alipayTradePayApiOutParam_23_3->setBaseType($alipayTradePayApiOutParam_23_3::$TYPE_BASETYPE);
        $alipayTradePayApiOutParam_23_3->setTitle("优惠券面额");
        $alipayTradePayApiOutParam_23_3->setDesc("它应该会等于商家出资加上其他出资方出资");
        $alipayTradePayApiOutParam_23_3->setIsMust(1);
        $alipayTradePayApiOutParam_23_3->setIsListType(false);
        $alipayTradePayApiOutParam_23_3->setFullParamName("voucherDetailList[0].amount");
        $alipayTradePayApiOutParam_23_3->setEnName("amount");
        $alipayTradePayApiOutParam_23_3->setChilds("");
        $alipayTradePayApiOutParam_23Childs[] = json_decode($alipayTradePayApiOutParam_23_3->getBizContent());

        $alipayTradePayApiOutParam_23_4 = new ApiParamModel();
        $alipayTradePayApiOutParam_23_4->setBaseType($alipayTradePayApiOutParam_23_4::$TYPE_BASETYPE);
        $alipayTradePayApiOutParam_23_4->setTitle("商家出资（特指发起交易的商家出资金额）");
        $alipayTradePayApiOutParam_23_4->setDesc("");
        $alipayTradePayApiOutParam_23_4->setIsMust(3);
        $alipayTradePayApiOutParam_23_4->setIsListType(false);
        $alipayTradePayApiOutParam_23_4->setFullParamName("voucherDetailList[0].merchantContribute");
        $alipayTradePayApiOutParam_23_4->setEnName("merchant_contribute");
        $alipayTradePayApiOutParam_23_4->setChilds("");
        $alipayTradePayApiOutParam_23Childs[] = json_decode($alipayTradePayApiOutParam_23_4->getBizContent());

        $alipayTradePayApiOutParam_23_5 = new ApiParamModel();
        $alipayTradePayApiOutParam_23_5->setBaseType($alipayTradePayApiOutParam_23_5::$TYPE_BASETYPE);
        $alipayTradePayApiOutParam_23_5->setTitle("其他出资方出资金额");
        $alipayTradePayApiOutParam_23_5->setDesc("可能是支付宝，可能是品牌商，或者其他方，也可能是他们的一起出资");
        $alipayTradePayApiOutParam_23_5->setIsMust(3);
        $alipayTradePayApiOutParam_23_5->setIsListType(false);
        $alipayTradePayApiOutParam_23_5->setFullParamName("voucherDetailList[0].otherContribute");
        $alipayTradePayApiOutParam_23_5->setEnName("other_contribute");
        $alipayTradePayApiOutParam_23_5->setChilds("");
        $alipayTradePayApiOutParam_23Childs[] = json_decode($alipayTradePayApiOutParam_23_5->getBizContent());

        $alipayTradePayApiOutParam_23_6 = new ApiParamModel();
        $alipayTradePayApiOutParam_23_6->setBaseType($alipayTradePayApiOutParam_23_6::$TYPE_BASETYPE);
        $alipayTradePayApiOutParam_23_6->setTitle("优惠券备注信息");
        $alipayTradePayApiOutParam_23_6->setDesc("");
        $alipayTradePayApiOutParam_23_6->setIsMust(3);
        $alipayTradePayApiOutParam_23_6->setIsListType(false);
        $alipayTradePayApiOutParam_23_6->setFullParamName("voucherDetailList[0].memo");
        $alipayTradePayApiOutParam_23_6->setEnName("memo");
        $alipayTradePayApiOutParam_23_6->setChilds("");
        $alipayTradePayApiOutParam_23Childs[] = json_decode($alipayTradePayApiOutParam_23_6->getBizContent());

        $alipayTradePayApiOutParam_23_7 = new ApiParamModel();
        $alipayTradePayApiOutParam_23_7->setBaseType($alipayTradePayApiOutParam_23_7::$TYPE_BASETYPE);
        $alipayTradePayApiOutParam_23_7->setTitle("券模板id");
        $alipayTradePayApiOutParam_23_7->setDesc("");
        $alipayTradePayApiOutParam_23_7->setIsMust(3);
        $alipayTradePayApiOutParam_23_7->setIsListType(false);
        $alipayTradePayApiOutParam_23_7->setFullParamName("voucherDetailList[0].templateId");
        $alipayTradePayApiOutParam_23_7->setEnName("template_id");
        $alipayTradePayApiOutParam_23_7->setChilds("");
        $alipayTradePayApiOutParam_23Childs[] = json_decode($alipayTradePayApiOutParam_23_7->getBizContent());

        $alipayTradePayApiOutParam_23_8 = new ApiParamModel();
        $alipayTradePayApiOutParam_23_8->setBaseType($alipayTradePayApiOutParam_23_8::$TYPE_COMPLEXTYPE);
        $alipayTradePayApiOutParam_23_8->setTitle("优惠券的其他出资方明细");
        $alipayTradePayApiOutParam_23_8->setDesc("");
        $alipayTradePayApiOutParam_23_8->setIsMust(3);
        $alipayTradePayApiOutParam_23_8->setIsListType(true);
        $alipayTradePayApiOutParam_23_8->setFullParamName("voucherDetailList[0].otherContributeDetail[0]");
        $alipayTradePayApiOutParam_23_8->setEnName("other_contribute_detail");
        $alipayTradePayApiOutParam_23_8->setChilds("");
    
    // $alipayTradePayApiOutParam_23_8Childs[] = new ApiParamModel();

            $alipayTradePayApiOutParam_23_8_0 = new ApiParamModel();
        $alipayTradePayApiOutParam_23_8_0->setBaseType($alipayTradePayApiOutParam_23_8_0::$TYPE_BASETYPE);
        $alipayTradePayApiOutParam_23_8_0->setTitle("出资方类型");
        $alipayTradePayApiOutParam_23_8_0->setDesc("如品牌商出资、支付宝平台出资等");
        $alipayTradePayApiOutParam_23_8_0->setIsMust(1);
        $alipayTradePayApiOutParam_23_8_0->setIsListType(false);
        $alipayTradePayApiOutParam_23_8_0->setFullParamName("voucherDetailList[0].otherContributeDetail[0].contributeType");
        $alipayTradePayApiOutParam_23_8_0->setEnName("contribute_type");
        $alipayTradePayApiOutParam_23_8_0->setChilds("");
        $alipayTradePayApiOutParam_23_8Childs[] = json_decode($alipayTradePayApiOutParam_23_8_0->getBizContent());

        $alipayTradePayApiOutParam_23_8_1 = new ApiParamModel();
        $alipayTradePayApiOutParam_23_8_1->setBaseType($alipayTradePayApiOutParam_23_8_1::$TYPE_BASETYPE);
        $alipayTradePayApiOutParam_23_8_1->setTitle("出资方金额");
        $alipayTradePayApiOutParam_23_8_1->setDesc("");
        $alipayTradePayApiOutParam_23_8_1->setIsMust(1);
        $alipayTradePayApiOutParam_23_8_1->setIsListType(false);
        $alipayTradePayApiOutParam_23_8_1->setFullParamName("voucherDetailList[0].otherContributeDetail[0].contributeAmount");
        $alipayTradePayApiOutParam_23_8_1->setEnName("contribute_amount");
        $alipayTradePayApiOutParam_23_8_1->setChilds("");
        $alipayTradePayApiOutParam_23_8Childs[] = json_decode($alipayTradePayApiOutParam_23_8_1->getBizContent());

            $alipayTradePayApiOutParam_23_8->setChilds($alipayTradePayApiOutParam_23_8Childs);

        $alipayTradePayApiOutParam_23Childs[] = json_decode($alipayTradePayApiOutParam_23_8->getBizContent());

        $alipayTradePayApiOutParam_23_9 = new ApiParamModel();
        $alipayTradePayApiOutParam_23_9->setBaseType($alipayTradePayApiOutParam_23_9::$TYPE_BASETYPE);
        $alipayTradePayApiOutParam_23_9->setTitle("如果使用的这张券是用户购买的");
        $alipayTradePayApiOutParam_23_9->setDesc("则该字段代表用户在购买这张券时用户实际付款的金额");
        $alipayTradePayApiOutParam_23_9->setIsMust(3);
        $alipayTradePayApiOutParam_23_9->setIsListType(false);
        $alipayTradePayApiOutParam_23_9->setFullParamName("voucherDetailList[0].purchaseBuyerContribute");
        $alipayTradePayApiOutParam_23_9->setEnName("purchase_buyer_contribute");
        $alipayTradePayApiOutParam_23_9->setChilds("");
        $alipayTradePayApiOutParam_23Childs[] = json_decode($alipayTradePayApiOutParam_23_9->getBizContent());

        $alipayTradePayApiOutParam_23_10 = new ApiParamModel();
        $alipayTradePayApiOutParam_23_10->setBaseType($alipayTradePayApiOutParam_23_10::$TYPE_BASETYPE);
        $alipayTradePayApiOutParam_23_10->setTitle("如果使用的这张券是用户购买的");
        $alipayTradePayApiOutParam_23_10->setDesc("则该字段代表用户在购买这张券时商户优惠的金额");
        $alipayTradePayApiOutParam_23_10->setIsMust(3);
        $alipayTradePayApiOutParam_23_10->setIsListType(false);
        $alipayTradePayApiOutParam_23_10->setFullParamName("voucherDetailList[0].purchaseMerchantContribute");
        $alipayTradePayApiOutParam_23_10->setEnName("purchase_merchant_contribute");
        $alipayTradePayApiOutParam_23_10->setChilds("");
        $alipayTradePayApiOutParam_23Childs[] = json_decode($alipayTradePayApiOutParam_23_10->getBizContent());

        $alipayTradePayApiOutParam_23_11 = new ApiParamModel();
        $alipayTradePayApiOutParam_23_11->setBaseType($alipayTradePayApiOutParam_23_11::$TYPE_BASETYPE);
        $alipayTradePayApiOutParam_23_11->setTitle("如果使用的这张券是用户购买的");
        $alipayTradePayApiOutParam_23_11->setDesc("则该字段代表用户在购买这张券时平台优惠的金额");
        $alipayTradePayApiOutParam_23_11->setIsMust(3);
        $alipayTradePayApiOutParam_23_11->setIsListType(false);
        $alipayTradePayApiOutParam_23_11->setFullParamName("voucherDetailList[0].purchaseAntContribute");
        $alipayTradePayApiOutParam_23_11->setEnName("purchase_ant_contribute");
        $alipayTradePayApiOutParam_23_11->setChilds("");
        $alipayTradePayApiOutParam_23Childs[] = json_decode($alipayTradePayApiOutParam_23_11->getBizContent());

            $alipayTradePayApiOutParam_23->setChilds($alipayTradePayApiOutParam_23Childs);

        $alipayTradePayApiOutParamChilds[] = json_decode($alipayTradePayApiOutParam_23->getBizContent());

        $alipayTradePayApiOutParam_24 = new ApiParamModel();
        $alipayTradePayApiOutParam_24->setBaseType($alipayTradePayApiOutParam_24::$TYPE_BASETYPE);
        $alipayTradePayApiOutParam_24->setTitle("预授权支付模式");
        $alipayTradePayApiOutParam_24->setDesc("该参数仅在信用预授权支付场景下返回。信用预授权支付：CREDIT_PREAUTH_PAY");
        $alipayTradePayApiOutParam_24->setIsMust(2);
        $alipayTradePayApiOutParam_24->setIsListType(false);
        $alipayTradePayApiOutParam_24->setFullParamName("authTradePayMode");
        $alipayTradePayApiOutParam_24->setEnName("auth_trade_pay_mode");
        $alipayTradePayApiOutParam_24->setChilds("");
        $alipayTradePayApiOutParamChilds[] = json_decode($alipayTradePayApiOutParam_24->getBizContent());

        $alipayTradePayApiOutParam_25 = new ApiParamModel();
        $alipayTradePayApiOutParam_25->setBaseType($alipayTradePayApiOutParam_25::$TYPE_BASETYPE);
        $alipayTradePayApiOutParam_25->setTitle("商户传入业务信息");
        $alipayTradePayApiOutParam_25->setDesc("具体值要和支付宝约定  将商户传入信息分发给相应系统，应用于安全，营销等参数直传场景  格式为json格式");
        $alipayTradePayApiOutParam_25->setIsMust(2);
        $alipayTradePayApiOutParam_25->setIsListType(false);
        $alipayTradePayApiOutParam_25->setFullParamName("businessParams");
        $alipayTradePayApiOutParam_25->setEnName("business_params");
        $alipayTradePayApiOutParam_25->setChilds("");
        $alipayTradePayApiOutParamChilds[] = json_decode($alipayTradePayApiOutParam_25->getBizContent());

        $alipayTradePayApiOutParam_26 = new ApiParamModel();
        $alipayTradePayApiOutParam_26->setBaseType($alipayTradePayApiOutParam_26::$TYPE_BASETYPE);
        $alipayTradePayApiOutParam_26->setTitle("买家用户类型");
        $alipayTradePayApiOutParam_26->setDesc("CORPORATE:企业用户；PRIVATE:个人用户。");
        $alipayTradePayApiOutParam_26->setIsMust(2);
        $alipayTradePayApiOutParam_26->setIsListType(false);
        $alipayTradePayApiOutParam_26->setFullParamName("buyerUserType");
        $alipayTradePayApiOutParam_26->setEnName("buyer_user_type");
        $alipayTradePayApiOutParam_26->setChilds("");
        $alipayTradePayApiOutParamChilds[] = json_decode($alipayTradePayApiOutParam_26->getBizContent());

        $alipayTradePayApiOutParam_27 = new ApiParamModel();
        $alipayTradePayApiOutParam_27->setBaseType($alipayTradePayApiOutParam_27::$TYPE_BASETYPE);
        $alipayTradePayApiOutParam_27->setTitle("商家优惠金额");
        $alipayTradePayApiOutParam_27->setDesc("");
        $alipayTradePayApiOutParam_27->setIsMust(2);
        $alipayTradePayApiOutParam_27->setIsListType(false);
        $alipayTradePayApiOutParam_27->setFullParamName("mdiscountAmount");
        $alipayTradePayApiOutParam_27->setEnName("mdiscount_amount");
        $alipayTradePayApiOutParam_27->setChilds("");
        $alipayTradePayApiOutParamChilds[] = json_decode($alipayTradePayApiOutParam_27->getBizContent());

        $alipayTradePayApiOutParam_28 = new ApiParamModel();
        $alipayTradePayApiOutParam_28->setBaseType($alipayTradePayApiOutParam_28::$TYPE_BASETYPE);
        $alipayTradePayApiOutParam_28->setTitle("平台优惠金额");
        $alipayTradePayApiOutParam_28->setDesc("");
        $alipayTradePayApiOutParam_28->setIsMust(2);
        $alipayTradePayApiOutParam_28->setIsListType(false);
        $alipayTradePayApiOutParam_28->setFullParamName("discountAmount");
        $alipayTradePayApiOutParam_28->setEnName("discount_amount");
        $alipayTradePayApiOutParam_28->setChilds("");
        $alipayTradePayApiOutParamChilds[] = json_decode($alipayTradePayApiOutParam_28->getBizContent());

        $alipayTradePayInfoModel->setApiOutParam($alipayTradePayApiOutParamChilds);

        $list[] = json_decode($alipayTradePayInfoModel->getBizContent());
        $alipayTradeCreateInfoModel = new ApiInfoModel();
        
        $alipayTradeCreateInfoModel->setApiName("alipay.trade.create");
        $alipayTradeCreateInfoModel->setApiZhName("统一收单交易创建接口");
        $alipayTradeCreateInfoModel->setInvokeType($alipayTradeCreateInfoModel::$INVOKE_TYPE_REQUEST);
            // $alipayTradeCreateApiInParamChilds[] = new ApiParamModel();
            $alipayTradeCreateApiInParam_0 = new ApiParamModel();
        $alipayTradeCreateApiInParam_0->setBaseType($alipayTradeCreateApiInParam_0::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_0->setTitle("商户订单号");
        $alipayTradeCreateApiInParam_0->setDesc("64个字符以内、只能包含字母、数字、下划线；需保证在商户端不重复");
        $alipayTradeCreateApiInParam_0->setIsMust(1);
        $alipayTradeCreateApiInParam_0->setIsListType(false);
        $alipayTradeCreateApiInParam_0->setFullParamName("outTradeNo");
        $alipayTradeCreateApiInParam_0->setEnName("out_trade_no");
        $alipayTradeCreateApiInParam_0->setChilds("");
        $alipayTradeCreateApiInParamChilds[] = json_decode($alipayTradeCreateApiInParam_0->getBizContent());

        $alipayTradeCreateApiInParam_2 = new ApiParamModel();
        $alipayTradeCreateApiInParam_2->setBaseType($alipayTradeCreateApiInParam_2::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_2->setTitle("订单总金额");
        $alipayTradeCreateApiInParam_2->setDesc("单位为元，精确到小数点后两位，取值范围[0.01,100000000]  如果同时传入了【打折金额】，【不可打折金额】，【订单总金额】三者，则必须满足如下条件：【订单总金额】=【打折金额】+【不可打折金额】");
        $alipayTradeCreateApiInParam_2->setIsMust(1);
        $alipayTradeCreateApiInParam_2->setIsListType(false);
        $alipayTradeCreateApiInParam_2->setFullParamName("totalAmount");
        $alipayTradeCreateApiInParam_2->setEnName("total_amount");
        $alipayTradeCreateApiInParam_2->setChilds("");
        $alipayTradeCreateApiInParamChilds[] = json_decode($alipayTradeCreateApiInParam_2->getBizContent());

        $alipayTradeCreateApiInParam_6 = new ApiParamModel();
        $alipayTradeCreateApiInParam_6->setBaseType($alipayTradeCreateApiInParam_6::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_6->setTitle("订单标题");
        $alipayTradeCreateApiInParam_6->setDesc("");
        $alipayTradeCreateApiInParam_6->setIsMust(1);
        $alipayTradeCreateApiInParam_6->setIsListType(false);
        $alipayTradeCreateApiInParam_6->setFullParamName("subject");
        $alipayTradeCreateApiInParam_6->setEnName("subject");
        $alipayTradeCreateApiInParam_6->setChilds("");
        $alipayTradeCreateApiInParamChilds[] = json_decode($alipayTradeCreateApiInParam_6->getBizContent());

        $alipayTradeCreateApiInParam_1 = new ApiParamModel();
        $alipayTradeCreateApiInParam_1->setBaseType($alipayTradeCreateApiInParam_1::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_1->setTitle("卖家支付宝用户ID");
        $alipayTradeCreateApiInParam_1->setDesc("  如果该值为空，则默认为商户签约账号对应的支付宝用户ID");
        $alipayTradeCreateApiInParam_1->setIsMust(3);
        $alipayTradeCreateApiInParam_1->setIsListType(false);
        $alipayTradeCreateApiInParam_1->setFullParamName("sellerId");
        $alipayTradeCreateApiInParam_1->setEnName("seller_id");
        $alipayTradeCreateApiInParam_1->setChilds("");
        $alipayTradeCreateApiInParamChilds[] = json_decode($alipayTradeCreateApiInParam_1->getBizContent());

        $alipayTradeCreateApiInParam_3 = new ApiParamModel();
        $alipayTradeCreateApiInParam_3->setBaseType($alipayTradeCreateApiInParam_3::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_3->setTitle("可打折金额");
        $alipayTradeCreateApiInParam_3->setDesc("  参与优惠计算的金额，单位为元，精确到小数点后两位，取值范围[0.01,100000000]  如果该值未传入，但传入了【订单总金额】，【不可打折金额】则该值默认为【订单总金额】-【不可打折金额】");
        $alipayTradeCreateApiInParam_3->setIsMust(3);
        $alipayTradeCreateApiInParam_3->setIsListType(false);
        $alipayTradeCreateApiInParam_3->setFullParamName("discountableAmount");
        $alipayTradeCreateApiInParam_3->setEnName("discountable_amount");
        $alipayTradeCreateApiInParam_3->setChilds("");
        $alipayTradeCreateApiInParamChilds[] = json_decode($alipayTradeCreateApiInParam_3->getBizContent());

        $alipayTradeCreateApiInParam_4 = new ApiParamModel();
        $alipayTradeCreateApiInParam_4->setBaseType($alipayTradeCreateApiInParam_4::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_4->setTitle("不可打折金额");
        $alipayTradeCreateApiInParam_4->setDesc("  不参与优惠计算的金额，单位为元，精确到小数点后两位，取值范围[0.01,100000000]  如果该值未传入，但传入了【订单总金额】,【打折金额】，则该值默认为【订单总金额】-【打折金额】");
        $alipayTradeCreateApiInParam_4->setIsMust(3);
        $alipayTradeCreateApiInParam_4->setIsListType(false);
        $alipayTradeCreateApiInParam_4->setFullParamName("undiscountableAmount");
        $alipayTradeCreateApiInParam_4->setEnName("undiscountable_amount");
        $alipayTradeCreateApiInParam_4->setChilds("");
        $alipayTradeCreateApiInParamChilds[] = json_decode($alipayTradeCreateApiInParam_4->getBizContent());

        $alipayTradeCreateApiInParam_7 = new ApiParamModel();
        $alipayTradeCreateApiInParam_7->setBaseType($alipayTradeCreateApiInParam_7::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_7->setTitle("对交易或商品的描述");
        $alipayTradeCreateApiInParam_7->setDesc("");
        $alipayTradeCreateApiInParam_7->setIsMust(3);
        $alipayTradeCreateApiInParam_7->setIsListType(false);
        $alipayTradeCreateApiInParam_7->setFullParamName("body");
        $alipayTradeCreateApiInParam_7->setEnName("body");
        $alipayTradeCreateApiInParam_7->setChilds("");
        $alipayTradeCreateApiInParamChilds[] = json_decode($alipayTradeCreateApiInParam_7->getBizContent());

        $alipayTradeCreateApiInParam_9 = new ApiParamModel();
        $alipayTradeCreateApiInParam_9->setBaseType($alipayTradeCreateApiInParam_9::$TYPE_COMPLEXTYPE);
        $alipayTradeCreateApiInParam_9->setTitle("订单包含的商品列表信息");
        $alipayTradeCreateApiInParam_9->setDesc("json格式，其它说明详见：“商品明细说明”");
        $alipayTradeCreateApiInParam_9->setIsMust(3);
        $alipayTradeCreateApiInParam_9->setIsListType(true);
        $alipayTradeCreateApiInParam_9->setFullParamName("goodsDetail[0]");
        $alipayTradeCreateApiInParam_9->setEnName("goods_detail");
        $alipayTradeCreateApiInParam_9->setChilds("");
    
    // $alipayTradeCreateApiInParam_9Childs[] = new ApiParamModel();

            $alipayTradeCreateApiInParam_9_0 = new ApiParamModel();
        $alipayTradeCreateApiInParam_9_0->setBaseType($alipayTradeCreateApiInParam_9_0::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_9_0->setTitle("商品的编号");
        $alipayTradeCreateApiInParam_9_0->setDesc("");
        $alipayTradeCreateApiInParam_9_0->setIsMust(1);
        $alipayTradeCreateApiInParam_9_0->setIsListType(false);
        $alipayTradeCreateApiInParam_9_0->setFullParamName("goodsDetail[0].goodsId");
        $alipayTradeCreateApiInParam_9_0->setEnName("goods_id");
        $alipayTradeCreateApiInParam_9_0->setChilds("");
        $alipayTradeCreateApiInParam_9Childs[] = json_decode($alipayTradeCreateApiInParam_9_0->getBizContent());

        $alipayTradeCreateApiInParam_9_2 = new ApiParamModel();
        $alipayTradeCreateApiInParam_9_2->setBaseType($alipayTradeCreateApiInParam_9_2::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_9_2->setTitle("商品名称");
        $alipayTradeCreateApiInParam_9_2->setDesc("");
        $alipayTradeCreateApiInParam_9_2->setIsMust(1);
        $alipayTradeCreateApiInParam_9_2->setIsListType(false);
        $alipayTradeCreateApiInParam_9_2->setFullParamName("goodsDetail[0].goodsName");
        $alipayTradeCreateApiInParam_9_2->setEnName("goods_name");
        $alipayTradeCreateApiInParam_9_2->setChilds("");
        $alipayTradeCreateApiInParam_9Childs[] = json_decode($alipayTradeCreateApiInParam_9_2->getBizContent());

        $alipayTradeCreateApiInParam_9_3 = new ApiParamModel();
        $alipayTradeCreateApiInParam_9_3->setBaseType($alipayTradeCreateApiInParam_9_3::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_9_3->setTitle("商品数量");
        $alipayTradeCreateApiInParam_9_3->setDesc("");
        $alipayTradeCreateApiInParam_9_3->setIsMust(1);
        $alipayTradeCreateApiInParam_9_3->setIsListType(false);
        $alipayTradeCreateApiInParam_9_3->setFullParamName("goodsDetail[0].quantity");
        $alipayTradeCreateApiInParam_9_3->setEnName("quantity");
        $alipayTradeCreateApiInParam_9_3->setChilds("");
        $alipayTradeCreateApiInParam_9Childs[] = json_decode($alipayTradeCreateApiInParam_9_3->getBizContent());

        $alipayTradeCreateApiInParam_9_4 = new ApiParamModel();
        $alipayTradeCreateApiInParam_9_4->setBaseType($alipayTradeCreateApiInParam_9_4::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_9_4->setTitle("商品单价");
        $alipayTradeCreateApiInParam_9_4->setDesc("单位为元");
        $alipayTradeCreateApiInParam_9_4->setIsMust(1);
        $alipayTradeCreateApiInParam_9_4->setIsListType(false);
        $alipayTradeCreateApiInParam_9_4->setFullParamName("goodsDetail[0].price");
        $alipayTradeCreateApiInParam_9_4->setEnName("price");
        $alipayTradeCreateApiInParam_9_4->setChilds("");
        $alipayTradeCreateApiInParam_9Childs[] = json_decode($alipayTradeCreateApiInParam_9_4->getBizContent());

        $alipayTradeCreateApiInParam_9_1 = new ApiParamModel();
        $alipayTradeCreateApiInParam_9_1->setBaseType($alipayTradeCreateApiInParam_9_1::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_9_1->setTitle("支付宝定义的统一商品编号");
        $alipayTradeCreateApiInParam_9_1->setDesc("");
        $alipayTradeCreateApiInParam_9_1->setIsMust(3);
        $alipayTradeCreateApiInParam_9_1->setIsListType(false);
        $alipayTradeCreateApiInParam_9_1->setFullParamName("goodsDetail[0].alipayGoodsId");
        $alipayTradeCreateApiInParam_9_1->setEnName("alipay_goods_id");
        $alipayTradeCreateApiInParam_9_1->setChilds("");
        $alipayTradeCreateApiInParam_9Childs[] = json_decode($alipayTradeCreateApiInParam_9_1->getBizContent());

        $alipayTradeCreateApiInParam_9_5 = new ApiParamModel();
        $alipayTradeCreateApiInParam_9_5->setBaseType($alipayTradeCreateApiInParam_9_5::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_9_5->setTitle("商品类目");
        $alipayTradeCreateApiInParam_9_5->setDesc("");
        $alipayTradeCreateApiInParam_9_5->setIsMust(3);
        $alipayTradeCreateApiInParam_9_5->setIsListType(false);
        $alipayTradeCreateApiInParam_9_5->setFullParamName("goodsDetail[0].goodsCategory");
        $alipayTradeCreateApiInParam_9_5->setEnName("goods_category");
        $alipayTradeCreateApiInParam_9_5->setChilds("");
        $alipayTradeCreateApiInParam_9Childs[] = json_decode($alipayTradeCreateApiInParam_9_5->getBizContent());

        $alipayTradeCreateApiInParam_9_6 = new ApiParamModel();
        $alipayTradeCreateApiInParam_9_6->setBaseType($alipayTradeCreateApiInParam_9_6::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_9_6->setTitle("商品描述信息");
        $alipayTradeCreateApiInParam_9_6->setDesc("");
        $alipayTradeCreateApiInParam_9_6->setIsMust(3);
        $alipayTradeCreateApiInParam_9_6->setIsListType(false);
        $alipayTradeCreateApiInParam_9_6->setFullParamName("goodsDetail[0].body");
        $alipayTradeCreateApiInParam_9_6->setEnName("body");
        $alipayTradeCreateApiInParam_9_6->setChilds("");
        $alipayTradeCreateApiInParam_9Childs[] = json_decode($alipayTradeCreateApiInParam_9_6->getBizContent());

        $alipayTradeCreateApiInParam_9_7 = new ApiParamModel();
        $alipayTradeCreateApiInParam_9_7->setBaseType($alipayTradeCreateApiInParam_9_7::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_9_7->setTitle("商品的展示地址");
        $alipayTradeCreateApiInParam_9_7->setDesc("");
        $alipayTradeCreateApiInParam_9_7->setIsMust(3);
        $alipayTradeCreateApiInParam_9_7->setIsListType(false);
        $alipayTradeCreateApiInParam_9_7->setFullParamName("goodsDetail[0].showUrl");
        $alipayTradeCreateApiInParam_9_7->setEnName("show_url");
        $alipayTradeCreateApiInParam_9_7->setChilds("");
        $alipayTradeCreateApiInParam_9Childs[] = json_decode($alipayTradeCreateApiInParam_9_7->getBizContent());

            $alipayTradeCreateApiInParam_9->setChilds($alipayTradeCreateApiInParam_9Childs);

        $alipayTradeCreateApiInParamChilds[] = json_decode($alipayTradeCreateApiInParam_9->getBizContent());

        $alipayTradeCreateApiInParam_10 = new ApiParamModel();
        $alipayTradeCreateApiInParam_10->setBaseType($alipayTradeCreateApiInParam_10::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_10->setTitle("商户操作员编号");
        $alipayTradeCreateApiInParam_10->setDesc("");
        $alipayTradeCreateApiInParam_10->setIsMust(3);
        $alipayTradeCreateApiInParam_10->setIsListType(false);
        $alipayTradeCreateApiInParam_10->setFullParamName("operatorId");
        $alipayTradeCreateApiInParam_10->setEnName("operator_id");
        $alipayTradeCreateApiInParam_10->setChilds("");
        $alipayTradeCreateApiInParamChilds[] = json_decode($alipayTradeCreateApiInParam_10->getBizContent());

        $alipayTradeCreateApiInParam_11 = new ApiParamModel();
        $alipayTradeCreateApiInParam_11->setBaseType($alipayTradeCreateApiInParam_11::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_11->setTitle("可用渠道");
        $alipayTradeCreateApiInParam_11->setDesc("用户只能在指定渠道范围内支付，多个渠道以逗号分割  注，与disable_pay_channels互斥  渠道列表：https://docs.open.alipay.com/common/wifww7");
        $alipayTradeCreateApiInParam_11->setIsMust(3);
        $alipayTradeCreateApiInParam_11->setIsListType(false);
        $alipayTradeCreateApiInParam_11->setFullParamName("enablePayChannels");
        $alipayTradeCreateApiInParam_11->setEnName("enable_pay_channels");
        $alipayTradeCreateApiInParam_11->setChilds("");
        $alipayTradeCreateApiInParamChilds[] = json_decode($alipayTradeCreateApiInParam_11->getBizContent());

        $alipayTradeCreateApiInParam_12 = new ApiParamModel();
        $alipayTradeCreateApiInParam_12->setBaseType($alipayTradeCreateApiInParam_12::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_12->setTitle("商户门店编号");
        $alipayTradeCreateApiInParam_12->setDesc("");
        $alipayTradeCreateApiInParam_12->setIsMust(3);
        $alipayTradeCreateApiInParam_12->setIsListType(false);
        $alipayTradeCreateApiInParam_12->setFullParamName("storeId");
        $alipayTradeCreateApiInParam_12->setEnName("store_id");
        $alipayTradeCreateApiInParam_12->setChilds("");
        $alipayTradeCreateApiInParamChilds[] = json_decode($alipayTradeCreateApiInParam_12->getBizContent());

        $alipayTradeCreateApiInParam_13 = new ApiParamModel();
        $alipayTradeCreateApiInParam_13->setBaseType($alipayTradeCreateApiInParam_13::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_13->setTitle("禁用渠道");
        $alipayTradeCreateApiInParam_13->setDesc("用户不可用指定渠道支付，多个渠道以逗号分割  注，与enable_pay_channels互斥  <a href=\"https://docs.open.alipay.com/common/wifww7\">渠道列表</a>");
        $alipayTradeCreateApiInParam_13->setIsMust(3);
        $alipayTradeCreateApiInParam_13->setIsListType(false);
        $alipayTradeCreateApiInParam_13->setFullParamName("disablePayChannels");
        $alipayTradeCreateApiInParam_13->setEnName("disable_pay_channels");
        $alipayTradeCreateApiInParam_13->setChilds("");
        $alipayTradeCreateApiInParamChilds[] = json_decode($alipayTradeCreateApiInParam_13->getBizContent());

        $alipayTradeCreateApiInParam_14 = new ApiParamModel();
        $alipayTradeCreateApiInParam_14->setBaseType($alipayTradeCreateApiInParam_14::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_14->setTitle("商户机具终端编号");
        $alipayTradeCreateApiInParam_14->setDesc("");
        $alipayTradeCreateApiInParam_14->setIsMust(3);
        $alipayTradeCreateApiInParam_14->setIsListType(false);
        $alipayTradeCreateApiInParam_14->setFullParamName("terminalId");
        $alipayTradeCreateApiInParam_14->setEnName("terminal_id");
        $alipayTradeCreateApiInParam_14->setChilds("");
        $alipayTradeCreateApiInParamChilds[] = json_decode($alipayTradeCreateApiInParam_14->getBizContent());

        $alipayTradeCreateApiInParam_15 = new ApiParamModel();
        $alipayTradeCreateApiInParam_15->setBaseType($alipayTradeCreateApiInParam_15::$TYPE_COMPLEXTYPE);
        $alipayTradeCreateApiInParam_15->setTitle("业务扩展参数");
        $alipayTradeCreateApiInParam_15->setDesc("");
        $alipayTradeCreateApiInParam_15->setIsMust(3);
        $alipayTradeCreateApiInParam_15->setIsListType(false);
        $alipayTradeCreateApiInParam_15->setFullParamName("extendParams");
        $alipayTradeCreateApiInParam_15->setEnName("extend_params");
        $alipayTradeCreateApiInParam_15->setChilds("");
    
    // $alipayTradeCreateApiInParam_15Childs[] = new ApiParamModel();

            $alipayTradeCreateApiInParam_15_0 = new ApiParamModel();
        $alipayTradeCreateApiInParam_15_0->setBaseType($alipayTradeCreateApiInParam_15_0::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_15_0->setTitle("系统商编号");
        $alipayTradeCreateApiInParam_15_0->setDesc(" 该参数作为系统商返佣数据提取的依据，请填写系统商签约协议的PID");
        $alipayTradeCreateApiInParam_15_0->setIsMust(3);
        $alipayTradeCreateApiInParam_15_0->setIsListType(false);
        $alipayTradeCreateApiInParam_15_0->setFullParamName("extendParams.sysServiceProviderId");
        $alipayTradeCreateApiInParam_15_0->setEnName("sys_service_provider_id");
        $alipayTradeCreateApiInParam_15_0->setChilds("");
        $alipayTradeCreateApiInParam_15Childs[] = json_decode($alipayTradeCreateApiInParam_15_0->getBizContent());

        $alipayTradeCreateApiInParam_15_1 = new ApiParamModel();
        $alipayTradeCreateApiInParam_15_1->setBaseType($alipayTradeCreateApiInParam_15_1::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_15_1->setTitle("使用花呗分期要进行的分期数");
        $alipayTradeCreateApiInParam_15_1->setDesc("");
        $alipayTradeCreateApiInParam_15_1->setIsMust(3);
        $alipayTradeCreateApiInParam_15_1->setIsListType(false);
        $alipayTradeCreateApiInParam_15_1->setFullParamName("extendParams.hbFqNum");
        $alipayTradeCreateApiInParam_15_1->setEnName("hb_fq_num");
        $alipayTradeCreateApiInParam_15_1->setChilds("");
        $alipayTradeCreateApiInParam_15Childs[] = json_decode($alipayTradeCreateApiInParam_15_1->getBizContent());

        $alipayTradeCreateApiInParam_15_2 = new ApiParamModel();
        $alipayTradeCreateApiInParam_15_2->setBaseType($alipayTradeCreateApiInParam_15_2::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_15_2->setTitle("使用花呗分期需要卖家承担的手续费比例的百分值");
        $alipayTradeCreateApiInParam_15_2->setDesc("传入100代表100%");
        $alipayTradeCreateApiInParam_15_2->setIsMust(3);
        $alipayTradeCreateApiInParam_15_2->setIsListType(false);
        $alipayTradeCreateApiInParam_15_2->setFullParamName("extendParams.hbFqSellerPercent");
        $alipayTradeCreateApiInParam_15_2->setEnName("hb_fq_seller_percent");
        $alipayTradeCreateApiInParam_15_2->setChilds("");
        $alipayTradeCreateApiInParam_15Childs[] = json_decode($alipayTradeCreateApiInParam_15_2->getBizContent());

        $alipayTradeCreateApiInParam_15_3 = new ApiParamModel();
        $alipayTradeCreateApiInParam_15_3->setBaseType($alipayTradeCreateApiInParam_15_3::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_15_3->setTitle("行业数据回流信息");
        $alipayTradeCreateApiInParam_15_3->setDesc(" 详见：地铁支付接口参数补充说明");
        $alipayTradeCreateApiInParam_15_3->setIsMust(3);
        $alipayTradeCreateApiInParam_15_3->setIsListType(false);
        $alipayTradeCreateApiInParam_15_3->setFullParamName("extendParams.industryRefluxInfo");
        $alipayTradeCreateApiInParam_15_3->setEnName("industry_reflux_info");
        $alipayTradeCreateApiInParam_15_3->setChilds("");
        $alipayTradeCreateApiInParam_15Childs[] = json_decode($alipayTradeCreateApiInParam_15_3->getBizContent());

        $alipayTradeCreateApiInParam_15_4 = new ApiParamModel();
        $alipayTradeCreateApiInParam_15_4->setBaseType($alipayTradeCreateApiInParam_15_4::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_15_4->setTitle("卡类型");
        $alipayTradeCreateApiInParam_15_4->setDesc("");
        $alipayTradeCreateApiInParam_15_4->setIsMust(3);
        $alipayTradeCreateApiInParam_15_4->setIsListType(false);
        $alipayTradeCreateApiInParam_15_4->setFullParamName("extendParams.cardType");
        $alipayTradeCreateApiInParam_15_4->setEnName("card_type");
        $alipayTradeCreateApiInParam_15_4->setChilds("");
        $alipayTradeCreateApiInParam_15Childs[] = json_decode($alipayTradeCreateApiInParam_15_4->getBizContent());

            $alipayTradeCreateApiInParam_15->setChilds($alipayTradeCreateApiInParam_15Childs);

        $alipayTradeCreateApiInParamChilds[] = json_decode($alipayTradeCreateApiInParam_15->getBizContent());

        $alipayTradeCreateApiInParam_16 = new ApiParamModel();
        $alipayTradeCreateApiInParam_16->setBaseType($alipayTradeCreateApiInParam_16::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_16->setTitle("该笔订单允许的最晚付款时间");
        $alipayTradeCreateApiInParam_16->setDesc("逾期将关闭交易。取值范围：1m～15d。m-分钟，h-小时，d-天，1c-当天（1c-当天的情况下，无论交易何时创建，都在0点关闭）。 该参数数值不接受小数点， 如 1.5h，可转换为 90m。");
        $alipayTradeCreateApiInParam_16->setIsMust(3);
        $alipayTradeCreateApiInParam_16->setIsListType(false);
        $alipayTradeCreateApiInParam_16->setFullParamName("timeoutExpress");
        $alipayTradeCreateApiInParam_16->setEnName("timeout_express");
        $alipayTradeCreateApiInParam_16->setChilds("");
        $alipayTradeCreateApiInParamChilds[] = json_decode($alipayTradeCreateApiInParam_16->getBizContent());

        $alipayTradeCreateApiInParam_17 = new ApiParamModel();
        $alipayTradeCreateApiInParam_17->setBaseType($alipayTradeCreateApiInParam_17::$TYPE_COMPLEXTYPE);
        $alipayTradeCreateApiInParam_17->setTitle("描述分账信息");
        $alipayTradeCreateApiInParam_17->setDesc("json格式。");
        $alipayTradeCreateApiInParam_17->setIsMust(3);
        $alipayTradeCreateApiInParam_17->setIsListType(false);
        $alipayTradeCreateApiInParam_17->setFullParamName("royaltyInfo");
        $alipayTradeCreateApiInParam_17->setEnName("royalty_info");
        $alipayTradeCreateApiInParam_17->setChilds("");
    
    // $alipayTradeCreateApiInParam_17Childs[] = new ApiParamModel();

            $alipayTradeCreateApiInParam_17_1 = new ApiParamModel();
        $alipayTradeCreateApiInParam_17_1->setBaseType($alipayTradeCreateApiInParam_17_1::$TYPE_COMPLEXTYPE);
        $alipayTradeCreateApiInParam_17_1->setTitle("分账明细的信息");
        $alipayTradeCreateApiInParam_17_1->setDesc("可以描述多条分账指令，json数组。");
        $alipayTradeCreateApiInParam_17_1->setIsMust(1);
        $alipayTradeCreateApiInParam_17_1->setIsListType(true);
        $alipayTradeCreateApiInParam_17_1->setFullParamName("royaltyInfo.royaltyDetailInfos[0]");
        $alipayTradeCreateApiInParam_17_1->setEnName("royalty_detail_infos");
        $alipayTradeCreateApiInParam_17_1->setChilds("");
    
    // $alipayTradeCreateApiInParam_17_1Childs[] = new ApiParamModel();

            $alipayTradeCreateApiInParam_17_1_2 = new ApiParamModel();
        $alipayTradeCreateApiInParam_17_1_2->setBaseType($alipayTradeCreateApiInParam_17_1_2::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_17_1_2->setTitle("分账批次号");
        $alipayTradeCreateApiInParam_17_1_2->setDesc(" 分账批次号。  目前需要和转入账号类型为bankIndex配合使用。");
        $alipayTradeCreateApiInParam_17_1_2->setIsMust(1);
        $alipayTradeCreateApiInParam_17_1_2->setIsListType(false);
        $alipayTradeCreateApiInParam_17_1_2->setFullParamName("royaltyInfo.royaltyDetailInfos[0].batchNo");
        $alipayTradeCreateApiInParam_17_1_2->setEnName("batch_no");
        $alipayTradeCreateApiInParam_17_1_2->setChilds("");
        $alipayTradeCreateApiInParam_17_1Childs[] = json_decode($alipayTradeCreateApiInParam_17_1_2->getBizContent());

        $alipayTradeCreateApiInParam_17_1_4 = new ApiParamModel();
        $alipayTradeCreateApiInParam_17_1_4->setBaseType($alipayTradeCreateApiInParam_17_1_4::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_17_1_4->setTitle("要分账的账户类型");
        $alipayTradeCreateApiInParam_17_1_4->setDesc("  目前只支持userId：支付宝账号对应的支付宝唯一用户号。  默认值为userId。");
        $alipayTradeCreateApiInParam_17_1_4->setIsMust(1);
        $alipayTradeCreateApiInParam_17_1_4->setIsListType(false);
        $alipayTradeCreateApiInParam_17_1_4->setFullParamName("royaltyInfo.royaltyDetailInfos[0].transOutType");
        $alipayTradeCreateApiInParam_17_1_4->setEnName("trans_out_type");
        $alipayTradeCreateApiInParam_17_1_4->setChilds("");
        $alipayTradeCreateApiInParam_17_1Childs[] = json_decode($alipayTradeCreateApiInParam_17_1_4->getBizContent());

        $alipayTradeCreateApiInParam_17_1_5 = new ApiParamModel();
        $alipayTradeCreateApiInParam_17_1_5->setBaseType($alipayTradeCreateApiInParam_17_1_5::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_17_1_5->setTitle("如果转出账号类型为userId");
        $alipayTradeCreateApiInParam_17_1_5->setDesc("本参数为要分账的支付宝账号对应的支付宝唯一用户号。以2088开头的纯16位数字。");
        $alipayTradeCreateApiInParam_17_1_5->setIsMust(1);
        $alipayTradeCreateApiInParam_17_1_5->setIsListType(false);
        $alipayTradeCreateApiInParam_17_1_5->setFullParamName("royaltyInfo.royaltyDetailInfos[0].transOut");
        $alipayTradeCreateApiInParam_17_1_5->setEnName("trans_out");
        $alipayTradeCreateApiInParam_17_1_5->setChilds("");
        $alipayTradeCreateApiInParam_17_1Childs[] = json_decode($alipayTradeCreateApiInParam_17_1_5->getBizContent());

        $alipayTradeCreateApiInParam_17_1_6 = new ApiParamModel();
        $alipayTradeCreateApiInParam_17_1_6->setBaseType($alipayTradeCreateApiInParam_17_1_6::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_17_1_6->setTitle("如果转入账号类型为userId");
        $alipayTradeCreateApiInParam_17_1_6->setDesc("本参数为接受分账金额的支付宝账号对应的支付宝唯一用户号。以2088开头的纯16位数字。  &#61548;	如果转入账号类型为bankIndex，本参数为28位的银行编号（商户和支付宝签约时确定）。  如果转入账号类型为storeId，本参数为商户的门店ID。");
        $alipayTradeCreateApiInParam_17_1_6->setIsMust(1);
        $alipayTradeCreateApiInParam_17_1_6->setIsListType(false);
        $alipayTradeCreateApiInParam_17_1_6->setFullParamName("royaltyInfo.royaltyDetailInfos[0].transIn");
        $alipayTradeCreateApiInParam_17_1_6->setEnName("trans_in");
        $alipayTradeCreateApiInParam_17_1_6->setChilds("");
        $alipayTradeCreateApiInParam_17_1Childs[] = json_decode($alipayTradeCreateApiInParam_17_1_6->getBizContent());

        $alipayTradeCreateApiInParam_17_1_7 = new ApiParamModel();
        $alipayTradeCreateApiInParam_17_1_7->setBaseType($alipayTradeCreateApiInParam_17_1_7::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_17_1_7->setTitle("分账的金额");
        $alipayTradeCreateApiInParam_17_1_7->setDesc("单位为元");
        $alipayTradeCreateApiInParam_17_1_7->setIsMust(1);
        $alipayTradeCreateApiInParam_17_1_7->setIsListType(false);
        $alipayTradeCreateApiInParam_17_1_7->setFullParamName("royaltyInfo.royaltyDetailInfos[0].amount");
        $alipayTradeCreateApiInParam_17_1_7->setEnName("amount");
        $alipayTradeCreateApiInParam_17_1_7->setChilds("");
        $alipayTradeCreateApiInParam_17_1Childs[] = json_decode($alipayTradeCreateApiInParam_17_1_7->getBizContent());

        $alipayTradeCreateApiInParam_17_1_0 = new ApiParamModel();
        $alipayTradeCreateApiInParam_17_1_0->setBaseType($alipayTradeCreateApiInParam_17_1_0::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_17_1_0->setTitle("分账序列号");
        $alipayTradeCreateApiInParam_17_1_0->setDesc("表示分账执行的顺序，必须为正整数");
        $alipayTradeCreateApiInParam_17_1_0->setIsMust(3);
        $alipayTradeCreateApiInParam_17_1_0->setIsListType(false);
        $alipayTradeCreateApiInParam_17_1_0->setFullParamName("royaltyInfo.royaltyDetailInfos[0].serialNo");
        $alipayTradeCreateApiInParam_17_1_0->setEnName("serial_no");
        $alipayTradeCreateApiInParam_17_1_0->setChilds("");
        $alipayTradeCreateApiInParam_17_1Childs[] = json_decode($alipayTradeCreateApiInParam_17_1_0->getBizContent());

        $alipayTradeCreateApiInParam_17_1_1 = new ApiParamModel();
        $alipayTradeCreateApiInParam_17_1_1->setBaseType($alipayTradeCreateApiInParam_17_1_1::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_17_1_1->setTitle("接受分账金额的账户类型：");
        $alipayTradeCreateApiInParam_17_1_1->setDesc(" &#61548;	userId：支付宝账号对应的支付宝唯一用户号。  &#61548;	bankIndex：分账到银行账户的银行编号。目前暂时只支持分账到一个银行编号。  storeId：分账到门店对应的银行卡编号。  默认值为userId。");
        $alipayTradeCreateApiInParam_17_1_1->setIsMust(3);
        $alipayTradeCreateApiInParam_17_1_1->setIsListType(false);
        $alipayTradeCreateApiInParam_17_1_1->setFullParamName("royaltyInfo.royaltyDetailInfos[0].transInType");
        $alipayTradeCreateApiInParam_17_1_1->setEnName("trans_in_type");
        $alipayTradeCreateApiInParam_17_1_1->setChilds("");
        $alipayTradeCreateApiInParam_17_1Childs[] = json_decode($alipayTradeCreateApiInParam_17_1_1->getBizContent());

        $alipayTradeCreateApiInParam_17_1_3 = new ApiParamModel();
        $alipayTradeCreateApiInParam_17_1_3->setBaseType($alipayTradeCreateApiInParam_17_1_3::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_17_1_3->setTitle("商户分账的外部关联号");
        $alipayTradeCreateApiInParam_17_1_3->setDesc("用于关联到每一笔分账信息，商户需保证其唯一性。  如果为空，该值则默认为“商户网站唯一订单号+分账序列号”");
        $alipayTradeCreateApiInParam_17_1_3->setIsMust(3);
        $alipayTradeCreateApiInParam_17_1_3->setIsListType(false);
        $alipayTradeCreateApiInParam_17_1_3->setFullParamName("royaltyInfo.royaltyDetailInfos[0].outRelationId");
        $alipayTradeCreateApiInParam_17_1_3->setEnName("out_relation_id");
        $alipayTradeCreateApiInParam_17_1_3->setChilds("");
        $alipayTradeCreateApiInParam_17_1Childs[] = json_decode($alipayTradeCreateApiInParam_17_1_3->getBizContent());

        $alipayTradeCreateApiInParam_17_1_8 = new ApiParamModel();
        $alipayTradeCreateApiInParam_17_1_8->setBaseType($alipayTradeCreateApiInParam_17_1_8::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_17_1_8->setTitle("分账描述信息");
        $alipayTradeCreateApiInParam_17_1_8->setDesc("");
        $alipayTradeCreateApiInParam_17_1_8->setIsMust(3);
        $alipayTradeCreateApiInParam_17_1_8->setIsListType(false);
        $alipayTradeCreateApiInParam_17_1_8->setFullParamName("royaltyInfo.royaltyDetailInfos[0].desc");
        $alipayTradeCreateApiInParam_17_1_8->setEnName("desc");
        $alipayTradeCreateApiInParam_17_1_8->setChilds("");
        $alipayTradeCreateApiInParam_17_1Childs[] = json_decode($alipayTradeCreateApiInParam_17_1_8->getBizContent());

        $alipayTradeCreateApiInParam_17_1_9 = new ApiParamModel();
        $alipayTradeCreateApiInParam_17_1_9->setBaseType($alipayTradeCreateApiInParam_17_1_9::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_17_1_9->setTitle("分账的比例");
        $alipayTradeCreateApiInParam_17_1_9->setDesc("值为20代表按20%的比例分账");
        $alipayTradeCreateApiInParam_17_1_9->setIsMust(3);
        $alipayTradeCreateApiInParam_17_1_9->setIsListType(false);
        $alipayTradeCreateApiInParam_17_1_9->setFullParamName("royaltyInfo.royaltyDetailInfos[0].amountPercentage");
        $alipayTradeCreateApiInParam_17_1_9->setEnName("amount_percentage");
        $alipayTradeCreateApiInParam_17_1_9->setChilds("");
        $alipayTradeCreateApiInParam_17_1Childs[] = json_decode($alipayTradeCreateApiInParam_17_1_9->getBizContent());

            $alipayTradeCreateApiInParam_17_1->setChilds($alipayTradeCreateApiInParam_17_1Childs);

        $alipayTradeCreateApiInParam_17Childs[] = json_decode($alipayTradeCreateApiInParam_17_1->getBizContent());

        $alipayTradeCreateApiInParam_17_0 = new ApiParamModel();
        $alipayTradeCreateApiInParam_17_0->setBaseType($alipayTradeCreateApiInParam_17_0::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_17_0->setTitle("分账类型");
        $alipayTradeCreateApiInParam_17_0->setDesc(" 卖家的分账类型，目前只支持传入ROYALTY（普通分账类型）。");
        $alipayTradeCreateApiInParam_17_0->setIsMust(3);
        $alipayTradeCreateApiInParam_17_0->setIsListType(false);
        $alipayTradeCreateApiInParam_17_0->setFullParamName("royaltyInfo.royaltyType");
        $alipayTradeCreateApiInParam_17_0->setEnName("royalty_type");
        $alipayTradeCreateApiInParam_17_0->setChilds("");
        $alipayTradeCreateApiInParam_17Childs[] = json_decode($alipayTradeCreateApiInParam_17_0->getBizContent());

            $alipayTradeCreateApiInParam_17->setChilds($alipayTradeCreateApiInParam_17Childs);

        $alipayTradeCreateApiInParamChilds[] = json_decode($alipayTradeCreateApiInParam_17->getBizContent());

        $alipayTradeCreateApiInParam_18 = new ApiParamModel();
        $alipayTradeCreateApiInParam_18->setBaseType($alipayTradeCreateApiInParam_18::$TYPE_COMPLEXTYPE);
        $alipayTradeCreateApiInParam_18->setTitle("描述结算信息");
        $alipayTradeCreateApiInParam_18->setDesc("json格式，详见结算参数说明");
        $alipayTradeCreateApiInParam_18->setIsMust(3);
        $alipayTradeCreateApiInParam_18->setIsListType(false);
        $alipayTradeCreateApiInParam_18->setFullParamName("settleInfo");
        $alipayTradeCreateApiInParam_18->setEnName("settle_info");
        $alipayTradeCreateApiInParam_18->setChilds("");
    
    // $alipayTradeCreateApiInParam_18Childs[] = new ApiParamModel();

            $alipayTradeCreateApiInParam_18_0 = new ApiParamModel();
        $alipayTradeCreateApiInParam_18_0->setBaseType($alipayTradeCreateApiInParam_18_0::$TYPE_COMPLEXTYPE);
        $alipayTradeCreateApiInParam_18_0->setTitle("结算详细信息");
        $alipayTradeCreateApiInParam_18_0->setDesc("json数组，目前只支持一条。");
        $alipayTradeCreateApiInParam_18_0->setIsMust(1);
        $alipayTradeCreateApiInParam_18_0->setIsListType(true);
        $alipayTradeCreateApiInParam_18_0->setFullParamName("settleInfo.settleDetailInfos[0]");
        $alipayTradeCreateApiInParam_18_0->setEnName("settle_detail_infos");
        $alipayTradeCreateApiInParam_18_0->setChilds("");
    
    // $alipayTradeCreateApiInParam_18_0Childs[] = new ApiParamModel();

            $alipayTradeCreateApiInParam_18_0_0 = new ApiParamModel();
        $alipayTradeCreateApiInParam_18_0_0->setBaseType($alipayTradeCreateApiInParam_18_0_0::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_18_0_0->setTitle("结算收款方的账户类型");
        $alipayTradeCreateApiInParam_18_0_0->setDesc("    cardSerialNo：结算收款方的银行卡编号;    userId：表示是支付宝账号对应的支付宝唯一用户号;  loginName：表示是支付宝登录号；");
        $alipayTradeCreateApiInParam_18_0_0->setIsMust(1);
        $alipayTradeCreateApiInParam_18_0_0->setIsListType(false);
        $alipayTradeCreateApiInParam_18_0_0->setFullParamName("settleInfo.settleDetailInfos[0].transInType");
        $alipayTradeCreateApiInParam_18_0_0->setEnName("trans_in_type");
        $alipayTradeCreateApiInParam_18_0_0->setChilds("");
        $alipayTradeCreateApiInParam_18_0Childs[] = json_decode($alipayTradeCreateApiInParam_18_0_0->getBizContent());

        $alipayTradeCreateApiInParam_18_0_1 = new ApiParamModel();
        $alipayTradeCreateApiInParam_18_0_1->setBaseType($alipayTradeCreateApiInParam_18_0_1::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_18_0_1->setTitle("结算收款方");
        $alipayTradeCreateApiInParam_18_0_1->setDesc("当结算收款方类型是cardSerialNo时，本参数为用户在支付宝绑定的卡编号；结算收款方类型是userId时，本参数为用户的支付宝账号对应的支付宝唯一用户号，以2088开头的纯16位数字；当结算收款方类型是loginName时，本参数为用户的支付宝登录号");
        $alipayTradeCreateApiInParam_18_0_1->setIsMust(1);
        $alipayTradeCreateApiInParam_18_0_1->setIsListType(false);
        $alipayTradeCreateApiInParam_18_0_1->setFullParamName("settleInfo.settleDetailInfos[0].transIn");
        $alipayTradeCreateApiInParam_18_0_1->setEnName("trans_in");
        $alipayTradeCreateApiInParam_18_0_1->setChilds("");
        $alipayTradeCreateApiInParam_18_0Childs[] = json_decode($alipayTradeCreateApiInParam_18_0_1->getBizContent());

        $alipayTradeCreateApiInParam_18_0_5 = new ApiParamModel();
        $alipayTradeCreateApiInParam_18_0_5->setBaseType($alipayTradeCreateApiInParam_18_0_5::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_18_0_5->setTitle("结算的金额");
        $alipayTradeCreateApiInParam_18_0_5->setDesc("单位为元。目前必须和交易金额相同");
        $alipayTradeCreateApiInParam_18_0_5->setIsMust(1);
        $alipayTradeCreateApiInParam_18_0_5->setIsListType(false);
        $alipayTradeCreateApiInParam_18_0_5->setFullParamName("settleInfo.settleDetailInfos[0].amount");
        $alipayTradeCreateApiInParam_18_0_5->setEnName("amount");
        $alipayTradeCreateApiInParam_18_0_5->setChilds("");
        $alipayTradeCreateApiInParam_18_0Childs[] = json_decode($alipayTradeCreateApiInParam_18_0_5->getBizContent());

        $alipayTradeCreateApiInParam_18_0_2 = new ApiParamModel();
        $alipayTradeCreateApiInParam_18_0_2->setBaseType($alipayTradeCreateApiInParam_18_0_2::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_18_0_2->setTitle("结算汇总维度");
        $alipayTradeCreateApiInParam_18_0_2->setDesc("按照这个维度汇总成批次结算，由商户指定。    目前需要和结算收款方账户类型为cardSerialNo配合使用");
        $alipayTradeCreateApiInParam_18_0_2->setIsMust(3);
        $alipayTradeCreateApiInParam_18_0_2->setIsListType(false);
        $alipayTradeCreateApiInParam_18_0_2->setFullParamName("settleInfo.settleDetailInfos[0].summaryDimension");
        $alipayTradeCreateApiInParam_18_0_2->setEnName("summary_dimension");
        $alipayTradeCreateApiInParam_18_0_2->setChilds("");
        $alipayTradeCreateApiInParam_18_0Childs[] = json_decode($alipayTradeCreateApiInParam_18_0_2->getBizContent());

        $alipayTradeCreateApiInParam_18_0_3 = new ApiParamModel();
        $alipayTradeCreateApiInParam_18_0_3->setBaseType($alipayTradeCreateApiInParam_18_0_3::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_18_0_3->setTitle("结算主体标识");
        $alipayTradeCreateApiInParam_18_0_3->setDesc("当结算主体类型为SecondMerchant时，为二级商户的SecondMerchantID；当结算主体类型为Store时，为门店的外标。");
        $alipayTradeCreateApiInParam_18_0_3->setIsMust(3);
        $alipayTradeCreateApiInParam_18_0_3->setIsListType(false);
        $alipayTradeCreateApiInParam_18_0_3->setFullParamName("settleInfo.settleDetailInfos[0].settleEntityId");
        $alipayTradeCreateApiInParam_18_0_3->setEnName("settle_entity_id");
        $alipayTradeCreateApiInParam_18_0_3->setChilds("");
        $alipayTradeCreateApiInParam_18_0Childs[] = json_decode($alipayTradeCreateApiInParam_18_0_3->getBizContent());

        $alipayTradeCreateApiInParam_18_0_4 = new ApiParamModel();
        $alipayTradeCreateApiInParam_18_0_4->setBaseType($alipayTradeCreateApiInParam_18_0_4::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_18_0_4->setTitle("结算主体类型");
        $alipayTradeCreateApiInParam_18_0_4->setDesc("  二级商户:SecondMerchant;商户或者直连商户门店:Store");
        $alipayTradeCreateApiInParam_18_0_4->setIsMust(3);
        $alipayTradeCreateApiInParam_18_0_4->setIsListType(false);
        $alipayTradeCreateApiInParam_18_0_4->setFullParamName("settleInfo.settleDetailInfos[0].settleEntityType");
        $alipayTradeCreateApiInParam_18_0_4->setEnName("settle_entity_type");
        $alipayTradeCreateApiInParam_18_0_4->setChilds("");
        $alipayTradeCreateApiInParam_18_0Childs[] = json_decode($alipayTradeCreateApiInParam_18_0_4->getBizContent());

            $alipayTradeCreateApiInParam_18_0->setChilds($alipayTradeCreateApiInParam_18_0Childs);

        $alipayTradeCreateApiInParam_18Childs[] = json_decode($alipayTradeCreateApiInParam_18_0->getBizContent());

            $alipayTradeCreateApiInParam_18->setChilds($alipayTradeCreateApiInParam_18Childs);

        $alipayTradeCreateApiInParamChilds[] = json_decode($alipayTradeCreateApiInParam_18->getBizContent());

        $alipayTradeCreateApiInParam_19 = new ApiParamModel();
        $alipayTradeCreateApiInParam_19->setBaseType($alipayTradeCreateApiInParam_19::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_19->setTitle("支付宝的店铺编号");
        $alipayTradeCreateApiInParam_19->setDesc("");
        $alipayTradeCreateApiInParam_19->setIsMust(3);
        $alipayTradeCreateApiInParam_19->setIsListType(false);
        $alipayTradeCreateApiInParam_19->setFullParamName("alipayStoreId");
        $alipayTradeCreateApiInParam_19->setEnName("alipay_store_id");
        $alipayTradeCreateApiInParam_19->setChilds("");
        $alipayTradeCreateApiInParamChilds[] = json_decode($alipayTradeCreateApiInParam_19->getBizContent());

        $alipayTradeCreateApiInParam_20 = new ApiParamModel();
        $alipayTradeCreateApiInParam_20->setBaseType($alipayTradeCreateApiInParam_20::$TYPE_COMPLEXTYPE);
        $alipayTradeCreateApiInParam_20->setTitle("二级商户信息");
        $alipayTradeCreateApiInParam_20->setDesc("当前只对特殊银行机构特定场景下使用此字段");
        $alipayTradeCreateApiInParam_20->setIsMust(3);
        $alipayTradeCreateApiInParam_20->setIsListType(false);
        $alipayTradeCreateApiInParam_20->setFullParamName("subMerchant");
        $alipayTradeCreateApiInParam_20->setEnName("sub_merchant");
        $alipayTradeCreateApiInParam_20->setChilds("");
    
    // $alipayTradeCreateApiInParam_20Childs[] = new ApiParamModel();

            $alipayTradeCreateApiInParam_20_0 = new ApiParamModel();
        $alipayTradeCreateApiInParam_20_0->setBaseType($alipayTradeCreateApiInParam_20_0::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_20_0->setTitle("间连受理商户的支付宝商户编号");
        $alipayTradeCreateApiInParam_20_0->setDesc("通过间连商户入驻后得到。间连业务下必传，并且需要按规范传递受理商户编号。");
        $alipayTradeCreateApiInParam_20_0->setIsMust(1);
        $alipayTradeCreateApiInParam_20_0->setIsListType(false);
        $alipayTradeCreateApiInParam_20_0->setFullParamName("subMerchant.merchantId");
        $alipayTradeCreateApiInParam_20_0->setEnName("merchant_id");
        $alipayTradeCreateApiInParam_20_0->setChilds("");
        $alipayTradeCreateApiInParam_20Childs[] = json_decode($alipayTradeCreateApiInParam_20_0->getBizContent());

        $alipayTradeCreateApiInParam_20_1 = new ApiParamModel();
        $alipayTradeCreateApiInParam_20_1->setBaseType($alipayTradeCreateApiInParam_20_1::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_20_1->setTitle("商户id类型");
        $alipayTradeCreateApiInParam_20_1->setDesc("");
        $alipayTradeCreateApiInParam_20_1->setIsMust(3);
        $alipayTradeCreateApiInParam_20_1->setIsListType(false);
        $alipayTradeCreateApiInParam_20_1->setFullParamName("subMerchant.merchantType");
        $alipayTradeCreateApiInParam_20_1->setEnName("merchant_type");
        $alipayTradeCreateApiInParam_20_1->setChilds("");
        $alipayTradeCreateApiInParam_20Childs[] = json_decode($alipayTradeCreateApiInParam_20_1->getBizContent());

            $alipayTradeCreateApiInParam_20->setChilds($alipayTradeCreateApiInParam_20Childs);

        $alipayTradeCreateApiInParamChilds[] = json_decode($alipayTradeCreateApiInParam_20->getBizContent());

        $alipayTradeCreateApiInParam_21 = new ApiParamModel();
        $alipayTradeCreateApiInParam_21->setBaseType($alipayTradeCreateApiInParam_21::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_21->setTitle("商户原始订单号");
        $alipayTradeCreateApiInParam_21->setDesc("最大长度限制32位");
        $alipayTradeCreateApiInParam_21->setIsMust(3);
        $alipayTradeCreateApiInParam_21->setIsListType(false);
        $alipayTradeCreateApiInParam_21->setFullParamName("merchantOrderNo");
        $alipayTradeCreateApiInParam_21->setEnName("merchant_order_no");
        $alipayTradeCreateApiInParam_21->setChilds("");
        $alipayTradeCreateApiInParamChilds[] = json_decode($alipayTradeCreateApiInParam_21->getBizContent());

        $alipayTradeCreateApiInParam_22 = new ApiParamModel();
        $alipayTradeCreateApiInParam_22->setBaseType($alipayTradeCreateApiInParam_22::$TYPE_COMPLEXTYPE);
        $alipayTradeCreateApiInParam_22->setTitle("外部指定买家");
        $alipayTradeCreateApiInParam_22->setDesc("");
        $alipayTradeCreateApiInParam_22->setIsMust(3);
        $alipayTradeCreateApiInParam_22->setIsListType(false);
        $alipayTradeCreateApiInParam_22->setFullParamName("extUserInfo");
        $alipayTradeCreateApiInParam_22->setEnName("ext_user_info");
        $alipayTradeCreateApiInParam_22->setChilds("");
    
    // $alipayTradeCreateApiInParam_22Childs[] = new ApiParamModel();

            $alipayTradeCreateApiInParam_22_0 = new ApiParamModel();
        $alipayTradeCreateApiInParam_22_0->setBaseType($alipayTradeCreateApiInParam_22_0::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_22_0->setTitle("姓名");
        $alipayTradeCreateApiInParam_22_0->setDesc("   注： need_check_info=T时该参数才有效");
        $alipayTradeCreateApiInParam_22_0->setIsMust(3);
        $alipayTradeCreateApiInParam_22_0->setIsListType(false);
        $alipayTradeCreateApiInParam_22_0->setFullParamName("extUserInfo.name");
        $alipayTradeCreateApiInParam_22_0->setEnName("name");
        $alipayTradeCreateApiInParam_22_0->setChilds("");
        $alipayTradeCreateApiInParam_22Childs[] = json_decode($alipayTradeCreateApiInParam_22_0->getBizContent());

        $alipayTradeCreateApiInParam_22_1 = new ApiParamModel();
        $alipayTradeCreateApiInParam_22_1->setBaseType($alipayTradeCreateApiInParam_22_1::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_22_1->setTitle("手机号");
        $alipayTradeCreateApiInParam_22_1->setDesc(" 注：该参数暂不校验");
        $alipayTradeCreateApiInParam_22_1->setIsMust(3);
        $alipayTradeCreateApiInParam_22_1->setIsListType(false);
        $alipayTradeCreateApiInParam_22_1->setFullParamName("extUserInfo.mobile");
        $alipayTradeCreateApiInParam_22_1->setEnName("mobile");
        $alipayTradeCreateApiInParam_22_1->setChilds("");
        $alipayTradeCreateApiInParam_22Childs[] = json_decode($alipayTradeCreateApiInParam_22_1->getBizContent());

        $alipayTradeCreateApiInParam_22_2 = new ApiParamModel();
        $alipayTradeCreateApiInParam_22_2->setBaseType($alipayTradeCreateApiInParam_22_2::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_22_2->setTitle("身份证：IDENTITY_CARD、护照：PASSPORT、军官证：OFFICER_CARD、士兵证：SOLDIER_CARD、户口本：HOKOU等");
        $alipayTradeCreateApiInParam_22_2->setDesc("如有其它类型需要支持，请与蚂蚁金服工作人员联系。    注： need_check_info=T时该参数才有效");
        $alipayTradeCreateApiInParam_22_2->setIsMust(3);
        $alipayTradeCreateApiInParam_22_2->setIsListType(false);
        $alipayTradeCreateApiInParam_22_2->setFullParamName("extUserInfo.certType");
        $alipayTradeCreateApiInParam_22_2->setEnName("cert_type");
        $alipayTradeCreateApiInParam_22_2->setChilds("");
        $alipayTradeCreateApiInParam_22Childs[] = json_decode($alipayTradeCreateApiInParam_22_2->getBizContent());

        $alipayTradeCreateApiInParam_22_3 = new ApiParamModel();
        $alipayTradeCreateApiInParam_22_3->setBaseType($alipayTradeCreateApiInParam_22_3::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_22_3->setTitle("证件号");
        $alipayTradeCreateApiInParam_22_3->setDesc("   注：need_check_info=T时该参数才有效");
        $alipayTradeCreateApiInParam_22_3->setIsMust(3);
        $alipayTradeCreateApiInParam_22_3->setIsListType(false);
        $alipayTradeCreateApiInParam_22_3->setFullParamName("extUserInfo.certNo");
        $alipayTradeCreateApiInParam_22_3->setEnName("cert_no");
        $alipayTradeCreateApiInParam_22_3->setChilds("");
        $alipayTradeCreateApiInParam_22Childs[] = json_decode($alipayTradeCreateApiInParam_22_3->getBizContent());

        $alipayTradeCreateApiInParam_22_4 = new ApiParamModel();
        $alipayTradeCreateApiInParam_22_4->setBaseType($alipayTradeCreateApiInParam_22_4::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_22_4->setTitle("允许的最小买家年龄");
        $alipayTradeCreateApiInParam_22_4->setDesc("买家年龄必须大于等于所传数值   注：  1. need_check_info=T时该参数才有效  2. min_age为整数，必须大于等于0");
        $alipayTradeCreateApiInParam_22_4->setIsMust(3);
        $alipayTradeCreateApiInParam_22_4->setIsListType(false);
        $alipayTradeCreateApiInParam_22_4->setFullParamName("extUserInfo.minAge");
        $alipayTradeCreateApiInParam_22_4->setEnName("min_age");
        $alipayTradeCreateApiInParam_22_4->setChilds("");
        $alipayTradeCreateApiInParam_22Childs[] = json_decode($alipayTradeCreateApiInParam_22_4->getBizContent());

        $alipayTradeCreateApiInParam_22_5 = new ApiParamModel();
        $alipayTradeCreateApiInParam_22_5->setBaseType($alipayTradeCreateApiInParam_22_5::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_22_5->setTitle("是否强制校验付款人身份信息");
        $alipayTradeCreateApiInParam_22_5->setDesc(" T:强制校验，F：不强制");
        $alipayTradeCreateApiInParam_22_5->setIsMust(3);
        $alipayTradeCreateApiInParam_22_5->setIsListType(false);
        $alipayTradeCreateApiInParam_22_5->setFullParamName("extUserInfo.fixBuyer");
        $alipayTradeCreateApiInParam_22_5->setEnName("fix_buyer");
        $alipayTradeCreateApiInParam_22_5->setChilds("");
        $alipayTradeCreateApiInParam_22Childs[] = json_decode($alipayTradeCreateApiInParam_22_5->getBizContent());

        $alipayTradeCreateApiInParam_22_6 = new ApiParamModel();
        $alipayTradeCreateApiInParam_22_6->setBaseType($alipayTradeCreateApiInParam_22_6::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_22_6->setTitle("是否强制校验身份信息");
        $alipayTradeCreateApiInParam_22_6->setDesc(" T:强制校验，F：不强制");
        $alipayTradeCreateApiInParam_22_6->setIsMust(3);
        $alipayTradeCreateApiInParam_22_6->setIsListType(false);
        $alipayTradeCreateApiInParam_22_6->setFullParamName("extUserInfo.needCheckInfo");
        $alipayTradeCreateApiInParam_22_6->setEnName("need_check_info");
        $alipayTradeCreateApiInParam_22_6->setChilds("");
        $alipayTradeCreateApiInParam_22Childs[] = json_decode($alipayTradeCreateApiInParam_22_6->getBizContent());

            $alipayTradeCreateApiInParam_22->setChilds($alipayTradeCreateApiInParam_22Childs);

        $alipayTradeCreateApiInParamChilds[] = json_decode($alipayTradeCreateApiInParam_22->getBizContent());

        $alipayTradeCreateApiInParam_23 = new ApiParamModel();
        $alipayTradeCreateApiInParam_23->setBaseType($alipayTradeCreateApiInParam_23::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_23->setTitle("商户传入业务信息");
        $alipayTradeCreateApiInParam_23->setDesc("具体值要和支付宝约定，应用于安全，营销等参数直传场景，格式为json格式");
        $alipayTradeCreateApiInParam_23->setIsMust(3);
        $alipayTradeCreateApiInParam_23->setIsListType(false);
        $alipayTradeCreateApiInParam_23->setFullParamName("businessParams");
        $alipayTradeCreateApiInParam_23->setEnName("business_params");
        $alipayTradeCreateApiInParam_23->setChilds("");
        $alipayTradeCreateApiInParamChilds[] = json_decode($alipayTradeCreateApiInParam_23->getBizContent());

        $alipayTradeCreateApiInParam_24 = new ApiParamModel();
        $alipayTradeCreateApiInParam_24->setBaseType($alipayTradeCreateApiInParam_24::$TYPE_COMPLEXTYPE);
        $alipayTradeCreateApiInParam_24->setTitle("收货人及地址信息");
        $alipayTradeCreateApiInParam_24->setDesc("");
        $alipayTradeCreateApiInParam_24->setIsMust(3);
        $alipayTradeCreateApiInParam_24->setIsListType(false);
        $alipayTradeCreateApiInParam_24->setFullParamName("receiverAddressInfo");
        $alipayTradeCreateApiInParam_24->setEnName("receiver_address_info");
        $alipayTradeCreateApiInParam_24->setChilds("");
    
    // $alipayTradeCreateApiInParam_24Childs[] = new ApiParamModel();

            $alipayTradeCreateApiInParam_24_0 = new ApiParamModel();
        $alipayTradeCreateApiInParam_24_0->setBaseType($alipayTradeCreateApiInParam_24_0::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_24_0->setTitle("收货人的姓名");
        $alipayTradeCreateApiInParam_24_0->setDesc("");
        $alipayTradeCreateApiInParam_24_0->setIsMust(3);
        $alipayTradeCreateApiInParam_24_0->setIsListType(false);
        $alipayTradeCreateApiInParam_24_0->setFullParamName("receiverAddressInfo.name");
        $alipayTradeCreateApiInParam_24_0->setEnName("name");
        $alipayTradeCreateApiInParam_24_0->setChilds("");
        $alipayTradeCreateApiInParam_24Childs[] = json_decode($alipayTradeCreateApiInParam_24_0->getBizContent());

        $alipayTradeCreateApiInParam_24_1 = new ApiParamModel();
        $alipayTradeCreateApiInParam_24_1->setBaseType($alipayTradeCreateApiInParam_24_1::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_24_1->setTitle("收货地址");
        $alipayTradeCreateApiInParam_24_1->setDesc("");
        $alipayTradeCreateApiInParam_24_1->setIsMust(3);
        $alipayTradeCreateApiInParam_24_1->setIsListType(false);
        $alipayTradeCreateApiInParam_24_1->setFullParamName("receiverAddressInfo.address");
        $alipayTradeCreateApiInParam_24_1->setEnName("address");
        $alipayTradeCreateApiInParam_24_1->setChilds("");
        $alipayTradeCreateApiInParam_24Childs[] = json_decode($alipayTradeCreateApiInParam_24_1->getBizContent());

        $alipayTradeCreateApiInParam_24_2 = new ApiParamModel();
        $alipayTradeCreateApiInParam_24_2->setBaseType($alipayTradeCreateApiInParam_24_2::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_24_2->setTitle("收货人手机号");
        $alipayTradeCreateApiInParam_24_2->setDesc("");
        $alipayTradeCreateApiInParam_24_2->setIsMust(3);
        $alipayTradeCreateApiInParam_24_2->setIsListType(false);
        $alipayTradeCreateApiInParam_24_2->setFullParamName("receiverAddressInfo.mobile");
        $alipayTradeCreateApiInParam_24_2->setEnName("mobile");
        $alipayTradeCreateApiInParam_24_2->setChilds("");
        $alipayTradeCreateApiInParam_24Childs[] = json_decode($alipayTradeCreateApiInParam_24_2->getBizContent());

        $alipayTradeCreateApiInParam_24_3 = new ApiParamModel();
        $alipayTradeCreateApiInParam_24_3->setBaseType($alipayTradeCreateApiInParam_24_3::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_24_3->setTitle("收货地址邮编");
        $alipayTradeCreateApiInParam_24_3->setDesc("");
        $alipayTradeCreateApiInParam_24_3->setIsMust(3);
        $alipayTradeCreateApiInParam_24_3->setIsListType(false);
        $alipayTradeCreateApiInParam_24_3->setFullParamName("receiverAddressInfo.zip");
        $alipayTradeCreateApiInParam_24_3->setEnName("zip");
        $alipayTradeCreateApiInParam_24_3->setChilds("");
        $alipayTradeCreateApiInParam_24Childs[] = json_decode($alipayTradeCreateApiInParam_24_3->getBizContent());

        $alipayTradeCreateApiInParam_24_4 = new ApiParamModel();
        $alipayTradeCreateApiInParam_24_4->setBaseType($alipayTradeCreateApiInParam_24_4::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_24_4->setTitle("中国标准城市区域码");
        $alipayTradeCreateApiInParam_24_4->setDesc("");
        $alipayTradeCreateApiInParam_24_4->setIsMust(3);
        $alipayTradeCreateApiInParam_24_4->setIsListType(false);
        $alipayTradeCreateApiInParam_24_4->setFullParamName("receiverAddressInfo.divisionCode");
        $alipayTradeCreateApiInParam_24_4->setEnName("division_code");
        $alipayTradeCreateApiInParam_24_4->setChilds("");
        $alipayTradeCreateApiInParam_24Childs[] = json_decode($alipayTradeCreateApiInParam_24_4->getBizContent());

            $alipayTradeCreateApiInParam_24->setChilds($alipayTradeCreateApiInParam_24Childs);

        $alipayTradeCreateApiInParamChilds[] = json_decode($alipayTradeCreateApiInParam_24->getBizContent());

        $alipayTradeCreateApiInParam_25 = new ApiParamModel();
        $alipayTradeCreateApiInParam_25->setBaseType($alipayTradeCreateApiInParam_25::$TYPE_COMPLEXTYPE);
        $alipayTradeCreateApiInParam_25->setTitle("物流信息");
        $alipayTradeCreateApiInParam_25->setDesc("");
        $alipayTradeCreateApiInParam_25->setIsMust(3);
        $alipayTradeCreateApiInParam_25->setIsListType(false);
        $alipayTradeCreateApiInParam_25->setFullParamName("logisticsDetail");
        $alipayTradeCreateApiInParam_25->setEnName("logistics_detail");
        $alipayTradeCreateApiInParam_25->setChilds("");
    
    // $alipayTradeCreateApiInParam_25Childs[] = new ApiParamModel();

            $alipayTradeCreateApiInParam_25_0 = new ApiParamModel();
        $alipayTradeCreateApiInParam_25_0->setBaseType($alipayTradeCreateApiInParam_25_0::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_25_0->setTitle("物流类型");
        $alipayTradeCreateApiInParam_25_0->setDesc("   POST 平邮,  EXPRESS 其他快递,  VIRTUAL 虚拟物品,  EMS EMS,  DIRECT 无需物流。");
        $alipayTradeCreateApiInParam_25_0->setIsMust(3);
        $alipayTradeCreateApiInParam_25_0->setIsListType(false);
        $alipayTradeCreateApiInParam_25_0->setFullParamName("logisticsDetail.logisticsType");
        $alipayTradeCreateApiInParam_25_0->setEnName("logistics_type");
        $alipayTradeCreateApiInParam_25_0->setChilds("");
        $alipayTradeCreateApiInParam_25Childs[] = json_decode($alipayTradeCreateApiInParam_25_0->getBizContent());

            $alipayTradeCreateApiInParam_25->setChilds($alipayTradeCreateApiInParam_25Childs);

        $alipayTradeCreateApiInParamChilds[] = json_decode($alipayTradeCreateApiInParam_25->getBizContent());

        $alipayTradeCreateApiInParam_5 = new ApiParamModel();
        $alipayTradeCreateApiInParam_5->setBaseType($alipayTradeCreateApiInParam_5::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_5->setTitle("买家支付宝账号");
        $alipayTradeCreateApiInParam_5->setDesc("和buyer_id不能同时为空");
        $alipayTradeCreateApiInParam_5->setIsMust(2);
        $alipayTradeCreateApiInParam_5->setIsListType(false);
        $alipayTradeCreateApiInParam_5->setFullParamName("buyerLogonId");
        $alipayTradeCreateApiInParam_5->setEnName("buyer_logon_id");
        $alipayTradeCreateApiInParam_5->setChilds("");
        $alipayTradeCreateApiInParamChilds[] = json_decode($alipayTradeCreateApiInParam_5->getBizContent());

        $alipayTradeCreateApiInParam_8 = new ApiParamModel();
        $alipayTradeCreateApiInParam_8->setBaseType($alipayTradeCreateApiInParam_8::$TYPE_BASETYPE);
        $alipayTradeCreateApiInParam_8->setTitle("买家的支付宝唯一用户号（2088开头的16位纯数字）");
        $alipayTradeCreateApiInParam_8->setDesc("");
        $alipayTradeCreateApiInParam_8->setIsMust(2);
        $alipayTradeCreateApiInParam_8->setIsListType(false);
        $alipayTradeCreateApiInParam_8->setFullParamName("buyerId");
        $alipayTradeCreateApiInParam_8->setEnName("buyer_id");
        $alipayTradeCreateApiInParam_8->setChilds("");
        $alipayTradeCreateApiInParamChilds[] = json_decode($alipayTradeCreateApiInParam_8->getBizContent());

        $alipayTradeCreateInfoModel->setApiInParam($alipayTradeCreateApiInParamChilds);

        $alipayTradeCreateApiOutParamChilds[] = new ApiParamModel();

            $alipayTradeCreateApiOutParam_0 = new ApiParamModel();
        $alipayTradeCreateApiOutParam_0->setBaseType($alipayTradeCreateApiOutParam_0::$TYPE_BASETYPE);
        $alipayTradeCreateApiOutParam_0->setTitle("商户订单号");
        $alipayTradeCreateApiOutParam_0->setDesc("");
        $alipayTradeCreateApiOutParam_0->setIsMust(1);
        $alipayTradeCreateApiOutParam_0->setIsListType(false);
        $alipayTradeCreateApiOutParam_0->setFullParamName("outTradeNo");
        $alipayTradeCreateApiOutParam_0->setEnName("out_trade_no");
        $alipayTradeCreateApiOutParam_0->setChilds("");
        $alipayTradeCreateApiOutParamChilds[] = json_decode($alipayTradeCreateApiOutParam_0->getBizContent());

        $alipayTradeCreateApiOutParam_1 = new ApiParamModel();
        $alipayTradeCreateApiOutParam_1->setBaseType($alipayTradeCreateApiOutParam_1::$TYPE_BASETYPE);
        $alipayTradeCreateApiOutParam_1->setTitle("支付宝交易号");
        $alipayTradeCreateApiOutParam_1->setDesc("");
        $alipayTradeCreateApiOutParam_1->setIsMust(1);
        $alipayTradeCreateApiOutParam_1->setIsListType(false);
        $alipayTradeCreateApiOutParam_1->setFullParamName("tradeNo");
        $alipayTradeCreateApiOutParam_1->setEnName("trade_no");
        $alipayTradeCreateApiOutParam_1->setChilds("");
        $alipayTradeCreateApiOutParamChilds[] = json_decode($alipayTradeCreateApiOutParam_1->getBizContent());

        $alipayTradeCreateInfoModel->setApiOutParam($alipayTradeCreateApiOutParamChilds);

        $list[] = json_decode($alipayTradeCreateInfoModel->getBizContent());
        $alipayTradeOrderSettleInfoModel = new ApiInfoModel();
        
        $alipayTradeOrderSettleInfoModel->setApiName("alipay.trade.order.settle");
        $alipayTradeOrderSettleInfoModel->setApiZhName("统一收单交易结算接口");
        $alipayTradeOrderSettleInfoModel->setInvokeType($alipayTradeOrderSettleInfoModel::$INVOKE_TYPE_REQUEST);
            // $alipayTradeOrderSettleApiInParamChilds[] = new ApiParamModel();
            $alipayTradeOrderSettleApiInParam_0 = new ApiParamModel();
        $alipayTradeOrderSettleApiInParam_0->setBaseType($alipayTradeOrderSettleApiInParam_0::$TYPE_BASETYPE);
        $alipayTradeOrderSettleApiInParam_0->setTitle("结算请求流水号");
        $alipayTradeOrderSettleApiInParam_0->setDesc("开发者自行生成并保证唯一性");
        $alipayTradeOrderSettleApiInParam_0->setIsMust(1);
        $alipayTradeOrderSettleApiInParam_0->setIsListType(false);
        $alipayTradeOrderSettleApiInParam_0->setFullParamName("outRequestNo");
        $alipayTradeOrderSettleApiInParam_0->setEnName("out_request_no");
        $alipayTradeOrderSettleApiInParam_0->setChilds("");
        $alipayTradeOrderSettleApiInParamChilds[] = json_decode($alipayTradeOrderSettleApiInParam_0->getBizContent());

        $alipayTradeOrderSettleApiInParam_1 = new ApiParamModel();
        $alipayTradeOrderSettleApiInParam_1->setBaseType($alipayTradeOrderSettleApiInParam_1::$TYPE_BASETYPE);
        $alipayTradeOrderSettleApiInParam_1->setTitle("支付宝订单号");
        $alipayTradeOrderSettleApiInParam_1->setDesc("");
        $alipayTradeOrderSettleApiInParam_1->setIsMust(1);
        $alipayTradeOrderSettleApiInParam_1->setIsListType(false);
        $alipayTradeOrderSettleApiInParam_1->setFullParamName("tradeNo");
        $alipayTradeOrderSettleApiInParam_1->setEnName("trade_no");
        $alipayTradeOrderSettleApiInParam_1->setChilds("");
        $alipayTradeOrderSettleApiInParamChilds[] = json_decode($alipayTradeOrderSettleApiInParam_1->getBizContent());

        $alipayTradeOrderSettleApiInParam_2 = new ApiParamModel();
        $alipayTradeOrderSettleApiInParam_2->setBaseType($alipayTradeOrderSettleApiInParam_2::$TYPE_COMPLEXTYPE);
        $alipayTradeOrderSettleApiInParam_2->setTitle("分账明细信息");
        $alipayTradeOrderSettleApiInParam_2->setDesc("");
        $alipayTradeOrderSettleApiInParam_2->setIsMust(1);
        $alipayTradeOrderSettleApiInParam_2->setIsListType(true);
        $alipayTradeOrderSettleApiInParam_2->setFullParamName("royaltyParameters[0]");
        $alipayTradeOrderSettleApiInParam_2->setEnName("royalty_parameters");
        $alipayTradeOrderSettleApiInParam_2->setChilds("");
    
    // $alipayTradeOrderSettleApiInParam_2Childs[] = new ApiParamModel();

            $alipayTradeOrderSettleApiInParam_2_0 = new ApiParamModel();
        $alipayTradeOrderSettleApiInParam_2_0->setBaseType($alipayTradeOrderSettleApiInParam_2_0::$TYPE_BASETYPE);
        $alipayTradeOrderSettleApiInParam_2_0->setTitle("分账类型");
        $alipayTradeOrderSettleApiInParam_2_0->setDesc("  普通分账为：transfer;  补差为：replenish;  为空默认为分账transfer;");
        $alipayTradeOrderSettleApiInParam_2_0->setIsMust(3);
        $alipayTradeOrderSettleApiInParam_2_0->setIsListType(false);
        $alipayTradeOrderSettleApiInParam_2_0->setFullParamName("royaltyParameters[0].royaltyType");
        $alipayTradeOrderSettleApiInParam_2_0->setEnName("royalty_type");
        $alipayTradeOrderSettleApiInParam_2_0->setChilds("");
        $alipayTradeOrderSettleApiInParam_2Childs[] = json_decode($alipayTradeOrderSettleApiInParam_2_0->getBizContent());

        $alipayTradeOrderSettleApiInParam_2_1 = new ApiParamModel();
        $alipayTradeOrderSettleApiInParam_2_1->setBaseType($alipayTradeOrderSettleApiInParam_2_1::$TYPE_BASETYPE);
        $alipayTradeOrderSettleApiInParam_2_1->setTitle("支出方账户");
        $alipayTradeOrderSettleApiInParam_2_1->setDesc("如果支出方账户类型为userId，本参数为支出方的支付宝账号对应的支付宝唯一用户号，以2088开头的纯16位数字；如果支出方类型为loginName，本参数为支出方的支付宝登录号；");
        $alipayTradeOrderSettleApiInParam_2_1->setIsMust(3);
        $alipayTradeOrderSettleApiInParam_2_1->setIsListType(false);
        $alipayTradeOrderSettleApiInParam_2_1->setFullParamName("royaltyParameters[0].transOut");
        $alipayTradeOrderSettleApiInParam_2_1->setEnName("trans_out");
        $alipayTradeOrderSettleApiInParam_2_1->setChilds("");
        $alipayTradeOrderSettleApiInParam_2Childs[] = json_decode($alipayTradeOrderSettleApiInParam_2_1->getBizContent());

        $alipayTradeOrderSettleApiInParam_2_2 = new ApiParamModel();
        $alipayTradeOrderSettleApiInParam_2_2->setBaseType($alipayTradeOrderSettleApiInParam_2_2::$TYPE_BASETYPE);
        $alipayTradeOrderSettleApiInParam_2_2->setTitle("支出方账户类型");
        $alipayTradeOrderSettleApiInParam_2_2->setDesc("userId表示是支付宝账号对应的支付宝唯一用户号;loginName表示是支付宝登录号；");
        $alipayTradeOrderSettleApiInParam_2_2->setIsMust(3);
        $alipayTradeOrderSettleApiInParam_2_2->setIsListType(false);
        $alipayTradeOrderSettleApiInParam_2_2->setFullParamName("royaltyParameters[0].transOutType");
        $alipayTradeOrderSettleApiInParam_2_2->setEnName("trans_out_type");
        $alipayTradeOrderSettleApiInParam_2_2->setChilds("");
        $alipayTradeOrderSettleApiInParam_2Childs[] = json_decode($alipayTradeOrderSettleApiInParam_2_2->getBizContent());

        $alipayTradeOrderSettleApiInParam_2_3 = new ApiParamModel();
        $alipayTradeOrderSettleApiInParam_2_3->setBaseType($alipayTradeOrderSettleApiInParam_2_3::$TYPE_BASETYPE);
        $alipayTradeOrderSettleApiInParam_2_3->setTitle("收入方账户类型");
        $alipayTradeOrderSettleApiInParam_2_3->setDesc("userId表示是支付宝账号对应的支付宝唯一用户号;cardSerialNo表示是卡编号;loginName表示是支付宝登录号；");
        $alipayTradeOrderSettleApiInParam_2_3->setIsMust(3);
        $alipayTradeOrderSettleApiInParam_2_3->setIsListType(false);
        $alipayTradeOrderSettleApiInParam_2_3->setFullParamName("royaltyParameters[0].transInType");
        $alipayTradeOrderSettleApiInParam_2_3->setEnName("trans_in_type");
        $alipayTradeOrderSettleApiInParam_2_3->setChilds("");
        $alipayTradeOrderSettleApiInParam_2Childs[] = json_decode($alipayTradeOrderSettleApiInParam_2_3->getBizContent());

        $alipayTradeOrderSettleApiInParam_2_4 = new ApiParamModel();
        $alipayTradeOrderSettleApiInParam_2_4->setBaseType($alipayTradeOrderSettleApiInParam_2_4::$TYPE_BASETYPE);
        $alipayTradeOrderSettleApiInParam_2_4->setTitle("收入方账户");
        $alipayTradeOrderSettleApiInParam_2_4->setDesc("如果收入方账户类型为userId，本参数为收入方的支付宝账号对应的支付宝唯一用户号，以2088开头的纯16位数字；如果收入方类型为cardSerialNo，本参数为收入方在支付宝绑定的卡编号；如果收入方类型为loginName，本参数为收入方的支付宝登录号；");
        $alipayTradeOrderSettleApiInParam_2_4->setIsMust(3);
        $alipayTradeOrderSettleApiInParam_2_4->setIsListType(false);
        $alipayTradeOrderSettleApiInParam_2_4->setFullParamName("royaltyParameters[0].transIn");
        $alipayTradeOrderSettleApiInParam_2_4->setEnName("trans_in");
        $alipayTradeOrderSettleApiInParam_2_4->setChilds("");
        $alipayTradeOrderSettleApiInParam_2Childs[] = json_decode($alipayTradeOrderSettleApiInParam_2_4->getBizContent());

        $alipayTradeOrderSettleApiInParam_2_5 = new ApiParamModel();
        $alipayTradeOrderSettleApiInParam_2_5->setBaseType($alipayTradeOrderSettleApiInParam_2_5::$TYPE_BASETYPE);
        $alipayTradeOrderSettleApiInParam_2_5->setTitle("分账的金额");
        $alipayTradeOrderSettleApiInParam_2_5->setDesc("单位为元");
        $alipayTradeOrderSettleApiInParam_2_5->setIsMust(3);
        $alipayTradeOrderSettleApiInParam_2_5->setIsListType(false);
        $alipayTradeOrderSettleApiInParam_2_5->setFullParamName("royaltyParameters[0].amount");
        $alipayTradeOrderSettleApiInParam_2_5->setEnName("amount");
        $alipayTradeOrderSettleApiInParam_2_5->setChilds("");
        $alipayTradeOrderSettleApiInParam_2Childs[] = json_decode($alipayTradeOrderSettleApiInParam_2_5->getBizContent());

        $alipayTradeOrderSettleApiInParam_2_6 = new ApiParamModel();
        $alipayTradeOrderSettleApiInParam_2_6->setBaseType($alipayTradeOrderSettleApiInParam_2_6::$TYPE_BASETYPE);
        $alipayTradeOrderSettleApiInParam_2_6->setTitle("分账信息中分账百分比");
        $alipayTradeOrderSettleApiInParam_2_6->setDesc("取值范围为大于0，少于或等于100的整数。");
        $alipayTradeOrderSettleApiInParam_2_6->setIsMust(3);
        $alipayTradeOrderSettleApiInParam_2_6->setIsListType(false);
        $alipayTradeOrderSettleApiInParam_2_6->setFullParamName("royaltyParameters[0].amountPercentage");
        $alipayTradeOrderSettleApiInParam_2_6->setEnName("amount_percentage");
        $alipayTradeOrderSettleApiInParam_2_6->setChilds("");
        $alipayTradeOrderSettleApiInParam_2Childs[] = json_decode($alipayTradeOrderSettleApiInParam_2_6->getBizContent());

        $alipayTradeOrderSettleApiInParam_2_7 = new ApiParamModel();
        $alipayTradeOrderSettleApiInParam_2_7->setBaseType($alipayTradeOrderSettleApiInParam_2_7::$TYPE_BASETYPE);
        $alipayTradeOrderSettleApiInParam_2_7->setTitle("分账描述");
        $alipayTradeOrderSettleApiInParam_2_7->setDesc("");
        $alipayTradeOrderSettleApiInParam_2_7->setIsMust(3);
        $alipayTradeOrderSettleApiInParam_2_7->setIsListType(false);
        $alipayTradeOrderSettleApiInParam_2_7->setFullParamName("royaltyParameters[0].desc");
        $alipayTradeOrderSettleApiInParam_2_7->setEnName("desc");
        $alipayTradeOrderSettleApiInParam_2_7->setChilds("");
        $alipayTradeOrderSettleApiInParam_2Childs[] = json_decode($alipayTradeOrderSettleApiInParam_2_7->getBizContent());

            $alipayTradeOrderSettleApiInParam_2->setChilds($alipayTradeOrderSettleApiInParam_2Childs);

        $alipayTradeOrderSettleApiInParamChilds[] = json_decode($alipayTradeOrderSettleApiInParam_2->getBizContent());

        $alipayTradeOrderSettleApiInParam_3 = new ApiParamModel();
        $alipayTradeOrderSettleApiInParam_3->setBaseType($alipayTradeOrderSettleApiInParam_3::$TYPE_BASETYPE);
        $alipayTradeOrderSettleApiInParam_3->setTitle("操作员id");
        $alipayTradeOrderSettleApiInParam_3->setDesc("");
        $alipayTradeOrderSettleApiInParam_3->setIsMust(3);
        $alipayTradeOrderSettleApiInParam_3->setIsListType(false);
        $alipayTradeOrderSettleApiInParam_3->setFullParamName("operatorId");
        $alipayTradeOrderSettleApiInParam_3->setEnName("operator_id");
        $alipayTradeOrderSettleApiInParam_3->setChilds("");
        $alipayTradeOrderSettleApiInParamChilds[] = json_decode($alipayTradeOrderSettleApiInParam_3->getBizContent());

        $alipayTradeOrderSettleInfoModel->setApiInParam($alipayTradeOrderSettleApiInParamChilds);

        $alipayTradeOrderSettleApiOutParamChilds[] = new ApiParamModel();

            $alipayTradeOrderSettleApiOutParam_0 = new ApiParamModel();
        $alipayTradeOrderSettleApiOutParam_0->setBaseType($alipayTradeOrderSettleApiOutParam_0::$TYPE_BASETYPE);
        $alipayTradeOrderSettleApiOutParam_0->setTitle("支付宝交易号");
        $alipayTradeOrderSettleApiOutParam_0->setDesc("");
        $alipayTradeOrderSettleApiOutParam_0->setIsMust(1);
        $alipayTradeOrderSettleApiOutParam_0->setIsListType(false);
        $alipayTradeOrderSettleApiOutParam_0->setFullParamName("tradeNo");
        $alipayTradeOrderSettleApiOutParam_0->setEnName("trade_no");
        $alipayTradeOrderSettleApiOutParam_0->setChilds("");
        $alipayTradeOrderSettleApiOutParamChilds[] = json_decode($alipayTradeOrderSettleApiOutParam_0->getBizContent());

        $alipayTradeOrderSettleInfoModel->setApiOutParam($alipayTradeOrderSettleApiOutParamChilds);

        $list[] = json_decode($alipayTradeOrderSettleInfoModel->getBizContent());
        $alipayTradeFastpayRefundQueryInfoModel = new ApiInfoModel();
        
        $alipayTradeFastpayRefundQueryInfoModel->setApiName("alipay.trade.fastpay.refund.query");
        $alipayTradeFastpayRefundQueryInfoModel->setApiZhName("统一收单交易退款查询");
        $alipayTradeFastpayRefundQueryInfoModel->setInvokeType($alipayTradeFastpayRefundQueryInfoModel::$INVOKE_TYPE_REQUEST);
            // $alipayTradeFastpayRefundQueryApiInParamChilds[] = new ApiParamModel();
            $alipayTradeFastpayRefundQueryApiInParam_2 = new ApiParamModel();
        $alipayTradeFastpayRefundQueryApiInParam_2->setBaseType($alipayTradeFastpayRefundQueryApiInParam_2::$TYPE_BASETYPE);
        $alipayTradeFastpayRefundQueryApiInParam_2->setTitle("请求退款接口时");
        $alipayTradeFastpayRefundQueryApiInParam_2->setDesc("传入的退款请求号，如果在退款请求时未传入，则该值为创建交易时的外部交易号");
        $alipayTradeFastpayRefundQueryApiInParam_2->setIsMust(1);
        $alipayTradeFastpayRefundQueryApiInParam_2->setIsListType(false);
        $alipayTradeFastpayRefundQueryApiInParam_2->setFullParamName("outRequestNo");
        $alipayTradeFastpayRefundQueryApiInParam_2->setEnName("out_request_no");
        $alipayTradeFastpayRefundQueryApiInParam_2->setChilds("");
        $alipayTradeFastpayRefundQueryApiInParamChilds[] = json_decode($alipayTradeFastpayRefundQueryApiInParam_2->getBizContent());

        $alipayTradeFastpayRefundQueryApiInParam_0 = new ApiParamModel();
        $alipayTradeFastpayRefundQueryApiInParam_0->setBaseType($alipayTradeFastpayRefundQueryApiInParam_0::$TYPE_BASETYPE);
        $alipayTradeFastpayRefundQueryApiInParam_0->setTitle("支付宝交易号");
        $alipayTradeFastpayRefundQueryApiInParam_0->setDesc("和商户订单号不能同时为空");
        $alipayTradeFastpayRefundQueryApiInParam_0->setIsMust(2);
        $alipayTradeFastpayRefundQueryApiInParam_0->setIsListType(false);
        $alipayTradeFastpayRefundQueryApiInParam_0->setFullParamName("tradeNo");
        $alipayTradeFastpayRefundQueryApiInParam_0->setEnName("trade_no");
        $alipayTradeFastpayRefundQueryApiInParam_0->setChilds("");
        $alipayTradeFastpayRefundQueryApiInParamChilds[] = json_decode($alipayTradeFastpayRefundQueryApiInParam_0->getBizContent());

        $alipayTradeFastpayRefundQueryApiInParam_1 = new ApiParamModel();
        $alipayTradeFastpayRefundQueryApiInParam_1->setBaseType($alipayTradeFastpayRefundQueryApiInParam_1::$TYPE_BASETYPE);
        $alipayTradeFastpayRefundQueryApiInParam_1->setTitle("订单支付时传入的商户订单号");
        $alipayTradeFastpayRefundQueryApiInParam_1->setDesc("和支付宝交易号不能同时为空。 trade_no,out_trade_no如果同时存在优先取trade_no");
        $alipayTradeFastpayRefundQueryApiInParam_1->setIsMust(2);
        $alipayTradeFastpayRefundQueryApiInParam_1->setIsListType(false);
        $alipayTradeFastpayRefundQueryApiInParam_1->setFullParamName("outTradeNo");
        $alipayTradeFastpayRefundQueryApiInParam_1->setEnName("out_trade_no");
        $alipayTradeFastpayRefundQueryApiInParam_1->setChilds("");
        $alipayTradeFastpayRefundQueryApiInParamChilds[] = json_decode($alipayTradeFastpayRefundQueryApiInParam_1->getBizContent());

        $alipayTradeFastpayRefundQueryInfoModel->setApiInParam($alipayTradeFastpayRefundQueryApiInParamChilds);

        $alipayTradeFastpayRefundQueryApiOutParamChilds[] = new ApiParamModel();

            $alipayTradeFastpayRefundQueryApiOutParam_0 = new ApiParamModel();
        $alipayTradeFastpayRefundQueryApiOutParam_0->setBaseType($alipayTradeFastpayRefundQueryApiOutParam_0::$TYPE_BASETYPE);
        $alipayTradeFastpayRefundQueryApiOutParam_0->setTitle("支付宝交易号");
        $alipayTradeFastpayRefundQueryApiOutParam_0->setDesc("");
        $alipayTradeFastpayRefundQueryApiOutParam_0->setIsMust(2);
        $alipayTradeFastpayRefundQueryApiOutParam_0->setIsListType(false);
        $alipayTradeFastpayRefundQueryApiOutParam_0->setFullParamName("tradeNo");
        $alipayTradeFastpayRefundQueryApiOutParam_0->setEnName("trade_no");
        $alipayTradeFastpayRefundQueryApiOutParam_0->setChilds("");
        $alipayTradeFastpayRefundQueryApiOutParamChilds[] = json_decode($alipayTradeFastpayRefundQueryApiOutParam_0->getBizContent());

        $alipayTradeFastpayRefundQueryApiOutParam_1 = new ApiParamModel();
        $alipayTradeFastpayRefundQueryApiOutParam_1->setBaseType($alipayTradeFastpayRefundQueryApiOutParam_1::$TYPE_BASETYPE);
        $alipayTradeFastpayRefundQueryApiOutParam_1->setTitle("创建交易传入的商户订单号");
        $alipayTradeFastpayRefundQueryApiOutParam_1->setDesc("");
        $alipayTradeFastpayRefundQueryApiOutParam_1->setIsMust(2);
        $alipayTradeFastpayRefundQueryApiOutParam_1->setIsListType(false);
        $alipayTradeFastpayRefundQueryApiOutParam_1->setFullParamName("outTradeNo");
        $alipayTradeFastpayRefundQueryApiOutParam_1->setEnName("out_trade_no");
        $alipayTradeFastpayRefundQueryApiOutParam_1->setChilds("");
        $alipayTradeFastpayRefundQueryApiOutParamChilds[] = json_decode($alipayTradeFastpayRefundQueryApiOutParam_1->getBizContent());

        $alipayTradeFastpayRefundQueryApiOutParam_2 = new ApiParamModel();
        $alipayTradeFastpayRefundQueryApiOutParam_2->setBaseType($alipayTradeFastpayRefundQueryApiOutParam_2::$TYPE_BASETYPE);
        $alipayTradeFastpayRefundQueryApiOutParam_2->setTitle("本笔退款对应的退款请求号");
        $alipayTradeFastpayRefundQueryApiOutParam_2->setDesc("");
        $alipayTradeFastpayRefundQueryApiOutParam_2->setIsMust(2);
        $alipayTradeFastpayRefundQueryApiOutParam_2->setIsListType(false);
        $alipayTradeFastpayRefundQueryApiOutParam_2->setFullParamName("outRequestNo");
        $alipayTradeFastpayRefundQueryApiOutParam_2->setEnName("out_request_no");
        $alipayTradeFastpayRefundQueryApiOutParam_2->setChilds("");
        $alipayTradeFastpayRefundQueryApiOutParamChilds[] = json_decode($alipayTradeFastpayRefundQueryApiOutParam_2->getBizContent());

        $alipayTradeFastpayRefundQueryApiOutParam_3 = new ApiParamModel();
        $alipayTradeFastpayRefundQueryApiOutParam_3->setBaseType($alipayTradeFastpayRefundQueryApiOutParam_3::$TYPE_BASETYPE);
        $alipayTradeFastpayRefundQueryApiOutParam_3->setTitle("发起退款时");
        $alipayTradeFastpayRefundQueryApiOutParam_3->setDesc("传入的退款原因");
        $alipayTradeFastpayRefundQueryApiOutParam_3->setIsMust(2);
        $alipayTradeFastpayRefundQueryApiOutParam_3->setIsListType(false);
        $alipayTradeFastpayRefundQueryApiOutParam_3->setFullParamName("refundReason");
        $alipayTradeFastpayRefundQueryApiOutParam_3->setEnName("refund_reason");
        $alipayTradeFastpayRefundQueryApiOutParam_3->setChilds("");
        $alipayTradeFastpayRefundQueryApiOutParamChilds[] = json_decode($alipayTradeFastpayRefundQueryApiOutParam_3->getBizContent());

        $alipayTradeFastpayRefundQueryApiOutParam_4 = new ApiParamModel();
        $alipayTradeFastpayRefundQueryApiOutParam_4->setBaseType($alipayTradeFastpayRefundQueryApiOutParam_4::$TYPE_BASETYPE);
        $alipayTradeFastpayRefundQueryApiOutParam_4->setTitle("该笔退款所对应的交易的订单金额");
        $alipayTradeFastpayRefundQueryApiOutParam_4->setDesc("");
        $alipayTradeFastpayRefundQueryApiOutParam_4->setIsMust(2);
        $alipayTradeFastpayRefundQueryApiOutParam_4->setIsListType(false);
        $alipayTradeFastpayRefundQueryApiOutParam_4->setFullParamName("totalAmount");
        $alipayTradeFastpayRefundQueryApiOutParam_4->setEnName("total_amount");
        $alipayTradeFastpayRefundQueryApiOutParam_4->setChilds("");
        $alipayTradeFastpayRefundQueryApiOutParamChilds[] = json_decode($alipayTradeFastpayRefundQueryApiOutParam_4->getBizContent());

        $alipayTradeFastpayRefundQueryApiOutParam_5 = new ApiParamModel();
        $alipayTradeFastpayRefundQueryApiOutParam_5->setBaseType($alipayTradeFastpayRefundQueryApiOutParam_5::$TYPE_BASETYPE);
        $alipayTradeFastpayRefundQueryApiOutParam_5->setTitle("本次退款请求");
        $alipayTradeFastpayRefundQueryApiOutParam_5->setDesc("对应的退款金额");
        $alipayTradeFastpayRefundQueryApiOutParam_5->setIsMust(2);
        $alipayTradeFastpayRefundQueryApiOutParam_5->setIsListType(false);
        $alipayTradeFastpayRefundQueryApiOutParam_5->setFullParamName("refundAmount");
        $alipayTradeFastpayRefundQueryApiOutParam_5->setEnName("refund_amount");
        $alipayTradeFastpayRefundQueryApiOutParam_5->setChilds("");
        $alipayTradeFastpayRefundQueryApiOutParamChilds[] = json_decode($alipayTradeFastpayRefundQueryApiOutParam_5->getBizContent());

        $alipayTradeFastpayRefundQueryApiOutParam_6 = new ApiParamModel();
        $alipayTradeFastpayRefundQueryApiOutParam_6->setBaseType($alipayTradeFastpayRefundQueryApiOutParam_6::$TYPE_BASETYPE);
        $alipayTradeFastpayRefundQueryApiOutParam_6->setTitle("行业特殊信息（例如在医保卡支付退款中");
        $alipayTradeFastpayRefundQueryApiOutParam_6->setDesc("医保局向商户返回医疗信息）。");
        $alipayTradeFastpayRefundQueryApiOutParam_6->setIsMust(2);
        $alipayTradeFastpayRefundQueryApiOutParam_6->setIsListType(false);
        $alipayTradeFastpayRefundQueryApiOutParam_6->setFullParamName("industrySepcDetail");
        $alipayTradeFastpayRefundQueryApiOutParam_6->setEnName("industry_sepc_detail");
        $alipayTradeFastpayRefundQueryApiOutParam_6->setChilds("");
        $alipayTradeFastpayRefundQueryApiOutParamChilds[] = json_decode($alipayTradeFastpayRefundQueryApiOutParam_6->getBizContent());

        $alipayTradeFastpayRefundQueryApiOutParam_7 = new ApiParamModel();
        $alipayTradeFastpayRefundQueryApiOutParam_7->setBaseType($alipayTradeFastpayRefundQueryApiOutParam_7::$TYPE_BASETYPE);
        $alipayTradeFastpayRefundQueryApiOutParam_7->setTitle("只在使用异步退款接口情况下才返回该字段");
        $alipayTradeFastpayRefundQueryApiOutParam_7->setDesc("REFUND_PROCESSING 退款处理中；REFUND_SUCCESS 退款处理成功；REFUND_FAIL 退款失败;");
        $alipayTradeFastpayRefundQueryApiOutParam_7->setIsMust(2);
        $alipayTradeFastpayRefundQueryApiOutParam_7->setIsListType(false);
        $alipayTradeFastpayRefundQueryApiOutParam_7->setFullParamName("refundStatus");
        $alipayTradeFastpayRefundQueryApiOutParam_7->setEnName("refund_status");
        $alipayTradeFastpayRefundQueryApiOutParam_7->setChilds("");
        $alipayTradeFastpayRefundQueryApiOutParamChilds[] = json_decode($alipayTradeFastpayRefundQueryApiOutParam_7->getBizContent());

        $alipayTradeFastpayRefundQueryApiOutParam_8 = new ApiParamModel();
        $alipayTradeFastpayRefundQueryApiOutParam_8->setBaseType($alipayTradeFastpayRefundQueryApiOutParam_8::$TYPE_BASETYPE);
        $alipayTradeFastpayRefundQueryApiOutParam_8->setTitle("退款失败错误码");
        $alipayTradeFastpayRefundQueryApiOutParam_8->setDesc("只在使用异步退款接口情况下才会返回该字段");
        $alipayTradeFastpayRefundQueryApiOutParam_8->setIsMust(2);
        $alipayTradeFastpayRefundQueryApiOutParam_8->setIsListType(false);
        $alipayTradeFastpayRefundQueryApiOutParam_8->setFullParamName("errorCode");
        $alipayTradeFastpayRefundQueryApiOutParam_8->setEnName("error_code");
        $alipayTradeFastpayRefundQueryApiOutParam_8->setChilds("");
        $alipayTradeFastpayRefundQueryApiOutParamChilds[] = json_decode($alipayTradeFastpayRefundQueryApiOutParam_8->getBizContent());

        $alipayTradeFastpayRefundQueryApiOutParam_9 = new ApiParamModel();
        $alipayTradeFastpayRefundQueryApiOutParam_9->setBaseType($alipayTradeFastpayRefundQueryApiOutParam_9::$TYPE_COMPLEXTYPE);
        $alipayTradeFastpayRefundQueryApiOutParam_9->setTitle("退分账明细信息");
        $alipayTradeFastpayRefundQueryApiOutParam_9->setDesc("");
        $alipayTradeFastpayRefundQueryApiOutParam_9->setIsMust(2);
        $alipayTradeFastpayRefundQueryApiOutParam_9->setIsListType(true);
        $alipayTradeFastpayRefundQueryApiOutParam_9->setFullParamName("refundRoyaltys[0]");
        $alipayTradeFastpayRefundQueryApiOutParam_9->setEnName("refund_royaltys");
        $alipayTradeFastpayRefundQueryApiOutParam_9->setChilds("");
    
    // $alipayTradeFastpayRefundQueryApiOutParam_9Childs[] = new ApiParamModel();

            $alipayTradeFastpayRefundQueryApiOutParam_9_0 = new ApiParamModel();
        $alipayTradeFastpayRefundQueryApiOutParam_9_0->setBaseType($alipayTradeFastpayRefundQueryApiOutParam_9_0::$TYPE_BASETYPE);
        $alipayTradeFastpayRefundQueryApiOutParam_9_0->setTitle("退分润金额");
        $alipayTradeFastpayRefundQueryApiOutParam_9_0->setDesc("");
        $alipayTradeFastpayRefundQueryApiOutParam_9_0->setIsMust(1);
        $alipayTradeFastpayRefundQueryApiOutParam_9_0->setIsListType(false);
        $alipayTradeFastpayRefundQueryApiOutParam_9_0->setFullParamName("refundRoyaltys[0].refundAmount");
        $alipayTradeFastpayRefundQueryApiOutParam_9_0->setEnName("refund_amount");
        $alipayTradeFastpayRefundQueryApiOutParam_9_0->setChilds("");
        $alipayTradeFastpayRefundQueryApiOutParam_9Childs[] = json_decode($alipayTradeFastpayRefundQueryApiOutParam_9_0->getBizContent());

        $alipayTradeFastpayRefundQueryApiOutParam_9_1 = new ApiParamModel();
        $alipayTradeFastpayRefundQueryApiOutParam_9_1->setBaseType($alipayTradeFastpayRefundQueryApiOutParam_9_1::$TYPE_BASETYPE);
        $alipayTradeFastpayRefundQueryApiOutParam_9_1->setTitle("退分润结果码");
        $alipayTradeFastpayRefundQueryApiOutParam_9_1->setDesc("");
        $alipayTradeFastpayRefundQueryApiOutParam_9_1->setIsMust(1);
        $alipayTradeFastpayRefundQueryApiOutParam_9_1->setIsListType(false);
        $alipayTradeFastpayRefundQueryApiOutParam_9_1->setFullParamName("refundRoyaltys[0].resultCode");
        $alipayTradeFastpayRefundQueryApiOutParam_9_1->setEnName("result_code");
        $alipayTradeFastpayRefundQueryApiOutParam_9_1->setChilds("");
        $alipayTradeFastpayRefundQueryApiOutParam_9Childs[] = json_decode($alipayTradeFastpayRefundQueryApiOutParam_9_1->getBizContent());

        $alipayTradeFastpayRefundQueryApiOutParam_9_2 = new ApiParamModel();
        $alipayTradeFastpayRefundQueryApiOutParam_9_2->setBaseType($alipayTradeFastpayRefundQueryApiOutParam_9_2::$TYPE_BASETYPE);
        $alipayTradeFastpayRefundQueryApiOutParam_9_2->setTitle("转出人支付宝账号对应用户ID");
        $alipayTradeFastpayRefundQueryApiOutParam_9_2->setDesc("");
        $alipayTradeFastpayRefundQueryApiOutParam_9_2->setIsMust(3);
        $alipayTradeFastpayRefundQueryApiOutParam_9_2->setIsListType(false);
        $alipayTradeFastpayRefundQueryApiOutParam_9_2->setFullParamName("refundRoyaltys[0].transOut");
        $alipayTradeFastpayRefundQueryApiOutParam_9_2->setEnName("trans_out");
        $alipayTradeFastpayRefundQueryApiOutParam_9_2->setChilds("");
        $alipayTradeFastpayRefundQueryApiOutParam_9Childs[] = json_decode($alipayTradeFastpayRefundQueryApiOutParam_9_2->getBizContent());

        $alipayTradeFastpayRefundQueryApiOutParam_9_3 = new ApiParamModel();
        $alipayTradeFastpayRefundQueryApiOutParam_9_3->setBaseType($alipayTradeFastpayRefundQueryApiOutParam_9_3::$TYPE_BASETYPE);
        $alipayTradeFastpayRefundQueryApiOutParam_9_3->setTitle("转出人支付宝账号");
        $alipayTradeFastpayRefundQueryApiOutParam_9_3->setDesc("");
        $alipayTradeFastpayRefundQueryApiOutParam_9_3->setIsMust(3);
        $alipayTradeFastpayRefundQueryApiOutParam_9_3->setIsListType(false);
        $alipayTradeFastpayRefundQueryApiOutParam_9_3->setFullParamName("refundRoyaltys[0].transOutEmail");
        $alipayTradeFastpayRefundQueryApiOutParam_9_3->setEnName("trans_out_email");
        $alipayTradeFastpayRefundQueryApiOutParam_9_3->setChilds("");
        $alipayTradeFastpayRefundQueryApiOutParam_9Childs[] = json_decode($alipayTradeFastpayRefundQueryApiOutParam_9_3->getBizContent());

        $alipayTradeFastpayRefundQueryApiOutParam_9_4 = new ApiParamModel();
        $alipayTradeFastpayRefundQueryApiOutParam_9_4->setBaseType($alipayTradeFastpayRefundQueryApiOutParam_9_4::$TYPE_BASETYPE);
        $alipayTradeFastpayRefundQueryApiOutParam_9_4->setTitle("转入人支付宝账号对应用户ID");
        $alipayTradeFastpayRefundQueryApiOutParam_9_4->setDesc("");
        $alipayTradeFastpayRefundQueryApiOutParam_9_4->setIsMust(3);
        $alipayTradeFastpayRefundQueryApiOutParam_9_4->setIsListType(false);
        $alipayTradeFastpayRefundQueryApiOutParam_9_4->setFullParamName("refundRoyaltys[0].transIn");
        $alipayTradeFastpayRefundQueryApiOutParam_9_4->setEnName("trans_in");
        $alipayTradeFastpayRefundQueryApiOutParam_9_4->setChilds("");
        $alipayTradeFastpayRefundQueryApiOutParam_9Childs[] = json_decode($alipayTradeFastpayRefundQueryApiOutParam_9_4->getBizContent());

        $alipayTradeFastpayRefundQueryApiOutParam_9_5 = new ApiParamModel();
        $alipayTradeFastpayRefundQueryApiOutParam_9_5->setBaseType($alipayTradeFastpayRefundQueryApiOutParam_9_5::$TYPE_BASETYPE);
        $alipayTradeFastpayRefundQueryApiOutParam_9_5->setTitle("转入人支付宝账号");
        $alipayTradeFastpayRefundQueryApiOutParam_9_5->setDesc("");
        $alipayTradeFastpayRefundQueryApiOutParam_9_5->setIsMust(3);
        $alipayTradeFastpayRefundQueryApiOutParam_9_5->setIsListType(false);
        $alipayTradeFastpayRefundQueryApiOutParam_9_5->setFullParamName("refundRoyaltys[0].transInEmail");
        $alipayTradeFastpayRefundQueryApiOutParam_9_5->setEnName("trans_in_email");
        $alipayTradeFastpayRefundQueryApiOutParam_9_5->setChilds("");
        $alipayTradeFastpayRefundQueryApiOutParam_9Childs[] = json_decode($alipayTradeFastpayRefundQueryApiOutParam_9_5->getBizContent());

            $alipayTradeFastpayRefundQueryApiOutParam_9->setChilds($alipayTradeFastpayRefundQueryApiOutParam_9Childs);

        $alipayTradeFastpayRefundQueryApiOutParamChilds[] = json_decode($alipayTradeFastpayRefundQueryApiOutParam_9->getBizContent());

        $alipayTradeFastpayRefundQueryApiOutParam_10 = new ApiParamModel();
        $alipayTradeFastpayRefundQueryApiOutParam_10->setBaseType($alipayTradeFastpayRefundQueryApiOutParam_10::$TYPE_BASETYPE);
        $alipayTradeFastpayRefundQueryApiOutParam_10->setTitle("本次退款金额中买家退款金额");
        $alipayTradeFastpayRefundQueryApiOutParam_10->setDesc("");
        $alipayTradeFastpayRefundQueryApiOutParam_10->setIsMust(2);
        $alipayTradeFastpayRefundQueryApiOutParam_10->setIsListType(false);
        $alipayTradeFastpayRefundQueryApiOutParam_10->setFullParamName("presentRefundBuyerAmount");
        $alipayTradeFastpayRefundQueryApiOutParam_10->setEnName("present_refund_buyer_amount");
        $alipayTradeFastpayRefundQueryApiOutParam_10->setChilds("");
        $alipayTradeFastpayRefundQueryApiOutParamChilds[] = json_decode($alipayTradeFastpayRefundQueryApiOutParam_10->getBizContent());

        $alipayTradeFastpayRefundQueryApiOutParam_11 = new ApiParamModel();
        $alipayTradeFastpayRefundQueryApiOutParam_11->setBaseType($alipayTradeFastpayRefundQueryApiOutParam_11::$TYPE_BASETYPE);
        $alipayTradeFastpayRefundQueryApiOutParam_11->setTitle("本次退款金额中平台优惠退款金额");
        $alipayTradeFastpayRefundQueryApiOutParam_11->setDesc("");
        $alipayTradeFastpayRefundQueryApiOutParam_11->setIsMust(2);
        $alipayTradeFastpayRefundQueryApiOutParam_11->setIsListType(false);
        $alipayTradeFastpayRefundQueryApiOutParam_11->setFullParamName("presentRefundDiscountAmount");
        $alipayTradeFastpayRefundQueryApiOutParam_11->setEnName("present_refund_discount_amount");
        $alipayTradeFastpayRefundQueryApiOutParam_11->setChilds("");
        $alipayTradeFastpayRefundQueryApiOutParamChilds[] = json_decode($alipayTradeFastpayRefundQueryApiOutParam_11->getBizContent());

        $alipayTradeFastpayRefundQueryApiOutParam_12 = new ApiParamModel();
        $alipayTradeFastpayRefundQueryApiOutParam_12->setBaseType($alipayTradeFastpayRefundQueryApiOutParam_12::$TYPE_BASETYPE);
        $alipayTradeFastpayRefundQueryApiOutParam_12->setTitle("本次退款金额中商家优惠退款金额");
        $alipayTradeFastpayRefundQueryApiOutParam_12->setDesc("");
        $alipayTradeFastpayRefundQueryApiOutParam_12->setIsMust(2);
        $alipayTradeFastpayRefundQueryApiOutParam_12->setIsListType(false);
        $alipayTradeFastpayRefundQueryApiOutParam_12->setFullParamName("presentRefundMdiscountAmount");
        $alipayTradeFastpayRefundQueryApiOutParam_12->setEnName("present_refund_mdiscount_amount");
        $alipayTradeFastpayRefundQueryApiOutParam_12->setChilds("");
        $alipayTradeFastpayRefundQueryApiOutParamChilds[] = json_decode($alipayTradeFastpayRefundQueryApiOutParam_12->getBizContent());

        $alipayTradeFastpayRefundQueryInfoModel->setApiOutParam($alipayTradeFastpayRefundQueryApiOutParamChilds);

        $list[] = json_decode($alipayTradeFastpayRefundQueryInfoModel->getBizContent());
        $alipayTradeCloseInfoModel = new ApiInfoModel();
        
        $alipayTradeCloseInfoModel->setApiName("alipay.trade.close");
        $alipayTradeCloseInfoModel->setApiZhName("统一收单交易关闭接口");
        $alipayTradeCloseInfoModel->setInvokeType($alipayTradeCloseInfoModel::$INVOKE_TYPE_REQUEST);
            // $alipayTradeCloseApiInParamChilds[] = new ApiParamModel();
            $alipayTradeCloseApiInParam_2 = new ApiParamModel();
        $alipayTradeCloseApiInParam_2->setBaseType($alipayTradeCloseApiInParam_2::$TYPE_BASETYPE);
        $alipayTradeCloseApiInParam_2->setTitle("卖家端自定义的的操作员");
        $alipayTradeCloseApiInParam_2->setDesc("ID");
        $alipayTradeCloseApiInParam_2->setIsMust(3);
        $alipayTradeCloseApiInParam_2->setIsListType(false);
        $alipayTradeCloseApiInParam_2->setFullParamName("operatorId");
        $alipayTradeCloseApiInParam_2->setEnName("operator_id");
        $alipayTradeCloseApiInParam_2->setChilds("");
        $alipayTradeCloseApiInParamChilds[] = json_decode($alipayTradeCloseApiInParam_2->getBizContent());

        $alipayTradeCloseApiInParam_0 = new ApiParamModel();
        $alipayTradeCloseApiInParam_0->setBaseType($alipayTradeCloseApiInParam_0::$TYPE_BASETYPE);
        $alipayTradeCloseApiInParam_0->setTitle("该交易在支付宝系统中的交易流水号");
        $alipayTradeCloseApiInParam_0->setDesc("最短 16 位，最长 64 位。和out_trade_no不能同时为空，如果同时传了 out_trade_no和 trade_no，则以 trade_no为准。");
        $alipayTradeCloseApiInParam_0->setIsMust(2);
        $alipayTradeCloseApiInParam_0->setIsListType(false);
        $alipayTradeCloseApiInParam_0->setFullParamName("tradeNo");
        $alipayTradeCloseApiInParam_0->setEnName("trade_no");
        $alipayTradeCloseApiInParam_0->setChilds("");
        $alipayTradeCloseApiInParamChilds[] = json_decode($alipayTradeCloseApiInParam_0->getBizContent());

        $alipayTradeCloseApiInParam_1 = new ApiParamModel();
        $alipayTradeCloseApiInParam_1->setBaseType($alipayTradeCloseApiInParam_1::$TYPE_BASETYPE);
        $alipayTradeCloseApiInParam_1->setTitle("订单支付时传入的商户订单号");
        $alipayTradeCloseApiInParam_1->setDesc("和支付宝交易号不能同时为空。 trade_no,out_trade_no如果同时存在优先取trade_no");
        $alipayTradeCloseApiInParam_1->setIsMust(2);
        $alipayTradeCloseApiInParam_1->setIsListType(false);
        $alipayTradeCloseApiInParam_1->setFullParamName("outTradeNo");
        $alipayTradeCloseApiInParam_1->setEnName("out_trade_no");
        $alipayTradeCloseApiInParam_1->setChilds("");
        $alipayTradeCloseApiInParamChilds[] = json_decode($alipayTradeCloseApiInParam_1->getBizContent());

        $alipayTradeCloseInfoModel->setApiInParam($alipayTradeCloseApiInParamChilds);

        $alipayTradeCloseApiOutParamChilds[] = new ApiParamModel();

            $alipayTradeCloseApiOutParam_0 = new ApiParamModel();
        $alipayTradeCloseApiOutParam_0->setBaseType($alipayTradeCloseApiOutParam_0::$TYPE_BASETYPE);
        $alipayTradeCloseApiOutParam_0->setTitle("支付宝交易号");
        $alipayTradeCloseApiOutParam_0->setDesc("");
        $alipayTradeCloseApiOutParam_0->setIsMust(2);
        $alipayTradeCloseApiOutParam_0->setIsListType(false);
        $alipayTradeCloseApiOutParam_0->setFullParamName("tradeNo");
        $alipayTradeCloseApiOutParam_0->setEnName("trade_no");
        $alipayTradeCloseApiOutParam_0->setChilds("");
        $alipayTradeCloseApiOutParamChilds[] = json_decode($alipayTradeCloseApiOutParam_0->getBizContent());

        $alipayTradeCloseApiOutParam_1 = new ApiParamModel();
        $alipayTradeCloseApiOutParam_1->setBaseType($alipayTradeCloseApiOutParam_1::$TYPE_BASETYPE);
        $alipayTradeCloseApiOutParam_1->setTitle("创建交易传入的商户订单号");
        $alipayTradeCloseApiOutParam_1->setDesc("");
        $alipayTradeCloseApiOutParam_1->setIsMust(2);
        $alipayTradeCloseApiOutParam_1->setIsListType(false);
        $alipayTradeCloseApiOutParam_1->setFullParamName("outTradeNo");
        $alipayTradeCloseApiOutParam_1->setEnName("out_trade_no");
        $alipayTradeCloseApiOutParam_1->setChilds("");
        $alipayTradeCloseApiOutParamChilds[] = json_decode($alipayTradeCloseApiOutParam_1->getBizContent());

        $alipayTradeCloseInfoModel->setApiOutParam($alipayTradeCloseApiOutParamChilds);

        $list[] = json_decode($alipayTradeCloseInfoModel->getBizContent());
        $alipayTradeCancelInfoModel = new ApiInfoModel();
        
        $alipayTradeCancelInfoModel->setApiName("alipay.trade.cancel");
        $alipayTradeCancelInfoModel->setApiZhName("统一收单交易撤销接口");
        $alipayTradeCancelInfoModel->setInvokeType($alipayTradeCancelInfoModel::$INVOKE_TYPE_REQUEST);
            // $alipayTradeCancelApiInParamChilds[] = new ApiParamModel();
            $alipayTradeCancelApiInParam_0 = new ApiParamModel();
        $alipayTradeCancelApiInParam_0->setBaseType($alipayTradeCancelApiInParam_0::$TYPE_BASETYPE);
        $alipayTradeCancelApiInParam_0->setTitle("原支付请求的商户订单号");
        $alipayTradeCancelApiInParam_0->setDesc("和支付宝交易号不能同时为空");
        $alipayTradeCancelApiInParam_0->setIsMust(2);
        $alipayTradeCancelApiInParam_0->setIsListType(false);
        $alipayTradeCancelApiInParam_0->setFullParamName("outTradeNo");
        $alipayTradeCancelApiInParam_0->setEnName("out_trade_no");
        $alipayTradeCancelApiInParam_0->setChilds("");
        $alipayTradeCancelApiInParamChilds[] = json_decode($alipayTradeCancelApiInParam_0->getBizContent());

        $alipayTradeCancelApiInParam_1 = new ApiParamModel();
        $alipayTradeCancelApiInParam_1->setBaseType($alipayTradeCancelApiInParam_1::$TYPE_BASETYPE);
        $alipayTradeCancelApiInParam_1->setTitle("支付宝交易号");
        $alipayTradeCancelApiInParam_1->setDesc("和商户订单号不能同时为空");
        $alipayTradeCancelApiInParam_1->setIsMust(2);
        $alipayTradeCancelApiInParam_1->setIsListType(false);
        $alipayTradeCancelApiInParam_1->setFullParamName("tradeNo");
        $alipayTradeCancelApiInParam_1->setEnName("trade_no");
        $alipayTradeCancelApiInParam_1->setChilds("");
        $alipayTradeCancelApiInParamChilds[] = json_decode($alipayTradeCancelApiInParam_1->getBizContent());

        $alipayTradeCancelInfoModel->setApiInParam($alipayTradeCancelApiInParamChilds);

        $alipayTradeCancelApiOutParamChilds[] = new ApiParamModel();

            $alipayTradeCancelApiOutParam_0 = new ApiParamModel();
        $alipayTradeCancelApiOutParam_0->setBaseType($alipayTradeCancelApiOutParam_0::$TYPE_BASETYPE);
        $alipayTradeCancelApiOutParam_0->setTitle("支付宝交易号");
        $alipayTradeCancelApiOutParam_0->setDesc("");
        $alipayTradeCancelApiOutParam_0->setIsMust(1);
        $alipayTradeCancelApiOutParam_0->setIsListType(false);
        $alipayTradeCancelApiOutParam_0->setFullParamName("tradeNo");
        $alipayTradeCancelApiOutParam_0->setEnName("trade_no");
        $alipayTradeCancelApiOutParam_0->setChilds("");
        $alipayTradeCancelApiOutParamChilds[] = json_decode($alipayTradeCancelApiOutParam_0->getBizContent());

        $alipayTradeCancelApiOutParam_1 = new ApiParamModel();
        $alipayTradeCancelApiOutParam_1->setBaseType($alipayTradeCancelApiOutParam_1::$TYPE_BASETYPE);
        $alipayTradeCancelApiOutParam_1->setTitle("商户订单号");
        $alipayTradeCancelApiOutParam_1->setDesc("");
        $alipayTradeCancelApiOutParam_1->setIsMust(1);
        $alipayTradeCancelApiOutParam_1->setIsListType(false);
        $alipayTradeCancelApiOutParam_1->setFullParamName("outTradeNo");
        $alipayTradeCancelApiOutParam_1->setEnName("out_trade_no");
        $alipayTradeCancelApiOutParam_1->setChilds("");
        $alipayTradeCancelApiOutParamChilds[] = json_decode($alipayTradeCancelApiOutParam_1->getBizContent());

        $alipayTradeCancelApiOutParam_2 = new ApiParamModel();
        $alipayTradeCancelApiOutParam_2->setBaseType($alipayTradeCancelApiOutParam_2::$TYPE_BASETYPE);
        $alipayTradeCancelApiOutParam_2->setTitle("是否需要重试");
        $alipayTradeCancelApiOutParam_2->setDesc("");
        $alipayTradeCancelApiOutParam_2->setIsMust(1);
        $alipayTradeCancelApiOutParam_2->setIsListType(false);
        $alipayTradeCancelApiOutParam_2->setFullParamName("retryFlag");
        $alipayTradeCancelApiOutParam_2->setEnName("retry_flag");
        $alipayTradeCancelApiOutParam_2->setChilds("");
        $alipayTradeCancelApiOutParamChilds[] = json_decode($alipayTradeCancelApiOutParam_2->getBizContent());

        $alipayTradeCancelApiOutParam_3 = new ApiParamModel();
        $alipayTradeCancelApiOutParam_3->setBaseType($alipayTradeCancelApiOutParam_3::$TYPE_BASETYPE);
        $alipayTradeCancelApiOutParam_3->setTitle("本次撤销触发的交易动作");
        $alipayTradeCancelApiOutParam_3->setDesc(" close：关闭交易，无退款  refund：产生了退款");
        $alipayTradeCancelApiOutParam_3->setIsMust(1);
        $alipayTradeCancelApiOutParam_3->setIsListType(false);
        $alipayTradeCancelApiOutParam_3->setFullParamName("action");
        $alipayTradeCancelApiOutParam_3->setEnName("action");
        $alipayTradeCancelApiOutParam_3->setChilds("");
        $alipayTradeCancelApiOutParamChilds[] = json_decode($alipayTradeCancelApiOutParam_3->getBizContent());

        $alipayTradeCancelInfoModel->setApiOutParam($alipayTradeCancelApiOutParamChilds);

        $list[] = json_decode($alipayTradeCancelInfoModel->getBizContent());
        $alipayTradeQueryInfoModel = new ApiInfoModel();
        
        $alipayTradeQueryInfoModel->setApiName("alipay.trade.query");
        $alipayTradeQueryInfoModel->setApiZhName("统一收单线下交易查询");
        $alipayTradeQueryInfoModel->setInvokeType($alipayTradeQueryInfoModel::$INVOKE_TYPE_REQUEST);
            // $alipayTradeQueryApiInParamChilds[] = new ApiParamModel();
            $alipayTradeQueryApiInParam_0 = new ApiParamModel();
        $alipayTradeQueryApiInParam_0->setBaseType($alipayTradeQueryApiInParam_0::$TYPE_BASETYPE);
        $alipayTradeQueryApiInParam_0->setTitle("订单支付时传入的商户订单号");
        $alipayTradeQueryApiInParam_0->setDesc("和支付宝交易号不能同时为空。  trade_no,out_trade_no如果同时存在优先取trade_no");
        $alipayTradeQueryApiInParam_0->setIsMust(2);
        $alipayTradeQueryApiInParam_0->setIsListType(false);
        $alipayTradeQueryApiInParam_0->setFullParamName("outTradeNo");
        $alipayTradeQueryApiInParam_0->setEnName("out_trade_no");
        $alipayTradeQueryApiInParam_0->setChilds("");
        $alipayTradeQueryApiInParamChilds[] = json_decode($alipayTradeQueryApiInParam_0->getBizContent());

        $alipayTradeQueryApiInParam_1 = new ApiParamModel();
        $alipayTradeQueryApiInParam_1->setBaseType($alipayTradeQueryApiInParam_1::$TYPE_BASETYPE);
        $alipayTradeQueryApiInParam_1->setTitle("支付宝交易号");
        $alipayTradeQueryApiInParam_1->setDesc("和商户订单号不能同时为空");
        $alipayTradeQueryApiInParam_1->setIsMust(2);
        $alipayTradeQueryApiInParam_1->setIsListType(false);
        $alipayTradeQueryApiInParam_1->setFullParamName("tradeNo");
        $alipayTradeQueryApiInParam_1->setEnName("trade_no");
        $alipayTradeQueryApiInParam_1->setChilds("");
        $alipayTradeQueryApiInParamChilds[] = json_decode($alipayTradeQueryApiInParam_1->getBizContent());

        $alipayTradeQueryInfoModel->setApiInParam($alipayTradeQueryApiInParamChilds);

        $alipayTradeQueryApiOutParamChilds[] = new ApiParamModel();

            $alipayTradeQueryApiOutParam_0 = new ApiParamModel();
        $alipayTradeQueryApiOutParam_0->setBaseType($alipayTradeQueryApiOutParam_0::$TYPE_BASETYPE);
        $alipayTradeQueryApiOutParam_0->setTitle("支付宝交易号");
        $alipayTradeQueryApiOutParam_0->setDesc("");
        $alipayTradeQueryApiOutParam_0->setIsMust(1);
        $alipayTradeQueryApiOutParam_0->setIsListType(false);
        $alipayTradeQueryApiOutParam_0->setFullParamName("tradeNo");
        $alipayTradeQueryApiOutParam_0->setEnName("trade_no");
        $alipayTradeQueryApiOutParam_0->setChilds("");
        $alipayTradeQueryApiOutParamChilds[] = json_decode($alipayTradeQueryApiOutParam_0->getBizContent());

        $alipayTradeQueryApiOutParam_1 = new ApiParamModel();
        $alipayTradeQueryApiOutParam_1->setBaseType($alipayTradeQueryApiOutParam_1::$TYPE_BASETYPE);
        $alipayTradeQueryApiOutParam_1->setTitle("商家订单号");
        $alipayTradeQueryApiOutParam_1->setDesc("");
        $alipayTradeQueryApiOutParam_1->setIsMust(1);
        $alipayTradeQueryApiOutParam_1->setIsListType(false);
        $alipayTradeQueryApiOutParam_1->setFullParamName("outTradeNo");
        $alipayTradeQueryApiOutParam_1->setEnName("out_trade_no");
        $alipayTradeQueryApiOutParam_1->setChilds("");
        $alipayTradeQueryApiOutParamChilds[] = json_decode($alipayTradeQueryApiOutParam_1->getBizContent());

        $alipayTradeQueryApiOutParam_3 = new ApiParamModel();
        $alipayTradeQueryApiOutParam_3->setBaseType($alipayTradeQueryApiOutParam_3::$TYPE_BASETYPE);
        $alipayTradeQueryApiOutParam_3->setTitle("买家支付宝账号");
        $alipayTradeQueryApiOutParam_3->setDesc("");
        $alipayTradeQueryApiOutParam_3->setIsMust(1);
        $alipayTradeQueryApiOutParam_3->setIsListType(false);
        $alipayTradeQueryApiOutParam_3->setFullParamName("buyerLogonId");
        $alipayTradeQueryApiOutParam_3->setEnName("buyer_logon_id");
        $alipayTradeQueryApiOutParam_3->setChilds("");
        $alipayTradeQueryApiOutParamChilds[] = json_decode($alipayTradeQueryApiOutParam_3->getBizContent());

        $alipayTradeQueryApiOutParam_4 = new ApiParamModel();
        $alipayTradeQueryApiOutParam_4->setBaseType($alipayTradeQueryApiOutParam_4::$TYPE_BASETYPE);
        $alipayTradeQueryApiOutParam_4->setTitle("交易状态：WAIT_BUYER_PAY（交易创建");
        $alipayTradeQueryApiOutParam_4->setDesc("等待买家付款）、TRADE_CLOSED（未付款交易超时关闭，或支付完成后全额退款）、TRADE_SUCCESS（交易支付成功）、TRADE_FINISHED（交易结束，不可退款）");
        $alipayTradeQueryApiOutParam_4->setIsMust(1);
        $alipayTradeQueryApiOutParam_4->setIsListType(false);
        $alipayTradeQueryApiOutParam_4->setFullParamName("tradeStatus");
        $alipayTradeQueryApiOutParam_4->setEnName("trade_status");
        $alipayTradeQueryApiOutParam_4->setChilds("");
        $alipayTradeQueryApiOutParamChilds[] = json_decode($alipayTradeQueryApiOutParam_4->getBizContent());

        $alipayTradeQueryApiOutParam_5 = new ApiParamModel();
        $alipayTradeQueryApiOutParam_5->setBaseType($alipayTradeQueryApiOutParam_5::$TYPE_BASETYPE);
        $alipayTradeQueryApiOutParam_5->setTitle("交易的订单金额");
        $alipayTradeQueryApiOutParam_5->setDesc("单位为元，两位小数。该参数的值为支付时传入的total_amount");
        $alipayTradeQueryApiOutParam_5->setIsMust(1);
        $alipayTradeQueryApiOutParam_5->setIsListType(false);
        $alipayTradeQueryApiOutParam_5->setFullParamName("totalAmount");
        $alipayTradeQueryApiOutParam_5->setEnName("total_amount");
        $alipayTradeQueryApiOutParam_5->setChilds("");
        $alipayTradeQueryApiOutParamChilds[] = json_decode($alipayTradeQueryApiOutParam_5->getBizContent());

        $alipayTradeQueryApiOutParam_21 = new ApiParamModel();
        $alipayTradeQueryApiOutParam_21->setBaseType($alipayTradeQueryApiOutParam_21::$TYPE_COMPLEXTYPE);
        $alipayTradeQueryApiOutParam_21->setTitle("交易支付使用的资金渠道");
        $alipayTradeQueryApiOutParam_21->setDesc("");
        $alipayTradeQueryApiOutParam_21->setIsMust(1);
        $alipayTradeQueryApiOutParam_21->setIsListType(true);
        $alipayTradeQueryApiOutParam_21->setFullParamName("fundBillList[0]");
        $alipayTradeQueryApiOutParam_21->setEnName("fund_bill_list");
        $alipayTradeQueryApiOutParam_21->setChilds("");
    
    // $alipayTradeQueryApiOutParam_21Childs[] = new ApiParamModel();

            $alipayTradeQueryApiOutParam_21_0 = new ApiParamModel();
        $alipayTradeQueryApiOutParam_21_0->setBaseType($alipayTradeQueryApiOutParam_21_0::$TYPE_BASETYPE);
        $alipayTradeQueryApiOutParam_21_0->setTitle("交易使用的资金渠道");
        $alipayTradeQueryApiOutParam_21_0->setDesc("详见 <a href=\"https://doc.open.alipay.com/doc2/detail?treeId=26&articleId=103259&docType=1\">支付渠道列表</a>");
        $alipayTradeQueryApiOutParam_21_0->setIsMust(1);
        $alipayTradeQueryApiOutParam_21_0->setIsListType(false);
        $alipayTradeQueryApiOutParam_21_0->setFullParamName("fundBillList[0].fundChannel");
        $alipayTradeQueryApiOutParam_21_0->setEnName("fund_channel");
        $alipayTradeQueryApiOutParam_21_0->setChilds("");
        $alipayTradeQueryApiOutParam_21Childs[] = json_decode($alipayTradeQueryApiOutParam_21_0->getBizContent());

        $alipayTradeQueryApiOutParam_21_1 = new ApiParamModel();
        $alipayTradeQueryApiOutParam_21_1->setBaseType($alipayTradeQueryApiOutParam_21_1::$TYPE_BASETYPE);
        $alipayTradeQueryApiOutParam_21_1->setTitle("该支付工具类型所使用的金额");
        $alipayTradeQueryApiOutParam_21_1->setDesc("");
        $alipayTradeQueryApiOutParam_21_1->setIsMust(1);
        $alipayTradeQueryApiOutParam_21_1->setIsListType(false);
        $alipayTradeQueryApiOutParam_21_1->setFullParamName("fundBillList[0].amount");
        $alipayTradeQueryApiOutParam_21_1->setEnName("amount");
        $alipayTradeQueryApiOutParam_21_1->setChilds("");
        $alipayTradeQueryApiOutParam_21Childs[] = json_decode($alipayTradeQueryApiOutParam_21_1->getBizContent());

        $alipayTradeQueryApiOutParam_21_2 = new ApiParamModel();
        $alipayTradeQueryApiOutParam_21_2->setBaseType($alipayTradeQueryApiOutParam_21_2::$TYPE_BASETYPE);
        $alipayTradeQueryApiOutParam_21_2->setTitle("渠道实际付款金额");
        $alipayTradeQueryApiOutParam_21_2->setDesc("");
        $alipayTradeQueryApiOutParam_21_2->setIsMust(3);
        $alipayTradeQueryApiOutParam_21_2->setIsListType(false);
        $alipayTradeQueryApiOutParam_21_2->setFullParamName("fundBillList[0].realAmount");
        $alipayTradeQueryApiOutParam_21_2->setEnName("real_amount");
        $alipayTradeQueryApiOutParam_21_2->setChilds("");
        $alipayTradeQueryApiOutParam_21Childs[] = json_decode($alipayTradeQueryApiOutParam_21_2->getBizContent());

        $alipayTradeQueryApiOutParam_21_3 = new ApiParamModel();
        $alipayTradeQueryApiOutParam_21_3->setBaseType($alipayTradeQueryApiOutParam_21_3::$TYPE_BASETYPE);
        $alipayTradeQueryApiOutParam_21_3->setTitle("渠道所使用的资金类型");
        $alipayTradeQueryApiOutParam_21_3->setDesc("目前只在资金渠道(fund_channel)是银行卡渠道(BANKCARD)的情况下才返回该信息(DEBIT_CARD:借记卡,CREDIT_CARD:信用卡,MIXED_CARD:借贷合一卡)");
        $alipayTradeQueryApiOutParam_21_3->setIsMust(3);
        $alipayTradeQueryApiOutParam_21_3->setIsListType(false);
        $alipayTradeQueryApiOutParam_21_3->setFullParamName("fundBillList[0].fundType");
        $alipayTradeQueryApiOutParam_21_3->setEnName("fund_type");
        $alipayTradeQueryApiOutParam_21_3->setChilds("");
        $alipayTradeQueryApiOutParam_21Childs[] = json_decode($alipayTradeQueryApiOutParam_21_3->getBizContent());

            $alipayTradeQueryApiOutParam_21->setChilds($alipayTradeQueryApiOutParam_21Childs);

        $alipayTradeQueryApiOutParamChilds[] = json_decode($alipayTradeQueryApiOutParam_21->getBizContent());

        $alipayTradeQueryApiOutParam_23 = new ApiParamModel();
        $alipayTradeQueryApiOutParam_23->setBaseType($alipayTradeQueryApiOutParam_23::$TYPE_BASETYPE);
        $alipayTradeQueryApiOutParam_23->setTitle("买家在支付宝的用户id");
        $alipayTradeQueryApiOutParam_23->setDesc("");
        $alipayTradeQueryApiOutParam_23->setIsMust(1);
        $alipayTradeQueryApiOutParam_23->setIsListType(false);
        $alipayTradeQueryApiOutParam_23->setFullParamName("buyerUserId");
        $alipayTradeQueryApiOutParam_23->setEnName("buyer_user_id");
        $alipayTradeQueryApiOutParam_23->setChilds("");
        $alipayTradeQueryApiOutParamChilds[] = json_decode($alipayTradeQueryApiOutParam_23->getBizContent());

        $alipayTradeQueryApiOutParam_24 = new ApiParamModel();
        $alipayTradeQueryApiOutParam_24->setBaseType($alipayTradeQueryApiOutParam_24::$TYPE_BASETYPE);
        $alipayTradeQueryApiOutParam_24->setTitle("本次交易支付所使用的单品券优惠的商品优惠信息");
        $alipayTradeQueryApiOutParam_24->setDesc("");
        $alipayTradeQueryApiOutParam_24->setIsMust(1);
        $alipayTradeQueryApiOutParam_24->setIsListType(false);
        $alipayTradeQueryApiOutParam_24->setFullParamName("discountGoodsDetail");
        $alipayTradeQueryApiOutParam_24->setEnName("discount_goods_detail");
        $alipayTradeQueryApiOutParam_24->setChilds("");
        $alipayTradeQueryApiOutParamChilds[] = json_decode($alipayTradeQueryApiOutParam_24->getBizContent());

        $alipayTradeQueryApiOutParam_2 = new ApiParamModel();
        $alipayTradeQueryApiOutParam_2->setBaseType($alipayTradeQueryApiOutParam_2::$TYPE_BASETYPE);
        $alipayTradeQueryApiOutParam_2->setTitle("买家支付宝用户号");
        $alipayTradeQueryApiOutParam_2->setDesc("该字段将废弃，不要使用");
        $alipayTradeQueryApiOutParam_2->setIsMust(2);
        $alipayTradeQueryApiOutParam_2->setIsListType(false);
        $alipayTradeQueryApiOutParam_2->setFullParamName("openId");
        $alipayTradeQueryApiOutParam_2->setEnName("open_id");
        $alipayTradeQueryApiOutParam_2->setChilds("");
        $alipayTradeQueryApiOutParamChilds[] = json_decode($alipayTradeQueryApiOutParam_2->getBizContent());

        $alipayTradeQueryApiOutParam_6 = new ApiParamModel();
        $alipayTradeQueryApiOutParam_6->setBaseType($alipayTradeQueryApiOutParam_6::$TYPE_BASETYPE);
        $alipayTradeQueryApiOutParam_6->setTitle("标价币种");
        $alipayTradeQueryApiOutParam_6->setDesc("该参数的值为支付时传入的trans_currency，支持英镑：GBP、港币：HKD、美元：USD、新加坡元：SGD、日元：JPY、加拿大元：CAD、澳元：AUD、欧元：EUR、新西兰元：NZD、韩元：KRW、泰铢：THB、瑞士法郎：CHF、瑞典克朗：SEK、丹麦克朗：DKK、挪威克朗：NOK、马来西亚林吉特：MYR、印尼卢比：IDR、菲律宾比索：PHP、毛里求斯卢比：MUR、以色列新谢克尔：ILS、斯里兰卡卢比：LKR、俄罗斯卢布：RUB、阿联酋迪拉姆：AED、捷克克朗：CZK、南非兰特：ZAR、人民币：CNY、新台币：TWD。当trans_currency 和 settle_currency 不一致时，trans_currency支持人民币：CNY、新台币：TWD");
        $alipayTradeQueryApiOutParam_6->setIsMust(2);
        $alipayTradeQueryApiOutParam_6->setIsListType(false);
        $alipayTradeQueryApiOutParam_6->setFullParamName("transCurrency");
        $alipayTradeQueryApiOutParam_6->setEnName("trans_currency");
        $alipayTradeQueryApiOutParam_6->setChilds("");
        $alipayTradeQueryApiOutParamChilds[] = json_decode($alipayTradeQueryApiOutParam_6->getBizContent());

        $alipayTradeQueryApiOutParam_7 = new ApiParamModel();
        $alipayTradeQueryApiOutParam_7->setBaseType($alipayTradeQueryApiOutParam_7::$TYPE_BASETYPE);
        $alipayTradeQueryApiOutParam_7->setTitle("订单结算币种");
        $alipayTradeQueryApiOutParam_7->setDesc("对应支付接口传入的settle_currency，支持英镑：GBP、港币：HKD、美元：USD、新加坡元：SGD、日元：JPY、加拿大元：CAD、澳元：AUD、欧元：EUR、新西兰元：NZD、韩元：KRW、泰铢：THB、瑞士法郎：CHF、瑞典克朗：SEK、丹麦克朗：DKK、挪威克朗：NOK、马来西亚林吉特：MYR、印尼卢比：IDR、菲律宾比索：PHP、毛里求斯卢比：MUR、以色列新谢克尔：ILS、斯里兰卡卢比：LKR、俄罗斯卢布：RUB、阿联酋迪拉姆：AED、捷克克朗：CZK、南非兰特：ZAR");
        $alipayTradeQueryApiOutParam_7->setIsMust(2);
        $alipayTradeQueryApiOutParam_7->setIsListType(false);
        $alipayTradeQueryApiOutParam_7->setFullParamName("settleCurrency");
        $alipayTradeQueryApiOutParam_7->setEnName("settle_currency");
        $alipayTradeQueryApiOutParam_7->setChilds("");
        $alipayTradeQueryApiOutParamChilds[] = json_decode($alipayTradeQueryApiOutParam_7->getBizContent());

        $alipayTradeQueryApiOutParam_8 = new ApiParamModel();
        $alipayTradeQueryApiOutParam_8->setBaseType($alipayTradeQueryApiOutParam_8::$TYPE_BASETYPE);
        $alipayTradeQueryApiOutParam_8->setTitle("结算币种订单金额");
        $alipayTradeQueryApiOutParam_8->setDesc("");
        $alipayTradeQueryApiOutParam_8->setIsMust(2);
        $alipayTradeQueryApiOutParam_8->setIsListType(false);
        $alipayTradeQueryApiOutParam_8->setFullParamName("settleAmount");
        $alipayTradeQueryApiOutParam_8->setEnName("settle_amount");
        $alipayTradeQueryApiOutParam_8->setChilds("");
        $alipayTradeQueryApiOutParamChilds[] = json_decode($alipayTradeQueryApiOutParam_8->getBizContent());

        $alipayTradeQueryApiOutParam_9 = new ApiParamModel();
        $alipayTradeQueryApiOutParam_9->setBaseType($alipayTradeQueryApiOutParam_9::$TYPE_BASETYPE);
        $alipayTradeQueryApiOutParam_9->setTitle("订单支付币种");
        $alipayTradeQueryApiOutParam_9->setDesc("");
        $alipayTradeQueryApiOutParam_9->setIsMust(2);
        $alipayTradeQueryApiOutParam_9->setIsListType(false);
        $alipayTradeQueryApiOutParam_9->setFullParamName("payCurrency");
        $alipayTradeQueryApiOutParam_9->setEnName("pay_currency");
        $alipayTradeQueryApiOutParam_9->setChilds("");
        $alipayTradeQueryApiOutParamChilds[] = json_decode($alipayTradeQueryApiOutParam_9->getBizContent());

        $alipayTradeQueryApiOutParam_10 = new ApiParamModel();
        $alipayTradeQueryApiOutParam_10->setBaseType($alipayTradeQueryApiOutParam_10::$TYPE_BASETYPE);
        $alipayTradeQueryApiOutParam_10->setTitle("支付币种订单金额");
        $alipayTradeQueryApiOutParam_10->setDesc("");
        $alipayTradeQueryApiOutParam_10->setIsMust(2);
        $alipayTradeQueryApiOutParam_10->setIsListType(false);
        $alipayTradeQueryApiOutParam_10->setFullParamName("payAmount");
        $alipayTradeQueryApiOutParam_10->setEnName("pay_amount");
        $alipayTradeQueryApiOutParam_10->setChilds("");
        $alipayTradeQueryApiOutParamChilds[] = json_decode($alipayTradeQueryApiOutParam_10->getBizContent());

        $alipayTradeQueryApiOutParam_11 = new ApiParamModel();
        $alipayTradeQueryApiOutParam_11->setBaseType($alipayTradeQueryApiOutParam_11::$TYPE_BASETYPE);
        $alipayTradeQueryApiOutParam_11->setTitle("结算币种兑换标价币种汇率");
        $alipayTradeQueryApiOutParam_11->setDesc("");
        $alipayTradeQueryApiOutParam_11->setIsMust(2);
        $alipayTradeQueryApiOutParam_11->setIsListType(false);
        $alipayTradeQueryApiOutParam_11->setFullParamName("settleTransRate");
        $alipayTradeQueryApiOutParam_11->setEnName("settle_trans_rate");
        $alipayTradeQueryApiOutParam_11->setChilds("");
        $alipayTradeQueryApiOutParamChilds[] = json_decode($alipayTradeQueryApiOutParam_11->getBizContent());

        $alipayTradeQueryApiOutParam_12 = new ApiParamModel();
        $alipayTradeQueryApiOutParam_12->setBaseType($alipayTradeQueryApiOutParam_12::$TYPE_BASETYPE);
        $alipayTradeQueryApiOutParam_12->setTitle("标价币种兑换支付币种汇率");
        $alipayTradeQueryApiOutParam_12->setDesc("");
        $alipayTradeQueryApiOutParam_12->setIsMust(2);
        $alipayTradeQueryApiOutParam_12->setIsListType(false);
        $alipayTradeQueryApiOutParam_12->setFullParamName("transPayRate");
        $alipayTradeQueryApiOutParam_12->setEnName("trans_pay_rate");
        $alipayTradeQueryApiOutParam_12->setChilds("");
        $alipayTradeQueryApiOutParamChilds[] = json_decode($alipayTradeQueryApiOutParam_12->getBizContent());

        $alipayTradeQueryApiOutParam_13 = new ApiParamModel();
        $alipayTradeQueryApiOutParam_13->setBaseType($alipayTradeQueryApiOutParam_13::$TYPE_BASETYPE);
        $alipayTradeQueryApiOutParam_13->setTitle("买家实付金额");
        $alipayTradeQueryApiOutParam_13->setDesc("单位为元，两位小数。该金额代表该笔交易买家实际支付的金额，不包含商户折扣等金额");
        $alipayTradeQueryApiOutParam_13->setIsMust(2);
        $alipayTradeQueryApiOutParam_13->setIsListType(false);
        $alipayTradeQueryApiOutParam_13->setFullParamName("buyerPayAmount");
        $alipayTradeQueryApiOutParam_13->setEnName("buyer_pay_amount");
        $alipayTradeQueryApiOutParam_13->setChilds("");
        $alipayTradeQueryApiOutParamChilds[] = json_decode($alipayTradeQueryApiOutParam_13->getBizContent());

        $alipayTradeQueryApiOutParam_14 = new ApiParamModel();
        $alipayTradeQueryApiOutParam_14->setBaseType($alipayTradeQueryApiOutParam_14::$TYPE_BASETYPE);
        $alipayTradeQueryApiOutParam_14->setTitle("积分支付的金额");
        $alipayTradeQueryApiOutParam_14->setDesc("单位为元，两位小数。该金额代表该笔交易中用户使用积分支付的金额，比如集分宝或者支付宝实时优惠等");
        $alipayTradeQueryApiOutParam_14->setIsMust(2);
        $alipayTradeQueryApiOutParam_14->setIsListType(false);
        $alipayTradeQueryApiOutParam_14->setFullParamName("pointAmount");
        $alipayTradeQueryApiOutParam_14->setEnName("point_amount");
        $alipayTradeQueryApiOutParam_14->setChilds("");
        $alipayTradeQueryApiOutParamChilds[] = json_decode($alipayTradeQueryApiOutParam_14->getBizContent());

        $alipayTradeQueryApiOutParam_15 = new ApiParamModel();
        $alipayTradeQueryApiOutParam_15->setBaseType($alipayTradeQueryApiOutParam_15::$TYPE_BASETYPE);
        $alipayTradeQueryApiOutParam_15->setTitle("交易中用户支付的可开具发票的金额");
        $alipayTradeQueryApiOutParam_15->setDesc("单位为元，两位小数。该金额代表该笔交易中可以给用户开具发票的金额");
        $alipayTradeQueryApiOutParam_15->setIsMust(2);
        $alipayTradeQueryApiOutParam_15->setIsListType(false);
        $alipayTradeQueryApiOutParam_15->setFullParamName("invoiceAmount");
        $alipayTradeQueryApiOutParam_15->setEnName("invoice_amount");
        $alipayTradeQueryApiOutParam_15->setChilds("");
        $alipayTradeQueryApiOutParamChilds[] = json_decode($alipayTradeQueryApiOutParam_15->getBizContent());

        $alipayTradeQueryApiOutParam_16 = new ApiParamModel();
        $alipayTradeQueryApiOutParam_16->setBaseType($alipayTradeQueryApiOutParam_16::$TYPE_BASETYPE);
        $alipayTradeQueryApiOutParam_16->setTitle("本次交易打款给卖家的时间");
        $alipayTradeQueryApiOutParam_16->setDesc("");
        $alipayTradeQueryApiOutParam_16->setIsMust(2);
        $alipayTradeQueryApiOutParam_16->setIsListType(false);
        $alipayTradeQueryApiOutParam_16->setFullParamName("sendPayDate");
        $alipayTradeQueryApiOutParam_16->setEnName("send_pay_date");
        $alipayTradeQueryApiOutParam_16->setChilds("");
        $alipayTradeQueryApiOutParamChilds[] = json_decode($alipayTradeQueryApiOutParam_16->getBizContent());

        $alipayTradeQueryApiOutParam_17 = new ApiParamModel();
        $alipayTradeQueryApiOutParam_17->setBaseType($alipayTradeQueryApiOutParam_17::$TYPE_BASETYPE);
        $alipayTradeQueryApiOutParam_17->setTitle("支付宝店铺编号");
        $alipayTradeQueryApiOutParam_17->setDesc("");
        $alipayTradeQueryApiOutParam_17->setIsMust(2);
        $alipayTradeQueryApiOutParam_17->setIsListType(false);
        $alipayTradeQueryApiOutParam_17->setFullParamName("alipayStoreId");
        $alipayTradeQueryApiOutParam_17->setEnName("alipay_store_id");
        $alipayTradeQueryApiOutParam_17->setChilds("");
        $alipayTradeQueryApiOutParamChilds[] = json_decode($alipayTradeQueryApiOutParam_17->getBizContent());

        $alipayTradeQueryApiOutParam_18 = new ApiParamModel();
        $alipayTradeQueryApiOutParam_18->setBaseType($alipayTradeQueryApiOutParam_18::$TYPE_BASETYPE);
        $alipayTradeQueryApiOutParam_18->setTitle("实收金额");
        $alipayTradeQueryApiOutParam_18->setDesc("单位为元，两位小数。该金额为本笔交易，商户账户能够实际收到的金额");
        $alipayTradeQueryApiOutParam_18->setIsMust(2);
        $alipayTradeQueryApiOutParam_18->setIsListType(false);
        $alipayTradeQueryApiOutParam_18->setFullParamName("receiptAmount");
        $alipayTradeQueryApiOutParam_18->setEnName("receipt_amount");
        $alipayTradeQueryApiOutParam_18->setChilds("");
        $alipayTradeQueryApiOutParamChilds[] = json_decode($alipayTradeQueryApiOutParam_18->getBizContent());

        $alipayTradeQueryApiOutParam_19 = new ApiParamModel();
        $alipayTradeQueryApiOutParam_19->setBaseType($alipayTradeQueryApiOutParam_19::$TYPE_BASETYPE);
        $alipayTradeQueryApiOutParam_19->setTitle("商户门店编号");
        $alipayTradeQueryApiOutParam_19->setDesc("");
        $alipayTradeQueryApiOutParam_19->setIsMust(2);
        $alipayTradeQueryApiOutParam_19->setIsListType(false);
        $alipayTradeQueryApiOutParam_19->setFullParamName("storeId");
        $alipayTradeQueryApiOutParam_19->setEnName("store_id");
        $alipayTradeQueryApiOutParam_19->setChilds("");
        $alipayTradeQueryApiOutParamChilds[] = json_decode($alipayTradeQueryApiOutParam_19->getBizContent());

        $alipayTradeQueryApiOutParam_20 = new ApiParamModel();
        $alipayTradeQueryApiOutParam_20->setBaseType($alipayTradeQueryApiOutParam_20::$TYPE_BASETYPE);
        $alipayTradeQueryApiOutParam_20->setTitle("商户机具终端编号");
        $alipayTradeQueryApiOutParam_20->setDesc("");
        $alipayTradeQueryApiOutParam_20->setIsMust(2);
        $alipayTradeQueryApiOutParam_20->setIsListType(false);
        $alipayTradeQueryApiOutParam_20->setFullParamName("terminalId");
        $alipayTradeQueryApiOutParam_20->setEnName("terminal_id");
        $alipayTradeQueryApiOutParam_20->setChilds("");
        $alipayTradeQueryApiOutParamChilds[] = json_decode($alipayTradeQueryApiOutParam_20->getBizContent());

        $alipayTradeQueryApiOutParam_22 = new ApiParamModel();
        $alipayTradeQueryApiOutParam_22->setBaseType($alipayTradeQueryApiOutParam_22::$TYPE_BASETYPE);
        $alipayTradeQueryApiOutParam_22->setTitle("请求交易支付中的商户店铺的名称");
        $alipayTradeQueryApiOutParam_22->setDesc("");
        $alipayTradeQueryApiOutParam_22->setIsMust(2);
        $alipayTradeQueryApiOutParam_22->setIsListType(false);
        $alipayTradeQueryApiOutParam_22->setFullParamName("storeName");
        $alipayTradeQueryApiOutParam_22->setEnName("store_name");
        $alipayTradeQueryApiOutParam_22->setChilds("");
        $alipayTradeQueryApiOutParamChilds[] = json_decode($alipayTradeQueryApiOutParam_22->getBizContent());

        $alipayTradeQueryApiOutParam_25 = new ApiParamModel();
        $alipayTradeQueryApiOutParam_25->setBaseType($alipayTradeQueryApiOutParam_25::$TYPE_BASETYPE);
        $alipayTradeQueryApiOutParam_25->setTitle("行业特殊信息（例如在医保卡支付业务中");
        $alipayTradeQueryApiOutParam_25->setDesc("向用户返回医疗信息）。");
        $alipayTradeQueryApiOutParam_25->setIsMust(2);
        $alipayTradeQueryApiOutParam_25->setIsListType(false);
        $alipayTradeQueryApiOutParam_25->setFullParamName("industrySepcDetail");
        $alipayTradeQueryApiOutParam_25->setEnName("industry_sepc_detail");
        $alipayTradeQueryApiOutParam_25->setChilds("");
        $alipayTradeQueryApiOutParamChilds[] = json_decode($alipayTradeQueryApiOutParam_25->getBizContent());

        $alipayTradeQueryApiOutParam_26 = new ApiParamModel();
        $alipayTradeQueryApiOutParam_26->setBaseType($alipayTradeQueryApiOutParam_26::$TYPE_COMPLEXTYPE);
        $alipayTradeQueryApiOutParam_26->setTitle("本交易支付时使用的所有优惠券信息");
        $alipayTradeQueryApiOutParam_26->setDesc("");
        $alipayTradeQueryApiOutParam_26->setIsMust(2);
        $alipayTradeQueryApiOutParam_26->setIsListType(true);
        $alipayTradeQueryApiOutParam_26->setFullParamName("voucherDetailList[0]");
        $alipayTradeQueryApiOutParam_26->setEnName("voucher_detail_list");
        $alipayTradeQueryApiOutParam_26->setChilds("");
    
    // $alipayTradeQueryApiOutParam_26Childs[] = new ApiParamModel();

            $alipayTradeQueryApiOutParam_26_0 = new ApiParamModel();
        $alipayTradeQueryApiOutParam_26_0->setBaseType($alipayTradeQueryApiOutParam_26_0::$TYPE_BASETYPE);
        $alipayTradeQueryApiOutParam_26_0->setTitle("券id");
        $alipayTradeQueryApiOutParam_26_0->setDesc("");
        $alipayTradeQueryApiOutParam_26_0->setIsMust(1);
        $alipayTradeQueryApiOutParam_26_0->setIsListType(false);
        $alipayTradeQueryApiOutParam_26_0->setFullParamName("voucherDetailList[0].id");
        $alipayTradeQueryApiOutParam_26_0->setEnName("id");
        $alipayTradeQueryApiOutParam_26_0->setChilds("");
        $alipayTradeQueryApiOutParam_26Childs[] = json_decode($alipayTradeQueryApiOutParam_26_0->getBizContent());

        $alipayTradeQueryApiOutParam_26_1 = new ApiParamModel();
        $alipayTradeQueryApiOutParam_26_1->setBaseType($alipayTradeQueryApiOutParam_26_1::$TYPE_BASETYPE);
        $alipayTradeQueryApiOutParam_26_1->setTitle("券名称");
        $alipayTradeQueryApiOutParam_26_1->setDesc("");
        $alipayTradeQueryApiOutParam_26_1->setIsMust(1);
        $alipayTradeQueryApiOutParam_26_1->setIsListType(false);
        $alipayTradeQueryApiOutParam_26_1->setFullParamName("voucherDetailList[0].name");
        $alipayTradeQueryApiOutParam_26_1->setEnName("name");
        $alipayTradeQueryApiOutParam_26_1->setChilds("");
        $alipayTradeQueryApiOutParam_26Childs[] = json_decode($alipayTradeQueryApiOutParam_26_1->getBizContent());

        $alipayTradeQueryApiOutParam_26_2 = new ApiParamModel();
        $alipayTradeQueryApiOutParam_26_2->setBaseType($alipayTradeQueryApiOutParam_26_2::$TYPE_BASETYPE);
        $alipayTradeQueryApiOutParam_26_2->setTitle("当前有三种类型：");
        $alipayTradeQueryApiOutParam_26_2->setDesc(" ALIPAY_FIX_VOUCHER - 全场代金券  ALIPAY_DISCOUNT_VOUCHER - 折扣券  ALIPAY_ITEM_VOUCHER - 单品优惠  注：不排除将来新增其他类型的可能，商家接入时注意兼容性避免硬编码");
        $alipayTradeQueryApiOutParam_26_2->setIsMust(1);
        $alipayTradeQueryApiOutParam_26_2->setIsListType(false);
        $alipayTradeQueryApiOutParam_26_2->setFullParamName("voucherDetailList[0].type");
        $alipayTradeQueryApiOutParam_26_2->setEnName("type");
        $alipayTradeQueryApiOutParam_26_2->setChilds("");
        $alipayTradeQueryApiOutParam_26Childs[] = json_decode($alipayTradeQueryApiOutParam_26_2->getBizContent());

        $alipayTradeQueryApiOutParam_26_3 = new ApiParamModel();
        $alipayTradeQueryApiOutParam_26_3->setBaseType($alipayTradeQueryApiOutParam_26_3::$TYPE_BASETYPE);
        $alipayTradeQueryApiOutParam_26_3->setTitle("优惠券面额");
        $alipayTradeQueryApiOutParam_26_3->setDesc("它应该会等于商家出资加上其他出资方出资");
        $alipayTradeQueryApiOutParam_26_3->setIsMust(1);
        $alipayTradeQueryApiOutParam_26_3->setIsListType(false);
        $alipayTradeQueryApiOutParam_26_3->setFullParamName("voucherDetailList[0].amount");
        $alipayTradeQueryApiOutParam_26_3->setEnName("amount");
        $alipayTradeQueryApiOutParam_26_3->setChilds("");
        $alipayTradeQueryApiOutParam_26Childs[] = json_decode($alipayTradeQueryApiOutParam_26_3->getBizContent());

        $alipayTradeQueryApiOutParam_26_4 = new ApiParamModel();
        $alipayTradeQueryApiOutParam_26_4->setBaseType($alipayTradeQueryApiOutParam_26_4::$TYPE_BASETYPE);
        $alipayTradeQueryApiOutParam_26_4->setTitle("商家出资（特指发起交易的商家出资金额）");
        $alipayTradeQueryApiOutParam_26_4->setDesc("");
        $alipayTradeQueryApiOutParam_26_4->setIsMust(3);
        $alipayTradeQueryApiOutParam_26_4->setIsListType(false);
        $alipayTradeQueryApiOutParam_26_4->setFullParamName("voucherDetailList[0].merchantContribute");
        $alipayTradeQueryApiOutParam_26_4->setEnName("merchant_contribute");
        $alipayTradeQueryApiOutParam_26_4->setChilds("");
        $alipayTradeQueryApiOutParam_26Childs[] = json_decode($alipayTradeQueryApiOutParam_26_4->getBizContent());

        $alipayTradeQueryApiOutParam_26_5 = new ApiParamModel();
        $alipayTradeQueryApiOutParam_26_5->setBaseType($alipayTradeQueryApiOutParam_26_5::$TYPE_BASETYPE);
        $alipayTradeQueryApiOutParam_26_5->setTitle("其他出资方出资金额");
        $alipayTradeQueryApiOutParam_26_5->setDesc("可能是支付宝，可能是品牌商，或者其他方，也可能是他们的一起出资");
        $alipayTradeQueryApiOutParam_26_5->setIsMust(3);
        $alipayTradeQueryApiOutParam_26_5->setIsListType(false);
        $alipayTradeQueryApiOutParam_26_5->setFullParamName("voucherDetailList[0].otherContribute");
        $alipayTradeQueryApiOutParam_26_5->setEnName("other_contribute");
        $alipayTradeQueryApiOutParam_26_5->setChilds("");
        $alipayTradeQueryApiOutParam_26Childs[] = json_decode($alipayTradeQueryApiOutParam_26_5->getBizContent());

        $alipayTradeQueryApiOutParam_26_6 = new ApiParamModel();
        $alipayTradeQueryApiOutParam_26_6->setBaseType($alipayTradeQueryApiOutParam_26_6::$TYPE_BASETYPE);
        $alipayTradeQueryApiOutParam_26_6->setTitle("优惠券备注信息");
        $alipayTradeQueryApiOutParam_26_6->setDesc("");
        $alipayTradeQueryApiOutParam_26_6->setIsMust(3);
        $alipayTradeQueryApiOutParam_26_6->setIsListType(false);
        $alipayTradeQueryApiOutParam_26_6->setFullParamName("voucherDetailList[0].memo");
        $alipayTradeQueryApiOutParam_26_6->setEnName("memo");
        $alipayTradeQueryApiOutParam_26_6->setChilds("");
        $alipayTradeQueryApiOutParam_26Childs[] = json_decode($alipayTradeQueryApiOutParam_26_6->getBizContent());

        $alipayTradeQueryApiOutParam_26_7 = new ApiParamModel();
        $alipayTradeQueryApiOutParam_26_7->setBaseType($alipayTradeQueryApiOutParam_26_7::$TYPE_BASETYPE);
        $alipayTradeQueryApiOutParam_26_7->setTitle("券模板id");
        $alipayTradeQueryApiOutParam_26_7->setDesc("");
        $alipayTradeQueryApiOutParam_26_7->setIsMust(3);
        $alipayTradeQueryApiOutParam_26_7->setIsListType(false);
        $alipayTradeQueryApiOutParam_26_7->setFullParamName("voucherDetailList[0].templateId");
        $alipayTradeQueryApiOutParam_26_7->setEnName("template_id");
        $alipayTradeQueryApiOutParam_26_7->setChilds("");
        $alipayTradeQueryApiOutParam_26Childs[] = json_decode($alipayTradeQueryApiOutParam_26_7->getBizContent());

        $alipayTradeQueryApiOutParam_26_8 = new ApiParamModel();
        $alipayTradeQueryApiOutParam_26_8->setBaseType($alipayTradeQueryApiOutParam_26_8::$TYPE_COMPLEXTYPE);
        $alipayTradeQueryApiOutParam_26_8->setTitle("优惠券的其他出资方明细");
        $alipayTradeQueryApiOutParam_26_8->setDesc("");
        $alipayTradeQueryApiOutParam_26_8->setIsMust(3);
        $alipayTradeQueryApiOutParam_26_8->setIsListType(true);
        $alipayTradeQueryApiOutParam_26_8->setFullParamName("voucherDetailList[0].otherContributeDetail[0]");
        $alipayTradeQueryApiOutParam_26_8->setEnName("other_contribute_detail");
        $alipayTradeQueryApiOutParam_26_8->setChilds("");
    
    // $alipayTradeQueryApiOutParam_26_8Childs[] = new ApiParamModel();

            $alipayTradeQueryApiOutParam_26_8_0 = new ApiParamModel();
        $alipayTradeQueryApiOutParam_26_8_0->setBaseType($alipayTradeQueryApiOutParam_26_8_0::$TYPE_BASETYPE);
        $alipayTradeQueryApiOutParam_26_8_0->setTitle("出资方类型");
        $alipayTradeQueryApiOutParam_26_8_0->setDesc("如品牌商出资、支付宝平台出资等");
        $alipayTradeQueryApiOutParam_26_8_0->setIsMust(1);
        $alipayTradeQueryApiOutParam_26_8_0->setIsListType(false);
        $alipayTradeQueryApiOutParam_26_8_0->setFullParamName("voucherDetailList[0].otherContributeDetail[0].contributeType");
        $alipayTradeQueryApiOutParam_26_8_0->setEnName("contribute_type");
        $alipayTradeQueryApiOutParam_26_8_0->setChilds("");
        $alipayTradeQueryApiOutParam_26_8Childs[] = json_decode($alipayTradeQueryApiOutParam_26_8_0->getBizContent());

        $alipayTradeQueryApiOutParam_26_8_1 = new ApiParamModel();
        $alipayTradeQueryApiOutParam_26_8_1->setBaseType($alipayTradeQueryApiOutParam_26_8_1::$TYPE_BASETYPE);
        $alipayTradeQueryApiOutParam_26_8_1->setTitle("出资方金额");
        $alipayTradeQueryApiOutParam_26_8_1->setDesc("");
        $alipayTradeQueryApiOutParam_26_8_1->setIsMust(1);
        $alipayTradeQueryApiOutParam_26_8_1->setIsListType(false);
        $alipayTradeQueryApiOutParam_26_8_1->setFullParamName("voucherDetailList[0].otherContributeDetail[0].contributeAmount");
        $alipayTradeQueryApiOutParam_26_8_1->setEnName("contribute_amount");
        $alipayTradeQueryApiOutParam_26_8_1->setChilds("");
        $alipayTradeQueryApiOutParam_26_8Childs[] = json_decode($alipayTradeQueryApiOutParam_26_8_1->getBizContent());

            $alipayTradeQueryApiOutParam_26_8->setChilds($alipayTradeQueryApiOutParam_26_8Childs);

        $alipayTradeQueryApiOutParam_26Childs[] = json_decode($alipayTradeQueryApiOutParam_26_8->getBizContent());

        $alipayTradeQueryApiOutParam_26_9 = new ApiParamModel();
        $alipayTradeQueryApiOutParam_26_9->setBaseType($alipayTradeQueryApiOutParam_26_9::$TYPE_BASETYPE);
        $alipayTradeQueryApiOutParam_26_9->setTitle("如果使用的这张券是用户购买的");
        $alipayTradeQueryApiOutParam_26_9->setDesc("则该字段代表用户在购买这张券时用户实际付款的金额");
        $alipayTradeQueryApiOutParam_26_9->setIsMust(3);
        $alipayTradeQueryApiOutParam_26_9->setIsListType(false);
        $alipayTradeQueryApiOutParam_26_9->setFullParamName("voucherDetailList[0].purchaseBuyerContribute");
        $alipayTradeQueryApiOutParam_26_9->setEnName("purchase_buyer_contribute");
        $alipayTradeQueryApiOutParam_26_9->setChilds("");
        $alipayTradeQueryApiOutParam_26Childs[] = json_decode($alipayTradeQueryApiOutParam_26_9->getBizContent());

        $alipayTradeQueryApiOutParam_26_10 = new ApiParamModel();
        $alipayTradeQueryApiOutParam_26_10->setBaseType($alipayTradeQueryApiOutParam_26_10::$TYPE_BASETYPE);
        $alipayTradeQueryApiOutParam_26_10->setTitle("如果使用的这张券是用户购买的");
        $alipayTradeQueryApiOutParam_26_10->setDesc("则该字段代表用户在购买这张券时商户优惠的金额");
        $alipayTradeQueryApiOutParam_26_10->setIsMust(3);
        $alipayTradeQueryApiOutParam_26_10->setIsListType(false);
        $alipayTradeQueryApiOutParam_26_10->setFullParamName("voucherDetailList[0].purchaseMerchantContribute");
        $alipayTradeQueryApiOutParam_26_10->setEnName("purchase_merchant_contribute");
        $alipayTradeQueryApiOutParam_26_10->setChilds("");
        $alipayTradeQueryApiOutParam_26Childs[] = json_decode($alipayTradeQueryApiOutParam_26_10->getBizContent());

        $alipayTradeQueryApiOutParam_26_11 = new ApiParamModel();
        $alipayTradeQueryApiOutParam_26_11->setBaseType($alipayTradeQueryApiOutParam_26_11::$TYPE_BASETYPE);
        $alipayTradeQueryApiOutParam_26_11->setTitle("如果使用的这张券是用户购买的");
        $alipayTradeQueryApiOutParam_26_11->setDesc("则该字段代表用户在购买这张券时平台优惠的金额");
        $alipayTradeQueryApiOutParam_26_11->setIsMust(3);
        $alipayTradeQueryApiOutParam_26_11->setIsListType(false);
        $alipayTradeQueryApiOutParam_26_11->setFullParamName("voucherDetailList[0].purchaseAntContribute");
        $alipayTradeQueryApiOutParam_26_11->setEnName("purchase_ant_contribute");
        $alipayTradeQueryApiOutParam_26_11->setChilds("");
        $alipayTradeQueryApiOutParam_26Childs[] = json_decode($alipayTradeQueryApiOutParam_26_11->getBizContent());

            $alipayTradeQueryApiOutParam_26->setChilds($alipayTradeQueryApiOutParam_26Childs);

        $alipayTradeQueryApiOutParamChilds[] = json_decode($alipayTradeQueryApiOutParam_26->getBizContent());

        $alipayTradeQueryApiOutParam_27 = new ApiParamModel();
        $alipayTradeQueryApiOutParam_27->setBaseType($alipayTradeQueryApiOutParam_27::$TYPE_BASETYPE);
        $alipayTradeQueryApiOutParam_27->setTitle("预授权支付模式");
        $alipayTradeQueryApiOutParam_27->setDesc("该参数仅在信用预授权支付场景下返回。信用预授权支付：CREDIT_PREAUTH_PAY");
        $alipayTradeQueryApiOutParam_27->setIsMust(2);
        $alipayTradeQueryApiOutParam_27->setIsListType(false);
        $alipayTradeQueryApiOutParam_27->setFullParamName("authTradePayMode");
        $alipayTradeQueryApiOutParam_27->setEnName("auth_trade_pay_mode");
        $alipayTradeQueryApiOutParam_27->setChilds("");
        $alipayTradeQueryApiOutParamChilds[] = json_decode($alipayTradeQueryApiOutParam_27->getBizContent());

        $alipayTradeQueryApiOutParam_28 = new ApiParamModel();
        $alipayTradeQueryApiOutParam_28->setBaseType($alipayTradeQueryApiOutParam_28::$TYPE_BASETYPE);
        $alipayTradeQueryApiOutParam_28->setTitle("买家用户类型");
        $alipayTradeQueryApiOutParam_28->setDesc("CORPORATE:企业用户；PRIVATE:个人用户。");
        $alipayTradeQueryApiOutParam_28->setIsMust(2);
        $alipayTradeQueryApiOutParam_28->setIsListType(false);
        $alipayTradeQueryApiOutParam_28->setFullParamName("buyerUserType");
        $alipayTradeQueryApiOutParam_28->setEnName("buyer_user_type");
        $alipayTradeQueryApiOutParam_28->setChilds("");
        $alipayTradeQueryApiOutParamChilds[] = json_decode($alipayTradeQueryApiOutParam_28->getBizContent());

        $alipayTradeQueryApiOutParam_29 = new ApiParamModel();
        $alipayTradeQueryApiOutParam_29->setBaseType($alipayTradeQueryApiOutParam_29::$TYPE_BASETYPE);
        $alipayTradeQueryApiOutParam_29->setTitle("商家优惠金额");
        $alipayTradeQueryApiOutParam_29->setDesc("");
        $alipayTradeQueryApiOutParam_29->setIsMust(2);
        $alipayTradeQueryApiOutParam_29->setIsListType(false);
        $alipayTradeQueryApiOutParam_29->setFullParamName("mdiscountAmount");
        $alipayTradeQueryApiOutParam_29->setEnName("mdiscount_amount");
        $alipayTradeQueryApiOutParam_29->setChilds("");
        $alipayTradeQueryApiOutParamChilds[] = json_decode($alipayTradeQueryApiOutParam_29->getBizContent());

        $alipayTradeQueryApiOutParam_30 = new ApiParamModel();
        $alipayTradeQueryApiOutParam_30->setBaseType($alipayTradeQueryApiOutParam_30::$TYPE_BASETYPE);
        $alipayTradeQueryApiOutParam_30->setTitle("平台优惠金额");
        $alipayTradeQueryApiOutParam_30->setDesc("");
        $alipayTradeQueryApiOutParam_30->setIsMust(2);
        $alipayTradeQueryApiOutParam_30->setIsListType(false);
        $alipayTradeQueryApiOutParam_30->setFullParamName("discountAmount");
        $alipayTradeQueryApiOutParam_30->setEnName("discount_amount");
        $alipayTradeQueryApiOutParam_30->setChilds("");
        $alipayTradeQueryApiOutParamChilds[] = json_decode($alipayTradeQueryApiOutParam_30->getBizContent());

        $alipayTradeQueryInfoModel->setApiOutParam($alipayTradeQueryApiOutParamChilds);

        $list[] = json_decode($alipayTradeQueryInfoModel->getBizContent());
        $alipayTradeRefundInfoModel = new ApiInfoModel();
        
        $alipayTradeRefundInfoModel->setApiName("alipay.trade.refund");
        $alipayTradeRefundInfoModel->setApiZhName("统一收单交易退款接口");
        $alipayTradeRefundInfoModel->setInvokeType($alipayTradeRefundInfoModel::$INVOKE_TYPE_REQUEST);
            // $alipayTradeRefundApiInParamChilds[] = new ApiParamModel();
            $alipayTradeRefundApiInParam_2 = new ApiParamModel();
        $alipayTradeRefundApiInParam_2->setBaseType($alipayTradeRefundApiInParam_2::$TYPE_BASETYPE);
        $alipayTradeRefundApiInParam_2->setTitle("需要退款的金额");
        $alipayTradeRefundApiInParam_2->setDesc("该金额不能大于订单金额,单位为元，支持两位小数");
        $alipayTradeRefundApiInParam_2->setIsMust(1);
        $alipayTradeRefundApiInParam_2->setIsListType(false);
        $alipayTradeRefundApiInParam_2->setFullParamName("refundAmount");
        $alipayTradeRefundApiInParam_2->setEnName("refund_amount");
        $alipayTradeRefundApiInParam_2->setChilds("");
        $alipayTradeRefundApiInParamChilds[] = json_decode($alipayTradeRefundApiInParam_2->getBizContent());

        $alipayTradeRefundApiInParam_3 = new ApiParamModel();
        $alipayTradeRefundApiInParam_3->setBaseType($alipayTradeRefundApiInParam_3::$TYPE_BASETYPE);
        $alipayTradeRefundApiInParam_3->setTitle("订单退款币种信息");
        $alipayTradeRefundApiInParam_3->setDesc("");
        $alipayTradeRefundApiInParam_3->setIsMust(3);
        $alipayTradeRefundApiInParam_3->setIsListType(false);
        $alipayTradeRefundApiInParam_3->setFullParamName("refundCurrency");
        $alipayTradeRefundApiInParam_3->setEnName("refund_currency");
        $alipayTradeRefundApiInParam_3->setChilds("");
        $alipayTradeRefundApiInParamChilds[] = json_decode($alipayTradeRefundApiInParam_3->getBizContent());

        $alipayTradeRefundApiInParam_4 = new ApiParamModel();
        $alipayTradeRefundApiInParam_4->setBaseType($alipayTradeRefundApiInParam_4::$TYPE_BASETYPE);
        $alipayTradeRefundApiInParam_4->setTitle("退款的原因说明");
        $alipayTradeRefundApiInParam_4->setDesc("");
        $alipayTradeRefundApiInParam_4->setIsMust(3);
        $alipayTradeRefundApiInParam_4->setIsListType(false);
        $alipayTradeRefundApiInParam_4->setFullParamName("refundReason");
        $alipayTradeRefundApiInParam_4->setEnName("refund_reason");
        $alipayTradeRefundApiInParam_4->setChilds("");
        $alipayTradeRefundApiInParamChilds[] = json_decode($alipayTradeRefundApiInParam_4->getBizContent());

        $alipayTradeRefundApiInParam_5 = new ApiParamModel();
        $alipayTradeRefundApiInParam_5->setBaseType($alipayTradeRefundApiInParam_5::$TYPE_BASETYPE);
        $alipayTradeRefundApiInParam_5->setTitle("标识一次退款请求");
        $alipayTradeRefundApiInParam_5->setDesc("同一笔交易多次退款需要保证唯一，如需部分退款，则此参数必传。");
        $alipayTradeRefundApiInParam_5->setIsMust(3);
        $alipayTradeRefundApiInParam_5->setIsListType(false);
        $alipayTradeRefundApiInParam_5->setFullParamName("outRequestNo");
        $alipayTradeRefundApiInParam_5->setEnName("out_request_no");
        $alipayTradeRefundApiInParam_5->setChilds("");
        $alipayTradeRefundApiInParamChilds[] = json_decode($alipayTradeRefundApiInParam_5->getBizContent());

        $alipayTradeRefundApiInParam_6 = new ApiParamModel();
        $alipayTradeRefundApiInParam_6->setBaseType($alipayTradeRefundApiInParam_6::$TYPE_BASETYPE);
        $alipayTradeRefundApiInParam_6->setTitle("商户的操作员编号");
        $alipayTradeRefundApiInParam_6->setDesc("");
        $alipayTradeRefundApiInParam_6->setIsMust(3);
        $alipayTradeRefundApiInParam_6->setIsListType(false);
        $alipayTradeRefundApiInParam_6->setFullParamName("operatorId");
        $alipayTradeRefundApiInParam_6->setEnName("operator_id");
        $alipayTradeRefundApiInParam_6->setChilds("");
        $alipayTradeRefundApiInParamChilds[] = json_decode($alipayTradeRefundApiInParam_6->getBizContent());

        $alipayTradeRefundApiInParam_7 = new ApiParamModel();
        $alipayTradeRefundApiInParam_7->setBaseType($alipayTradeRefundApiInParam_7::$TYPE_BASETYPE);
        $alipayTradeRefundApiInParam_7->setTitle("商户的门店编号");
        $alipayTradeRefundApiInParam_7->setDesc("");
        $alipayTradeRefundApiInParam_7->setIsMust(3);
        $alipayTradeRefundApiInParam_7->setIsListType(false);
        $alipayTradeRefundApiInParam_7->setFullParamName("storeId");
        $alipayTradeRefundApiInParam_7->setEnName("store_id");
        $alipayTradeRefundApiInParam_7->setChilds("");
        $alipayTradeRefundApiInParamChilds[] = json_decode($alipayTradeRefundApiInParam_7->getBizContent());

        $alipayTradeRefundApiInParam_8 = new ApiParamModel();
        $alipayTradeRefundApiInParam_8->setBaseType($alipayTradeRefundApiInParam_8::$TYPE_BASETYPE);
        $alipayTradeRefundApiInParam_8->setTitle("商户的终端编号");
        $alipayTradeRefundApiInParam_8->setDesc("");
        $alipayTradeRefundApiInParam_8->setIsMust(3);
        $alipayTradeRefundApiInParam_8->setIsListType(false);
        $alipayTradeRefundApiInParam_8->setFullParamName("terminalId");
        $alipayTradeRefundApiInParam_8->setEnName("terminal_id");
        $alipayTradeRefundApiInParam_8->setChilds("");
        $alipayTradeRefundApiInParamChilds[] = json_decode($alipayTradeRefundApiInParam_8->getBizContent());

        $alipayTradeRefundApiInParam_9 = new ApiParamModel();
        $alipayTradeRefundApiInParam_9->setBaseType($alipayTradeRefundApiInParam_9::$TYPE_COMPLEXTYPE);
        $alipayTradeRefundApiInParam_9->setTitle("退款包含的商品列表信息");
        $alipayTradeRefundApiInParam_9->setDesc("Json格式。  其它说明详见：“商品明细说明”");
        $alipayTradeRefundApiInParam_9->setIsMust(3);
        $alipayTradeRefundApiInParam_9->setIsListType(true);
        $alipayTradeRefundApiInParam_9->setFullParamName("goodsDetail[0]");
        $alipayTradeRefundApiInParam_9->setEnName("goods_detail");
        $alipayTradeRefundApiInParam_9->setChilds("");
    
    // $alipayTradeRefundApiInParam_9Childs[] = new ApiParamModel();

            $alipayTradeRefundApiInParam_9_0 = new ApiParamModel();
        $alipayTradeRefundApiInParam_9_0->setBaseType($alipayTradeRefundApiInParam_9_0::$TYPE_BASETYPE);
        $alipayTradeRefundApiInParam_9_0->setTitle("商品的编号");
        $alipayTradeRefundApiInParam_9_0->setDesc("");
        $alipayTradeRefundApiInParam_9_0->setIsMust(1);
        $alipayTradeRefundApiInParam_9_0->setIsListType(false);
        $alipayTradeRefundApiInParam_9_0->setFullParamName("goodsDetail[0].goodsId");
        $alipayTradeRefundApiInParam_9_0->setEnName("goods_id");
        $alipayTradeRefundApiInParam_9_0->setChilds("");
        $alipayTradeRefundApiInParam_9Childs[] = json_decode($alipayTradeRefundApiInParam_9_0->getBizContent());

        $alipayTradeRefundApiInParam_9_2 = new ApiParamModel();
        $alipayTradeRefundApiInParam_9_2->setBaseType($alipayTradeRefundApiInParam_9_2::$TYPE_BASETYPE);
        $alipayTradeRefundApiInParam_9_2->setTitle("商品名称");
        $alipayTradeRefundApiInParam_9_2->setDesc("");
        $alipayTradeRefundApiInParam_9_2->setIsMust(1);
        $alipayTradeRefundApiInParam_9_2->setIsListType(false);
        $alipayTradeRefundApiInParam_9_2->setFullParamName("goodsDetail[0].goodsName");
        $alipayTradeRefundApiInParam_9_2->setEnName("goods_name");
        $alipayTradeRefundApiInParam_9_2->setChilds("");
        $alipayTradeRefundApiInParam_9Childs[] = json_decode($alipayTradeRefundApiInParam_9_2->getBizContent());

        $alipayTradeRefundApiInParam_9_3 = new ApiParamModel();
        $alipayTradeRefundApiInParam_9_3->setBaseType($alipayTradeRefundApiInParam_9_3::$TYPE_BASETYPE);
        $alipayTradeRefundApiInParam_9_3->setTitle("商品数量");
        $alipayTradeRefundApiInParam_9_3->setDesc("");
        $alipayTradeRefundApiInParam_9_3->setIsMust(1);
        $alipayTradeRefundApiInParam_9_3->setIsListType(false);
        $alipayTradeRefundApiInParam_9_3->setFullParamName("goodsDetail[0].quantity");
        $alipayTradeRefundApiInParam_9_3->setEnName("quantity");
        $alipayTradeRefundApiInParam_9_3->setChilds("");
        $alipayTradeRefundApiInParam_9Childs[] = json_decode($alipayTradeRefundApiInParam_9_3->getBizContent());

        $alipayTradeRefundApiInParam_9_4 = new ApiParamModel();
        $alipayTradeRefundApiInParam_9_4->setBaseType($alipayTradeRefundApiInParam_9_4::$TYPE_BASETYPE);
        $alipayTradeRefundApiInParam_9_4->setTitle("商品单价");
        $alipayTradeRefundApiInParam_9_4->setDesc("单位为元");
        $alipayTradeRefundApiInParam_9_4->setIsMust(1);
        $alipayTradeRefundApiInParam_9_4->setIsListType(false);
        $alipayTradeRefundApiInParam_9_4->setFullParamName("goodsDetail[0].price");
        $alipayTradeRefundApiInParam_9_4->setEnName("price");
        $alipayTradeRefundApiInParam_9_4->setChilds("");
        $alipayTradeRefundApiInParam_9Childs[] = json_decode($alipayTradeRefundApiInParam_9_4->getBizContent());

        $alipayTradeRefundApiInParam_9_1 = new ApiParamModel();
        $alipayTradeRefundApiInParam_9_1->setBaseType($alipayTradeRefundApiInParam_9_1::$TYPE_BASETYPE);
        $alipayTradeRefundApiInParam_9_1->setTitle("支付宝定义的统一商品编号");
        $alipayTradeRefundApiInParam_9_1->setDesc("");
        $alipayTradeRefundApiInParam_9_1->setIsMust(3);
        $alipayTradeRefundApiInParam_9_1->setIsListType(false);
        $alipayTradeRefundApiInParam_9_1->setFullParamName("goodsDetail[0].alipayGoodsId");
        $alipayTradeRefundApiInParam_9_1->setEnName("alipay_goods_id");
        $alipayTradeRefundApiInParam_9_1->setChilds("");
        $alipayTradeRefundApiInParam_9Childs[] = json_decode($alipayTradeRefundApiInParam_9_1->getBizContent());

        $alipayTradeRefundApiInParam_9_5 = new ApiParamModel();
        $alipayTradeRefundApiInParam_9_5->setBaseType($alipayTradeRefundApiInParam_9_5::$TYPE_BASETYPE);
        $alipayTradeRefundApiInParam_9_5->setTitle("商品类目");
        $alipayTradeRefundApiInParam_9_5->setDesc("");
        $alipayTradeRefundApiInParam_9_5->setIsMust(3);
        $alipayTradeRefundApiInParam_9_5->setIsListType(false);
        $alipayTradeRefundApiInParam_9_5->setFullParamName("goodsDetail[0].goodsCategory");
        $alipayTradeRefundApiInParam_9_5->setEnName("goods_category");
        $alipayTradeRefundApiInParam_9_5->setChilds("");
        $alipayTradeRefundApiInParam_9Childs[] = json_decode($alipayTradeRefundApiInParam_9_5->getBizContent());

        $alipayTradeRefundApiInParam_9_6 = new ApiParamModel();
        $alipayTradeRefundApiInParam_9_6->setBaseType($alipayTradeRefundApiInParam_9_6::$TYPE_BASETYPE);
        $alipayTradeRefundApiInParam_9_6->setTitle("商品描述信息");
        $alipayTradeRefundApiInParam_9_6->setDesc("");
        $alipayTradeRefundApiInParam_9_6->setIsMust(3);
        $alipayTradeRefundApiInParam_9_6->setIsListType(false);
        $alipayTradeRefundApiInParam_9_6->setFullParamName("goodsDetail[0].body");
        $alipayTradeRefundApiInParam_9_6->setEnName("body");
        $alipayTradeRefundApiInParam_9_6->setChilds("");
        $alipayTradeRefundApiInParam_9Childs[] = json_decode($alipayTradeRefundApiInParam_9_6->getBizContent());

        $alipayTradeRefundApiInParam_9_7 = new ApiParamModel();
        $alipayTradeRefundApiInParam_9_7->setBaseType($alipayTradeRefundApiInParam_9_7::$TYPE_BASETYPE);
        $alipayTradeRefundApiInParam_9_7->setTitle("商品的展示地址");
        $alipayTradeRefundApiInParam_9_7->setDesc("");
        $alipayTradeRefundApiInParam_9_7->setIsMust(3);
        $alipayTradeRefundApiInParam_9_7->setIsListType(false);
        $alipayTradeRefundApiInParam_9_7->setFullParamName("goodsDetail[0].showUrl");
        $alipayTradeRefundApiInParam_9_7->setEnName("show_url");
        $alipayTradeRefundApiInParam_9_7->setChilds("");
        $alipayTradeRefundApiInParam_9Childs[] = json_decode($alipayTradeRefundApiInParam_9_7->getBizContent());

            $alipayTradeRefundApiInParam_9->setChilds($alipayTradeRefundApiInParam_9Childs);

        $alipayTradeRefundApiInParamChilds[] = json_decode($alipayTradeRefundApiInParam_9->getBizContent());

        $alipayTradeRefundApiInParam_10 = new ApiParamModel();
        $alipayTradeRefundApiInParam_10->setBaseType($alipayTradeRefundApiInParam_10::$TYPE_COMPLEXTYPE);
        $alipayTradeRefundApiInParam_10->setTitle("退分账明细信息");
        $alipayTradeRefundApiInParam_10->setDesc("");
        $alipayTradeRefundApiInParam_10->setIsMust(3);
        $alipayTradeRefundApiInParam_10->setIsListType(true);
        $alipayTradeRefundApiInParam_10->setFullParamName("refundRoyaltyParameters[0]");
        $alipayTradeRefundApiInParam_10->setEnName("refund_royalty_parameters");
        $alipayTradeRefundApiInParam_10->setChilds("");
    
    // $alipayTradeRefundApiInParam_10Childs[] = new ApiParamModel();

            $alipayTradeRefundApiInParam_10_0 = new ApiParamModel();
        $alipayTradeRefundApiInParam_10_0->setBaseType($alipayTradeRefundApiInParam_10_0::$TYPE_BASETYPE);
        $alipayTradeRefundApiInParam_10_0->setTitle("分账类型");
        $alipayTradeRefundApiInParam_10_0->setDesc("  普通分账为：transfer;  补差为：replenish;  为空默认为分账transfer;");
        $alipayTradeRefundApiInParam_10_0->setIsMust(3);
        $alipayTradeRefundApiInParam_10_0->setIsListType(false);
        $alipayTradeRefundApiInParam_10_0->setFullParamName("refundRoyaltyParameters[0].royaltyType");
        $alipayTradeRefundApiInParam_10_0->setEnName("royalty_type");
        $alipayTradeRefundApiInParam_10_0->setChilds("");
        $alipayTradeRefundApiInParam_10Childs[] = json_decode($alipayTradeRefundApiInParam_10_0->getBizContent());

        $alipayTradeRefundApiInParam_10_1 = new ApiParamModel();
        $alipayTradeRefundApiInParam_10_1->setBaseType($alipayTradeRefundApiInParam_10_1::$TYPE_BASETYPE);
        $alipayTradeRefundApiInParam_10_1->setTitle("支出方账户");
        $alipayTradeRefundApiInParam_10_1->setDesc("如果支出方账户类型为userId，本参数为支出方的支付宝账号对应的支付宝唯一用户号，以2088开头的纯16位数字；如果支出方类型为loginName，本参数为支出方的支付宝登录号；");
        $alipayTradeRefundApiInParam_10_1->setIsMust(3);
        $alipayTradeRefundApiInParam_10_1->setIsListType(false);
        $alipayTradeRefundApiInParam_10_1->setFullParamName("refundRoyaltyParameters[0].transOut");
        $alipayTradeRefundApiInParam_10_1->setEnName("trans_out");
        $alipayTradeRefundApiInParam_10_1->setChilds("");
        $alipayTradeRefundApiInParam_10Childs[] = json_decode($alipayTradeRefundApiInParam_10_1->getBizContent());

        $alipayTradeRefundApiInParam_10_2 = new ApiParamModel();
        $alipayTradeRefundApiInParam_10_2->setBaseType($alipayTradeRefundApiInParam_10_2::$TYPE_BASETYPE);
        $alipayTradeRefundApiInParam_10_2->setTitle("支出方账户类型");
        $alipayTradeRefundApiInParam_10_2->setDesc("userId表示是支付宝账号对应的支付宝唯一用户号;loginName表示是支付宝登录号；");
        $alipayTradeRefundApiInParam_10_2->setIsMust(3);
        $alipayTradeRefundApiInParam_10_2->setIsListType(false);
        $alipayTradeRefundApiInParam_10_2->setFullParamName("refundRoyaltyParameters[0].transOutType");
        $alipayTradeRefundApiInParam_10_2->setEnName("trans_out_type");
        $alipayTradeRefundApiInParam_10_2->setChilds("");
        $alipayTradeRefundApiInParam_10Childs[] = json_decode($alipayTradeRefundApiInParam_10_2->getBizContent());

        $alipayTradeRefundApiInParam_10_3 = new ApiParamModel();
        $alipayTradeRefundApiInParam_10_3->setBaseType($alipayTradeRefundApiInParam_10_3::$TYPE_BASETYPE);
        $alipayTradeRefundApiInParam_10_3->setTitle("收入方账户类型");
        $alipayTradeRefundApiInParam_10_3->setDesc("userId表示是支付宝账号对应的支付宝唯一用户号;cardSerialNo表示是卡编号;loginName表示是支付宝登录号；");
        $alipayTradeRefundApiInParam_10_3->setIsMust(3);
        $alipayTradeRefundApiInParam_10_3->setIsListType(false);
        $alipayTradeRefundApiInParam_10_3->setFullParamName("refundRoyaltyParameters[0].transInType");
        $alipayTradeRefundApiInParam_10_3->setEnName("trans_in_type");
        $alipayTradeRefundApiInParam_10_3->setChilds("");
        $alipayTradeRefundApiInParam_10Childs[] = json_decode($alipayTradeRefundApiInParam_10_3->getBizContent());

        $alipayTradeRefundApiInParam_10_4 = new ApiParamModel();
        $alipayTradeRefundApiInParam_10_4->setBaseType($alipayTradeRefundApiInParam_10_4::$TYPE_BASETYPE);
        $alipayTradeRefundApiInParam_10_4->setTitle("收入方账户");
        $alipayTradeRefundApiInParam_10_4->setDesc("如果收入方账户类型为userId，本参数为收入方的支付宝账号对应的支付宝唯一用户号，以2088开头的纯16位数字；如果收入方类型为cardSerialNo，本参数为收入方在支付宝绑定的卡编号；如果收入方类型为loginName，本参数为收入方的支付宝登录号；");
        $alipayTradeRefundApiInParam_10_4->setIsMust(3);
        $alipayTradeRefundApiInParam_10_4->setIsListType(false);
        $alipayTradeRefundApiInParam_10_4->setFullParamName("refundRoyaltyParameters[0].transIn");
        $alipayTradeRefundApiInParam_10_4->setEnName("trans_in");
        $alipayTradeRefundApiInParam_10_4->setChilds("");
        $alipayTradeRefundApiInParam_10Childs[] = json_decode($alipayTradeRefundApiInParam_10_4->getBizContent());

        $alipayTradeRefundApiInParam_10_5 = new ApiParamModel();
        $alipayTradeRefundApiInParam_10_5->setBaseType($alipayTradeRefundApiInParam_10_5::$TYPE_BASETYPE);
        $alipayTradeRefundApiInParam_10_5->setTitle("分账的金额");
        $alipayTradeRefundApiInParam_10_5->setDesc("单位为元");
        $alipayTradeRefundApiInParam_10_5->setIsMust(3);
        $alipayTradeRefundApiInParam_10_5->setIsListType(false);
        $alipayTradeRefundApiInParam_10_5->setFullParamName("refundRoyaltyParameters[0].amount");
        $alipayTradeRefundApiInParam_10_5->setEnName("amount");
        $alipayTradeRefundApiInParam_10_5->setChilds("");
        $alipayTradeRefundApiInParam_10Childs[] = json_decode($alipayTradeRefundApiInParam_10_5->getBizContent());

        $alipayTradeRefundApiInParam_10_6 = new ApiParamModel();
        $alipayTradeRefundApiInParam_10_6->setBaseType($alipayTradeRefundApiInParam_10_6::$TYPE_BASETYPE);
        $alipayTradeRefundApiInParam_10_6->setTitle("分账信息中分账百分比");
        $alipayTradeRefundApiInParam_10_6->setDesc("取值范围为大于0，少于或等于100的整数。");
        $alipayTradeRefundApiInParam_10_6->setIsMust(3);
        $alipayTradeRefundApiInParam_10_6->setIsListType(false);
        $alipayTradeRefundApiInParam_10_6->setFullParamName("refundRoyaltyParameters[0].amountPercentage");
        $alipayTradeRefundApiInParam_10_6->setEnName("amount_percentage");
        $alipayTradeRefundApiInParam_10_6->setChilds("");
        $alipayTradeRefundApiInParam_10Childs[] = json_decode($alipayTradeRefundApiInParam_10_6->getBizContent());

        $alipayTradeRefundApiInParam_10_7 = new ApiParamModel();
        $alipayTradeRefundApiInParam_10_7->setBaseType($alipayTradeRefundApiInParam_10_7::$TYPE_BASETYPE);
        $alipayTradeRefundApiInParam_10_7->setTitle("分账描述");
        $alipayTradeRefundApiInParam_10_7->setDesc("");
        $alipayTradeRefundApiInParam_10_7->setIsMust(3);
        $alipayTradeRefundApiInParam_10_7->setIsListType(false);
        $alipayTradeRefundApiInParam_10_7->setFullParamName("refundRoyaltyParameters[0].desc");
        $alipayTradeRefundApiInParam_10_7->setEnName("desc");
        $alipayTradeRefundApiInParam_10_7->setChilds("");
        $alipayTradeRefundApiInParam_10Childs[] = json_decode($alipayTradeRefundApiInParam_10_7->getBizContent());

            $alipayTradeRefundApiInParam_10->setChilds($alipayTradeRefundApiInParam_10Childs);

        $alipayTradeRefundApiInParamChilds[] = json_decode($alipayTradeRefundApiInParam_10->getBizContent());

        $alipayTradeRefundApiInParam_0 = new ApiParamModel();
        $alipayTradeRefundApiInParam_0->setBaseType($alipayTradeRefundApiInParam_0::$TYPE_BASETYPE);
        $alipayTradeRefundApiInParam_0->setTitle("订单支付时传入的商户订单号");
        $alipayTradeRefundApiInParam_0->setDesc("不能和 trade_no同时为空。");
        $alipayTradeRefundApiInParam_0->setIsMust(2);
        $alipayTradeRefundApiInParam_0->setIsListType(false);
        $alipayTradeRefundApiInParam_0->setFullParamName("outTradeNo");
        $alipayTradeRefundApiInParam_0->setEnName("out_trade_no");
        $alipayTradeRefundApiInParam_0->setChilds("");
        $alipayTradeRefundApiInParamChilds[] = json_decode($alipayTradeRefundApiInParam_0->getBizContent());

        $alipayTradeRefundApiInParam_1 = new ApiParamModel();
        $alipayTradeRefundApiInParam_1->setBaseType($alipayTradeRefundApiInParam_1::$TYPE_BASETYPE);
        $alipayTradeRefundApiInParam_1->setTitle("支付宝交易号");
        $alipayTradeRefundApiInParam_1->setDesc("和商户订单号不能同时为空");
        $alipayTradeRefundApiInParam_1->setIsMust(2);
        $alipayTradeRefundApiInParam_1->setIsListType(false);
        $alipayTradeRefundApiInParam_1->setFullParamName("tradeNo");
        $alipayTradeRefundApiInParam_1->setEnName("trade_no");
        $alipayTradeRefundApiInParam_1->setChilds("");
        $alipayTradeRefundApiInParamChilds[] = json_decode($alipayTradeRefundApiInParam_1->getBizContent());

        $alipayTradeRefundInfoModel->setApiInParam($alipayTradeRefundApiInParamChilds);

        $alipayTradeRefundApiOutParamChilds[] = new ApiParamModel();

            $alipayTradeRefundApiOutParam_0 = new ApiParamModel();
        $alipayTradeRefundApiOutParam_0->setBaseType($alipayTradeRefundApiOutParam_0::$TYPE_BASETYPE);
        $alipayTradeRefundApiOutParam_0->setTitle("2013112011001004330000121536");
        $alipayTradeRefundApiOutParam_0->setDesc("");
        $alipayTradeRefundApiOutParam_0->setIsMust(1);
        $alipayTradeRefundApiOutParam_0->setIsListType(false);
        $alipayTradeRefundApiOutParam_0->setFullParamName("tradeNo");
        $alipayTradeRefundApiOutParam_0->setEnName("trade_no");
        $alipayTradeRefundApiOutParam_0->setChilds("");
        $alipayTradeRefundApiOutParamChilds[] = json_decode($alipayTradeRefundApiOutParam_0->getBizContent());

        $alipayTradeRefundApiOutParam_1 = new ApiParamModel();
        $alipayTradeRefundApiOutParam_1->setBaseType($alipayTradeRefundApiOutParam_1::$TYPE_BASETYPE);
        $alipayTradeRefundApiOutParam_1->setTitle("商户订单号");
        $alipayTradeRefundApiOutParam_1->setDesc("");
        $alipayTradeRefundApiOutParam_1->setIsMust(1);
        $alipayTradeRefundApiOutParam_1->setIsListType(false);
        $alipayTradeRefundApiOutParam_1->setFullParamName("outTradeNo");
        $alipayTradeRefundApiOutParam_1->setEnName("out_trade_no");
        $alipayTradeRefundApiOutParam_1->setChilds("");
        $alipayTradeRefundApiOutParamChilds[] = json_decode($alipayTradeRefundApiOutParam_1->getBizContent());

        $alipayTradeRefundApiOutParam_2 = new ApiParamModel();
        $alipayTradeRefundApiOutParam_2->setBaseType($alipayTradeRefundApiOutParam_2::$TYPE_BASETYPE);
        $alipayTradeRefundApiOutParam_2->setTitle("买家支付宝用户号");
        $alipayTradeRefundApiOutParam_2->setDesc("该参数已废弃，请不要使用");
        $alipayTradeRefundApiOutParam_2->setIsMust(1);
        $alipayTradeRefundApiOutParam_2->setIsListType(false);
        $alipayTradeRefundApiOutParam_2->setFullParamName("openId");
        $alipayTradeRefundApiOutParam_2->setEnName("open_id");
        $alipayTradeRefundApiOutParam_2->setChilds("");
        $alipayTradeRefundApiOutParamChilds[] = json_decode($alipayTradeRefundApiOutParam_2->getBizContent());

        $alipayTradeRefundApiOutParam_3 = new ApiParamModel();
        $alipayTradeRefundApiOutParam_3->setBaseType($alipayTradeRefundApiOutParam_3::$TYPE_BASETYPE);
        $alipayTradeRefundApiOutParam_3->setTitle("用户的登录id");
        $alipayTradeRefundApiOutParam_3->setDesc("");
        $alipayTradeRefundApiOutParam_3->setIsMust(1);
        $alipayTradeRefundApiOutParam_3->setIsListType(false);
        $alipayTradeRefundApiOutParam_3->setFullParamName("buyerLogonId");
        $alipayTradeRefundApiOutParam_3->setEnName("buyer_logon_id");
        $alipayTradeRefundApiOutParam_3->setChilds("");
        $alipayTradeRefundApiOutParamChilds[] = json_decode($alipayTradeRefundApiOutParam_3->getBizContent());

        $alipayTradeRefundApiOutParam_4 = new ApiParamModel();
        $alipayTradeRefundApiOutParam_4->setBaseType($alipayTradeRefundApiOutParam_4::$TYPE_BASETYPE);
        $alipayTradeRefundApiOutParam_4->setTitle("本次退款是否发生了资金变化");
        $alipayTradeRefundApiOutParam_4->setDesc("");
        $alipayTradeRefundApiOutParam_4->setIsMust(1);
        $alipayTradeRefundApiOutParam_4->setIsListType(false);
        $alipayTradeRefundApiOutParam_4->setFullParamName("fundChange");
        $alipayTradeRefundApiOutParam_4->setEnName("fund_change");
        $alipayTradeRefundApiOutParam_4->setChilds("");
        $alipayTradeRefundApiOutParamChilds[] = json_decode($alipayTradeRefundApiOutParam_4->getBizContent());

        $alipayTradeRefundApiOutParam_5 = new ApiParamModel();
        $alipayTradeRefundApiOutParam_5->setBaseType($alipayTradeRefundApiOutParam_5::$TYPE_BASETYPE);
        $alipayTradeRefundApiOutParam_5->setTitle("退款总金额");
        $alipayTradeRefundApiOutParam_5->setDesc("");
        $alipayTradeRefundApiOutParam_5->setIsMust(1);
        $alipayTradeRefundApiOutParam_5->setIsListType(false);
        $alipayTradeRefundApiOutParam_5->setFullParamName("refundFee");
        $alipayTradeRefundApiOutParam_5->setEnName("refund_fee");
        $alipayTradeRefundApiOutParam_5->setChilds("");
        $alipayTradeRefundApiOutParamChilds[] = json_decode($alipayTradeRefundApiOutParam_5->getBizContent());

        $alipayTradeRefundApiOutParam_7 = new ApiParamModel();
        $alipayTradeRefundApiOutParam_7->setBaseType($alipayTradeRefundApiOutParam_7::$TYPE_BASETYPE);
        $alipayTradeRefundApiOutParam_7->setTitle("退款支付时间");
        $alipayTradeRefundApiOutParam_7->setDesc("");
        $alipayTradeRefundApiOutParam_7->setIsMust(1);
        $alipayTradeRefundApiOutParam_7->setIsListType(false);
        $alipayTradeRefundApiOutParam_7->setFullParamName("gmtRefundPay");
        $alipayTradeRefundApiOutParam_7->setEnName("gmt_refund_pay");
        $alipayTradeRefundApiOutParam_7->setChilds("");
        $alipayTradeRefundApiOutParamChilds[] = json_decode($alipayTradeRefundApiOutParam_7->getBizContent());

        $alipayTradeRefundApiOutParam_10 = new ApiParamModel();
        $alipayTradeRefundApiOutParam_10->setBaseType($alipayTradeRefundApiOutParam_10::$TYPE_BASETYPE);
        $alipayTradeRefundApiOutParam_10->setTitle("买家在支付宝的用户id");
        $alipayTradeRefundApiOutParam_10->setDesc("");
        $alipayTradeRefundApiOutParam_10->setIsMust(1);
        $alipayTradeRefundApiOutParam_10->setIsListType(false);
        $alipayTradeRefundApiOutParam_10->setFullParamName("buyerUserId");
        $alipayTradeRefundApiOutParam_10->setEnName("buyer_user_id");
        $alipayTradeRefundApiOutParam_10->setChilds("");
        $alipayTradeRefundApiOutParamChilds[] = json_decode($alipayTradeRefundApiOutParam_10->getBizContent());

        $alipayTradeRefundApiOutParam_6 = new ApiParamModel();
        $alipayTradeRefundApiOutParam_6->setBaseType($alipayTradeRefundApiOutParam_6::$TYPE_BASETYPE);
        $alipayTradeRefundApiOutParam_6->setTitle("退款币种信息");
        $alipayTradeRefundApiOutParam_6->setDesc("");
        $alipayTradeRefundApiOutParam_6->setIsMust(2);
        $alipayTradeRefundApiOutParam_6->setIsListType(false);
        $alipayTradeRefundApiOutParam_6->setFullParamName("refundCurrency");
        $alipayTradeRefundApiOutParam_6->setEnName("refund_currency");
        $alipayTradeRefundApiOutParam_6->setChilds("");
        $alipayTradeRefundApiOutParamChilds[] = json_decode($alipayTradeRefundApiOutParam_6->getBizContent());

        $alipayTradeRefundApiOutParam_8 = new ApiParamModel();
        $alipayTradeRefundApiOutParam_8->setBaseType($alipayTradeRefundApiOutParam_8::$TYPE_COMPLEXTYPE);
        $alipayTradeRefundApiOutParam_8->setTitle("退款使用的资金渠道");
        $alipayTradeRefundApiOutParam_8->setDesc("");
        $alipayTradeRefundApiOutParam_8->setIsMust(2);
        $alipayTradeRefundApiOutParam_8->setIsListType(true);
        $alipayTradeRefundApiOutParam_8->setFullParamName("refundDetailItemList[0]");
        $alipayTradeRefundApiOutParam_8->setEnName("refund_detail_item_list");
        $alipayTradeRefundApiOutParam_8->setChilds("");
    
    // $alipayTradeRefundApiOutParam_8Childs[] = new ApiParamModel();

            $alipayTradeRefundApiOutParam_8_0 = new ApiParamModel();
        $alipayTradeRefundApiOutParam_8_0->setBaseType($alipayTradeRefundApiOutParam_8_0::$TYPE_BASETYPE);
        $alipayTradeRefundApiOutParam_8_0->setTitle("交易使用的资金渠道");
        $alipayTradeRefundApiOutParam_8_0->setDesc("详见 <a href=\"https://doc.open.alipay.com/doc2/detail?treeId=26&articleId=103259&docType=1\">支付渠道列表</a>");
        $alipayTradeRefundApiOutParam_8_0->setIsMust(1);
        $alipayTradeRefundApiOutParam_8_0->setIsListType(false);
        $alipayTradeRefundApiOutParam_8_0->setFullParamName("refundDetailItemList[0].fundChannel");
        $alipayTradeRefundApiOutParam_8_0->setEnName("fund_channel");
        $alipayTradeRefundApiOutParam_8_0->setChilds("");
        $alipayTradeRefundApiOutParam_8Childs[] = json_decode($alipayTradeRefundApiOutParam_8_0->getBizContent());

        $alipayTradeRefundApiOutParam_8_1 = new ApiParamModel();
        $alipayTradeRefundApiOutParam_8_1->setBaseType($alipayTradeRefundApiOutParam_8_1::$TYPE_BASETYPE);
        $alipayTradeRefundApiOutParam_8_1->setTitle("该支付工具类型所使用的金额");
        $alipayTradeRefundApiOutParam_8_1->setDesc("");
        $alipayTradeRefundApiOutParam_8_1->setIsMust(1);
        $alipayTradeRefundApiOutParam_8_1->setIsListType(false);
        $alipayTradeRefundApiOutParam_8_1->setFullParamName("refundDetailItemList[0].amount");
        $alipayTradeRefundApiOutParam_8_1->setEnName("amount");
        $alipayTradeRefundApiOutParam_8_1->setChilds("");
        $alipayTradeRefundApiOutParam_8Childs[] = json_decode($alipayTradeRefundApiOutParam_8_1->getBizContent());

        $alipayTradeRefundApiOutParam_8_2 = new ApiParamModel();
        $alipayTradeRefundApiOutParam_8_2->setBaseType($alipayTradeRefundApiOutParam_8_2::$TYPE_BASETYPE);
        $alipayTradeRefundApiOutParam_8_2->setTitle("渠道实际付款金额");
        $alipayTradeRefundApiOutParam_8_2->setDesc("");
        $alipayTradeRefundApiOutParam_8_2->setIsMust(3);
        $alipayTradeRefundApiOutParam_8_2->setIsListType(false);
        $alipayTradeRefundApiOutParam_8_2->setFullParamName("refundDetailItemList[0].realAmount");
        $alipayTradeRefundApiOutParam_8_2->setEnName("real_amount");
        $alipayTradeRefundApiOutParam_8_2->setChilds("");
        $alipayTradeRefundApiOutParam_8Childs[] = json_decode($alipayTradeRefundApiOutParam_8_2->getBizContent());

        $alipayTradeRefundApiOutParam_8_3 = new ApiParamModel();
        $alipayTradeRefundApiOutParam_8_3->setBaseType($alipayTradeRefundApiOutParam_8_3::$TYPE_BASETYPE);
        $alipayTradeRefundApiOutParam_8_3->setTitle("渠道所使用的资金类型");
        $alipayTradeRefundApiOutParam_8_3->setDesc("目前只在资金渠道(fund_channel)是银行卡渠道(BANKCARD)的情况下才返回该信息(DEBIT_CARD:借记卡,CREDIT_CARD:信用卡,MIXED_CARD:借贷合一卡)");
        $alipayTradeRefundApiOutParam_8_3->setIsMust(3);
        $alipayTradeRefundApiOutParam_8_3->setIsListType(false);
        $alipayTradeRefundApiOutParam_8_3->setFullParamName("refundDetailItemList[0].fundType");
        $alipayTradeRefundApiOutParam_8_3->setEnName("fund_type");
        $alipayTradeRefundApiOutParam_8_3->setChilds("");
        $alipayTradeRefundApiOutParam_8Childs[] = json_decode($alipayTradeRefundApiOutParam_8_3->getBizContent());

            $alipayTradeRefundApiOutParam_8->setChilds($alipayTradeRefundApiOutParam_8Childs);

        $alipayTradeRefundApiOutParamChilds[] = json_decode($alipayTradeRefundApiOutParam_8->getBizContent());

        $alipayTradeRefundApiOutParam_9 = new ApiParamModel();
        $alipayTradeRefundApiOutParam_9->setBaseType($alipayTradeRefundApiOutParam_9::$TYPE_BASETYPE);
        $alipayTradeRefundApiOutParam_9->setTitle("交易在支付时候的门店名称");
        $alipayTradeRefundApiOutParam_9->setDesc("");
        $alipayTradeRefundApiOutParam_9->setIsMust(2);
        $alipayTradeRefundApiOutParam_9->setIsListType(false);
        $alipayTradeRefundApiOutParam_9->setFullParamName("storeName");
        $alipayTradeRefundApiOutParam_9->setEnName("store_name");
        $alipayTradeRefundApiOutParam_9->setChilds("");
        $alipayTradeRefundApiOutParamChilds[] = json_decode($alipayTradeRefundApiOutParam_9->getBizContent());

        $alipayTradeRefundApiOutParam_11 = new ApiParamModel();
        $alipayTradeRefundApiOutParam_11->setBaseType($alipayTradeRefundApiOutParam_11::$TYPE_BASETYPE);
        $alipayTradeRefundApiOutParam_11->setTitle("本次商户实际退回金额");
        $alipayTradeRefundApiOutParam_11->setDesc(" 注：在签约收单产品时需勾选“返回资金明细”才会返回");
        $alipayTradeRefundApiOutParam_11->setIsMust(2);
        $alipayTradeRefundApiOutParam_11->setIsListType(false);
        $alipayTradeRefundApiOutParam_11->setFullParamName("sendBackFee");
        $alipayTradeRefundApiOutParam_11->setEnName("send_back_fee");
        $alipayTradeRefundApiOutParam_11->setChilds("");
        $alipayTradeRefundApiOutParamChilds[] = json_decode($alipayTradeRefundApiOutParam_11->getBizContent());

        $alipayTradeRefundApiOutParam_12 = new ApiParamModel();
        $alipayTradeRefundApiOutParam_12->setBaseType($alipayTradeRefundApiOutParam_12::$TYPE_COMPLEXTYPE);
        $alipayTradeRefundApiOutParam_12->setTitle("退回的前置资产列表");
        $alipayTradeRefundApiOutParam_12->setDesc("");
        $alipayTradeRefundApiOutParam_12->setIsMust(2);
        $alipayTradeRefundApiOutParam_12->setIsListType(false);
        $alipayTradeRefundApiOutParam_12->setFullParamName("refundPresetPaytoolList");
        $alipayTradeRefundApiOutParam_12->setEnName("refund_preset_paytool_list");
        $alipayTradeRefundApiOutParam_12->setChilds("");
    
    // $alipayTradeRefundApiOutParam_12Childs[] = new ApiParamModel();

            $alipayTradeRefundApiOutParam_12_0 = new ApiParamModel();
        $alipayTradeRefundApiOutParam_12_0->setBaseType($alipayTradeRefundApiOutParam_12_0::$TYPE_BASETYPE);
        $alipayTradeRefundApiOutParam_12_0->setTitle("前置资产金额");
        $alipayTradeRefundApiOutParam_12_0->setDesc("");
        $alipayTradeRefundApiOutParam_12_0->setIsMust(1);
        $alipayTradeRefundApiOutParam_12_0->setIsListType(true);
        $alipayTradeRefundApiOutParam_12_0->setFullParamName("refundPresetPaytoolList.amount[0]");
        $alipayTradeRefundApiOutParam_12_0->setEnName("amount");
        $alipayTradeRefundApiOutParam_12_0->setChilds("");
        $alipayTradeRefundApiOutParam_12Childs[] = json_decode($alipayTradeRefundApiOutParam_12_0->getBizContent());

        $alipayTradeRefundApiOutParam_12_1 = new ApiParamModel();
        $alipayTradeRefundApiOutParam_12_1->setBaseType($alipayTradeRefundApiOutParam_12_1::$TYPE_BASETYPE);
        $alipayTradeRefundApiOutParam_12_1->setTitle("前置资产类型编码");
        $alipayTradeRefundApiOutParam_12_1->setDesc("和收单支付传入的preset_pay_tool里面的类型编码保持一致。");
        $alipayTradeRefundApiOutParam_12_1->setIsMust(1);
        $alipayTradeRefundApiOutParam_12_1->setIsListType(false);
        $alipayTradeRefundApiOutParam_12_1->setFullParamName("refundPresetPaytoolList.assertTypeCode");
        $alipayTradeRefundApiOutParam_12_1->setEnName("assert_type_code");
        $alipayTradeRefundApiOutParam_12_1->setChilds("");
        $alipayTradeRefundApiOutParam_12Childs[] = json_decode($alipayTradeRefundApiOutParam_12_1->getBizContent());

            $alipayTradeRefundApiOutParam_12->setChilds($alipayTradeRefundApiOutParam_12Childs);

        $alipayTradeRefundApiOutParamChilds[] = json_decode($alipayTradeRefundApiOutParam_12->getBizContent());

        $alipayTradeRefundApiOutParam_13 = new ApiParamModel();
        $alipayTradeRefundApiOutParam_13->setBaseType($alipayTradeRefundApiOutParam_13::$TYPE_BASETYPE);
        $alipayTradeRefundApiOutParam_13->setTitle("本次退款金额中买家退款金额");
        $alipayTradeRefundApiOutParam_13->setDesc("");
        $alipayTradeRefundApiOutParam_13->setIsMust(2);
        $alipayTradeRefundApiOutParam_13->setIsListType(false);
        $alipayTradeRefundApiOutParam_13->setFullParamName("presentRefundBuyerAmount");
        $alipayTradeRefundApiOutParam_13->setEnName("present_refund_buyer_amount");
        $alipayTradeRefundApiOutParam_13->setChilds("");
        $alipayTradeRefundApiOutParamChilds[] = json_decode($alipayTradeRefundApiOutParam_13->getBizContent());

        $alipayTradeRefundApiOutParam_14 = new ApiParamModel();
        $alipayTradeRefundApiOutParam_14->setBaseType($alipayTradeRefundApiOutParam_14::$TYPE_BASETYPE);
        $alipayTradeRefundApiOutParam_14->setTitle("本次退款金额中平台优惠退款金额");
        $alipayTradeRefundApiOutParam_14->setDesc("");
        $alipayTradeRefundApiOutParam_14->setIsMust(2);
        $alipayTradeRefundApiOutParam_14->setIsListType(false);
        $alipayTradeRefundApiOutParam_14->setFullParamName("presentRefundDiscountAmount");
        $alipayTradeRefundApiOutParam_14->setEnName("present_refund_discount_amount");
        $alipayTradeRefundApiOutParam_14->setChilds("");
        $alipayTradeRefundApiOutParamChilds[] = json_decode($alipayTradeRefundApiOutParam_14->getBizContent());

        $alipayTradeRefundApiOutParam_15 = new ApiParamModel();
        $alipayTradeRefundApiOutParam_15->setBaseType($alipayTradeRefundApiOutParam_15::$TYPE_BASETYPE);
        $alipayTradeRefundApiOutParam_15->setTitle("本次退款金额中商家优惠退款金额");
        $alipayTradeRefundApiOutParam_15->setDesc("");
        $alipayTradeRefundApiOutParam_15->setIsMust(2);
        $alipayTradeRefundApiOutParam_15->setIsListType(false);
        $alipayTradeRefundApiOutParam_15->setFullParamName("presentRefundMdiscountAmount");
        $alipayTradeRefundApiOutParam_15->setEnName("present_refund_mdiscount_amount");
        $alipayTradeRefundApiOutParam_15->setChilds("");
        $alipayTradeRefundApiOutParamChilds[] = json_decode($alipayTradeRefundApiOutParam_15->getBizContent());

        $alipayTradeRefundInfoModel->setApiOutParam($alipayTradeRefundApiOutParamChilds);

        $list[] = json_decode($alipayTradeRefundInfoModel->getBizContent());
        $alipayTradePrecreateInfoModel = new ApiInfoModel();
        
        $alipayTradePrecreateInfoModel->setApiName("alipay.trade.precreate");
        $alipayTradePrecreateInfoModel->setApiZhName("统一收单线下交易预创建");
        $alipayTradePrecreateInfoModel->setInvokeType($alipayTradePrecreateInfoModel::$INVOKE_TYPE_REQUEST);
            // $alipayTradePrecreateApiInParamChilds[] = new ApiParamModel();
            $alipayTradePrecreateApiInParam_0 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_0->setBaseType($alipayTradePrecreateApiInParam_0::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_0->setTitle("商户订单号");
        $alipayTradePrecreateApiInParam_0->setDesc("64个字符以内、只能包含字母、数字、下划线；需保证在商户端不重复");
        $alipayTradePrecreateApiInParam_0->setIsMust(1);
        $alipayTradePrecreateApiInParam_0->setIsListType(false);
        $alipayTradePrecreateApiInParam_0->setFullParamName("outTradeNo");
        $alipayTradePrecreateApiInParam_0->setEnName("out_trade_no");
        $alipayTradePrecreateApiInParam_0->setChilds("");
        $alipayTradePrecreateApiInParamChilds[] = json_decode($alipayTradePrecreateApiInParam_0->getBizContent());

        $alipayTradePrecreateApiInParam_2 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_2->setBaseType($alipayTradePrecreateApiInParam_2::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_2->setTitle("订单总金额");
        $alipayTradePrecreateApiInParam_2->setDesc("单位为元，精确到小数点后两位，取值范围[0.01,100000000] 如果同时传入了【打折金额】，【不可打折金额】，【订单总金额】三者，则必须满足如下条件：【订单总金额】=【打折金额】+【不可打折金额】");
        $alipayTradePrecreateApiInParam_2->setIsMust(1);
        $alipayTradePrecreateApiInParam_2->setIsListType(false);
        $alipayTradePrecreateApiInParam_2->setFullParamName("totalAmount");
        $alipayTradePrecreateApiInParam_2->setEnName("total_amount");
        $alipayTradePrecreateApiInParam_2->setChilds("");
        $alipayTradePrecreateApiInParamChilds[] = json_decode($alipayTradePrecreateApiInParam_2->getBizContent());

        $alipayTradePrecreateApiInParam_6 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_6->setBaseType($alipayTradePrecreateApiInParam_6::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_6->setTitle("订单标题");
        $alipayTradePrecreateApiInParam_6->setDesc("");
        $alipayTradePrecreateApiInParam_6->setIsMust(1);
        $alipayTradePrecreateApiInParam_6->setIsListType(false);
        $alipayTradePrecreateApiInParam_6->setFullParamName("subject");
        $alipayTradePrecreateApiInParam_6->setEnName("subject");
        $alipayTradePrecreateApiInParam_6->setChilds("");
        $alipayTradePrecreateApiInParamChilds[] = json_decode($alipayTradePrecreateApiInParam_6->getBizContent());

        $alipayTradePrecreateApiInParam_1 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_1->setBaseType($alipayTradePrecreateApiInParam_1::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_1->setTitle("卖家支付宝用户ID");
        $alipayTradePrecreateApiInParam_1->setDesc(" 如果该值为空，则默认为商户签约账号对应的支付宝用户ID");
        $alipayTradePrecreateApiInParam_1->setIsMust(3);
        $alipayTradePrecreateApiInParam_1->setIsListType(false);
        $alipayTradePrecreateApiInParam_1->setFullParamName("sellerId");
        $alipayTradePrecreateApiInParam_1->setEnName("seller_id");
        $alipayTradePrecreateApiInParam_1->setChilds("");
        $alipayTradePrecreateApiInParamChilds[] = json_decode($alipayTradePrecreateApiInParam_1->getBizContent());

        $alipayTradePrecreateApiInParam_3 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_3->setBaseType($alipayTradePrecreateApiInParam_3::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_3->setTitle("可打折金额");
        $alipayTradePrecreateApiInParam_3->setDesc(" 参与优惠计算的金额，单位为元，精确到小数点后两位，取值范围[0.01,100000000] 如果该值未传入，但传入了【订单总金额】，【不可打折金额】则该值默认为【订单总金额】-【不可打折金额】");
        $alipayTradePrecreateApiInParam_3->setIsMust(3);
        $alipayTradePrecreateApiInParam_3->setIsListType(false);
        $alipayTradePrecreateApiInParam_3->setFullParamName("discountableAmount");
        $alipayTradePrecreateApiInParam_3->setEnName("discountable_amount");
        $alipayTradePrecreateApiInParam_3->setChilds("");
        $alipayTradePrecreateApiInParamChilds[] = json_decode($alipayTradePrecreateApiInParam_3->getBizContent());

        $alipayTradePrecreateApiInParam_4 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_4->setBaseType($alipayTradePrecreateApiInParam_4::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_4->setTitle("不可打折金额");
        $alipayTradePrecreateApiInParam_4->setDesc(" 不参与优惠计算的金额，单位为元，精确到小数点后两位，取值范围[0.01,100000000] 如果该值未传入，但传入了【订单总金额】,【打折金额】，则该值默认为【订单总金额】-【打折金额】");
        $alipayTradePrecreateApiInParam_4->setIsMust(3);
        $alipayTradePrecreateApiInParam_4->setIsListType(false);
        $alipayTradePrecreateApiInParam_4->setFullParamName("undiscountableAmount");
        $alipayTradePrecreateApiInParam_4->setEnName("undiscountable_amount");
        $alipayTradePrecreateApiInParam_4->setChilds("");
        $alipayTradePrecreateApiInParamChilds[] = json_decode($alipayTradePrecreateApiInParam_4->getBizContent());

        $alipayTradePrecreateApiInParam_5 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_5->setBaseType($alipayTradePrecreateApiInParam_5::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_5->setTitle("买家支付宝账号");
        $alipayTradePrecreateApiInParam_5->setDesc("");
        $alipayTradePrecreateApiInParam_5->setIsMust(3);
        $alipayTradePrecreateApiInParam_5->setIsListType(false);
        $alipayTradePrecreateApiInParam_5->setFullParamName("buyerLogonId");
        $alipayTradePrecreateApiInParam_5->setEnName("buyer_logon_id");
        $alipayTradePrecreateApiInParam_5->setChilds("");
        $alipayTradePrecreateApiInParamChilds[] = json_decode($alipayTradePrecreateApiInParam_5->getBizContent());

        $alipayTradePrecreateApiInParam_7 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_7->setBaseType($alipayTradePrecreateApiInParam_7::$TYPE_COMPLEXTYPE);
        $alipayTradePrecreateApiInParam_7->setTitle("订单包含的商品列表信息");
        $alipayTradePrecreateApiInParam_7->setDesc("json格式. 其它说明详见：“商品明细说明”");
        $alipayTradePrecreateApiInParam_7->setIsMust(3);
        $alipayTradePrecreateApiInParam_7->setIsListType(true);
        $alipayTradePrecreateApiInParam_7->setFullParamName("goodsDetail[0]");
        $alipayTradePrecreateApiInParam_7->setEnName("goods_detail");
        $alipayTradePrecreateApiInParam_7->setChilds("");
    
    // $alipayTradePrecreateApiInParam_7Childs[] = new ApiParamModel();

            $alipayTradePrecreateApiInParam_7_0 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_7_0->setBaseType($alipayTradePrecreateApiInParam_7_0::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_7_0->setTitle("商品的编号");
        $alipayTradePrecreateApiInParam_7_0->setDesc("");
        $alipayTradePrecreateApiInParam_7_0->setIsMust(1);
        $alipayTradePrecreateApiInParam_7_0->setIsListType(false);
        $alipayTradePrecreateApiInParam_7_0->setFullParamName("goodsDetail[0].goodsId");
        $alipayTradePrecreateApiInParam_7_0->setEnName("goods_id");
        $alipayTradePrecreateApiInParam_7_0->setChilds("");
        $alipayTradePrecreateApiInParam_7Childs[] = json_decode($alipayTradePrecreateApiInParam_7_0->getBizContent());

        $alipayTradePrecreateApiInParam_7_2 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_7_2->setBaseType($alipayTradePrecreateApiInParam_7_2::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_7_2->setTitle("商品名称");
        $alipayTradePrecreateApiInParam_7_2->setDesc("");
        $alipayTradePrecreateApiInParam_7_2->setIsMust(1);
        $alipayTradePrecreateApiInParam_7_2->setIsListType(false);
        $alipayTradePrecreateApiInParam_7_2->setFullParamName("goodsDetail[0].goodsName");
        $alipayTradePrecreateApiInParam_7_2->setEnName("goods_name");
        $alipayTradePrecreateApiInParam_7_2->setChilds("");
        $alipayTradePrecreateApiInParam_7Childs[] = json_decode($alipayTradePrecreateApiInParam_7_2->getBizContent());

        $alipayTradePrecreateApiInParam_7_3 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_7_3->setBaseType($alipayTradePrecreateApiInParam_7_3::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_7_3->setTitle("商品数量");
        $alipayTradePrecreateApiInParam_7_3->setDesc("");
        $alipayTradePrecreateApiInParam_7_3->setIsMust(1);
        $alipayTradePrecreateApiInParam_7_3->setIsListType(false);
        $alipayTradePrecreateApiInParam_7_3->setFullParamName("goodsDetail[0].quantity");
        $alipayTradePrecreateApiInParam_7_3->setEnName("quantity");
        $alipayTradePrecreateApiInParam_7_3->setChilds("");
        $alipayTradePrecreateApiInParam_7Childs[] = json_decode($alipayTradePrecreateApiInParam_7_3->getBizContent());

        $alipayTradePrecreateApiInParam_7_4 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_7_4->setBaseType($alipayTradePrecreateApiInParam_7_4::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_7_4->setTitle("商品单价");
        $alipayTradePrecreateApiInParam_7_4->setDesc("单位为元");
        $alipayTradePrecreateApiInParam_7_4->setIsMust(1);
        $alipayTradePrecreateApiInParam_7_4->setIsListType(false);
        $alipayTradePrecreateApiInParam_7_4->setFullParamName("goodsDetail[0].price");
        $alipayTradePrecreateApiInParam_7_4->setEnName("price");
        $alipayTradePrecreateApiInParam_7_4->setChilds("");
        $alipayTradePrecreateApiInParam_7Childs[] = json_decode($alipayTradePrecreateApiInParam_7_4->getBizContent());

        $alipayTradePrecreateApiInParam_7_1 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_7_1->setBaseType($alipayTradePrecreateApiInParam_7_1::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_7_1->setTitle("支付宝定义的统一商品编号");
        $alipayTradePrecreateApiInParam_7_1->setDesc("");
        $alipayTradePrecreateApiInParam_7_1->setIsMust(3);
        $alipayTradePrecreateApiInParam_7_1->setIsListType(false);
        $alipayTradePrecreateApiInParam_7_1->setFullParamName("goodsDetail[0].alipayGoodsId");
        $alipayTradePrecreateApiInParam_7_1->setEnName("alipay_goods_id");
        $alipayTradePrecreateApiInParam_7_1->setChilds("");
        $alipayTradePrecreateApiInParam_7Childs[] = json_decode($alipayTradePrecreateApiInParam_7_1->getBizContent());

        $alipayTradePrecreateApiInParam_7_5 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_7_5->setBaseType($alipayTradePrecreateApiInParam_7_5::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_7_5->setTitle("商品类目");
        $alipayTradePrecreateApiInParam_7_5->setDesc("");
        $alipayTradePrecreateApiInParam_7_5->setIsMust(3);
        $alipayTradePrecreateApiInParam_7_5->setIsListType(false);
        $alipayTradePrecreateApiInParam_7_5->setFullParamName("goodsDetail[0].goodsCategory");
        $alipayTradePrecreateApiInParam_7_5->setEnName("goods_category");
        $alipayTradePrecreateApiInParam_7_5->setChilds("");
        $alipayTradePrecreateApiInParam_7Childs[] = json_decode($alipayTradePrecreateApiInParam_7_5->getBizContent());

        $alipayTradePrecreateApiInParam_7_6 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_7_6->setBaseType($alipayTradePrecreateApiInParam_7_6::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_7_6->setTitle("商品描述信息");
        $alipayTradePrecreateApiInParam_7_6->setDesc("");
        $alipayTradePrecreateApiInParam_7_6->setIsMust(3);
        $alipayTradePrecreateApiInParam_7_6->setIsListType(false);
        $alipayTradePrecreateApiInParam_7_6->setFullParamName("goodsDetail[0].body");
        $alipayTradePrecreateApiInParam_7_6->setEnName("body");
        $alipayTradePrecreateApiInParam_7_6->setChilds("");
        $alipayTradePrecreateApiInParam_7Childs[] = json_decode($alipayTradePrecreateApiInParam_7_6->getBizContent());

        $alipayTradePrecreateApiInParam_7_7 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_7_7->setBaseType($alipayTradePrecreateApiInParam_7_7::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_7_7->setTitle("商品的展示地址");
        $alipayTradePrecreateApiInParam_7_7->setDesc("");
        $alipayTradePrecreateApiInParam_7_7->setIsMust(3);
        $alipayTradePrecreateApiInParam_7_7->setIsListType(false);
        $alipayTradePrecreateApiInParam_7_7->setFullParamName("goodsDetail[0].showUrl");
        $alipayTradePrecreateApiInParam_7_7->setEnName("show_url");
        $alipayTradePrecreateApiInParam_7_7->setChilds("");
        $alipayTradePrecreateApiInParam_7Childs[] = json_decode($alipayTradePrecreateApiInParam_7_7->getBizContent());

            $alipayTradePrecreateApiInParam_7->setChilds($alipayTradePrecreateApiInParam_7Childs);

        $alipayTradePrecreateApiInParamChilds[] = json_decode($alipayTradePrecreateApiInParam_7->getBizContent());

        $alipayTradePrecreateApiInParam_8 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_8->setBaseType($alipayTradePrecreateApiInParam_8::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_8->setTitle("对交易或商品的描述");
        $alipayTradePrecreateApiInParam_8->setDesc("");
        $alipayTradePrecreateApiInParam_8->setIsMust(3);
        $alipayTradePrecreateApiInParam_8->setIsListType(false);
        $alipayTradePrecreateApiInParam_8->setFullParamName("body");
        $alipayTradePrecreateApiInParam_8->setEnName("body");
        $alipayTradePrecreateApiInParam_8->setChilds("");
        $alipayTradePrecreateApiInParamChilds[] = json_decode($alipayTradePrecreateApiInParam_8->getBizContent());

        $alipayTradePrecreateApiInParam_9 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_9->setBaseType($alipayTradePrecreateApiInParam_9::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_9->setTitle("商户操作员编号");
        $alipayTradePrecreateApiInParam_9->setDesc("");
        $alipayTradePrecreateApiInParam_9->setIsMust(3);
        $alipayTradePrecreateApiInParam_9->setIsListType(false);
        $alipayTradePrecreateApiInParam_9->setFullParamName("operatorId");
        $alipayTradePrecreateApiInParam_9->setEnName("operator_id");
        $alipayTradePrecreateApiInParam_9->setChilds("");
        $alipayTradePrecreateApiInParamChilds[] = json_decode($alipayTradePrecreateApiInParam_9->getBizContent());

        $alipayTradePrecreateApiInParam_10 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_10->setBaseType($alipayTradePrecreateApiInParam_10::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_10->setTitle("商户门店编号");
        $alipayTradePrecreateApiInParam_10->setDesc("");
        $alipayTradePrecreateApiInParam_10->setIsMust(3);
        $alipayTradePrecreateApiInParam_10->setIsListType(false);
        $alipayTradePrecreateApiInParam_10->setFullParamName("storeId");
        $alipayTradePrecreateApiInParam_10->setEnName("store_id");
        $alipayTradePrecreateApiInParam_10->setChilds("");
        $alipayTradePrecreateApiInParamChilds[] = json_decode($alipayTradePrecreateApiInParam_10->getBizContent());

        $alipayTradePrecreateApiInParam_11 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_11->setBaseType($alipayTradePrecreateApiInParam_11::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_11->setTitle("禁用渠道");
        $alipayTradePrecreateApiInParam_11->setDesc("用户不可用指定渠道支付  当有多个渠道时用“,”分隔  注，与enable_pay_channels互斥  渠道列表：https://docs.open.alipay.com/common/wifww7");
        $alipayTradePrecreateApiInParam_11->setIsMust(3);
        $alipayTradePrecreateApiInParam_11->setIsListType(false);
        $alipayTradePrecreateApiInParam_11->setFullParamName("disablePayChannels");
        $alipayTradePrecreateApiInParam_11->setEnName("disable_pay_channels");
        $alipayTradePrecreateApiInParam_11->setChilds("");
        $alipayTradePrecreateApiInParamChilds[] = json_decode($alipayTradePrecreateApiInParam_11->getBizContent());

        $alipayTradePrecreateApiInParam_12 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_12->setBaseType($alipayTradePrecreateApiInParam_12::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_12->setTitle("可用渠道");
        $alipayTradePrecreateApiInParam_12->setDesc("用户只能在指定渠道范围内支付  当有多个渠道时用“,”分隔  注，与disable_pay_channels互斥  <a href=\"https://docs.open.alipay.com/common/wifww7\">渠道列表</a>");
        $alipayTradePrecreateApiInParam_12->setIsMust(3);
        $alipayTradePrecreateApiInParam_12->setIsListType(false);
        $alipayTradePrecreateApiInParam_12->setFullParamName("enablePayChannels");
        $alipayTradePrecreateApiInParam_12->setEnName("enable_pay_channels");
        $alipayTradePrecreateApiInParam_12->setChilds("");
        $alipayTradePrecreateApiInParamChilds[] = json_decode($alipayTradePrecreateApiInParam_12->getBizContent());

        $alipayTradePrecreateApiInParam_13 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_13->setBaseType($alipayTradePrecreateApiInParam_13::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_13->setTitle("商户机具终端编号");
        $alipayTradePrecreateApiInParam_13->setDesc("");
        $alipayTradePrecreateApiInParam_13->setIsMust(3);
        $alipayTradePrecreateApiInParam_13->setIsListType(false);
        $alipayTradePrecreateApiInParam_13->setFullParamName("terminalId");
        $alipayTradePrecreateApiInParam_13->setEnName("terminal_id");
        $alipayTradePrecreateApiInParam_13->setChilds("");
        $alipayTradePrecreateApiInParamChilds[] = json_decode($alipayTradePrecreateApiInParam_13->getBizContent());

        $alipayTradePrecreateApiInParam_14 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_14->setBaseType($alipayTradePrecreateApiInParam_14::$TYPE_COMPLEXTYPE);
        $alipayTradePrecreateApiInParam_14->setTitle("业务扩展参数");
        $alipayTradePrecreateApiInParam_14->setDesc("");
        $alipayTradePrecreateApiInParam_14->setIsMust(3);
        $alipayTradePrecreateApiInParam_14->setIsListType(false);
        $alipayTradePrecreateApiInParam_14->setFullParamName("extendParams");
        $alipayTradePrecreateApiInParam_14->setEnName("extend_params");
        $alipayTradePrecreateApiInParam_14->setChilds("");
    
    // $alipayTradePrecreateApiInParam_14Childs[] = new ApiParamModel();

            $alipayTradePrecreateApiInParam_14_0 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_14_0->setBaseType($alipayTradePrecreateApiInParam_14_0::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_14_0->setTitle("系统商编号");
        $alipayTradePrecreateApiInParam_14_0->setDesc(" 该参数作为系统商返佣数据提取的依据，请填写系统商签约协议的PID");
        $alipayTradePrecreateApiInParam_14_0->setIsMust(3);
        $alipayTradePrecreateApiInParam_14_0->setIsListType(false);
        $alipayTradePrecreateApiInParam_14_0->setFullParamName("extendParams.sysServiceProviderId");
        $alipayTradePrecreateApiInParam_14_0->setEnName("sys_service_provider_id");
        $alipayTradePrecreateApiInParam_14_0->setChilds("");
        $alipayTradePrecreateApiInParam_14Childs[] = json_decode($alipayTradePrecreateApiInParam_14_0->getBizContent());

        $alipayTradePrecreateApiInParam_14_1 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_14_1->setBaseType($alipayTradePrecreateApiInParam_14_1::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_14_1->setTitle("使用花呗分期要进行的分期数");
        $alipayTradePrecreateApiInParam_14_1->setDesc("");
        $alipayTradePrecreateApiInParam_14_1->setIsMust(3);
        $alipayTradePrecreateApiInParam_14_1->setIsListType(false);
        $alipayTradePrecreateApiInParam_14_1->setFullParamName("extendParams.hbFqNum");
        $alipayTradePrecreateApiInParam_14_1->setEnName("hb_fq_num");
        $alipayTradePrecreateApiInParam_14_1->setChilds("");
        $alipayTradePrecreateApiInParam_14Childs[] = json_decode($alipayTradePrecreateApiInParam_14_1->getBizContent());

        $alipayTradePrecreateApiInParam_14_2 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_14_2->setBaseType($alipayTradePrecreateApiInParam_14_2::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_14_2->setTitle("使用花呗分期需要卖家承担的手续费比例的百分值");
        $alipayTradePrecreateApiInParam_14_2->setDesc("传入100代表100%");
        $alipayTradePrecreateApiInParam_14_2->setIsMust(3);
        $alipayTradePrecreateApiInParam_14_2->setIsListType(false);
        $alipayTradePrecreateApiInParam_14_2->setFullParamName("extendParams.hbFqSellerPercent");
        $alipayTradePrecreateApiInParam_14_2->setEnName("hb_fq_seller_percent");
        $alipayTradePrecreateApiInParam_14_2->setChilds("");
        $alipayTradePrecreateApiInParam_14Childs[] = json_decode($alipayTradePrecreateApiInParam_14_2->getBizContent());

        $alipayTradePrecreateApiInParam_14_3 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_14_3->setBaseType($alipayTradePrecreateApiInParam_14_3::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_14_3->setTitle("行业数据回流信息");
        $alipayTradePrecreateApiInParam_14_3->setDesc(" 详见：地铁支付接口参数补充说明");
        $alipayTradePrecreateApiInParam_14_3->setIsMust(3);
        $alipayTradePrecreateApiInParam_14_3->setIsListType(false);
        $alipayTradePrecreateApiInParam_14_3->setFullParamName("extendParams.industryRefluxInfo");
        $alipayTradePrecreateApiInParam_14_3->setEnName("industry_reflux_info");
        $alipayTradePrecreateApiInParam_14_3->setChilds("");
        $alipayTradePrecreateApiInParam_14Childs[] = json_decode($alipayTradePrecreateApiInParam_14_3->getBizContent());

        $alipayTradePrecreateApiInParam_14_4 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_14_4->setBaseType($alipayTradePrecreateApiInParam_14_4::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_14_4->setTitle("卡类型");
        $alipayTradePrecreateApiInParam_14_4->setDesc("");
        $alipayTradePrecreateApiInParam_14_4->setIsMust(3);
        $alipayTradePrecreateApiInParam_14_4->setIsListType(false);
        $alipayTradePrecreateApiInParam_14_4->setFullParamName("extendParams.cardType");
        $alipayTradePrecreateApiInParam_14_4->setEnName("card_type");
        $alipayTradePrecreateApiInParam_14_4->setChilds("");
        $alipayTradePrecreateApiInParam_14Childs[] = json_decode($alipayTradePrecreateApiInParam_14_4->getBizContent());

            $alipayTradePrecreateApiInParam_14->setChilds($alipayTradePrecreateApiInParam_14Childs);

        $alipayTradePrecreateApiInParamChilds[] = json_decode($alipayTradePrecreateApiInParam_14->getBizContent());

        $alipayTradePrecreateApiInParam_15 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_15->setBaseType($alipayTradePrecreateApiInParam_15::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_15->setTitle("该笔订单允许的最晚付款时间");
        $alipayTradePrecreateApiInParam_15->setDesc("逾期将关闭交易。取值范围：1m～15d。m-分钟，h-小时，d-天，1c-当天（1c-当天的情况下，无论交易何时创建，都在0点关闭）。 该参数数值不接受小数点， 如 1.5h，可转换为 90m。");
        $alipayTradePrecreateApiInParam_15->setIsMust(3);
        $alipayTradePrecreateApiInParam_15->setIsListType(false);
        $alipayTradePrecreateApiInParam_15->setFullParamName("timeoutExpress");
        $alipayTradePrecreateApiInParam_15->setEnName("timeout_express");
        $alipayTradePrecreateApiInParam_15->setChilds("");
        $alipayTradePrecreateApiInParamChilds[] = json_decode($alipayTradePrecreateApiInParam_15->getBizContent());

        $alipayTradePrecreateApiInParam_16 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_16->setBaseType($alipayTradePrecreateApiInParam_16::$TYPE_COMPLEXTYPE);
        $alipayTradePrecreateApiInParam_16->setTitle("描述分账信息");
        $alipayTradePrecreateApiInParam_16->setDesc("json格式。");
        $alipayTradePrecreateApiInParam_16->setIsMust(3);
        $alipayTradePrecreateApiInParam_16->setIsListType(false);
        $alipayTradePrecreateApiInParam_16->setFullParamName("royaltyInfo");
        $alipayTradePrecreateApiInParam_16->setEnName("royalty_info");
        $alipayTradePrecreateApiInParam_16->setChilds("");
    
    // $alipayTradePrecreateApiInParam_16Childs[] = new ApiParamModel();

            $alipayTradePrecreateApiInParam_16_1 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_16_1->setBaseType($alipayTradePrecreateApiInParam_16_1::$TYPE_COMPLEXTYPE);
        $alipayTradePrecreateApiInParam_16_1->setTitle("分账明细的信息");
        $alipayTradePrecreateApiInParam_16_1->setDesc("可以描述多条分账指令，json数组。");
        $alipayTradePrecreateApiInParam_16_1->setIsMust(1);
        $alipayTradePrecreateApiInParam_16_1->setIsListType(true);
        $alipayTradePrecreateApiInParam_16_1->setFullParamName("royaltyInfo.royaltyDetailInfos[0]");
        $alipayTradePrecreateApiInParam_16_1->setEnName("royalty_detail_infos");
        $alipayTradePrecreateApiInParam_16_1->setChilds("");
    
    // $alipayTradePrecreateApiInParam_16_1Childs[] = new ApiParamModel();

            $alipayTradePrecreateApiInParam_16_1_2 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_16_1_2->setBaseType($alipayTradePrecreateApiInParam_16_1_2::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_16_1_2->setTitle("分账批次号");
        $alipayTradePrecreateApiInParam_16_1_2->setDesc(" 分账批次号。  目前需要和转入账号类型为bankIndex配合使用。");
        $alipayTradePrecreateApiInParam_16_1_2->setIsMust(1);
        $alipayTradePrecreateApiInParam_16_1_2->setIsListType(false);
        $alipayTradePrecreateApiInParam_16_1_2->setFullParamName("royaltyInfo.royaltyDetailInfos[0].batchNo");
        $alipayTradePrecreateApiInParam_16_1_2->setEnName("batch_no");
        $alipayTradePrecreateApiInParam_16_1_2->setChilds("");
        $alipayTradePrecreateApiInParam_16_1Childs[] = json_decode($alipayTradePrecreateApiInParam_16_1_2->getBizContent());

        $alipayTradePrecreateApiInParam_16_1_4 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_16_1_4->setBaseType($alipayTradePrecreateApiInParam_16_1_4::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_16_1_4->setTitle("要分账的账户类型");
        $alipayTradePrecreateApiInParam_16_1_4->setDesc("  目前只支持userId：支付宝账号对应的支付宝唯一用户号。  默认值为userId。");
        $alipayTradePrecreateApiInParam_16_1_4->setIsMust(1);
        $alipayTradePrecreateApiInParam_16_1_4->setIsListType(false);
        $alipayTradePrecreateApiInParam_16_1_4->setFullParamName("royaltyInfo.royaltyDetailInfos[0].transOutType");
        $alipayTradePrecreateApiInParam_16_1_4->setEnName("trans_out_type");
        $alipayTradePrecreateApiInParam_16_1_4->setChilds("");
        $alipayTradePrecreateApiInParam_16_1Childs[] = json_decode($alipayTradePrecreateApiInParam_16_1_4->getBizContent());

        $alipayTradePrecreateApiInParam_16_1_5 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_16_1_5->setBaseType($alipayTradePrecreateApiInParam_16_1_5::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_16_1_5->setTitle("如果转出账号类型为userId");
        $alipayTradePrecreateApiInParam_16_1_5->setDesc("本参数为要分账的支付宝账号对应的支付宝唯一用户号。以2088开头的纯16位数字。");
        $alipayTradePrecreateApiInParam_16_1_5->setIsMust(1);
        $alipayTradePrecreateApiInParam_16_1_5->setIsListType(false);
        $alipayTradePrecreateApiInParam_16_1_5->setFullParamName("royaltyInfo.royaltyDetailInfos[0].transOut");
        $alipayTradePrecreateApiInParam_16_1_5->setEnName("trans_out");
        $alipayTradePrecreateApiInParam_16_1_5->setChilds("");
        $alipayTradePrecreateApiInParam_16_1Childs[] = json_decode($alipayTradePrecreateApiInParam_16_1_5->getBizContent());

        $alipayTradePrecreateApiInParam_16_1_6 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_16_1_6->setBaseType($alipayTradePrecreateApiInParam_16_1_6::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_16_1_6->setTitle("如果转入账号类型为userId");
        $alipayTradePrecreateApiInParam_16_1_6->setDesc("本参数为接受分账金额的支付宝账号对应的支付宝唯一用户号。以2088开头的纯16位数字。  &#61548;	如果转入账号类型为bankIndex，本参数为28位的银行编号（商户和支付宝签约时确定）。  如果转入账号类型为storeId，本参数为商户的门店ID。");
        $alipayTradePrecreateApiInParam_16_1_6->setIsMust(1);
        $alipayTradePrecreateApiInParam_16_1_6->setIsListType(false);
        $alipayTradePrecreateApiInParam_16_1_6->setFullParamName("royaltyInfo.royaltyDetailInfos[0].transIn");
        $alipayTradePrecreateApiInParam_16_1_6->setEnName("trans_in");
        $alipayTradePrecreateApiInParam_16_1_6->setChilds("");
        $alipayTradePrecreateApiInParam_16_1Childs[] = json_decode($alipayTradePrecreateApiInParam_16_1_6->getBizContent());

        $alipayTradePrecreateApiInParam_16_1_7 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_16_1_7->setBaseType($alipayTradePrecreateApiInParam_16_1_7::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_16_1_7->setTitle("分账的金额");
        $alipayTradePrecreateApiInParam_16_1_7->setDesc("单位为元");
        $alipayTradePrecreateApiInParam_16_1_7->setIsMust(1);
        $alipayTradePrecreateApiInParam_16_1_7->setIsListType(false);
        $alipayTradePrecreateApiInParam_16_1_7->setFullParamName("royaltyInfo.royaltyDetailInfos[0].amount");
        $alipayTradePrecreateApiInParam_16_1_7->setEnName("amount");
        $alipayTradePrecreateApiInParam_16_1_7->setChilds("");
        $alipayTradePrecreateApiInParam_16_1Childs[] = json_decode($alipayTradePrecreateApiInParam_16_1_7->getBizContent());

        $alipayTradePrecreateApiInParam_16_1_0 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_16_1_0->setBaseType($alipayTradePrecreateApiInParam_16_1_0::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_16_1_0->setTitle("分账序列号");
        $alipayTradePrecreateApiInParam_16_1_0->setDesc("表示分账执行的顺序，必须为正整数");
        $alipayTradePrecreateApiInParam_16_1_0->setIsMust(3);
        $alipayTradePrecreateApiInParam_16_1_0->setIsListType(false);
        $alipayTradePrecreateApiInParam_16_1_0->setFullParamName("royaltyInfo.royaltyDetailInfos[0].serialNo");
        $alipayTradePrecreateApiInParam_16_1_0->setEnName("serial_no");
        $alipayTradePrecreateApiInParam_16_1_0->setChilds("");
        $alipayTradePrecreateApiInParam_16_1Childs[] = json_decode($alipayTradePrecreateApiInParam_16_1_0->getBizContent());

        $alipayTradePrecreateApiInParam_16_1_1 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_16_1_1->setBaseType($alipayTradePrecreateApiInParam_16_1_1::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_16_1_1->setTitle("接受分账金额的账户类型：");
        $alipayTradePrecreateApiInParam_16_1_1->setDesc(" &#61548;	userId：支付宝账号对应的支付宝唯一用户号。  &#61548;	bankIndex：分账到银行账户的银行编号。目前暂时只支持分账到一个银行编号。  storeId：分账到门店对应的银行卡编号。  默认值为userId。");
        $alipayTradePrecreateApiInParam_16_1_1->setIsMust(3);
        $alipayTradePrecreateApiInParam_16_1_1->setIsListType(false);
        $alipayTradePrecreateApiInParam_16_1_1->setFullParamName("royaltyInfo.royaltyDetailInfos[0].transInType");
        $alipayTradePrecreateApiInParam_16_1_1->setEnName("trans_in_type");
        $alipayTradePrecreateApiInParam_16_1_1->setChilds("");
        $alipayTradePrecreateApiInParam_16_1Childs[] = json_decode($alipayTradePrecreateApiInParam_16_1_1->getBizContent());

        $alipayTradePrecreateApiInParam_16_1_3 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_16_1_3->setBaseType($alipayTradePrecreateApiInParam_16_1_3::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_16_1_3->setTitle("商户分账的外部关联号");
        $alipayTradePrecreateApiInParam_16_1_3->setDesc("用于关联到每一笔分账信息，商户需保证其唯一性。  如果为空，该值则默认为“商户网站唯一订单号+分账序列号”");
        $alipayTradePrecreateApiInParam_16_1_3->setIsMust(3);
        $alipayTradePrecreateApiInParam_16_1_3->setIsListType(false);
        $alipayTradePrecreateApiInParam_16_1_3->setFullParamName("royaltyInfo.royaltyDetailInfos[0].outRelationId");
        $alipayTradePrecreateApiInParam_16_1_3->setEnName("out_relation_id");
        $alipayTradePrecreateApiInParam_16_1_3->setChilds("");
        $alipayTradePrecreateApiInParam_16_1Childs[] = json_decode($alipayTradePrecreateApiInParam_16_1_3->getBizContent());

        $alipayTradePrecreateApiInParam_16_1_8 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_16_1_8->setBaseType($alipayTradePrecreateApiInParam_16_1_8::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_16_1_8->setTitle("分账描述信息");
        $alipayTradePrecreateApiInParam_16_1_8->setDesc("");
        $alipayTradePrecreateApiInParam_16_1_8->setIsMust(3);
        $alipayTradePrecreateApiInParam_16_1_8->setIsListType(false);
        $alipayTradePrecreateApiInParam_16_1_8->setFullParamName("royaltyInfo.royaltyDetailInfos[0].desc");
        $alipayTradePrecreateApiInParam_16_1_8->setEnName("desc");
        $alipayTradePrecreateApiInParam_16_1_8->setChilds("");
        $alipayTradePrecreateApiInParam_16_1Childs[] = json_decode($alipayTradePrecreateApiInParam_16_1_8->getBizContent());

        $alipayTradePrecreateApiInParam_16_1_9 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_16_1_9->setBaseType($alipayTradePrecreateApiInParam_16_1_9::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_16_1_9->setTitle("分账的比例");
        $alipayTradePrecreateApiInParam_16_1_9->setDesc("值为20代表按20%的比例分账");
        $alipayTradePrecreateApiInParam_16_1_9->setIsMust(3);
        $alipayTradePrecreateApiInParam_16_1_9->setIsListType(false);
        $alipayTradePrecreateApiInParam_16_1_9->setFullParamName("royaltyInfo.royaltyDetailInfos[0].amountPercentage");
        $alipayTradePrecreateApiInParam_16_1_9->setEnName("amount_percentage");
        $alipayTradePrecreateApiInParam_16_1_9->setChilds("");
        $alipayTradePrecreateApiInParam_16_1Childs[] = json_decode($alipayTradePrecreateApiInParam_16_1_9->getBizContent());

            $alipayTradePrecreateApiInParam_16_1->setChilds($alipayTradePrecreateApiInParam_16_1Childs);

        $alipayTradePrecreateApiInParam_16Childs[] = json_decode($alipayTradePrecreateApiInParam_16_1->getBizContent());

        $alipayTradePrecreateApiInParam_16_0 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_16_0->setBaseType($alipayTradePrecreateApiInParam_16_0::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_16_0->setTitle("分账类型");
        $alipayTradePrecreateApiInParam_16_0->setDesc(" 卖家的分账类型，目前只支持传入ROYALTY（普通分账类型）。");
        $alipayTradePrecreateApiInParam_16_0->setIsMust(3);
        $alipayTradePrecreateApiInParam_16_0->setIsListType(false);
        $alipayTradePrecreateApiInParam_16_0->setFullParamName("royaltyInfo.royaltyType");
        $alipayTradePrecreateApiInParam_16_0->setEnName("royalty_type");
        $alipayTradePrecreateApiInParam_16_0->setChilds("");
        $alipayTradePrecreateApiInParam_16Childs[] = json_decode($alipayTradePrecreateApiInParam_16_0->getBizContent());

            $alipayTradePrecreateApiInParam_16->setChilds($alipayTradePrecreateApiInParam_16Childs);

        $alipayTradePrecreateApiInParamChilds[] = json_decode($alipayTradePrecreateApiInParam_16->getBizContent());

        $alipayTradePrecreateApiInParam_17 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_17->setBaseType($alipayTradePrecreateApiInParam_17::$TYPE_COMPLEXTYPE);
        $alipayTradePrecreateApiInParam_17->setTitle("描述结算信息");
        $alipayTradePrecreateApiInParam_17->setDesc("json格式，详见结算参数说明");
        $alipayTradePrecreateApiInParam_17->setIsMust(3);
        $alipayTradePrecreateApiInParam_17->setIsListType(false);
        $alipayTradePrecreateApiInParam_17->setFullParamName("settleInfo");
        $alipayTradePrecreateApiInParam_17->setEnName("settle_info");
        $alipayTradePrecreateApiInParam_17->setChilds("");
    
    // $alipayTradePrecreateApiInParam_17Childs[] = new ApiParamModel();

            $alipayTradePrecreateApiInParam_17_0 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_17_0->setBaseType($alipayTradePrecreateApiInParam_17_0::$TYPE_COMPLEXTYPE);
        $alipayTradePrecreateApiInParam_17_0->setTitle("结算详细信息");
        $alipayTradePrecreateApiInParam_17_0->setDesc("json数组，目前只支持一条。");
        $alipayTradePrecreateApiInParam_17_0->setIsMust(1);
        $alipayTradePrecreateApiInParam_17_0->setIsListType(true);
        $alipayTradePrecreateApiInParam_17_0->setFullParamName("settleInfo.settleDetailInfos[0]");
        $alipayTradePrecreateApiInParam_17_0->setEnName("settle_detail_infos");
        $alipayTradePrecreateApiInParam_17_0->setChilds("");
    
    // $alipayTradePrecreateApiInParam_17_0Childs[] = new ApiParamModel();

            $alipayTradePrecreateApiInParam_17_0_0 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_17_0_0->setBaseType($alipayTradePrecreateApiInParam_17_0_0::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_17_0_0->setTitle("结算收款方的账户类型");
        $alipayTradePrecreateApiInParam_17_0_0->setDesc("    cardSerialNo：结算收款方的银行卡编号;    userId：表示是支付宝账号对应的支付宝唯一用户号;  loginName：表示是支付宝登录号；");
        $alipayTradePrecreateApiInParam_17_0_0->setIsMust(1);
        $alipayTradePrecreateApiInParam_17_0_0->setIsListType(false);
        $alipayTradePrecreateApiInParam_17_0_0->setFullParamName("settleInfo.settleDetailInfos[0].transInType");
        $alipayTradePrecreateApiInParam_17_0_0->setEnName("trans_in_type");
        $alipayTradePrecreateApiInParam_17_0_0->setChilds("");
        $alipayTradePrecreateApiInParam_17_0Childs[] = json_decode($alipayTradePrecreateApiInParam_17_0_0->getBizContent());

        $alipayTradePrecreateApiInParam_17_0_1 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_17_0_1->setBaseType($alipayTradePrecreateApiInParam_17_0_1::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_17_0_1->setTitle("结算收款方");
        $alipayTradePrecreateApiInParam_17_0_1->setDesc("当结算收款方类型是cardSerialNo时，本参数为用户在支付宝绑定的卡编号；结算收款方类型是userId时，本参数为用户的支付宝账号对应的支付宝唯一用户号，以2088开头的纯16位数字；当结算收款方类型是loginName时，本参数为用户的支付宝登录号");
        $alipayTradePrecreateApiInParam_17_0_1->setIsMust(1);
        $alipayTradePrecreateApiInParam_17_0_1->setIsListType(false);
        $alipayTradePrecreateApiInParam_17_0_1->setFullParamName("settleInfo.settleDetailInfos[0].transIn");
        $alipayTradePrecreateApiInParam_17_0_1->setEnName("trans_in");
        $alipayTradePrecreateApiInParam_17_0_1->setChilds("");
        $alipayTradePrecreateApiInParam_17_0Childs[] = json_decode($alipayTradePrecreateApiInParam_17_0_1->getBizContent());

        $alipayTradePrecreateApiInParam_17_0_5 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_17_0_5->setBaseType($alipayTradePrecreateApiInParam_17_0_5::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_17_0_5->setTitle("结算的金额");
        $alipayTradePrecreateApiInParam_17_0_5->setDesc("单位为元。目前必须和交易金额相同");
        $alipayTradePrecreateApiInParam_17_0_5->setIsMust(1);
        $alipayTradePrecreateApiInParam_17_0_5->setIsListType(false);
        $alipayTradePrecreateApiInParam_17_0_5->setFullParamName("settleInfo.settleDetailInfos[0].amount");
        $alipayTradePrecreateApiInParam_17_0_5->setEnName("amount");
        $alipayTradePrecreateApiInParam_17_0_5->setChilds("");
        $alipayTradePrecreateApiInParam_17_0Childs[] = json_decode($alipayTradePrecreateApiInParam_17_0_5->getBizContent());

        $alipayTradePrecreateApiInParam_17_0_2 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_17_0_2->setBaseType($alipayTradePrecreateApiInParam_17_0_2::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_17_0_2->setTitle("结算汇总维度");
        $alipayTradePrecreateApiInParam_17_0_2->setDesc("按照这个维度汇总成批次结算，由商户指定。    目前需要和结算收款方账户类型为cardSerialNo配合使用");
        $alipayTradePrecreateApiInParam_17_0_2->setIsMust(3);
        $alipayTradePrecreateApiInParam_17_0_2->setIsListType(false);
        $alipayTradePrecreateApiInParam_17_0_2->setFullParamName("settleInfo.settleDetailInfos[0].summaryDimension");
        $alipayTradePrecreateApiInParam_17_0_2->setEnName("summary_dimension");
        $alipayTradePrecreateApiInParam_17_0_2->setChilds("");
        $alipayTradePrecreateApiInParam_17_0Childs[] = json_decode($alipayTradePrecreateApiInParam_17_0_2->getBizContent());

        $alipayTradePrecreateApiInParam_17_0_3 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_17_0_3->setBaseType($alipayTradePrecreateApiInParam_17_0_3::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_17_0_3->setTitle("结算主体标识");
        $alipayTradePrecreateApiInParam_17_0_3->setDesc("当结算主体类型为SecondMerchant时，为二级商户的SecondMerchantID；当结算主体类型为Store时，为门店的外标。");
        $alipayTradePrecreateApiInParam_17_0_3->setIsMust(3);
        $alipayTradePrecreateApiInParam_17_0_3->setIsListType(false);
        $alipayTradePrecreateApiInParam_17_0_3->setFullParamName("settleInfo.settleDetailInfos[0].settleEntityId");
        $alipayTradePrecreateApiInParam_17_0_3->setEnName("settle_entity_id");
        $alipayTradePrecreateApiInParam_17_0_3->setChilds("");
        $alipayTradePrecreateApiInParam_17_0Childs[] = json_decode($alipayTradePrecreateApiInParam_17_0_3->getBizContent());

        $alipayTradePrecreateApiInParam_17_0_4 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_17_0_4->setBaseType($alipayTradePrecreateApiInParam_17_0_4::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_17_0_4->setTitle("结算主体类型");
        $alipayTradePrecreateApiInParam_17_0_4->setDesc("  二级商户:SecondMerchant;商户或者直连商户门店:Store");
        $alipayTradePrecreateApiInParam_17_0_4->setIsMust(3);
        $alipayTradePrecreateApiInParam_17_0_4->setIsListType(false);
        $alipayTradePrecreateApiInParam_17_0_4->setFullParamName("settleInfo.settleDetailInfos[0].settleEntityType");
        $alipayTradePrecreateApiInParam_17_0_4->setEnName("settle_entity_type");
        $alipayTradePrecreateApiInParam_17_0_4->setChilds("");
        $alipayTradePrecreateApiInParam_17_0Childs[] = json_decode($alipayTradePrecreateApiInParam_17_0_4->getBizContent());

            $alipayTradePrecreateApiInParam_17_0->setChilds($alipayTradePrecreateApiInParam_17_0Childs);

        $alipayTradePrecreateApiInParam_17Childs[] = json_decode($alipayTradePrecreateApiInParam_17_0->getBizContent());

            $alipayTradePrecreateApiInParam_17->setChilds($alipayTradePrecreateApiInParam_17Childs);

        $alipayTradePrecreateApiInParamChilds[] = json_decode($alipayTradePrecreateApiInParam_17->getBizContent());

        $alipayTradePrecreateApiInParam_18 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_18->setBaseType($alipayTradePrecreateApiInParam_18::$TYPE_COMPLEXTYPE);
        $alipayTradePrecreateApiInParam_18->setTitle("二级商户信息");
        $alipayTradePrecreateApiInParam_18->setDesc("当前只对特殊银行机构特定场景下使用此字段");
        $alipayTradePrecreateApiInParam_18->setIsMust(3);
        $alipayTradePrecreateApiInParam_18->setIsListType(false);
        $alipayTradePrecreateApiInParam_18->setFullParamName("subMerchant");
        $alipayTradePrecreateApiInParam_18->setEnName("sub_merchant");
        $alipayTradePrecreateApiInParam_18->setChilds("");
    
    // $alipayTradePrecreateApiInParam_18Childs[] = new ApiParamModel();

            $alipayTradePrecreateApiInParam_18_0 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_18_0->setBaseType($alipayTradePrecreateApiInParam_18_0::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_18_0->setTitle("间连受理商户的支付宝商户编号");
        $alipayTradePrecreateApiInParam_18_0->setDesc("通过间连商户入驻后得到。间连业务下必传，并且需要按规范传递受理商户编号。");
        $alipayTradePrecreateApiInParam_18_0->setIsMust(1);
        $alipayTradePrecreateApiInParam_18_0->setIsListType(false);
        $alipayTradePrecreateApiInParam_18_0->setFullParamName("subMerchant.merchantId");
        $alipayTradePrecreateApiInParam_18_0->setEnName("merchant_id");
        $alipayTradePrecreateApiInParam_18_0->setChilds("");
        $alipayTradePrecreateApiInParam_18Childs[] = json_decode($alipayTradePrecreateApiInParam_18_0->getBizContent());

        $alipayTradePrecreateApiInParam_18_1 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_18_1->setBaseType($alipayTradePrecreateApiInParam_18_1::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_18_1->setTitle("商户id类型");
        $alipayTradePrecreateApiInParam_18_1->setDesc("");
        $alipayTradePrecreateApiInParam_18_1->setIsMust(3);
        $alipayTradePrecreateApiInParam_18_1->setIsListType(false);
        $alipayTradePrecreateApiInParam_18_1->setFullParamName("subMerchant.merchantType");
        $alipayTradePrecreateApiInParam_18_1->setEnName("merchant_type");
        $alipayTradePrecreateApiInParam_18_1->setChilds("");
        $alipayTradePrecreateApiInParam_18Childs[] = json_decode($alipayTradePrecreateApiInParam_18_1->getBizContent());

            $alipayTradePrecreateApiInParam_18->setChilds($alipayTradePrecreateApiInParam_18Childs);

        $alipayTradePrecreateApiInParamChilds[] = json_decode($alipayTradePrecreateApiInParam_18->getBizContent());

        $alipayTradePrecreateApiInParam_19 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_19->setBaseType($alipayTradePrecreateApiInParam_19::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_19->setTitle("支付宝店铺的门店ID");
        $alipayTradePrecreateApiInParam_19->setDesc("");
        $alipayTradePrecreateApiInParam_19->setIsMust(3);
        $alipayTradePrecreateApiInParam_19->setIsListType(false);
        $alipayTradePrecreateApiInParam_19->setFullParamName("alipayStoreId");
        $alipayTradePrecreateApiInParam_19->setEnName("alipay_store_id");
        $alipayTradePrecreateApiInParam_19->setChilds("");
        $alipayTradePrecreateApiInParamChilds[] = json_decode($alipayTradePrecreateApiInParam_19->getBizContent());

        $alipayTradePrecreateApiInParam_20 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_20->setBaseType($alipayTradePrecreateApiInParam_20::$TYPE_COMPLEXTYPE);
        $alipayTradePrecreateApiInParam_20->setTitle("外部指定买家");
        $alipayTradePrecreateApiInParam_20->setDesc("");
        $alipayTradePrecreateApiInParam_20->setIsMust(3);
        $alipayTradePrecreateApiInParam_20->setIsListType(false);
        $alipayTradePrecreateApiInParam_20->setFullParamName("extUserInfo");
        $alipayTradePrecreateApiInParam_20->setEnName("ext_user_info");
        $alipayTradePrecreateApiInParam_20->setChilds("");
    
    // $alipayTradePrecreateApiInParam_20Childs[] = new ApiParamModel();

            $alipayTradePrecreateApiInParam_20_0 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_20_0->setBaseType($alipayTradePrecreateApiInParam_20_0::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_20_0->setTitle("姓名");
        $alipayTradePrecreateApiInParam_20_0->setDesc("   注： need_check_info=T时该参数才有效");
        $alipayTradePrecreateApiInParam_20_0->setIsMust(3);
        $alipayTradePrecreateApiInParam_20_0->setIsListType(false);
        $alipayTradePrecreateApiInParam_20_0->setFullParamName("extUserInfo.name");
        $alipayTradePrecreateApiInParam_20_0->setEnName("name");
        $alipayTradePrecreateApiInParam_20_0->setChilds("");
        $alipayTradePrecreateApiInParam_20Childs[] = json_decode($alipayTradePrecreateApiInParam_20_0->getBizContent());

        $alipayTradePrecreateApiInParam_20_1 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_20_1->setBaseType($alipayTradePrecreateApiInParam_20_1::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_20_1->setTitle("手机号");
        $alipayTradePrecreateApiInParam_20_1->setDesc(" 注：该参数暂不校验");
        $alipayTradePrecreateApiInParam_20_1->setIsMust(3);
        $alipayTradePrecreateApiInParam_20_1->setIsListType(false);
        $alipayTradePrecreateApiInParam_20_1->setFullParamName("extUserInfo.mobile");
        $alipayTradePrecreateApiInParam_20_1->setEnName("mobile");
        $alipayTradePrecreateApiInParam_20_1->setChilds("");
        $alipayTradePrecreateApiInParam_20Childs[] = json_decode($alipayTradePrecreateApiInParam_20_1->getBizContent());

        $alipayTradePrecreateApiInParam_20_2 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_20_2->setBaseType($alipayTradePrecreateApiInParam_20_2::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_20_2->setTitle("身份证：IDENTITY_CARD、护照：PASSPORT、军官证：OFFICER_CARD、士兵证：SOLDIER_CARD、户口本：HOKOU等");
        $alipayTradePrecreateApiInParam_20_2->setDesc("如有其它类型需要支持，请与蚂蚁金服工作人员联系。    注： need_check_info=T时该参数才有效");
        $alipayTradePrecreateApiInParam_20_2->setIsMust(3);
        $alipayTradePrecreateApiInParam_20_2->setIsListType(false);
        $alipayTradePrecreateApiInParam_20_2->setFullParamName("extUserInfo.certType");
        $alipayTradePrecreateApiInParam_20_2->setEnName("cert_type");
        $alipayTradePrecreateApiInParam_20_2->setChilds("");
        $alipayTradePrecreateApiInParam_20Childs[] = json_decode($alipayTradePrecreateApiInParam_20_2->getBizContent());

        $alipayTradePrecreateApiInParam_20_3 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_20_3->setBaseType($alipayTradePrecreateApiInParam_20_3::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_20_3->setTitle("证件号");
        $alipayTradePrecreateApiInParam_20_3->setDesc("   注：need_check_info=T时该参数才有效");
        $alipayTradePrecreateApiInParam_20_3->setIsMust(3);
        $alipayTradePrecreateApiInParam_20_3->setIsListType(false);
        $alipayTradePrecreateApiInParam_20_3->setFullParamName("extUserInfo.certNo");
        $alipayTradePrecreateApiInParam_20_3->setEnName("cert_no");
        $alipayTradePrecreateApiInParam_20_3->setChilds("");
        $alipayTradePrecreateApiInParam_20Childs[] = json_decode($alipayTradePrecreateApiInParam_20_3->getBizContent());

        $alipayTradePrecreateApiInParam_20_4 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_20_4->setBaseType($alipayTradePrecreateApiInParam_20_4::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_20_4->setTitle("允许的最小买家年龄");
        $alipayTradePrecreateApiInParam_20_4->setDesc("买家年龄必须大于等于所传数值   注：  1. need_check_info=T时该参数才有效  2. min_age为整数，必须大于等于0");
        $alipayTradePrecreateApiInParam_20_4->setIsMust(3);
        $alipayTradePrecreateApiInParam_20_4->setIsListType(false);
        $alipayTradePrecreateApiInParam_20_4->setFullParamName("extUserInfo.minAge");
        $alipayTradePrecreateApiInParam_20_4->setEnName("min_age");
        $alipayTradePrecreateApiInParam_20_4->setChilds("");
        $alipayTradePrecreateApiInParam_20Childs[] = json_decode($alipayTradePrecreateApiInParam_20_4->getBizContent());

        $alipayTradePrecreateApiInParam_20_5 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_20_5->setBaseType($alipayTradePrecreateApiInParam_20_5::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_20_5->setTitle("是否强制校验付款人身份信息");
        $alipayTradePrecreateApiInParam_20_5->setDesc(" T:强制校验，F：不强制");
        $alipayTradePrecreateApiInParam_20_5->setIsMust(3);
        $alipayTradePrecreateApiInParam_20_5->setIsListType(false);
        $alipayTradePrecreateApiInParam_20_5->setFullParamName("extUserInfo.fixBuyer");
        $alipayTradePrecreateApiInParam_20_5->setEnName("fix_buyer");
        $alipayTradePrecreateApiInParam_20_5->setChilds("");
        $alipayTradePrecreateApiInParam_20Childs[] = json_decode($alipayTradePrecreateApiInParam_20_5->getBizContent());

        $alipayTradePrecreateApiInParam_20_6 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_20_6->setBaseType($alipayTradePrecreateApiInParam_20_6::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_20_6->setTitle("是否强制校验身份信息");
        $alipayTradePrecreateApiInParam_20_6->setDesc(" T:强制校验，F：不强制");
        $alipayTradePrecreateApiInParam_20_6->setIsMust(3);
        $alipayTradePrecreateApiInParam_20_6->setIsListType(false);
        $alipayTradePrecreateApiInParam_20_6->setFullParamName("extUserInfo.needCheckInfo");
        $alipayTradePrecreateApiInParam_20_6->setEnName("need_check_info");
        $alipayTradePrecreateApiInParam_20_6->setChilds("");
        $alipayTradePrecreateApiInParam_20Childs[] = json_decode($alipayTradePrecreateApiInParam_20_6->getBizContent());

            $alipayTradePrecreateApiInParam_20->setChilds($alipayTradePrecreateApiInParam_20Childs);

        $alipayTradePrecreateApiInParamChilds[] = json_decode($alipayTradePrecreateApiInParam_20->getBizContent());

        $alipayTradePrecreateApiInParam_21 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_21->setBaseType($alipayTradePrecreateApiInParam_21::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_21->setTitle("商户传入业务信息");
        $alipayTradePrecreateApiInParam_21->setDesc("具体值要和支付宝约定，应用于安全，营销等参数直传场景，格式为json格式");
        $alipayTradePrecreateApiInParam_21->setIsMust(3);
        $alipayTradePrecreateApiInParam_21->setIsListType(false);
        $alipayTradePrecreateApiInParam_21->setFullParamName("businessParams");
        $alipayTradePrecreateApiInParam_21->setEnName("business_params");
        $alipayTradePrecreateApiInParam_21->setChilds("");
        $alipayTradePrecreateApiInParamChilds[] = json_decode($alipayTradePrecreateApiInParam_21->getBizContent());

        $alipayTradePrecreateApiInParam_22 = new ApiParamModel();
        $alipayTradePrecreateApiInParam_22->setBaseType($alipayTradePrecreateApiInParam_22::$TYPE_BASETYPE);
        $alipayTradePrecreateApiInParam_22->setTitle("该笔订单允许的最晚付款时间");
        $alipayTradePrecreateApiInParam_22->setDesc("逾期将关闭交易，从生成二维码开始计时。取值范围：1m～15d。m-分钟，h-小时，d-天，1c-当天（1c-当天的情况下，无论交易何时创建，都在0点关闭）。 该参数数值不接受小数点， 如 1.5h，可转换为 90m。");
        $alipayTradePrecreateApiInParam_22->setIsMust(3);
        $alipayTradePrecreateApiInParam_22->setIsListType(false);
        $alipayTradePrecreateApiInParam_22->setFullParamName("qrCodeTimeoutExpress");
        $alipayTradePrecreateApiInParam_22->setEnName("qr_code_timeout_express");
        $alipayTradePrecreateApiInParam_22->setChilds("");
        $alipayTradePrecreateApiInParamChilds[] = json_decode($alipayTradePrecreateApiInParam_22->getBizContent());

        $alipayTradePrecreateInfoModel->setApiInParam($alipayTradePrecreateApiInParamChilds);

        $alipayTradePrecreateApiOutParamChilds[] = new ApiParamModel();

            $alipayTradePrecreateApiOutParam_0 = new ApiParamModel();
        $alipayTradePrecreateApiOutParam_0->setBaseType($alipayTradePrecreateApiOutParam_0::$TYPE_BASETYPE);
        $alipayTradePrecreateApiOutParam_0->setTitle("商户的订单号");
        $alipayTradePrecreateApiOutParam_0->setDesc("");
        $alipayTradePrecreateApiOutParam_0->setIsMust(1);
        $alipayTradePrecreateApiOutParam_0->setIsListType(false);
        $alipayTradePrecreateApiOutParam_0->setFullParamName("outTradeNo");
        $alipayTradePrecreateApiOutParam_0->setEnName("out_trade_no");
        $alipayTradePrecreateApiOutParam_0->setChilds("");
        $alipayTradePrecreateApiOutParamChilds[] = json_decode($alipayTradePrecreateApiOutParam_0->getBizContent());

        $alipayTradePrecreateApiOutParam_1 = new ApiParamModel();
        $alipayTradePrecreateApiOutParam_1->setBaseType($alipayTradePrecreateApiOutParam_1::$TYPE_BASETYPE);
        $alipayTradePrecreateApiOutParam_1->setTitle("当前预下单请求生成的二维码码串");
        $alipayTradePrecreateApiOutParam_1->setDesc("可以用二维码生成工具根据该码串值生成对应的二维码");
        $alipayTradePrecreateApiOutParam_1->setIsMust(1);
        $alipayTradePrecreateApiOutParam_1->setIsListType(false);
        $alipayTradePrecreateApiOutParam_1->setFullParamName("qrCode");
        $alipayTradePrecreateApiOutParam_1->setEnName("qr_code");
        $alipayTradePrecreateApiOutParam_1->setChilds("");
        $alipayTradePrecreateApiOutParamChilds[] = json_decode($alipayTradePrecreateApiOutParam_1->getBizContent());

        $alipayTradePrecreateInfoModel->setApiOutParam($alipayTradePrecreateApiOutParamChilds);

        $list[] = json_decode($alipayTradePrecreateInfoModel->getBizContent());
        $alipayDataDataserviceBillDownloadurlQueryInfoModel = new ApiInfoModel();
        
        $alipayDataDataserviceBillDownloadurlQueryInfoModel->setApiName("alipay.data.dataservice.bill.downloadurl.query");
        $alipayDataDataserviceBillDownloadurlQueryInfoModel->setApiZhName("查询对账单下载地址");
        $alipayDataDataserviceBillDownloadurlQueryInfoModel->setInvokeType($alipayDataDataserviceBillDownloadurlQueryInfoModel::$INVOKE_TYPE_REQUEST);
            // $alipayDataDataserviceBillDownloadurlQueryApiInParamChilds[] = new ApiParamModel();
            $alipayDataDataserviceBillDownloadurlQueryApiInParam_0 = new ApiParamModel();
        $alipayDataDataserviceBillDownloadurlQueryApiInParam_0->setBaseType($alipayDataDataserviceBillDownloadurlQueryApiInParam_0::$TYPE_BASETYPE);
        $alipayDataDataserviceBillDownloadurlQueryApiInParam_0->setTitle("账单类型");
        $alipayDataDataserviceBillDownloadurlQueryApiInParam_0->setDesc("商户通过接口或商户经开放平台授权后其所属服务商通过接口可以获取以下账单类型：trade、signcustomer；trade指商户基于支付宝交易收单的业务账单；signcustomer是指基于商户支付宝余额收入及支出等资金变动的帐务账单；");
        $alipayDataDataserviceBillDownloadurlQueryApiInParam_0->setIsMust(1);
        $alipayDataDataserviceBillDownloadurlQueryApiInParam_0->setIsListType(false);
        $alipayDataDataserviceBillDownloadurlQueryApiInParam_0->setFullParamName("billType");
        $alipayDataDataserviceBillDownloadurlQueryApiInParam_0->setEnName("bill_type");
        $alipayDataDataserviceBillDownloadurlQueryApiInParam_0->setChilds("");
        $alipayDataDataserviceBillDownloadurlQueryApiInParamChilds[] = json_decode($alipayDataDataserviceBillDownloadurlQueryApiInParam_0->getBizContent());

        $alipayDataDataserviceBillDownloadurlQueryApiInParam_1 = new ApiParamModel();
        $alipayDataDataserviceBillDownloadurlQueryApiInParam_1->setBaseType($alipayDataDataserviceBillDownloadurlQueryApiInParam_1::$TYPE_BASETYPE);
        $alipayDataDataserviceBillDownloadurlQueryApiInParam_1->setTitle("账单时间：日账单格式为yyyy-MM-dd");
        $alipayDataDataserviceBillDownloadurlQueryApiInParam_1->setDesc("月账单格式为yyyy-MM。");
        $alipayDataDataserviceBillDownloadurlQueryApiInParam_1->setIsMust(1);
        $alipayDataDataserviceBillDownloadurlQueryApiInParam_1->setIsListType(false);
        $alipayDataDataserviceBillDownloadurlQueryApiInParam_1->setFullParamName("billDate");
        $alipayDataDataserviceBillDownloadurlQueryApiInParam_1->setEnName("bill_date");
        $alipayDataDataserviceBillDownloadurlQueryApiInParam_1->setChilds("");
        $alipayDataDataserviceBillDownloadurlQueryApiInParamChilds[] = json_decode($alipayDataDataserviceBillDownloadurlQueryApiInParam_1->getBizContent());

        $alipayDataDataserviceBillDownloadurlQueryInfoModel->setApiInParam($alipayDataDataserviceBillDownloadurlQueryApiInParamChilds);

        $alipayDataDataserviceBillDownloadurlQueryApiOutParamChilds[] = new ApiParamModel();

            $alipayDataDataserviceBillDownloadurlQueryApiOutParam_0 = new ApiParamModel();
        $alipayDataDataserviceBillDownloadurlQueryApiOutParam_0->setBaseType($alipayDataDataserviceBillDownloadurlQueryApiOutParam_0::$TYPE_BASETYPE);
        $alipayDataDataserviceBillDownloadurlQueryApiOutParam_0->setTitle("账单下载地址链接");
        $alipayDataDataserviceBillDownloadurlQueryApiOutParam_0->setDesc("获取连接后30秒后未下载，链接地址失效。");
        $alipayDataDataserviceBillDownloadurlQueryApiOutParam_0->setIsMust(1);
        $alipayDataDataserviceBillDownloadurlQueryApiOutParam_0->setIsListType(false);
        $alipayDataDataserviceBillDownloadurlQueryApiOutParam_0->setFullParamName("billDownloadUrl");
        $alipayDataDataserviceBillDownloadurlQueryApiOutParam_0->setEnName("bill_download_url");
        $alipayDataDataserviceBillDownloadurlQueryApiOutParam_0->setChilds("");
        $alipayDataDataserviceBillDownloadurlQueryApiOutParamChilds[] = json_decode($alipayDataDataserviceBillDownloadurlQueryApiOutParam_0->getBizContent());

        $alipayDataDataserviceBillDownloadurlQueryInfoModel->setApiOutParam($alipayDataDataserviceBillDownloadurlQueryApiOutParamChilds);

        $list[] = json_decode($alipayDataDataserviceBillDownloadurlQueryInfoModel->getBizContent());
    
        echo json_encode($list,JSON_UNESCAPED_UNICODE);


?>