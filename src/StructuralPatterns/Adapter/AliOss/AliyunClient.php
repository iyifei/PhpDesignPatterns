<?php
/**
 * Class [AliyunClient]
 * 阿里云云存储客户端实现类
 * author minyifei
 * date 2019/2/15
 */

namespace Demo\StructuralPatterns\Adapter\AliOss;


class AliyunClient implements Aliyun
{

    private $data = [];

    /**
     * Function:upload
     * 上传文件
     *
     * @param string $key  文件名
     * @param string $file 文件路径
     *
     * @return bool
     */
    public function uploadFile($key, $file)
    {
        $this->data[$key]=$file;
        return true;
    }

    /**
     * Function:delete
     * 删除文件
     *
     * @param string $key
     *
     * @return mixed
     */
    public function deleteFile($key)
    {
        if(isset($this->data[$key])){
            unset($this->data[$key]);
            return true;
        }else{
            return false;
        }
    }

    /**
     * Function:getFile
     * 获取文件
     *
     * @param string $key 文件名
     *
     * @return mixed
     */
    public function getFile($key)
    {
        if(isset($this->data[$key])){
            return 'Aliyun:'.$this->data[$key];
        }else{
            return false;
        }
    }
}