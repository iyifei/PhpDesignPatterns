<?php
/**
 * Class [FlyweightTest]
 * 享元模式单元测试
 * author minyifei
 * date 2019/2/15
 */

namespace Test\StructuralPatterns\Flyweight;


use Demo\StructuralPatterns\Flyweight\FlyweightFactory;
use PHPUnit\Framework\TestCase;

class FlyweightTest extends TestCase
{

    public function testFlyweight()
    {
        $chars = [
            'a', 'b', 'c', 'd'
        ];
        $fonts = [
            'Arial', 'Times New Roman', 'Verdana'
        ];

        $factory = new FlyweightFactory();
        foreach ($chars as $char) {
            foreach ($fonts as $font) {
                $flyweight = $factory->get($char);
                $rendered = $flyweight->render($font);

                $this->assertEquals(
                    sprintf('Char %s with font %s', $char, $font),
                    $rendered
                );
            }
        }

        // 享元模式会保证实例被分享。
        // 相比拥有成百上千的私有对象，
        // 必须要有一个实例代表所有被重复使用来显示不同单词的字符。
        $this->assertCount(count($chars), $factory);
    }

}