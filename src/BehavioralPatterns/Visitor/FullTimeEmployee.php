<?php
/**
 * Class [FullTimeEmployee]
 * 全职员工
 * author minyifei
 * date 2019/2/18
 */

namespace Demo\BehavioralPatterns\Visitor;


class FullTimeEmployee extends Employee
{

    /**
     * @var double 周工资
     */
    private $weeklyWage;

    /**
     * FullTimeEmployee constructor.
     *
     * @param string $name
     * @param float  $weeklyWage
     * @param int    $workTime
     */
    public function __construct($name, $weeklyWage, $workTime)
    {
        $this->setName($name);
        $this->weeklyWage = $weeklyWage;
        $this->setWorkTime($workTime);
    }


    /**
     * @return float
     */
    public function getWeeklyWage()
    {
        return $this->weeklyWage;
    }


    /**
     * Function:accept
     * 处理
     *
     * @param Department $handler
     *
     * @return mixed
     */
    public function accept($handler)
    {
        return $handler->visitFull($this);
    }
}