<?php
namespace Demo\BehavioralPatterns\FactoryMethod;

/**
 * Class [VivoFactory]
 * vivo手机生产工厂
 * author minyifei
 * date 2019/2/14
 */

class VivoFactory implements PhoneFactory
{

    /**
     * Function:createPhone
     * 制作手机
     *
     * @return Phone
     */
    function createPhone()
    {
        return new VivoPhone();
    }
}