<?php
/**
 * Class [PartTimeEmployee]
 * 临时工
 * author minyifei
 * date 2019/2/18
 */

namespace Demo\BehavioralPatterns\Visitor;


class PartTimeEmployee extends Employee
{


    /**
     * @var double 小时工资
     */
    private $hourWage;

    /**
     * PartTimeEmployee constructor.
     *
     * @param string $name
     * @param float  $hourWage
     * @param int    $workTime
     */
    public function __construct($name, $hourWage, $workTime)
    {
        $this->setName($name);
        $this->hourWage = $hourWage;
        $this->setWorkTime($workTime);
    }


    /**
     * @return float
     */
    public function getHourWage()
    {
        return $this->hourWage;
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
        return $handler->visitPart($this);
    }
}