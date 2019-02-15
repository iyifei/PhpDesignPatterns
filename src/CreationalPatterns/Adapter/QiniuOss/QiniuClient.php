<?php
/**
 * Class [QiniuClient]
 * 七牛云云存储实现类
 * author minyifei
 * date 2019/2/15
 */

namespace Demo\CreationalPatterns\Adapter\QiniuOss;


class QiniuClient implements Qiniu
{

    /**
     * @var array 存储器
     */
    private $data = [];

    /**
     * Function:put
     * 上传文件
     *
     * @param string $key  文件名
     * @param string $file 文件路径
     *
     * @return bool
     */
    public function put($key, $file)
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
     * @return bool
     */
    public function delete($key)
    {
        if(isset($this->data[$key])){
            unset($this->data[$key]);
            return true;
        }else{
            return false;
        }
    }

    /**
     * Function:get
     * 获取文件
     *
     * @param string $key
     *
     * @return bool
     */
    public function get($key)
    {
        if(isset($this->data[$key])){
            return 'Qiniu:'.$this->data[$key];
        }else{
            return false;
        }
    }
}