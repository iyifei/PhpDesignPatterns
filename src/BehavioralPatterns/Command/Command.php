<?php
/**
 * Class [Command]
 * 命令接口
 * author minyifei
 * date 2019/2/18
 */

namespace Demo\BehavioralPatterns\Command;


interface Command
{

    /**
     * Function:execute
     * 执行命令
     *
     * @return string
     */
    public function execute();

}