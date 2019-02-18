<?php
/**
 * Class [Interpreter]
 * 解析器
 * author minyifei
 * date 2019/2/18
 */

namespace Demo\BehavioralPatterns\Interpreter;


class Interpreter
{

    /**
     * Function:execute
     * 转换字符串
     *
     * @param string $str
     *
     * @return string
     */
    public function execute($str){
        $numExp = new ExpressionNum();
        $charExp = new ExpressionChar();
        $result='';
        for ($i=0;$i<strlen($str);$i++){
            $char = $str[$i];
            if(is_numeric($char)){
                $result.=$numExp->interpreter($char);
            }else{
                $result.=$charExp->interpreter($char);
            }
        }
        return $result;
    }

}