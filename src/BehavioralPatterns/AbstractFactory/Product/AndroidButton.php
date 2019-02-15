<?php
/**
 * Class [AndroidButton]
 * android按钮
 * author minyifei
 * date 2019/2/15
 */

namespace Demo\BehavioralPatterns\AbstractFactory\Product;


class AndroidButton implements Button
{

    public function getColor()
    {
        return 'Android:Button:Color';
    }

    /**
     * Function:getName
     * 获取按钮名称
     *
     * @return string
     */
    public function getName()
    {
        return 'Android:Button';
    }
}