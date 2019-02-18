<?php
/**
 * Class [Bridge]
 * 抽象的桥接器
 * author minyifei
 * date 2019/2/15
 */

namespace Demo\StructuralPatterns\Bridge;


abstract class Bridge
{

    /**
     * @var Formatter
     */
    protected $formatter;


    /**
     * Bridge constructor.
     *
     * @param Formatter $formatter
     */
    public function __construct($formatter)
    {
        $this->formatter = $formatter;
    }

    /**
     *  设置
     * @param Formatter $formatter
     */
    public function setFormatter($formatter)
    {
        $this->formatter = $formatter;
    }


    /**
     * Function:get
     * 获取格式化后的结果
     *
     * @return string
     */
    abstract public function get();

}