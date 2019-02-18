<?php

namespace Demo\CreationalPatterns\FactoryMethod;

/**
 * Class [Phone]
 * 电话接口
 * author minyifei
 * date 2019/2/14
 */

interface Phone
{

    /**
     * Function:call
     * 打电话
     *
     * @param string $number 电话号码
     *
     * @return mixed
     */
    function call($number);

}