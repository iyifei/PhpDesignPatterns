<?php
/**
 * Class [HRDepartment]
 * 人力资源
 * author minyifei
 * date 2019/2/18
 */

namespace Demo\BehavioralPatterns\Visitor;


class HRDepartment extends Department
{

    /**
     * Function:visitFull
     * 处理全职员工数据
     *
     * @param FullTimeEmployee $fullTimeEmployee
     *
     * @return mixed
     */
    public function visitFull(FullTimeEmployee $fullTimeEmployee)
    {
        $workTime = $fullTimeEmployee->getWorkTime();
        $timeLog = sprintf('正式员工[%s]的工作时长为[%s]',$fullTimeEmployee->getName(),$workTime);
        if($workTime>40){
            $timeLog .= sprintf("，加班时长为[%s]",$workTime-40);
        }else if($workTime<40){
            $timeLog .= sprintf("，请假时长为[%s]",40-$workTime);
        }
        $fullTimeEmployee->setHrInfo($timeLog);
    }

    /**
     * Function:visitPart
     * 处理临时工数据
     *
     * @param PartTimeEmployee $partTimeEmployee
     *
     * @return mixed
     */
    public function visitPart(PartTimeEmployee $partTimeEmployee)
    {
        $workTime = $partTimeEmployee->getWorkTime();
        $log = sprintf('临时工[%s]实际工作时长为[%s]',$partTimeEmployee->getName(),$workTime);
        $partTimeEmployee->setHrInfo($log);
    }
}