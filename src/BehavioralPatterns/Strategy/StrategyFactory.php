<?php
/**
 * Class [StrategyFactory]
 * 策略工厂
 * author minyifei
 * date 2019/2/18
 */

namespace Demo\BehavioralPatterns\Strategy;


class StrategyFactory
{

    private $strategy;

    /**
     * StrategyFactory constructor.
     *
     * @param Strategy $strategy
     */
    public function __construct($strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * @param Strategy $strategy
     */
    public function setStrategy($strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * Function:get
     * 获取打折后的金额
     *
     * @param double $money
     *
     * @return float
     */
    public function get($money){
        return $this->strategy->discount($money);
    }

}