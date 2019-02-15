<?php
/**
 * Class [ShareCompay]
 * 门面模式/外观模式
 * 股票管理公司
 * author minyifei
 * date 2019/2/15
 */

namespace Demo\CreationalPatterns\Facade;


class ShareCompany
{

    private $alipayShare;
    private $jdShare;

    public function __construct()
    {
        $this->alipayShare = new AlipayShare();
        $this->jdShare = new JdShare();
    }

    /**
     * Function:buy
     * 根据业务不同，市场数据分析，如果购买时 需要买 1份京东股票、2份支付宝股票
     * 隐藏了购买的细节，用户/客户端只需要调用购买即可，不用关心买几份股票，买哪只股票，股票公司会根据业务分析给出合理的购买计划
     *
     * @return void
     */
    public function buy(){
        $this->jdShare->buy();
        $this->alipayShare->buy();
        $this->alipayShare->buy();
    }


    /**
     * Function:getInfo
     * 获取当前已购买股票信息
     *
     * @return string
     */
    public function getInfo(){
        return sprintf('jd:%d,alipay:%d',$this->jdShare->getCount(),$this->alipayShare->getCount());
    }


    /**
     * Function:sell
     * 根据业务处理,可抛售2份支付宝股票
     * 隐藏出售细节，用户/客户端再抛售股票时，也不需要关心卖那只股票，股票公司会根据业务合理安排出售股票计划
     * @return void
     */
    public function sell(){
        $this->alipayShare->sell();
        $this->alipayShare->sell();
    }


}