<?php
/**
 * Class [Truck]
 * 货车
 * author minyifei
 * date 2019/2/14
 */

namespace Demo\CreationalPatterns\Builder\Parts;


class Truck extends Vehicle
{

    /**
     * Function:run
     * 车辆启动
     *
     * @return mixed
     */
    public function run()
    {
        return 'Truck:run';
    }
}