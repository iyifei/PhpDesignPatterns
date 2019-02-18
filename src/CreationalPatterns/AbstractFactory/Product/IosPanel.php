<?php
/**
 * Class [IosPanel]
 * ios面板
 * author minyifei
 * date 2019/2/15
 */

namespace Demo\CreationalPatterns\AbstractFactory\Product;


class IosPanel implements Panel
{

    /**
     * Function:getStyle
     * 获取面板样式
     *
     * @return mixed
     */
    public function getStyle()
    {
        return "IOS#Panel#Style";
    }
}