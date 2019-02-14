<?php

namespace Test\BehavioralPatterns\FactoryMethod;

use Demo\BehavioralPatterns\FactoryMethod\HonorFactory;
use Demo\BehavioralPatterns\FactoryMethod\HonorPhone;
use Demo\BehavioralPatterns\FactoryMethod\VivoFactory;
use Demo\BehavioralPatterns\FactoryMethod\VivoPhone;
use PHPUnit\Framework\TestCase;

/**
 * Class [FactoryMethodTest]
 * 工厂方法单元测试类
 * author minyifei
 * date 2019/2/14
 */
class FactoryMethodTest extends TestCase
{

    public function testHonorPhone()
    {
        $factory = new HonorFactory();
        $honor = $factory->createPhone();

        $number = '10086';
        $this->assertInstanceOf(HonorPhone::class, $honor);
        $this->assertEquals('honor:call:' . $number, $honor->call($number));
    }


    public function testVivoPhone()
    {
        $factory = new VivoFactory();
        $vivo = $factory->createPhone();
        $number = '10086';

        $this->assertInstanceOf(VivoPhone::class, $vivo);
        $this->assertEquals('vivo:call:' . $number, $vivo->call($number));
    }

}