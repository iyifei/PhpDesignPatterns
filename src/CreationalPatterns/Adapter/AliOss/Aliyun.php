<?php
/**
 * Class [Aliyun]
 * 阿里云存储接口
 * author minyifei
 * date 2019/2/15
 */

namespace Demo\CreationalPatterns\Adapter\AliOss;


interface Aliyun
{

    /**
     * Function:upload
     * 上传文件
     *
     * @param string $key 文件名
     * @param string $file 文件路径
     *
     * @return mixed
     */
    public function uploadFile($key,$file);

    /**
     * Function:delete
     * 删除文件
     *
     * @param string $key
     *
     * @return mixed
     */
    public function deleteFile($key);

    /**
     * Function:getFile
     * 获取文件
     *
     * @param string $key 文件名
     *
     * @return mixed
     */
    public function getFile($key);

}