<?php
/**
 * Class [Qiniu]
 * 七牛云存储接口
 * author minyifei
 * date 2019/2/15
 */

namespace Demo\StructuralPatterns\Adapter\QiniuOss;


interface Qiniu
{

    /**
     * Function:put
     * 上传文件
     *
     * @param string $key 文件名
     * @param string $file 文件路径
     *
     * @return mixed
     */
    public function put($key,$file);

    /**
     * Function:delete
     * 删除文件
     *
     * @param string $key
     *
     * @return mixed
     */
    public function delete($key);

    /**
     * Function:get
     * 获取文件
     *
     * @param string $key
     *
     * @return mixed
     */
    public function get($key);

}