<?php
/**
 * Class [Receiver]
 * 接收者角色
 * author minyifei
 * date 2019/2/18
 */

namespace Demo\BehavioralPatterns\Command;


class Receiver
{

    private $name;

    /**
     * Receiver constructor.
     *
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }


    /**
     * Function:doAction
     * 执行命令
     *
     * @return string
     */
    public function doAction(){
        return sprintf('Receiver:%s execute some cmd',$this->name);
    }

}