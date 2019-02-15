<?php
/**
 * Class [FacadeTest]
 * 门面模式/外观模式 单元测试
 * author minyifei
 * date 2019/2/15
 */

namespace Test\CreationalPatterns\Facade;


use Demo\CreationalPatterns\Facade\ShareCompany;
use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{

    public function testShare()
    {
        $shareCompany = new ShareCompany();
        $shareCompany->buy();
        $this->assertEquals('jd:1,alipay:2', $shareCompany->getInfo());
        $shareCompany->sell();
        $this->assertEquals('jd:1,alipay:0', $shareCompany->getInfo());
    }

}