<?php
/**
 * Class [AbstractFactoryTest]
 * 抽象工场单元测试类
 * author minyifei
 * date 2019/2/14
 */

namespace Test\BehavioralPatterns\AbstractFactory;

use Demo\BehavioralPatterns\AbstractFactory\Factory\AndroidFactory;
use Demo\BehavioralPatterns\AbstractFactory\Factory\IosFactory;
use Demo\BehavioralPatterns\AbstractFactory\Product\AndroidButton;
use Demo\BehavioralPatterns\AbstractFactory\Product\AndroidPanel;
use Demo\BehavioralPatterns\AbstractFactory\Product\IosButton;
use Demo\BehavioralPatterns\AbstractFactory\Product\IosPanel;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{

    public function testAndroid()
    {
        $factory = new AndroidFactory();
        $this->assertInstanceOf(AndroidButton::class, $factory->createButton());
        $this->assertInstanceOf(AndroidPanel::class, $factory->createPanel());

        $this->assertEquals('Android:Button',$factory->createButton()->getName());
    }

    public function testIos()
    {
        $factory = new IosFactory();
        $this->assertInstanceOf(IosButton::class, $factory->createButton());
        $this->assertInstanceOf(IosPanel::class, $factory->createPanel());

        $this->assertEquals('IOS#Button',$factory->createButton()->getName());
    }

}