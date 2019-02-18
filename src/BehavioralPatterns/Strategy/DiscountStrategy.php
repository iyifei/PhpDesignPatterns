<?php
/**
 * Class [DiscountStrategy]
 * 折扣算法
 * author minyifei
 * date 2019/2/18
 */

namespace Demo\BehavioralPatterns\Strategy;


class DiscountStrategy extends Strategy
{

    /**
     * Function:discount
     * 折扣算法
     * 所有商品均打9折
     *
     * @param double $money 总金额
     *
     * @return double
     */
    public function discount($money)
    {
        return round(0.9 * $money, 2);
    }
}