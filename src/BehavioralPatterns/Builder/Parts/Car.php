<?php
/**
 * Class [Car]
 * 小汽车
 * author minyifei
 * date 2019/2/14
 */

namespace Demo\BehavioralPatterns\Builder\Parts;


class Car extends Vehicle
{

    /**
     * Function:run
     * 车辆启动
     *
     * @return mixed
     */
    public function run()
    {
        return "Car:run";
    }
}