<?php
/**
 * Class [Memento]
 * 编辑状态存储器
 * author minyifei
 * date 2019/2/18
 */

namespace Demo\BehavioralPatterns\Memento;


class Memento
{


    /**
     * @var string 状态
     */
    private $action;

    /**
     * @var string
     */
    private $content;

    /**
     * Memento constructor.
     *
     * @param string $action
     * @param string $content
     */
    public function __construct($action, $content)
    {
        $this->action = $action;
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param string $action
     */
    public function setAction($action)
    {
        $this->action = $action;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }



}