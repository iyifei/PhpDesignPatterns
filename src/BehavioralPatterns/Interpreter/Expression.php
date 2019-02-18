<?php
/**
 * Class [Expression]
 * 转换接口
 * author minyifei
 * date 2019/2/18
 */

namespace Demo\BehavioralPatterns\Interpreter;


interface Expression
{

    /**
     * Function:interpreter
     * 转换接口
     *
     * @param string $str
     *
     * @return string
     */
    public function interpreter($str);

}