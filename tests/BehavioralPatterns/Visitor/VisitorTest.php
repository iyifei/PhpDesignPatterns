<?php
/**
 * Class [VisitorTest]
 * 访问者模式单元测试类
 * author minyifei
 * date 2019/2/18
 */

namespace Test\BehavioralPatterns\Visitor;


use Demo\BehavioralPatterns\Visitor\EmployeeList;
use Demo\BehavioralPatterns\Visitor\FinanceDepartment;
use Demo\BehavioralPatterns\Visitor\FullTimeEmployee;
use Demo\BehavioralPatterns\Visitor\HRDepartment;
use Demo\BehavioralPatterns\Visitor\PartTimeEmployee;
use PHPUnit\Framework\TestCase;

class VisitorTest extends TestCase
{

    public function testVisitor(){
        $empList = new EmployeeList();
        $zs = new FullTimeEmployee('张三',3200,45);
        $empList->addEmployee($zs);
        $empList->addEmployee(new FullTimeEmployee('李四',2000,40));
        $empList->addEmployee(new FullTimeEmployee('王五',2400,38));
        $empList->addEmployee(new PartTimeEmployee('赵六',80,20));
        $empList->addEmployee(new PartTimeEmployee('孙七',60,18));

        $hr = new HRDepartment();
        $empList->accept($hr);
        $finance = new FinanceDepartment();
        $empList->accept($finance);

        $this->assertEquals('正式员工[张三]的工作时长为[45]，加班时长为[5]',$zs->getHrInfo());
        $this->assertEquals('正式员工[张三]的工资为[3450]',$zs->getFinaceInfo());
    }

}