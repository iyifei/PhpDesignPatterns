<?php
/**
 * Class [BridgeTest]
 * 桥接模式单元测试
 * author minyifei
 * date 2019/2/15
 */

namespace Test\CreationalPatterns\Bridge;


use Demo\CreationalPatterns\Bridge\HelloWorldBridge;
use Demo\CreationalPatterns\Bridge\HtmlFormatter;
use Demo\CreationalPatterns\Bridge\TextFormatter;
use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase
{

    /**
     * Function:testBridge
     * 使用 HelloWorldBridge  分布测试文本格式化实现类和html格式化实现类
     *
     * @return void
     */
    public function testBridge(){
        $str = 'Hello World';

        //text格式化
        $bridge  = new HelloWorldBridge(new TextFormatter());
        $this->assertEquals($str,$bridge->get());

        //html格式化
        $bridge->setFormatter(new HtmlFormatter());
        $this->assertEquals("<p>{$str}</p>",$bridge->get());
    }

}