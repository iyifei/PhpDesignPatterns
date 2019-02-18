<?php
/**
 * Class [ResponsibilityA]
 * 链条A
 * author minyifei
 * date 2019/2/18
 */

namespace Demo\BehavioralPatterns\Responsibilities;


class ResponsibilityA extends Responsibility
{


    /**
     * Function:operate
     * 操作内容
     *
     * @param Apple $apple 操作对象
     *
     * @return mixed
     */
    public function operate($apple)
    {
        $apple->setOperate('A Operate');
        if(isset($this->next)){
            $this->next->operate($apple);
        }
    }
}