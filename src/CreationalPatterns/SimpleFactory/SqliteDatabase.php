<?php
/**
 * Class [SqliteDatabase]
 * sqlite数据库操作类
 * author minyifei
 * date 2019/2/14
 */

namespace Demo\CreationalPatterns\SimpleFactory;


class SqliteDatabase implements Database
{

    /**
     * Function:connection
     * 连接数据库
     *
     * @return mixed
     */
    function connection()
    {
        return DatabaseType::SQLITE . "Connected";
    }
}