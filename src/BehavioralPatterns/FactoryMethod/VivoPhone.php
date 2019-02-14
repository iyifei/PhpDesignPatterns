<?php
namespace Demo\BehavioralPatterns\FactoryMethod;

/**
 * Class [VivoPhone]
 * vivo手机
 * author minyifei
 * date 2019/2/14
 */

class VivoPhone implements Phone
{

    /**
     * Function:call
     * 打电话
     *
     * @param string $number 电话号码
     *
     * @return mixed
     */
    function call($number)
    {
        return 'vivo:call:'.$number;
    }
}