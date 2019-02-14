<?php
/**
 * Class [Vehicle]
 * 车辆抽象类
 * author minyifei
 * date 2019/2/14
 */
namespace Demo\BehavioralPatterns\Builder\Parts;

abstract class Vehicle
{

    /**
     * @var array 车辆部件集合
     */
    private $parts = [];


    /**
     * Function:setPart
     * 设置车辆部件
     *
     * @param string $name 部件名称
     * @param object $value 部件
     *
     * @return void
     */
    public function setPart($name,$value){
        $this->parts[$name]=$value;
    }

    /**
     * Function:run
     * 车辆启动
     *
     * @return mixed
     */
    abstract public function run();
}