<?php
/**
 * Class [ExpressionNum]
 * 数字转换器
 * author minyifei
 * date 2019/2/18
 */

namespace Demo\BehavioralPatterns\Interpreter;


class ExpressionNum implements Expression
{

    /**
     * Function:interpreter
     * 转换接口
     *
     * @param string $str
     *
     * @return string
     */
    public function interpreter($str)
    {
        switch ($str) {
            case "0":
                return "零";
            case "1":
                return "壹";
            case "2":
                return "贰";
            case "3":
                return "叁";
            case "4":
                return "肆";
            case "5":
                return "伍";
            case "6":
                return "陆";
            case "7":
                return "柒";
            case "8":
                return "捌";
            case "9":
                return "玖";
        }
    }
}