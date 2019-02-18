<?php
/**
 * Class [Newspaper]
 * 新闻报纸 被观察者
 * author minyifei
 * date 2019/2/18
 */

namespace Demo\BehavioralPatterns\Observer;


use SplObserver;

class Newspaper implements \SplSubject
{

    /**
     * @var string 报纸名称s
     */
    private $name;

    /**
     * @var SplObserver[]
     */
    private $observers = [];

    /**
     * @var string 新闻内容
     */
    private $content;

    /**
     * Newspaper constructor.
     *
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }


    /**
     * Attach an SplObserver
     *
     * @link  http://php.net/manual/en/splsubject.attach.php
     *
     * @param SplObserver $observer <p>
     *                              The <b>SplObserver</b> to attach.
     *                              </p>
     *
     * @return void
     * @since 5.1.0
     */
    public function attach(SplObserver $observer)
    {
        $this->observers[] = $observer;
    }

    /**
     * Detach an observer
     *
     * @link  http://php.net/manual/en/splsubject.detach.php
     *
     * @param SplObserver $observer <p>
     *                              The <b>SplObserver</b> to detach.
     *                              </p>
     *
     * @return void
     * @since 5.1.0
     */
    public function detach(SplObserver $observer)
    {
        $key = array_search($observer, $this->observers, true);
        if ($key) {
            unset($this->observers[$key]);
        }
    }

    /**
     * Notify an observer
     *
     * @link  http://php.net/manual/en/splsubject.notify.php
     * @return void
     * @since 5.1.0
     */
    public function notify()
    {
        foreach ($this->observers as $observer){
            $observer->update($this);
        }
    }


    /**
     * Function:setOutNews
     * 设置突发性新闻
     *
     * @param string $content 新闻内容
     *
     * @return void
     */
    public function setOutNews($content){
        $this->content = $content;
        $this->notify();
    }

    /**
     * Function:getContent
     * 获取新闻内容
     *
     * @return string
     */
    public function getContent(){
        return sprintf("%s From %s",$this->content,$this->name);
    }


    public function getReaderCount(){
        return count($this->observers);
    }
}