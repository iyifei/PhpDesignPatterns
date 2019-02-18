<?php
/**
 * Class [ResponsibilitiesTest]
 * 责任链模式单元测试
 * author minyifei
 * date 2019/2/18
 */

namespace Test\BehavioralPatterns\Responsibilities;


use Demo\BehavioralPatterns\Responsibilities\GroupLeader;
use Demo\BehavioralPatterns\Responsibilities\Staff;
use PHPUnit\Framework\TestCase;

class ResponsibilitiesTest extends TestCase
{

    public function testResponsibilities()
    {
        //请假一天
        $staff = new Staff(1);
        //组长
        $leave = new GroupLeader();
        //1天以内组织即可决定
        $this->assertEquals('GroupLeader:Agree', $leave->processing($staff));

        //请假3天，需要主管批准
        $staff->setDays(3);
        $this->assertEquals('Director:Agree', $leave->processing($staff));

        //请假5天，则需要经理批准
        $staff->setDays(5);
        $this->assertEquals('Manager:Agree', $leave->processing($staff));

    }

}