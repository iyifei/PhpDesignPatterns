<?php
/**
 * Class [BookList]
 * 书架-实现迭代器
 * author minyifei
 * date 2019/2/18
 */

namespace Demo\BehavioralPatterns\Iterator;


class BookList implements \Countable, \Iterator
{

    /**
     * @var Book[]
     */
    private $books;

    /**
     * @var int 当前索引
     */
    private $currentIndex = 0;


    /**
     * Function:addBook
     * 添加书籍
     *
     * @param Book $book
     *
     * @return void
     */
    public function addBook($book)
    {
        $this->books[] = $book;
    }

    /**
     * Function:removeBook
     * 删除书籍
     *
     * @param Book $book
     *
     * @return void
     */
    public function removeBook($book)
    {
        foreach ($this->books as $k=>$b){
            if($book->getId()==$b->getId()){
                unset($this->books[$k]);
                $this->books = array_values($this->books);
                break;
            }
        }
    }

    /**
     * Return the current element
     *
     * @link  http://php.net/manual/en/iterator.current.php
     * @return mixed Can return any type.
     * @since 5.0.0
     */
    public function current()
    {
        return $this->books[$this->currentIndex];
    }

    /**
     * Move forward to next element
     *
     * @link  http://php.net/manual/en/iterator.next.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function next()
    {
        $this->currentIndex++;
    }

    /**
     * Return the key of the current element
     *
     * @link  http://php.net/manual/en/iterator.key.php
     * @return mixed scalar on success, or null on failure.
     * @since 5.0.0
     */
    public function key()
    {
        return $this->currentIndex;
    }

    /**
     * Checks if current position is valid
     *
     * @link  http://php.net/manual/en/iterator.valid.php
     * @return boolean The return value will be casted to boolean and then evaluated.
     * Returns true on success or false on failure.
     * @since 5.0.0
     */
    public function valid()
    {
        return isset($this->books[$this->currentIndex]);
    }

    /**
     * Rewind the Iterator to the first element
     *
     * @link  http://php.net/manual/en/iterator.rewind.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function rewind()
    {
        $this->currentIndex = 0;
    }

    /**
     * Count elements of an object
     *
     * @link  http://php.net/manual/en/countable.count.php
     * @return int The custom count as an integer.
     * </p>
     * <p>
     * The return value is cast to an integer.
     * @since 5.1.0
     */
    public function count()
    {
        return count($this->books);
    }
}