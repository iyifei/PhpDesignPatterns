<?php
/**
 * Class [Apple]
 * 操作对象-苹果
 * author minyifei
 * date 2019/2/18
 */

namespace Demo\BehavioralPatterns\Responsibilities;


class Apple
{

    /**
     * @var string[]
     */
    private $operates;


    /**
     * Function:setOperate
     * 设置操作内容
     *
     * @param string $operate
     *
     * @return void
     */
    public function setOperate($operate){
        $this->operates[]=$operate;
    }


    /**
     * @return string[]
     */
    public function getOperates()
    {
        return $this->operates;
    }
}