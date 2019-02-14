<?php
/**
 * Class [JsonText]
 * json字符串处理类
 * author minyifei
 * date 2019/2/14
 */

namespace Demo\BehavioralPatterns\AbstractFactory;


class JsonText extends AbstractText
{

    /**
     * Function:parseText
     * 解析文本为json格式
     *
     * @return mixed
     */
    public function parseText()
    {
        //解析为json数组
        return json_decode($this->getText(), true);
    }
}