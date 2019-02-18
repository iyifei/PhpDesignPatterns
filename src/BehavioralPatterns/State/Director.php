<?php
/**
 * Class [Director]
 * 主管
 * author minyifei
 * date 2019/2/18
 */

namespace Demo\BehavioralPatterns\State;


class Director implements Leave
{

    /**
     * @var Leave 上级领导
     */
    private $leader;

    /**
     * Director constructor.
     *
     */
    public function __construct()
    {
        $this->leader = new Manager();
    }


    /**
     * Function:processing
     * 员工请假处理
     *s
     * @param Staff $staff
     *
     * @return mixed
     */
    public function processing($staff)
    {
        if ($staff->getDays() <= 3) {
            //3天以内主管即可决定是否批准
            return 'Director:Agree';
        } else {
           return $this->leader->processing($staff);
        }
    }
}