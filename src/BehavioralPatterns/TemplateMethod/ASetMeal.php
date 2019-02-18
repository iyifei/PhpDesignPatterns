<?php
/**
 * Class [ASetMeal]
 * 套餐A
 * author minyifei
 * date 2019/2/18
 */

namespace Demo\BehavioralPatterns\TemplateMethod;


class ASetMeal extends SetMealModel
{

    const NAME = 'A套餐';

    public function __construct()
    {
        parent::__construct(self::NAME);
    }

    /**
     * Function:getDrink
     * 获取饮料
     *
     * @return string
     */
    protected function getDrink()
    {
        //雪碧
        return 'Sprite';
    }

    /**
     * Function:getFood
     * 获取主食
     *
     * @return string
     */
    protected function getFood()
    {
        //汉堡
        return 'Hamburger';
    }
}