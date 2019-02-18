<?php
/**
 * Class [SetMealModel]
 * 抽象套餐模板
 * author minyifei
 * date 2019/2/18
 */

namespace Demo\BehavioralPatterns\TemplateMethod;


 abstract class SetMealModel
{

     /**
      * @var string 套餐名称
      */
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

     /**
      * Function:get
      * 获取套餐
      *
      * @return string
      */
    public function get(){
        return sprintf("%s:%s And %s",$this->name,$this->getFood(),$this->getDrink());
    }

     /**
      * Function:getDrink
      * 获取饮料
      *
      * @return string
      */
    abstract protected function getDrink();

     /**
      * Function:getFood
      * 获取主食
      *
      * @return string
      */
    abstract protected function getFood();
 }