<?php
/**
 * Class [LabelElement]
 * 标签
 * author minyifei
 * date 2019/2/15
 */

namespace Demo\StructuralPatterns\Composite;


class LabelElement implements Renderable
{

    /**
     * @var string 标签内容
     */
    private $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    /**
     * Function:render
     * 渲染
     *
     * @return string
     */
    public function render()
    {
        return sprintf('<label>%s</label>',$this->text);
    }
}