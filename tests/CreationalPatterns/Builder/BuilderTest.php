<?php

/**
 * Class [BuiderTest]
 * 建造者模式单元测试类
 * author minyifei
 * date 2019/2/14
 */

namespace Test\CreationalPatterns\Builder;


use Demo\CreationalPatterns\Builder\CarBuilder;
use Demo\CreationalPatterns\Builder\Director;
use Demo\CreationalPatterns\Builder\Parts\Car;
use Demo\CreationalPatterns\Builder\Parts\Truck;
use Demo\CreationalPatterns\Builder\TruckBuilder;
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