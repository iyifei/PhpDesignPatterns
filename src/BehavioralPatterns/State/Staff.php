<?php
/**
 * Class [Staff]
 * 员工
 * author minyifei
 * date 2019/2/18
 */

namespace Demo\BehavioralPatterns\State;


class Staff
{

    /**
     * @var int 请假天数
     */
    private $days = 0;

    public function __construct($days)
    {
        $this->days = $days;
    }

    /**
     * @return int
     */
    public function getDays()
    {
        return $this->days;
    }

    /**
     * @param int $days
     */
    public function setDays($days)
    {
        $this->days = $days;
    }

}