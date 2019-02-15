<?php
/**
 * Class [IosFactory]
 * ios制作工场
 * author minyifei
 * date 2019/2/15
 */

namespace Demo\BehavioralPatterns\AbstractFactory\Factory;


use Demo\BehavioralPatterns\AbstractFactory\Product\Button;
use Demo\BehavioralPatterns\AbstractFactory\Product\IosButton;
use Demo\BehavioralPatterns\AbstractFactory\Product\IosPanel;
use Demo\BehavioralPatterns\AbstractFactory\Product\Panel;

class IosFactory implements Factory
{

    /**
     * Function:createButton
     * 制作个按钮
     *
     * @return Button
     */
    public function createButton()
    {
        return new IosButton();
    }

    /**
     * Function:createPanel
     * 制作个面板
     *
     * @return Panel
     */
    public function createPanel()
    {
        return new IosPanel();
    }
}