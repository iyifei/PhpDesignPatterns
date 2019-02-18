<?php
/**
 * Class [Seller]
 * 卖家
 * author minyifei
 * date 2019/2/18
 */

namespace Demo\BehavioralPatterns\Mediator;


class Seller
{

    /**
     * @var House
     */
    private $house;

    /**
     * Buyer constructor.
     *
     * @param House $house
     */
    public function __construct($house)
    {
        $this->house = $house;
    }

    /**
     * @return House
     */
    public function getHouse()
    {
        return $this->house;
    }


}