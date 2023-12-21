<?php
require_once 'Author.php';

class Answer
{
    private $author;
    private $content;
    private $date;


    public function __construct()
    {
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
            $this->author = $author;
        } elseif (gettype($author) === "string") {
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
}
