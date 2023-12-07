<?php

class Author
{
    private $name;

    public function __construct($name = null)
    {
        if (!empty($name)) {
            $this->setName($name);
        }
    }

    public function setName($name)
    {
        if (strlen($name) < 2) {
            throw new Exception("Nom trop court.");
        }
        $this->name = $name;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

}