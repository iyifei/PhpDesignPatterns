<?php
/**
 * Class [DecoratorTest]
 * 装饰器模式单元测试
 * author minyifei
 * date 2019/2/15
 */

namespace Test\StructuralPatterns\Decorator;


use Demo\StructuralPatterns\Decorator\ColorDecorator;
use Demo\StructuralPatterns\Decorator\Html;
use Demo\StructuralPatterns\Decorator\SizeDecorator;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{

    public function testHtml()
    {

        $body = '装饰器';
        $html = new Html($body);

        $html->addDecorator(new ColorDecorator('red'));
        $html->addDecorator(new SizeDecorator('15'));

        $this->assertEquals(
            '<color style="color:red"><size style="font-size: 15px;">装饰器</size></color>',
            $html->toHtml()
        );
    }

}