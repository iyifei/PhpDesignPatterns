<?php
/**
 * Class [FinanceDepartment]
 * 财务
 * author minyifei
 * date 2019/2/18
 */

namespace Demo\BehavioralPatterns\Visitor;


class FinanceDepartment extends Department
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
        $wage =  $fullTimeEmployee->getWeeklyWage();
        if($workTime>40){
            $wage = $wage+($workTime-40)*50;
        }elseif($workTime<40 && $workTime>0){
            $wage = $wage-(40-$workTime)*80;
        }else{
            $wage=0;
        }
        $log = sprintf("正式员工[%s]的工资为[%s]",$fullTimeEmployee->getName(),$wage);
        $fullTimeEmployee->setFinaceInfo($log);
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
        $wage = $partTimeEmployee->getWorkTime()*$partTimeEmployee->getHourWage();
        $log = sprintf('临时工[%s]的工资为[%s]',$partTimeEmployee->getName(),$wage);
        $partTimeEmployee->setFinaceInfo($log);
    }
}