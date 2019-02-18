<?php
/**
 * Class [HtmlFormatter]
 * html格式化字符串
 * author minyifei
 * date 2019/2/15
 */

namespace Demo\StructuralPatterns\Bridge;


class HtmlFormatter implements Formatter
{

    /**
     * Function:format
     * 格式化字符串
     *
     * @param string $text
     *
     * @return string
     */
    public function format($text)
    {
        return sprintf('<p>%s</p>',$text);
    }
}