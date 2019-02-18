<?php
/**
 * Class [Responsibility]
 * 抽象的责任角色
 * author minyifei
 * date 2019/2/18
 */

namespace Demo\BehavioralPatterns\Responsibilities;


abstract class Responsibility
{

    /**
     * @var Responsibility
     */
    protected $next;

    /**
     * @param Responsibility $next
     */
    public function setNext($next)
    {
        $this->next = $next;
    }

    /**
     * Function:operate
     * 操作内容
     *
     * @param Apple $apple 操作对象
     *
     * @return mixed
     */
    abstract public function operate($apple);


}