<?php
/**
 * Class [Employee]
 * 员工接口
 * author minyifei
 * date 2019/2/18
 */

namespace Demo\BehavioralPatterns\Visitor;


abstract class Employee
{

    /**
     * @var int 工作时长
     */
    private $workTime;

    /**
     * @var string 姓名
     */
    private $name;


    /**
     * @var string hr信息
     */
    private $hrInfo;

    /**
     * @var string 财务信息
     */
    private $finaceInfo;

    /**
     * @return string
     */
    public function getHrInfo()
    {
        return $this->hrInfo;
    }

    /**
     * @param string $hrInfo
     */
    public function setHrInfo($hrInfo)
    {
        $this->hrInfo = $hrInfo;
    }

    /**
     * @return string
     */
    public function getFinaceInfo()
    {
        return $this->finaceInfo;
    }

    /**
     * @param string $finaceInfo
     */
    public function setFinaceInfo($finaceInfo)
    {
        $this->finaceInfo = $finaceInfo;
    }


    /**
     * @return int
     */
    public function getWorkTime()
    {
        return $this->workTime;
    }

    /**
     * @param int $workTime
     */
    public function setWorkTime($workTime)
    {
        $this->workTime = $workTime;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    /**
     * @return string[]
     */
    public function getLogs()
    {
        return $this->logs;
    }

    /**
     * Function:accept
     * 处理
     *
     * @param Department $handler
     *
     * @return mixed
     */
    abstract public function accept($handler);



}