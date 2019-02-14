<?php
/**
 * Class [HtmlFactory]
 * html工场类
 * author minyifei
 * date 2019/2/14
 */

namespace Demo\BehavioralPatterns\AbstractFactory;


class HtmlFactory extends AbstractFactory
{

    /**
     * Function:createText
     * 创建个文本
     *
     * @param string $content
     *
     * @return HtmlText
     */
    public function createText($content)
    {
        return new HtmlText($content);
    }
}