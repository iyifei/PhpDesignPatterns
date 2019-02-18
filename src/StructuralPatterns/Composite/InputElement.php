<?php
/**
 * Class [InputElement]
 * 文本框
 * author minyifei
 * date 2019/2/15
 */

namespace Demo\StructuralPatterns\Composite;


class InputElement implements Renderable
{

    /**
     * @var string 名称/id
     */
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Function:render
     * 渲染
     *
     * @return string
     */
    public function render()
    {
        return sprintf('<input type="text" id="%s" name="%s" />',$this->name,$this->name);
    }
}