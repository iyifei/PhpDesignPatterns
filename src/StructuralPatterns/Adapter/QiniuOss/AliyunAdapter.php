<?php
/**
 * Class [AliyunAdapter]
 * 适配器
 * 阿里云适配七牛云接口
 * author minyifei
 * date 2019/2/15
 */

namespace Demo\StructuralPatterns\Adapter\QiniuOss;


use Demo\StructuralPatterns\Adapter\AliOss\AliyunClient;

class AliyunAdapter extends AliyunClient implements Qiniu
{

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
        return $this->uploadFile($key,$file);
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
        return $this->deleteFile($key);
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
         return $this->getFile($key);
    }
}