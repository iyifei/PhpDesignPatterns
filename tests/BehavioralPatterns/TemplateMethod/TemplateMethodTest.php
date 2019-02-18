<?php
/**
 * Class [TemplateMethodTest]
 * 模板方法设计模式单元测试
 * author minyifei
 * date 2019/2/18
 */

namespace Test\BehavioralPatterns\TemplateMethod;


use Demo\BehavioralPatterns\TemplateMethod\ASetMeal;
use Demo\BehavioralPatterns\TemplateMethod\BSetMeal;
use PHPUnit\Framework\TestCase;

class TemplateMethodTest extends TestCase
{

    public function testTemplateMethod()
    {

        $a = new ASetMeal();
        $this->assertEquals('A套餐:Hamburger And Sprite', $a->get());

        $b = new BSetMeal();
        $this->assertEquals('B套餐:Noodle And OrangeJuice', $b->get());

    }

}