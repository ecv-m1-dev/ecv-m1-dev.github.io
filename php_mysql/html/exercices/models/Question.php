<?php
require_once 'Author.php';
require_once dirname(__FILE__) . '/../config/db.php';

class Question
{
    private $title;
    private $author;
    private $content;
    private $date;


    public function __construct($title = null)
    {
        if (!empty($title)) {
            $this->setTitle($title);
        }
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
        if (strlen($content) < 10) {
            throw new Exception('Contenu trop court. Min 10 cars.');
        }
        $this->content = $content;
        return $this;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setAuthor($author)
    {
        if ($author instanceof Author) {
//            author is already an object
            $this->author = $author;
        } elseif (!is_nan(intval($author))) {
//            an author_id is provided
            $this->author = Author::get($author);
        } elseif (gettype($author) === "string") {
//            we create an author from string
            $this->author = new Author($author);
        } else {
            throw new Exception("Format d'auteur incorrect : " . gettype($author));
        }
        return $this;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function save()
    {
    }
}
