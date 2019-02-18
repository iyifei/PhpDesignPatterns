<?php
/**
 * Class [Share]
 * 股票接口
 * author minyifei
 * date 2019/2/15
 */

namespace Demo\StructuralPatterns\Facade;


interface Share
{

    /**
     * Function:buy
     * 买入股票
     *
     * @return mixed
     */
    public function buy();


    /**
     * Function:sell
     * 卖出股票
     *
     * @return mixed
     */
    public function sell();

    /**
     * Function:getCount
     * 数量
     *
     * @return int
     */
    public function getCount();
}