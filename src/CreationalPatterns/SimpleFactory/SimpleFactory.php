<?php
/**
 * Class [SimpleFactory]
 * 简单工场模式
 * author minyifei
 * date 2019/2/14
 */

namespace Demo\CreationalPatterns\SimpleFactory;


class SimpleFactory
{


    /**
     * Function:create
     * 创建数据库
     *
     * @param String $type 类型
     *
     * @return MysqlDatabase|SqliteDatabase|null
     */
    public function create($type){
        $database = null;
        switch ($type){
            case DatabaseType::SQLITE:
                $database = new SqliteDatabase();
                break;
            case DatabaseType::MYSQL:
                $database = new MysqlDatabase();
                break;
        }
        return $database;
    }

}