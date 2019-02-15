<?php
/**
 * Class [FileProxy]
 * 文件存储代理器
 * author minyifei
 * date 2019/2/15
 */

namespace Demo\CreationalPatterns\Proxy;



class FileProxy implements Storage
{

    /**
     * @var Storage
     */
    private $storage;

    public function __construct()
    {
        $this->storage = new FileStorage();
    }

    /**
     * Function:save
     * 存储
     *
     * @param string $data
     *
     * @return string  返回主键
     */
    public function save($data)
    {
        //存储前对参数进行格式校验
        if(is_string($data)){
            return $this->storage->save($data);
        }else{
            return false;
        }
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
        //读取前对参数进行格式校验
        if(is_string($id) && strlen($id)==32){
            return $this->storage->get($id);
        }else{
            return false;
        }
    }
}