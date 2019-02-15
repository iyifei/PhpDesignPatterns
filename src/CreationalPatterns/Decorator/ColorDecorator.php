<?php
/**
 * Class [ColorDecorator]
 * 颜色装饰器
 * author minyifei
 * date 2019/2/15
 */

namespace Demo\CreationalPatterns\Decorator;


class ColorDecorator implements Decorator
{

    /**
     * @var string 颜色值
     */
    private $color;

    public function __construct($color)
    {
        $this->color = $color;
    }

    /**
     * Function:before
     * 前置函数执行
     *
     * @return mixed
     */
    public function beforeExecute()
    {
        return sprintf('<color style="color:%s">',$this->color);
    }

    /**
     * Function:afterExecute
     * 后置函数执行
     *
     * @return mixed
     */
    public function afterExecute()
    {
        return '</color>';
    }
}