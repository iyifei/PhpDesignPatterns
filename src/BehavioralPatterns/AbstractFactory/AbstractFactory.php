<?php
/**
 * Class [AbstractFactory]
 * 抽象工场模式
 * author minyifei
 * date 2019/2/14
 */

namespace Demo\BehavioralPatterns\AbstractFactory;

abstract class AbstractFactory
{

    /**
     * Function:createText
     * 创建个文本
     *
     * @param string $content
     *
     * @return mixed
     */
    abstract public function createText($content);

}