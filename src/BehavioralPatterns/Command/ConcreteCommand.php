<?php
/**
 * Class [ConcreteCommand]
 * 具体执行者
 * author minyifei
 * date 2019/2/18
 */

namespace Demo\BehavioralPatterns\Command;


class ConcreteCommand implements Command
{

    /**
     * @var Receiver
     */
    private $receiver;

    /**
     * ConcreteCommand constructor.
     *
     * @param Receiver $receiver
     */
    public function __construct(Receiver $receiver)
    {
        $this->receiver = $receiver;
    }


    /**
     * Function:execute
     * 执行命令
     *
     * @return string
     */
    public function execute()
    {
        return $this->receiver->doAction();
    }
}