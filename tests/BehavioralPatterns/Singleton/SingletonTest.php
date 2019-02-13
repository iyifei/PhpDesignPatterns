<?php
/**
 * Class [SingletonTest]
 * 单例模式测试类
 * author minyifei
 * date 2019/2/13
 */
namespace Test\BehavioralPatterns\Singleton;

use Demo\BehavioralPatterns\Singleton\Singleton;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{

    public function testUniqueness(){

        $firstClass = Singleton::getInstance();
        $secondClass = Singleton::getInstance();

        $this->assertInstanceOf(Singleton::class,$firstClass);
        $this->assertSame($firstClass,$secondClass);
    }

    public function testGetName(){
        $name  = 'Singleton';
        $class = Singleton::getInstance();
        $this->assertEquals($name,$class->getName());
    }

}