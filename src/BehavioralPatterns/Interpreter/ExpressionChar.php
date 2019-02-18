<?php
/**
 * Class [ExpressionChar]
 * 字符转换器
 * author minyifei
 * date 2019/2/18
 */

namespace Demo\BehavioralPatterns\Interpreter;


class ExpressionChar implements Expression
{

    /**
     * Function:interpreter
     * 转换接口,转为大写即可
     *
     * @param string $str
     *
     * @return string
     */
    public function interpreter($str)
    {
        return strtoupper($str);
    }
}