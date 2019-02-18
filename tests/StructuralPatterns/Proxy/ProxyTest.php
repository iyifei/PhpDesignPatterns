<?php
/**
 * Class [ProxyTest]
 * 代理模式单元测试
 * author minyifei
 * date 2019/2/15
 */

namespace Test\StructuralPatterns\Proxy;


use Demo\StructuralPatterns\Proxy\FileProxy;
use PHPUnit\Framework\TestCase;

class ProxyTest extends TestCase
{

    public function testStorage(){
        $proxy = new FileProxy();
        //格式校验了，无法存储,返回false
        $this->assertEquals(false,$proxy->save(123));

        $data = 'abc';
        $id = $proxy->save($data);
        $this->assertEquals($proxy->get($id),$data);
    }

}