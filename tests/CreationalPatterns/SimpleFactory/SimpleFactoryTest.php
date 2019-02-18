<?php
/**
 * Class [SimpleFactoryTest]
 * 简单工场测试类
 * author minyifei
 * date 2019/2/14
 */

namespace Test\CreationalPatterns\SimpleFactory;

use Demo\CreationalPatterns\SimpleFactory\DatabaseType;
use Demo\CreationalPatterns\SimpleFactory\MysqlDatabase;
use Demo\CreationalPatterns\SimpleFactory\SimpleFactory;
use Demo\CreationalPatterns\SimpleFactory\SqliteDatabase;
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