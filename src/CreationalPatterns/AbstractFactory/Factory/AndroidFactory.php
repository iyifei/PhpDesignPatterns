<?php
/**
 * Class [AndroidFactory]
 * android制作工场
 * author minyifei
 * date 2019/2/15
 */

namespace Demo\CreationalPatterns\AbstractFactory\Factory;


use Demo\CreationalPatterns\AbstractFactory\Product\AndroidButton;
use Demo\CreationalPatterns\AbstractFactory\Product\AndroidPanel;
use Demo\CreationalPatterns\AbstractFactory\Product\Button;
use Demo\CreationalPatterns\AbstractFactory\Product\Panel;

class AndroidFactory implements Factory
{

    /**
     * Function:createButton
     * 制作个按钮
     *
     * @return Button
     */
    public function createButton()
    {
        return new AndroidButton();
    }

    /**
     * Function:createPanel
     * 制作个面板
     *
     * @return Panel
     */
    public function createPanel()
    {
        return new AndroidPanel();
    }
}