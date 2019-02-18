<?php

namespace Demo\CreationalPatterns\FactoryMethod;

/**
 * Class [HonorPhone]
 * 华为荣耀手机
 * author minyifei
 * date 2019/2/14
 */

class HonorPhone implements Phone
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
        return "honor:call:".$number;
    }
}