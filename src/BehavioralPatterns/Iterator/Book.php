<?php
/**
 * Class [Book]
 * 书本
 * author minyifei
 * date 2019/2/18
 */

namespace Demo\BehavioralPatterns\Iterator;


class Book
{

    /**
     * @var string 书籍编号
     */
    private $id;

    /**
     * @var string 名称
     */
    private $name;

    /**
     * @var string 作者
     */
    private $author;

    /**
     * Book constructor.
     *
     * @param string $id
     * @param string $name
     * @param string $author
     */
    public function __construct($id,$name, $author)
    {
        $this->id = $id;
        $this->name = $name;
        $this->author = $author;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Function:getBookInfo
     * 获取书籍基本信息
     *
     * @return string
     */
    public function getBookInfo(){
        return sprintf("id=%s,name=%s,author=%s",$this->id,$this->name,$this->author);
    }

}
