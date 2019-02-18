<?php
/**
 * Class [Panel]
 * 面板接口
 * author minyifei
 * date 2019/2/15
 */

namespace Demo\CreationalPatterns\AbstractFactory\Product;


interface Panel
{

    /**
     * Function:getStyle
     * 获取面板样式
     *
     * @return mixed
     */
    public function getStyle();

}