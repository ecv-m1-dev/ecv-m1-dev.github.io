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

    public function setDate($date = 'now')
    {
        $testDate = new DateTime($date);
        if ($testDate->getTimestamp() > time()) {
            throw new Exception('Vous êtes dans le futur.');
        }
        $this->date = $testDate;
        return $this;
    }

    public function getDate($format = 'd/m/Y à H:i')
    {
        return $this->date->format($format);
    }

    public function setContent($content)
    {
        if (strlen($content) < 4) {
            $this->content = $content;
        }
    }
}
