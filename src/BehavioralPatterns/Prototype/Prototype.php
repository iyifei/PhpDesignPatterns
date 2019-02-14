<?php
/**
 * Class [Prototye]
 * 原型模式接口类
 * author minyifei
 * date 2019/2/14
 */

namespace Demo\BehavioralPatterns\Prototype;


interface Prototype
{


    /**
     * Function:deepCopy
     * 深克隆
     *
     * @return mixed
     */
    public function deepCopy();


    /**
     * Function:simpleCopy
     * 浅克隆
     *
     * @return mixed
     */
    public function simpleCopy();

}