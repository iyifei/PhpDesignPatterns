<?php
/**
 * Class [Manager]
 * 经理-最高级别
 * author minyifei
 * date 2019/2/18
 */

namespace Demo\BehavioralPatterns\Responsibilities;


class Manager implements Leave
{

    /**
     * Function:processing
     * 员工请假处理
     *
     * @param Staff $staff
     *
     * @return mixed
     */
    public function processing($staff)
    {
        return 'Manager:Agree';
    }
}