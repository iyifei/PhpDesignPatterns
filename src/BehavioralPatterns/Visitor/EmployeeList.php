<?php
/**
 * Class [EmployeeList]
 * 集合
 * author minyifei
 * date 2019/2/18
 */

namespace Demo\BehavioralPatterns\Visitor;


class EmployeeList
{

    /**
     * @var Employee[]
     */
    private $employees;

    /**
     * Function:addEmployee
     * 添加员工
     *
     * @param Employee $employee
     *
     * @return void
     */
    public function addEmployee($employee){
        $this->employees[]=$employee;
    }

    /**
     * Function:accept
     * 业务处理
     *
     * @param Department $handler
     *
     * @return void
     */
    public function accept($handler){
        foreach ($this->employees as $employee){
            $employee->accept($handler);
        }
    }

}