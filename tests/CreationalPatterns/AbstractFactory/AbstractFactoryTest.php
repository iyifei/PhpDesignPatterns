<?php
/**
 * Class [AbstractFactoryTest]
 * 抽象工场单元测试类
 * author minyifei
 * date 2019/2/14
 */

namespace Test\CreationalPatterns\AbstractFactory;

use Demo\CreationalPatterns\AbstractFactory\Factory\AndroidFactory;
use Demo\CreationalPatterns\AbstractFactory\Factory\IosFactory;
use Demo\CreationalPatterns\AbstractFactory\Product\AndroidButton;
use Demo\CreationalPatterns\AbstractFactory\Product\AndroidPanel;
use Demo\CreationalPatterns\AbstractFactory\Product\IosButton;
use Demo\CreationalPatterns\AbstractFactory\Product\IosPanel;
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