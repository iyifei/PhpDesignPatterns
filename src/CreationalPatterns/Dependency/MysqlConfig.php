<?php
/**
 * Class [MysqlConfig]
 * 数据库连接配置
 * author minyifei
 * date 2019/2/15
 */

namespace Demo\CreationalPatterns\Dependency;


class MysqlConfig
{

    /**
     * @var string 连接地址
     */
    private $host;

    /**
     * @var int 端口号
     */
    private $port;

    /**
     * @var string 登录用户名
     */
    private $user;

    /**
     * @var string 登录密码
     */
    private $pwd;

    /**
     * @var string 操作库
     */
    private $db;

    /**
     * MysqlConfig constructor.
     *
     * @param string $host
     * @param int    $port
     * @param string $user
     * @param string $pwd
     * @param string $db
     */
    public function __construct($host, $port, $user, $pwd, $db)
    {
        $this->host = $host;
        $this->port = $port;
        $this->user = $user;
        $this->pwd = $pwd;
        $this->db = $db;
    }


    /**
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @param string $host
     */
    public function setHost($host)
    {
        $this->host = $host;
    }

    /**
     * @return int
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @param int $port
     */
    public function setPort($port)
    {
        $this->port = $port;
    }

    /**
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param string $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return string
     */
    public function getPwd()
    {
        return $this->pwd;
    }

    /**
     * @param string $pwd
     */
    public function setPwd($pwd)
    {
        $this->pwd = $pwd;
    }

    /**
     * @return string
     */
    public function getDb()
    {
        return $this->db;
    }

    /**
     * @param string $db
     */
    public function setDb($db)
    {
        $this->db = $db;
    }




}