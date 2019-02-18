<?php
/**
 * Class [FlyweightFactory]
 * 工厂类会管理分享享元类，客户端不应该直接将他们实例化。
 * 但可以让工厂类负责返回现有的对象或创建新的对象。
 *
 * author minyifei
 * date 2019/2/15
 */

namespace Demo\StructuralPatterns\Flyweight;


class FlyweightFactory implements \Countable
{

    /**
     * 定义享元特征数组。
     * 用于存储不同的享元特征。
     *
     * @var CharFlyweight[]
     */
    private $pools = [];

    public function get($name){

        //享元模式的具体实现
        if(!isset($this->pools[$name])){
            $this->pools[$name] = new CharFlyweight($name);
        }

        return $this->pools[$name];
    }

    /**
     * Function:count
     * 返回享元特征个数
     *
     * @return int
     */
    public function count(){
        return count($this->pools);
    }

}