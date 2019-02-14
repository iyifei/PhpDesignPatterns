<?php
/**
 * Class [MysqlDatabase]
 * mysql数据库操作类
 * author minyifei
 * date 2019/2/14
 */

namespace Demo\BehavioralPatterns\SimpleFactory;


class MysqlDatabase implements Database
{

    /**
     * Function:connection
     * 连接数据库
     *
     * @return mixed
     */
    function connection()
    {
        return DatabaseType::MYSQL . 'Connected';
    }
}