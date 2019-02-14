<?php
/**
 * Class [AbstractText]
 * 文本抽象类
 * author minyifei
 * date 2019/2/14
 */

namespace Demo\BehavioralPatterns\AbstractFactory;

abstract class AbstractText
{

    private $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    /**
     * Function:getText
     * 返回文本内容
     *
     * @return mixed
     */
    protected function getText(){
        return $this->text;
    }

    /**
     * Function:parseText
     * 解析文本
     *
     * @return mixed
     */
    abstract public function parseText();

}