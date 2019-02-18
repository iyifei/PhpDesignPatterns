<?php
/**
 * Class [HelloWorldBridge]
 * 实现类
 * author minyifei
 * date 2019/2/15
 */

namespace Demo\StructuralPatterns\Bridge;


class HelloWorldBridge extends Bridge
{

    /**
     * Function:get
     * 获取格式化后的结果
     *
     * @return string
     */
    public function get()
    {
        $str = 'Hello World';
        return $this->formatter->format($str);
    }
}