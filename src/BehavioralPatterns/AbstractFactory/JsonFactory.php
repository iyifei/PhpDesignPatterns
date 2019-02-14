<?php
/**
 * Class [JsonFactrory]
 * Json工场类
 * author minyifei
 * date 2019/2/14
 */

namespace Demo\BehavioralPatterns\AbstractFactory;


class JsonFactory extends AbstractFactory
{

    /**
     * Function:createText
     * 创建个文本
     *
     * @param string $content
     *
     * @return JsonText
     */
    public function createText($content)
    {
        return new JsonText($content);
    }
}