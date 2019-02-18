<?php
/**
 * Class [Database]
 * 数据库操作接口
 * author minyifei
 * date 2019/2/14
 */

namespace Demo\CreationalPatterns\SimpleFactory;


interface Database
{

    /**
     * Function:connection
     * 连接数据库
     *
     * @return mixed
     */
    function connection();

}