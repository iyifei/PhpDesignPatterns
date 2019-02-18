<?php
/**
 * Class [Leave]
 * 请假接口
 * author minyifei
 * date 2019/2/18
 */

namespace Demo\BehavioralPatterns\Responsibilities;


interface Leave
{

    /**
     * Function:processing
     * 员工请假处理
     *
     * @param Staff $staff
     *
     * @return mixed
     */
    public function processing($staff);

}