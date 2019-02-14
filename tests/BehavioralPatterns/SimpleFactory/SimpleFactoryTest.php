<?php
/**
 * Class [SimpleFactoryTest]
 * 简单工场测试类
 * author minyifei
 * date 2019/2/14
 */

namespace Test\BehavioralPatterns\SimpleFactory;

use Demo\BehavioralPatterns\SimpleFactory\DatabaseType;
use Demo\BehavioralPatterns\SimpleFactory\MysqlDatabase;
use Demo\BehavioralPatterns\SimpleFactory\SimpleFactory;
use Demo\BehavioralPatterns\SimpleFactory\SqliteDatabase;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase
{

    public function testCreate()
    {
        $simpleFactory = new SimpleFactory();

        $mysqlDatabase = $simpleFactory->create(DatabaseType::MYSQL);
        $this->assertInstanceOf(MysqlDatabase::class,$mysqlDatabase);
        $this->assertEquals(
            DatabaseType::MYSQL . 'Connected', $mysqlDatabase->connection()
        );

        $sqliteDatabase = $simpleFactory->create(DatabaseType::SQLITE);
        $this->assertInstanceOf(SqliteDatabase::class,$sqliteDatabase);
        $this->assertEquals(
            DatabaseType::SQLITE . 'Connected', $sqliteDatabase->connection()
        );

    }

}