<?php
/**
 * Class [HtmlText]
 * html文本解析类
 * author minyifei
 * date 2019/2/14
 */

namespace Demo\BehavioralPatterns\AbstractFactory;


class HtmlText extends AbstractText
{

    /**
     * Function:parseText
     * 解析文本
     *
     * @return mixed
     */
    public function parseText()
    {
        //暂无实现解析为html结构对象,直接返回了字符串内容
        return $this->getText();
    }
}