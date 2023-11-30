<?php

namespace models;

class Question
{

  private string $title;
  private string $content;

  private \DateTime $date;

  public function __construct(string $title, string $content, \DateTime $date)
  {
    $this->setTitle($title);

    $this->setContent($content);

    $this->setDate($date);
  }

  public function setTitle(string $title): Question
  {
    if (strlen($title) < 4) {
      throw new \Exception('Titre trop court (>= 4 caractères)');
    }
    $this->title = $title;
    return $this;
  }

  public function getTitle(): string
  {
    return $this->title;
  }

  public function setContent(string $content): Question
  {
    if (strlen($content) < 10) {
      throw new \Exception('Contenu trop court (>= 10 caractères)');
    }
    $this->content = $content;
    return $this;
  }

  public function getContent(): string
  {
    return $this->content;
  }

  public function setDate(\DateTime $date): Question
  {
    $this->date = $date;
    return $this;
  }

  public function getDate(): \DateTime
  {
    return $this->date;
  }
}
