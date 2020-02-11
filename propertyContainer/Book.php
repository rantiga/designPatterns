<?php

namespace app\propertyContainer;

class Book
{
    protected $title;
    protected $author;

    public $propertyContainer; //Модифицируем класс, добавляя свойство для контейнреа

    public function __construct()
    {
        $this->propertyContainer = new PropertyContainer(); //Модифиуируем класс, добавляя объект контейнера (можно вызывать из DI контейнера)
    }

    public function setTitle(string $title): Book
    {
        $this->title = $title;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setAuthor(string $author): Book
    {
        $this->author = $author;

        return $this;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }
}