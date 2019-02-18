<?php
/**
 * Class [IteratorTest]
 * 迭代器测试类
 * author minyifei
 * date 2019/2/18
 */

namespace Test\BehavioralPatterns\Iterator;


use Demo\BehavioralPatterns\Iterator\Book;
use Demo\BehavioralPatterns\Iterator\BookList;
use PHPUnit\Framework\TestCase;

class IteratorTest extends TestCase
{

    public function testCanIterateOverBookList()
    {
        $bookList = new BookList();
        $bookList->addBook(
            new Book('001', 'Learning PHP Design Patterns', 'William Sanders')
        );
        $bookList->addBook(
            new Book('002', 'Professional Php Design Patterns', 'Aaron Saray')
        );
        $bookList->addBook(new Book('003', 'Clean Code', 'Robert C. Martin'));

        $books = [];

        //迭代器应用
        /**
         * @var Book $book
         */
        foreach ($bookList as $book) {
            $books[] = $book->getBookInfo();
        }
        $this->assertEquals(
            [
                'id=001,name=Learning PHP Design Patterns,author=William Sanders',
                'id=002,name=Professional Php Design Patterns,author=Aaron Saray',
                'id=003,name=Clean Code,author=Robert C. Martin'
            ], $books
        );
    }

    public function testCanAddBookToList()
    {
        $book = new Book('003', 'Clean Code', 'Robert C. Martin');
        $bookList = new BookList();
        $bookList->addBook($book);
        $this->assertCount(1, $bookList);
    }

    public function testCanRemoveBookFromList()
    {
        $book = new Book('003', 'Clean Code', 'Robert C. Martin');

        $bookList = new BookList();
        $bookList->addBook($book);
        $bookList->removeBook($book);

        $this->assertCount(0, $bookList);
    }

}