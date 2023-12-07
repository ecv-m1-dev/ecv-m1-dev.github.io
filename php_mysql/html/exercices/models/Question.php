<?php

class Question
{
    private $title;
    private $author;
    private $content;
    private $date;


    public function __construct($title = '')
    {
        $this->title = $title;
    }

    public function setTitle($newTitle)
    {
        if (strlen($newTitle) < 4) {
            throw new Exception("ça marche pô");
        }
        $this->title = $newTitle;
        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }
}