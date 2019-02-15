<?php
/**
 * Class [DependencyTest]
 * 依赖注入单元测试
 * author minyifei
 * date 2019/2/15
 */

namespace Test\CreationalPatterns\Dependency;


use Demo\CreationalPatterns\Dependency\MysqlConfig;
use Demo\CreationalPatterns\Dependency\MysqlConnect;
use PHPUnit\Framework\TestCase;

class DependencyTest extends TestCase
{

    public function testMysql(){
        $host = '127.0.0.1';
        $port = 3306;
        $user = 'root';
        $pwd = '123456';
        $db = 'test';
        $config = new MysqlConfig($host,$port,$user,$pwd,$db);
        //实现依赖注入
        $mysql = new MysqlConnect($config);
        $dsn = sprintf('mysql;:host=%s;port=%s;dbname=%s;chartset=utf8',$host,$port,$db);
        $this->assertEquals($dsn,$mysql->getDsn());
    }

}