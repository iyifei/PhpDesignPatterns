<?php

/**
 * Class [BuiderTest]
 * 建造者模式单元测试类
 * author minyifei
 * date 2019/2/14
 */

namespace Test\BehavioralPatterns\Builder;


use Demo\BehavioralPatterns\Builder\CarBuilder;
use Demo\BehavioralPatterns\Builder\Director;
use Demo\BehavioralPatterns\Builder\Parts\Car;
use Demo\BehavioralPatterns\Builder\Parts\Truck;
use Demo\BehavioralPatterns\Builder\TruckBuilder;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{

    public function testBuildTruck(){
        $truckBuilder = new TruckBuilder();
        $truck = (new Director())->build($truckBuilder);

        $this->assertInstanceOf(Truck::class,$truck);
        $this->assertEquals($truck->run(),'Truck:run');
    }

    public function testBuildCard(){
        $carBuilder = new CarBuilder();
        $car = (new Director())->build($carBuilder);

        $this->assertInstanceOf(Car::class,$car);
        $this->assertEquals($car->run(),'Car:run');
    }
}