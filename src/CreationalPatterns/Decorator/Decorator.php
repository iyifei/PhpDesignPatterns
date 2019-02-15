<?php
/**
 * Class [Decorator]
 * 装饰器接口
 * author minyifei
 * date 2019/2/15
 */

namespace Demo\CreationalPatterns\Decorator;


interface Decorator
{

    /**
     * Function:before
     * 前置函数执行
     *
     * @return mixed
     */
    public function beforeExecute();

    /**
     * Function:afterExecute
     * 后置函数执行
     *
     * @return mixed
     */
    public function afterExecute();

}