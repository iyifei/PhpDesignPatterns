<?php
/**
 * Class [PrototypeTest]
 * 原型模式单元测试类
 * author minyifei
 * date 2019/2/14
 */

namespace Test\CreationalPatterns\Prototype;


use Demo\CreationalPatterns\Prototype\Dog;
use Demo\CreationalPatterns\Prototype\Eye;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{

    public function testDog(){
        $color = 'red';
        $name = '花花';
        $eye = new Eye($color);
        $dog = new Dog($name,$eye);

        //浅克隆
        $simpleDog = $dog->simpleCopy();
        $this->assertInstanceOf(Dog::class,$simpleDog);
        $this->assertInstanceOf(Eye::class,$simpleDog->getEye());
        //与之前的眼睛是一个眼睛
        $this->assertSame($eye,$simpleDog->getEye());
        //狗是不同的狗
        $this->assertNotSame($simpleDog,$dog);
        //狗名称也叫花花
        $this->assertEquals($name,$simpleDog->getName());
        //狗的眼睛也是红色
        $this->assertEquals($color,$simpleDog->getEye()->getColor());


        //深度克隆
        $deepDog = $dog->deepCopy();
        $this->assertInstanceOf(Dog::class,$deepDog);
        $this->assertInstanceOf(Eye::class,$deepDog->getEye());
        //与之前的眼睛不是一个眼睛了
        $this->assertNotSame($eye,$deepDog->getEye());
        //也不是同一个狗了
        $this->assertNotSame($deepDog,$dog);
        //狗名称也叫花花
        $this->assertEquals($name,$deepDog->getName());
        //狗的眼睛也是红色
        $this->assertEquals($color,$deepDog->getEye()->getColor());
    }

}