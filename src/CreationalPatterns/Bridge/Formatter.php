<?php
/**
 * Class [Formatter]
 * 格式化接口
 * author minyifei
 * date 2019/2/15
 */

namespace Demo\CreationalPatterns\Bridge;


interface Formatter
{

    /**
     * Function:format
     * 格式化字符串
     *
     * @param string $text
     *
     * @return string
     */
    public function format($text);

}