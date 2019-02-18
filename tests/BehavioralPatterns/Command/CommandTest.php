<?php
/**
 * Class [CommandTest]
 * 命令模式单元测试
 * author minyifei
 * date 2019/2/18
 */

namespace Test\BehavioralPatterns\Command;


use Demo\BehavioralPatterns\Command\ConcreteCommand;
use Demo\BehavioralPatterns\Command\Invoker;
use Demo\BehavioralPatterns\Command\Receiver;
use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase
{


    public function testCommand()
    {
        $receiver = new Receiver('Jen');
        $command = new ConcreteCommand($receiver);
        $invoker = new Invoker($command);
        $this->assertEquals(
            'Receiver:Jen execute some cmd', $invoker->doAction()
        );
    }

}