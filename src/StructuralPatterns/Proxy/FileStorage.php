<?php
/**
 * Class [FileStorage]
 * 文件存储
 * author minyifei
 * date 2019/2/15
 */

namespace Demo\StructuralPatterns\Proxy;


class FileStorage implements Storage
{

    /**
     * @var array
     */
    private $files;

    public function __construct()
    {
        $this->files=[];
    }

    /**
     * Function:save
     * 模拟存储动作
     *
     * @param string $data
     *
     * @return string  返回主键
     */
    public function save($data)
    {
        $id = md5(uniqid(rand(),true));
        $this->files[$id]=$data;
        return $id;
    }

    /**
     * Function:get
     * 获取存储内容
     *
     * @param string $id 主键
     *
     * @return mixed
     */
    public function get($id)
    {
        if(isset($this->files[$id])){
            return $this->files[$id];
        }else{
            return false;
        }
    }
}