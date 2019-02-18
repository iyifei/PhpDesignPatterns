<?php
/**
 * Class [FullReductionStrategy]
 * 满减算法
 * author minyifei
 * date 2019/2/18
 */

namespace Demo\BehavioralPatterns\Strategy;


class FullReductionStrategy extends Strategy
{

    /**
     * Function:discount
     * 折扣算法
     * 满200减60
     * 满100减20
     *
     * @param double $money 总金额
     *
     * @return double
     */
    public function discount($money)
    {
        //满200减60
        if ($money >= 200) {
            $money -= 60;
        } elseif ($money >= 100) {
            //满100减20
            $money -= 20;
        }
        return $money;
    }
}