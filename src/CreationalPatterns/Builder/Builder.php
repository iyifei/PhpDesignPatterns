<?php
/**
 * Class [Builder]
 * 汽车生产接口类
 * author minyifei
 * date 2019/2/14
 */
namespace Demo\CreationalPatterns\Builder;

use Demo\CreationalPatterns\Builder\Parts\Vehicle;

interface Builder
{

    /**
     * Function:createVehicle
     * 制造车辆
     *
     * @return mixed
     */
    public function createVehicle();

    /**
     * Function:addWheel
     * 组装轮胎
     *
     * @return mixed
     */
    public function addWheel();


    /**
     * Function:addDoors
     * 组装车门
     *
     * @return mixed
     */
    public function addDoors();


    /**
     * Function:addEngine
     * 安装发动机
     *
     * @return mixed
     */
    public function addEngine();


    /**
     * Function:getVehicle
     * 获得车辆
     *
     * @return Vehicle
     */
    public function getVehicle();
}