<?php
/**
 * Class [Dog]
 * 狗-动物
 * author minyifei
 * date 2019/2/14
 */

namespace Demo\CreationalPatterns\Prototype;


class Dog implements Prototype
{

    /**
     * @var Eye 眼睛
     */
    private $eye;

    /**
     * @var string 名称
     */
    private $name;

    public function __construct($name,$eye)
    {
        $this->name = $name;
        $this->eye = $eye;
    }


    /**
     * @return Eye
     */
    public function getEye()
    {
        return $this->eye;
    }

    /**
     * @param Eye $eye
     */
    public function setEye($eye)
    {
        $this->eye = $eye;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    /**
     * Function:deepCopy
     * 深克隆
     * 对象的所有属性均需要深度克隆（引用对象也需要克隆）
     *
     * @return Dog
     */
    public function deepCopy()
    {
        //引用对象也需要重新创建一个
        $eye = new Eye($this->getEye()->getColor());
        $dog = new Dog($this->name,$eye);
        return $dog;
    }

    /**
     * Function:simpleCopy
     * 浅克隆
     *
     * @return Dog
     */
    public function simpleCopy()
    {
        $dog = new Dog($this->name,$this->eye);
        return $dog;
    }
}