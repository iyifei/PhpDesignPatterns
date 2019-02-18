<?php
/**
 * Class [Form]
 * 表单项渲染器
 * author minyifei
 * date 2019/2/15
 */

namespace Demo\StructuralPatterns\Composite;


class FormItem implements Renderable
{

    /**
     * @var Renderable[]
     */
    protected $elements;

    /**
     * Function:addElement
     * 添加渲染器
     *
     * @param Renderable $element
     *
     * @return void
     */
    public function addElement($element){
        $this->elements[]=$element;
    }

    /**
     * Function:render
     * 遍历所有的元素，调用他们的render方法，然后返回完整的表单代码
     *
     * @return string
     */
    public function render()
    {
        $itemCode = '<div>';
        foreach ($this->elements as $element){
            $itemCode.= $element->render();
        }
        $itemCode.='</div>';
        return $itemCode;
    }
}