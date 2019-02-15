<?php
/**
 * Class [Factory]
 * 工场接口
 * author minyifei
 * date 2019/2/15
 */

namespace Demo\BehavioralPatterns\AbstractFactory\Factory;


use Demo\BehavioralPatterns\AbstractFactory\Product\Button;
use Demo\BehavioralPatterns\AbstractFactory\Product\Panel;

interface Factory
{

    /**
     * Function:createButton
     * 制作个按钮
     *
     * @return Button
     */
    public function createButton();

    /**
     * Function:createPanel
     * 制作个面板
     *
     * @return Panel
     */
    public function createPanel();
}