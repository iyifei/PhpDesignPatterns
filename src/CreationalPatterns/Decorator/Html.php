<?php
/**
 * Class [Html]
 * html格式化
 * author minyifei
 * date 2019/2/15
 */

namespace Demo\CreationalPatterns\Decorator;


class Html
{

    //输出的html代码
    private $html;
    //内容
    private $body;

    /**
     * @var Decorator[]
     */
    private $decorators = [];

    public function __construct($body)
    {
        $this->body = $body;
        $this->html  = '';
    }

    /**
     * Function:addDecorator
     * 描述
     *
     * @param Decorator $decorator
     *
     * @return void
     */
    public function addDecorator($decorator){
        $this->decorators[]=$decorator;
    }

    //执行所有前置函数 先进先出原则
    private function doBefore(){
        foreach ($this->decorators as $decorator){
            $this->html.=$decorator->beforeExecute();
        }
    }

    //执行所有后置函数 先进后出原则
    private function doAfter(){
        $decorators = array_reverse($this->decorators);
        foreach ($decorators as $decorator){
            $this->html.=$decorator->afterExecute();
        }
    }

    /**
     * Function:toHtml
     * 输出html代码
     *
     * @return string
     */
    public function toHtml(){
        $this->doBefore();
        $this->html.=$this->body;
        $this->doAfter();
        return $this->html;
    }

}