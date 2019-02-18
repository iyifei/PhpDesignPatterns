<?php
/**
 * Class [Editor]
 * 编辑器
 * author minyifei
 * date 2019/2/18
 */

namespace Demo\BehavioralPatterns\Memento;


class Editor
{

    /**
     * @var string 动作
     */
    private $action;

    /**
     * @var string 内容
     */
    private $content;

    /**
     * Function:saveState
     * 描述
     *
     * @param Caretaker $caretaker
     *
     * @return void
     */
    public function saveState($caretaker)
    {
        $caretaker->add(new Memento($this->action, $this->content));
    }

    /**
     * Function:recoveryState
     * 恢复状态
     *
     * @param Memento $memento
     *
     * @return void
     */
    public function recoveryState(Memento $memento){
        $this->action = $memento->getAction();
        $this->content = $memento->getContent();
    }

    /**
     * Function:modify
     * 修改内容
     *
     * @param string $action 动作
     * @param string $content 内容
     *
     * @return void
     */
    public function modify($action,$content){
        $this->action = $action;
        $this->content = $content;
    }

    /**
     * Function:show
     * 显示内容
     *
     * @return string
     */
    public function show(){
        return sprintf("Action:%s,Content=%s",$this->action,$this->content);
    }
}