<?php
/**
 * Class [Eye]
 * 动物的眼睛
 * author minyifei
 * date 2019/2/14
 */

namespace Demo\CreationalPatterns\Prototype;


class Eye
{

    /**
     * @var string 眼睛的颜色
     */
    private $color;

    public function __construct($color)
    {
        $this->color = $color;
    }

    /**
     * Function:getColor
     * 获取眼睛的颜色
     *
     * @return mixed
     */
    public function getColor(){
        return $this->color;
    }
}