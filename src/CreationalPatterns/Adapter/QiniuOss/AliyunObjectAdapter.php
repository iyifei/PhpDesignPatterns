<?php
/**
 * Class [AliyunObjAdapter]
 * 持有对象适配器
 * 阿里云oss视频七牛接口
 * author minyifei
 * date 2019/2/15
 */

namespace Demo\CreationalPatterns\Adapter\QiniuOss;


use Demo\CreationalPatterns\Adapter\AliOss\Aliyun;

class AliyunObjectAdapter implements Qiniu
{

    /**
     * @var Aliyun
     */
    private $aliyun;

    /**
     * AliyunObjAdapter constructor.
     *
     * @param Aliyun $aliyun
     */
    public function __construct($aliyun)
    {
        $this->aliyun = $aliyun;
    }

    /**
     * Function:put
     * 上传文件
     *
     * @param string $key  文件名
     * @param string $file 文件路径
     *
     * @return mixed
     */
    public function put($key, $file)
    {
        return $this->aliyun->uploadFile($key,$file);
    }

    /**
     * Function:delete
     * 删除文件
     *
     * @param string $key
     *
     * @return mixed
     */
    public function delete($key)
    {
        return $this->aliyun->deleteFile($key);
    }

    /**
     * Function:get
     * 获取文件
     *
     * @param string $key
     *
     * @return mixed
     */
    public function get($key)
    {
        return $this->aliyun->getFile($key);
    }
}