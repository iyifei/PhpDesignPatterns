<?php
/**
 * Class [Flyweight]
 * 享元接口
 * author minyifei
 * date 2019/2/15
 */

namespace Demo\StructuralPatterns\Flyweight;


interface Flyweight
{

    /**
     * Function:render
     * 创建传递函数。
     * 返回字符串格式数据。
     *
     * @param $font
     *
     * @return string
     */
    public function render($font);

}