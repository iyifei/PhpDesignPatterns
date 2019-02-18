<?php
/**
 * Class [ResponsibilitiesTest]
 * 责任链模式测试
 * author minyifei
 * date 2019/2/18
 */

namespace Test\BehavioralPatterns\Responsibilities;


use Demo\BehavioralPatterns\Responsibilities\Apple;
use Demo\BehavioralPatterns\Responsibilities\ResponsibilityA;
use Demo\BehavioralPatterns\Responsibilities\ResponsibilityB;
use PHPUnit\Framework\TestCase;

class ResponsibilitiesTest extends TestCase
{


    public function testResponsibilities()
    {
        $ra = new ResponsibilityA();
        $rb = new ResponsibilityB();
        $ra->setNext($rb);

        $apple = new Apple();
        $ra->operate($apple);

        $this->assertEquals(
            ['A Operate', 'B Operate'],
            $apple->getOperates()
        );
    }

}