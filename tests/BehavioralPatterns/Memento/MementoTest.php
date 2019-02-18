<?php
/**
 * Class [MementoTest]
 * 备忘录模式单元测试
 * author minyifei
 * date 2019/2/18
 */

namespace Test\BehavioralPatterns\Memento;


use Demo\BehavioralPatterns\Memento\Caretaker;
use Demo\BehavioralPatterns\Memento\Editor;
use PHPUnit\Framework\TestCase;

class MementoTest extends TestCase
{

    public function testMemento(){
        $editor = new Editor();
        $caretaker = new Caretaker();

        $editor->modify('insert','abcefg');
        $editor->saveState($caretaker);

        $editor->modify('delete','efg');
        $editor->saveState($caretaker);

        $editor->modify('update','e->d');
        $editor->saveState($caretaker);

        $editor->modify('insert','xyz');

        $this->assertEquals('Action:insert,Content=xyz',$editor->show());

        //恢复到上一个状态
        $editor->recoveryState($caretaker->getLast());
        $this->assertEquals('Action:update,Content=e->d',$editor->show());
    }

}