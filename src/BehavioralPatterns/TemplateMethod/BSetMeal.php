<?php
/**
 * Class [BSetMeal]
 * B套餐
 * author minyifei
 * date 2019/2/18
 */

namespace Demo\BehavioralPatterns\TemplateMethod;


class BSetMeal extends SetMealModel
{

    const NAME = 'B套餐';

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
        //橙汁
        return 'OrangeJuice';
    }

    /**
     * Function:getFood
     * 获取主食
     *
     * @return string
     */
    protected function getFood()
    {
        //面条
        return 'Noodle';
    }

}