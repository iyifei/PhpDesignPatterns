<?php
/**
 * Class [SizeDecorator]
 * 字体大小装饰器
 * author minyifei
 * date 2019/2/15
 */

namespace Demo\StructuralPatterns\Decorator;


class SizeDecorator implements Decorator
{

    /**
     * @var int 字体大小
     */
    private $size;

    public function __construct($size)
    {
        $this->size = $size;
    }

    /**
     * Function:before
     * 前置函数执行
     *
     * @return mixed
     */
    public function beforeExecute()
    {
        return sprintf('<size style="font-size: %spx;">',$this->size);
    }

    /**
     * Function:afterExecute
     * 后置函数执行
     *
     * @return mixed
     */
    public function afterExecute()
    {
        return '</size>';
    }
}