<?php
/**
 * Class [Singleton]
 * 单例模式
 * author minyifei
 * date 2019/2/13
 */

namespace Demo\CreationalPatterns\Singleton;

class Singleton
{

    /**
     * @var Singleton $instance
     */
    private static $instance;
    /**
     * @var string 名称
     */
    private $name = 'Singleton';

    /**
     * Function:getInstance
     * 通过懒加载获得实例（在第一次使用的时候创建）
     *
     * @return Singleton
     */
    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }

    /**
     * Function:getName
     * 获取名称
     *
     * @return string
     */
    public function getName(){
        return $this->name;
    }

    /**
     * Singleton constructor.
     * 不允许从外部调用以防止创建多个实例
     * 要使用单例，必须通过 Singleton::getInstance() 方法获取实例
     */
    private function __construct()
    {
    }

    /**
     * 防止实例被克隆（这会创建实例的副本）
     */
    private function __clone()
    {
    }

    /**
     * 防止反序列化（这将创建它的副本）
     */
    private function __wakeup()
    {
    }
}