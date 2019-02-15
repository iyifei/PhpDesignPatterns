<?php
/**
 * Class [AndroidPanel]
 * android面板
 * author minyifei
 * date 2019/2/15
 */

namespace Demo\BehavioralPatterns\AbstractFactory\Product;


class AndroidPanel implements Panel
{

    /**
     * Function:getStyle
     * 获取面板样式
     *
     * @return mixed
     */
    public function getStyle()
    {
        return "Android:Panel:Style";
    }
}