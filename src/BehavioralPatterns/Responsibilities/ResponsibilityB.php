<?php
/**
 * Class [ResponsibilityB]
 * 链条上的B操作者
 * author minyifei
 * date 2019/2/18
 */

namespace Demo\BehavioralPatterns\Responsibilities;


class ResponsibilityB extends Responsibility
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
        $apple->setOperate('B Operate');
        if(isset($this->next)){
            $this->next->operate($apple);
        }
    }
}