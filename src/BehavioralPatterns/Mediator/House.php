<?php
/**
 * Class [House]
 * 房子
 * author minyifei
 * date 2019/2/18
 */

namespace Demo\BehavioralPatterns\Mediator;


class House
{

    /**
     * @var int 房间数
     */
    private $roomNumber;

    /**
     * @var double 房屋面积
     */
    private $area;

    /**
     * House constructor.
     *
     * @param int   $roomNumber
     * @param float $area
     */
    public function __construct($roomNumber, $area)
    {
        $this->roomNumber = $roomNumber;
        $this->area = $area;
    }

    /**
     * @return int
     */
    public function getRoomNumber()
    {
        return $this->roomNumber;
    }

    /**
     * @return float
     */
    public function getArea()
    {
        return $this->area;
    }



}