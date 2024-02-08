<?php

require_once 'Author.php';

class HasAuthor
{
    protected $author;
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
}
