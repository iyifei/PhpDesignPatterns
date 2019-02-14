<?php
/**
 * Class [AbstractFactoryTest]
 * 抽象工场单元测试类
 * author minyifei
 * date 2019/2/14
 */

namespace Test\BehavioralPatterns\AbstractFactory;

use Demo\BehavioralPatterns\AbstractFactory\HtmlFactory;
use Demo\BehavioralPatterns\AbstractFactory\HtmlText;
use Demo\BehavioralPatterns\AbstractFactory\JsonFactory;
use Demo\BehavioralPatterns\AbstractFactory\JsonText;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{

    //测试html工场生成的HtmlText
    public function testCreateHtmlText(){
        $factory = new HtmlFactory();
        $htmlStr = '<html></html>';
        $text = $factory->createText($htmlStr);

        $this->assertInstanceOf(HtmlText::class,$text);
        $this->assertEquals($htmlStr,$text->parseText());
    }


    //测试json工场生成的JsonText
    public function testCreateJsonText(){
        $factory = new JsonFactory();
        $jsonStr = '{"name":"minyifei"}';
        $json = $factory->createText($jsonStr);


        $this->assertInstanceOf(JsonText::class,$json);
        $obj = $json->parseText();
        $this->assertEquals($obj['name'],'minyifei');
    }

}