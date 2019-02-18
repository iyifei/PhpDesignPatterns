<?php
/**
 * Class [Reader]
 * 读者，实现观察者
 * author minyifei
 * date 2019/2/18
 */

namespace Demo\BehavioralPatterns\Observer;


use SplSubject;

class Reader implements \SplObserver
{

    /**
     * @var string
     */
    private $name;

    /**
     * Reader constructor.
     *
     * @param string $name 读者名称
     */
    public function __construct($name)
    {
        $this->name = $name;
    }


    /**
     * Receive update from subject
     *
     * @link  http://php.net/manual/en/splobserver.update.php
     *
     * @param SplSubject $subject <p>
     *                            The <b>SplSubject</b> notifying the observer of an update.
     *                            </p>
     *
     * @return void
     * @since 5.1.0
     */
    public function update(SplSubject $subject)
    {
        echo sprintf("%s reading %s",$this->name,$subject->getContent()).PHP_EOL;
    }
}