<?php
/**
 * Class [CharFlayweight]
 * 享元实现
 * author minyifei
 * date 2019/2/15
 */

namespace Demo\CreationalPatterns\Flyweight;


class CharFlyweight implements Flyweight
{

    /**
     * 任何具体的享元对象存储的状态必须独立于其运行环境。
     * 享元对象呈现的特点，往往就是对应的编码的特点。
     *
     * @var string
     */
    private $name;

    /**
     * CharFlyweight constructor.
     *
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }


    /**
     * Function:render
     * 创建传递函数。
     * 返回字符串格式数据。
     *
     * @param $font
     *
     * @return string
     */
    public function render($font)
    {
        return sprintf('Char %s with font %s',$this->name,$font);
    }

}