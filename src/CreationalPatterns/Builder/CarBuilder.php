<?php
/**
 * Class [CarBuilder]
 * 小汽车生产车间
 * author minyifei
 * date 2019/2/14
 */

namespace Demo\CreationalPatterns\Builder;


use Demo\CreationalPatterns\Builder\Parts\Car;
use Demo\CreationalPatterns\Builder\Parts\Door;
use Demo\CreationalPatterns\Builder\Parts\Engine;
use Demo\CreationalPatterns\Builder\Parts\Vehicle;
use Demo\CreationalPatterns\Builder\Parts\Wheel;

class CarBuilder implements Builder
{

    /**
     * @var Car
     */
    private $car;

    /**
     * Function:createVehicle
     * 制造车辆
     *
     * @return mixed
     */
    public function createVehicle()
    {
        $this->car = new Car();
    }

    /**
     * Function:addWheel
     * 组装轮胎
     *
     * @return mixed
     */
    public function addWheel()
    {
        //四个轮胎
        $this->car->setPart('font_left_wheel',new Wheel());
        $this->car->setPart('font_right_wheel',new Wheel());
        $this->car->setPart('after_left_wheel',new Wheel());
        $this->car->setPart('after_right_wheel',new Wheel());
    }

    /**
     * Function:addDoors
     * 组装车门
     *
     * @return mixed
     */
    public function addDoors()
    {
        //两个门
        $this->car->setPart('leftDoor',new Door());
        $this->car->setPart('rightDoor',new Door());
    }

    /**
     * Function:addEngine
     * 安装发动机
     *
     * @return mixed
     */
    public function addEngine()
    {
        //发动机
        $this->car->setPart('engine',new Engine());
    }

    /**
     * Function:getVehicle
     * 获得车辆
     *
     * @return Vehicle
     */
    public function getVehicle()
    {
        return $this->car;
    }
}