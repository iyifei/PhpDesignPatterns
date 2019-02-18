<?php
namespace Demo\CreationalPatterns\FactoryMethod;

/**
 * Class [PhoneFactory]
 * 手机加工厂
 * author minyifei
 * date 2019/2/14
 */

interface PhoneFactory
{

    /**
     * Function:createPhone
     * 制作手机
     *
     * @return Phone
     */
    function createPhone();

}