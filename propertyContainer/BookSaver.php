<?php

namespace app\propertyContainer;

class BookSaver
{
    public function bookPreparing()
    {
        //Какие-то действия
        $book = new Book();
        $book->setTitle('The Expanse');
        $book->setAuthor('James Corey');
        //Нам понадобилось использовать контейнер
        $book->propertyContainer->addProperty('ISBN', '978-1-10-769989-2');

        $isbn = $book->propertyContainer->getProperty('ISBN');
    }
}