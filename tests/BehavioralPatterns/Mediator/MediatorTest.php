<?php
/**
 * Class [MediatorTest]
 * 中介者模式测试用例
 * author minyifei
 * date 2019/2/18
 */

namespace Test\BehavioralPatterns\Mediator;


use Demo\BehavioralPatterns\Mediator\Buyer;
use Demo\BehavioralPatterns\Mediator\House;
use Demo\BehavioralPatterns\Mediator\Mediator;
use Demo\BehavioralPatterns\Mediator\Seller;
use PHPUnit\Framework\TestCase;

class MediatorTest extends TestCase
{

    public function testMediator(){
        $mediator = new Mediator();
        $sellerA = new Seller(new House(2,80));
        $mediator->addSeller($sellerA);
        $sellerB = new Seller(new House(3,100));
        $mediator->addSeller($sellerB);
        $sellerC = new Seller(new House(3,130));
        $mediator->addSeller($sellerC);

        $buyer = new Buyer(new House(3,110));
        $this->assertSame($sellerB,$mediator->match($buyer));
    }

}