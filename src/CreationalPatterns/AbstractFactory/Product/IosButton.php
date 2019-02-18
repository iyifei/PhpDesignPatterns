<?php
/**
 * Class [IosButton]
 * IOS按钮
 * author minyifei
 * date 2019/2/15
 */

namespace Demo\CreationalPatterns\AbstractFactory\Product;


class IosButton implements Button
{

    public function getColor()
    {
        return "IOS#Button#Color";
    }

    /**
     * Function:getName
     * 获取按钮名称
     *
     * @return string
     */
    public function getName()
    {
        return "IOS#Button";
    }
}