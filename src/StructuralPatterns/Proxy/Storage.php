<?php
/**
 * Class [Storage]
 * 存储接口
 * author minyifei
 * date 2019/2/15
 */

namespace Demo\StructuralPatterns\Proxy;


interface Storage
{

    /**
     * Function:save
     * 存储
     *
     * @param string $data
     *
     * @return string  返回主键
     */
    public function save($data);

    /**
     * Function:get
     * 获取存储内容
     *
     * @param string $id 主键
     *
     * @return mixed
     */
    public function get($id);


}