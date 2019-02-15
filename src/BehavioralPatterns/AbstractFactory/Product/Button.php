<?php
/**
 * Class [Button]
 * 按钮接口
 * author minyifei
 * date 2019/2/15
 */

namespace Demo\BehavioralPatterns\AbstractFactory\Product;


interface Button
{

    //按钮颜色
    public function getColor();

    //获取名称
    public function getName();
}