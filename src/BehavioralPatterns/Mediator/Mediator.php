<?php
/**
 * Class [Mediator]
 * 中介
 * author minyifei
 * date 2019/2/18
 */

namespace Demo\BehavioralPatterns\Mediator;


class Mediator
{

    /**
     * @var Seller[]
     */
    private $sellers;

    /**
     * Function:addSeller
     * 添加买家
     *
     * @param Seller $seller
     *
     * @return void
     */
    public function addSeller($seller)
    {
        $this->sellers[] = $seller;
    }


    /**
     * Function:match
     * 匹配买卖双方
     *
     * @param Buyer $buyer
     *
     * @return Seller
     */
    public function match($buyer)
    {

        $needHouse = $buyer->getNeedHouse();
        foreach ($this->sellers as $seller) {
            $sellerHouse = $seller->getHouse();
            //如果房间数一样，并且 房间面积误差在10平米以内 即可推荐
            if ($sellerHouse->getRoomNumber() == $needHouse->getRoomNumber()
                && ($sellerHouse->getArea() - $needHouse->getArea() <= 10
                    || $needHouse->getArea() - $sellerHouse->getArea() <= 10)
            ) {
                return $seller;
            }
        }
        return null;

    }

}