<?php
/**
 * Class [StrategyTest]
 * 策略模式单元测试
 * author minyifei
 * date 2019/2/18
 */

namespace Test\BehavioralPatterns\Strategy;


use Demo\BehavioralPatterns\Strategy\DiscountStrategy;
use Demo\BehavioralPatterns\Strategy\FullReductionStrategy;
use Demo\BehavioralPatterns\Strategy\StrategyFactory;
use PHPUnit\Framework\TestCase;

class StrategyTest extends TestCase
{

    public function testStrategy()
    {
        $money = 250;
        //使用满减方案
        $factory = new StrategyFactory(new FullReductionStrategy());
        $this->assertEquals(
            $money - 60,
            $factory->get($money)
        );

        //使用折扣方案
        $factory->setStrategy(new DiscountStrategy());
        $this->assertEquals(
            round($money*0.9,2),
            $factory->get($money)
        );

    }

}