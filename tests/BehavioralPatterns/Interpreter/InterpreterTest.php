<?php
/**
 * Class [InterpreterTest]
 * 解析器模式测试
 * author minyifei
 * date 2019/2/18
 */

namespace Test\BehavioralPatterns\Interpreter;


use Demo\BehavioralPatterns\Interpreter\Interpreter;
use PHPUnit\Framework\TestCase;

class InterpreterTest extends TestCase
{

    public function testInterpreter()
    {
        $interpreter = new Interpreter();
        $this->assertEquals('MONEY:壹零贰零', $interpreter->execute('Money:1020'));
    }

}