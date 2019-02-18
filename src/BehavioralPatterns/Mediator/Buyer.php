<?php
/**
 * Class [Buyer]
 * 买家
 * author minyifei
 * date 2019/2/18
 */

namespace Demo\BehavioralPatterns\Mediator;


class Buyer
{

    /**
     * @var House
     */
    private $needHouse;

    /**
     * Buyer constructor.
     *
     * @param House $house
     */
    public function __construct($house)
    {
        $this->needHouse = $house;
    }


    /**
     * @return House
     */
    public function getNeedHouse()
    {
        return $this->needHouse;
    }

}