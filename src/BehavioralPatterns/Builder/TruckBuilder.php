<?php
/**
 * Class [TruckBuilder]
 * 货车生产车间
 * author minyifei
 * date 2019/2/14
 */

namespace Demo\BehavioralPatterns\Builder;


use Demo\BehavioralPatterns\Builder\Parts\Door;
use Demo\BehavioralPatterns\Builder\Parts\Engine;
use Demo\BehavioralPatterns\Builder\Parts\Truck;
use Demo\BehavioralPatterns\Builder\Parts\Vehicle;
use Demo\BehavioralPatterns\Builder\Parts\Wheel;

class TruckBuilder implements Builder
{

    /**
     * @var Truck 货车
     */
    private $truck;

    /**
     * Function:createVehicle
     * 制造车辆
     *
     * @return mixed
     */
    public function createVehicle()
    {
        $this->truck = new Truck();
    }

    /**
     * Function:addWheel
     * 组装轮胎
     *
     * @return mixed
     */
    public function addWheel()
    {
        //六个轮胎
        $this->truck->setPart("wheel1",new Wheel());
        $this->truck->setPart("wheel2",new Wheel());
        $this->truck->setPart("wheel3",new Wheel());
        $this->truck->setPart("wheel4",new Wheel());
        $this->truck->setPart("wheel5",new Wheel());
        $this->truck->setPart("wheel6",new Wheel());
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
        $this->truck->setPart('leftDoor',new Door());
        $this->truck->setPart('rightDoor',new Door());
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
        $this->truck->setPart('engine',new Engine());
    }

    /**
     * Function:getVehicle
     * 获得车辆
     *
     * @return Vehicle
     */
    public function getVehicle()
    {
        return $this->truck;
    }
}