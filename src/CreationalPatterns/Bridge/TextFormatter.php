<?php
/**
 * Class [TextFormatter]
 * 文本格式化
 * author minyifei
 * date 2019/2/15
 */

namespace Demo\CreationalPatterns\Bridge;


class TextFormatter implements Formatter
{

    /**
     * Function:format
     * 格式化字符串,返回原字符串
     *
     * @param string $text
     *
     * @return string
     */
    public function format($text)
    {
        return $text;
    }
}