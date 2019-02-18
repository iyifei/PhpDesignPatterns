<?php
/**
 * Class [MysqlConnect]
 * mysql连接
 * author minyifei
 * date 2019/2/15
 */

namespace Demo\StructuralPatterns\Dependency;


class MysqlConnect
{

   private $dsn;

    /**
     * MysqlConnect constructor.
     *  构造函数用到了 依赖注入
     *  测试，并未实现mysql连接
     * @param MysqlConfig $config
     */
    public function __construct($config)
    {
        $host  = $config->getHost();
        $port = $config->getPort();
        $db = $config->getDb();
        $this->dsn = sprintf('mysql;:host=%s;port=%s;dbname=%s;chartset=utf8',$host,$port,$db);
    }

    public function getDsn(){
        return $this->dsn;
    }

}