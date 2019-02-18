<?php
/**
 * Class [AlipayShare]
 * 支付宝股票
 * author minyifei
 * date 2019/2/15
 */

namespace Demo\StructuralPatterns\Facade;


class AlipayShare implements Share
{

    private $count = 0;

    /**
     * Function:buy
     * 买入股票
     *
     * @return bool
     */
    public function buy()
    {
        $this->count++;
        return true;
    }

    /**
     * Function:sell
     * 卖出股票
     *
     * @return bool
     */
    public function sell()
    {
        if($this->count>0){
            $this->count--;
            return true;
        }else{
            return false;
        }
    }

    /**
     * Function:getCount
     * 数量
     *
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }
}