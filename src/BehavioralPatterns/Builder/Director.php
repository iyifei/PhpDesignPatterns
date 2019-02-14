<?php
/**
 * Class [Director]
 * Director 类是建造者模式的一部分。 它可以实现建造者模式的接口
 * 并在构建器的帮助下构建一个复杂的对象
 * 您也可以注入许多构建器而不是构建更复杂的对象
 * author minyifei
 * date 2019/2/14
 */

namespace Demo\BehavioralPatterns\Builder;


use Demo\BehavioralPatterns\Builder\Parts\Vehicle;

class Director
{

    /**
     * Function:build
     * 生产车辆
     *
     * @param Builder $builder
     *
     * @return Vehicle
     */
    public function build($builder){

        $builder->createVehicle();
        $builder->addDoors();
        $builder->addEngine();
        $builder->addWheel();

        return $builder->getVehicle();
    }

}