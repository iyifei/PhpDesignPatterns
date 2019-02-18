<?php
/**
 * Class [GroupLeader]
 * 组长
 * author minyifei
 * date 2019/2/18
 */

namespace Demo\BehavioralPatterns\State;


class GroupLeader implements Leave
{


    /**
     * 上级领导
     *
     * @var Leave
     */
    private $leader;

    /**
     * GroupLeader constructor.
     */
    public function __construct()
    {
        $this->leader = new Director();
    }


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
        if ($staff->getDays() <= 1) {
            //1天内组织即可审批s
            return 'GroupLeader:Agree';
        } else {
            return $this->leader->processing($staff);
        }
    }
}