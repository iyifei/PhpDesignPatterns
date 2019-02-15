<?php
/**
 * Class [AdapterTest]
 * 请描述类的功能
 * author minyifei
 * date 2019/2/15
 */

namespace Test\CreationalPatterns\Adapter;


use Demo\CreationalPatterns\Adapter\AliOss\AliyunClient;
use Demo\CreationalPatterns\Adapter\QiniuOss\AliyunAdapter;
use Demo\CreationalPatterns\Adapter\QiniuOss\AliyunObjectAdapter;
use Demo\CreationalPatterns\Adapter\QiniuOss\QiniuClient;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{

    public function testAdapter(){
        $key = 'key';
        $file =  'file.txt';

        $qiniu = new QiniuClient();
        $qiniu->put($key,$file);
        $res = $qiniu->get($key);
        $this->assertEquals('Qiniu:'.$file,$res);

        //适配器,存储到阿里云上，接口使用七牛的接口
        $aliyunAdapter = new AliyunAdapter();
        $aliyunAdapter->put($key,$file);
        $aliRes = $aliyunAdapter->get($key);
        $this->assertEquals('Aliyun:'.$file,$aliRes);

        //对象适配器,存储到阿里云上，接口使用七牛的接口
        $aliyun = new AliyunClient();
        $aliyunObjectAdapter = new AliyunObjectAdapter($aliyun);
        $aliyunObjectAdapter->put($key,$file);
        $r = $aliyunObjectAdapter->get($key);
        $this->assertEquals('Aliyun:'.$file,$r);
    }

}