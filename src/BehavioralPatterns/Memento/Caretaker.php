<?php
/**
 * Class [Caretaker]
 * 管理类
 * author minyifei
 * date 2019/2/18
 */

namespace Demo\BehavioralPatterns\Memento;


class Caretaker
{

    /**
     * @var Memento[]
     */
    private $data;

    /**
     * Function:add
     * 描述
     *
     * @param Memento $memento
     *
     * @return void
     */
    public function add($memento)
    {
        $this->data[] = $memento;
    }

    /**
     * Function:getLast
     * 获取上一个状态存储器
     *
     * @return Memento|null
     */
    public function getLast()
    {
        $len = count($this->data);
        if ($len < 1) {
            return null;
        } else {
            return $this->data[$len - 1];
        }
    }

}