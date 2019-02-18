<?php
/**
 * Class [Department]
 * 抽象的访问者
 * 部门
 * author minyifei
 * date 2019/2/18
 */

namespace Demo\BehavioralPatterns\Visitor;


abstract class Department
{

    /**
     * Function:visitFull
     * 处理全职员工数据
     *
     * @param FullTimeEmployee $fullTimeEmployee
     *
     * @return mixed
     */
    abstract public function visitFull(FullTimeEmployee $fullTimeEmployee);

    /**
     * Function:visitPart
     * 处理临时工数据
     *
     * @param PartTimeEmployee $partTimeEmployee
     *
     * @return mixed
     */
    abstract public function visitPart(PartTimeEmployee $partTimeEmployee);

}