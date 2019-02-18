<?php
/**
 * Class [SingletonTest]
 * 单例模式测试类
 * author minyifei
 * date 2019/2/13
 */
namespace Test\CreationalPatterns\Singleton;

use Demo\CreationalPatterns\Singleton\Singleton;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{

    public function testUniqueness(){

        $firstClass = Singleton::getInstance();
        $secondClass = Singleton::getInstance();
        //判断是否为单例类
        $this->assertInstanceOf(Singleton::class,$firstClass);
        //判断是否为同一个实例
        $this->assertSame($firstClass,$secondClass);
    }

    public function testGetName(){
        $name  = 'Singleton';
        $class = Singleton::getInstance();
        $this->assertEquals($name,$class->getName());
    }

}