<?php
/**
 * Class [ObserverTest]
 * 观察者模式单元测试
 * author minyifei
 * date 2019/2/18
 */

namespace Test\BehavioralPatterns\Observer;


use Demo\BehavioralPatterns\Observer\Newspaper;
use Demo\BehavioralPatterns\Observer\Reader;
use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase
{

    public function testObserver(){

        //3个读者
        $readA = new Reader("A");
        $readB = new Reader('B');
        $readC = new Reader('C');
        //网易新闻
        $newspaper = new Newspaper('网易');
        //添加读者
        $newspaper->attach($readA);
        $newspaper->attach($readB);
        $newspaper->attach($readC);

        $newspaper->setOutNews('重要新闻来了');

        $this->assertEquals(3,$newspaper->getReaderCount());

        $newspaper->setOutNews('该吃饭了');
    }

}