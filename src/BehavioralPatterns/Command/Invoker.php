<?php
/**
 * Class [Invoker]
 * 请求者角色
 * author minyifei
 * date 2019/2/18
 */

namespace Demo\BehavioralPatterns\Command;


class Invoker
{

    /**
     * @var Command
     */
    private $command;

    /**
     * Invoker constructor.
     *
     * @param Command $command
     */
    public function __construct($command)
    {
        $this->command = $command;
    }

    /**
     * Function:doAction
     * 做事
     *
     * @return string
     */
    public function doAction(){
       return $this->command->execute();
    }

}