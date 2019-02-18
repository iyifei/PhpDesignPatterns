<?php
/**
 * Class [Strategy]
 * 抽象活动算法类
 * author minyifei
 * date 2019/2/18
 */

namespace Demo\BehavioralPatterns\Strategy;


abstract class Strategy
{

    /**
     * Function:discount
     * 折扣算法
     *
     * @param double $money 总金额
     *
     * @return double
     */
    abstract public function discount($money);

}