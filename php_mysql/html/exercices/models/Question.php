<?php
require_once dirname(__FILE__) . '/../config/db.php';
require_once 'HasAuthor.php';
class Question extends HasAuthor
{
    static private $TABLE_NAME = 'question';
    private $id;
    private $title;
    private $content;
    private DateTime $date;


    public function __construct($title = null)
    {
        if (!empty($title)) {
            $this->setTitle($title);
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
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

    public function save()
    {
        global $dsn, $db_user, $db_pass;
        $dbh = new PDO($dsn, $db_user, $db_pass);
        $timestamp = $this->date->format('Y-m-d H:i:s');
        $authorId = $this->author->getId();

        $stmt = $dbh->prepare("INSERT INTO " . self::$TABLE_NAME . " (title, content, date, author_id) VALUES (:title, :content, :date, :author_id)");
        $stmt->bindParam(':title', $this->title);
        $stmt->bindParam(':content', $this->content);
        $stmt->bindParam(':date', $timestamp);
        $stmt->bindParam(':author_id', $authorId);

        return $stmt->execute();
    }

    public function toString()
    {
        return "(Question) id: '$this->id', 
        title: '$this->title', 
        content: '$this->content', 
        author: '" . $this->author->toString() . "', 
        date: '" . $this->date->format('Y-m-d H:i:s') . "'";
    }

    public static function getList()
    {
        global $dsn, $db_user, $db_pass;
        $dbh = new PDO($dsn, $db_user, $db_pass);

        $stmt = $dbh->prepare("SELECT q.*, a.name, a.email FROM " . self::$TABLE_NAME . " q LEFT JOIN author a ON q.author_id = a.id");

        $stmt->execute();
        $resultArray = $stmt->fetchAll();

        return array_map(function ($item) {
            return self::formatQuestion($item);
        }, $resultArray);
    }

    public static function get($question_id)
    {
        global $dsn, $db_user, $db_pass;
        $dbh = new PDO($dsn, $db_user, $db_pass);

        try {
            $stmt = $dbh->prepare("SELECT q.*, a.name, a.email FROM " . self::$TABLE_NAME . " q LEFT JOIN author a ON q.author_id = a.id WHERE q.id = :question_id");
            $stmt->bindParam(':question_id', $question_id);

            $stmt->execute();
            $item = $stmt->fetch();

            return self::formatQuestion($item);
        } catch (PDOException $e) {
            throw new Error($e);
        }
    }

    public static function formatQuestion($item)
    {
        $author = new Author();
        $author->setName($item['name']);
        $author->setId($item['author_id']);
        $author->setEmail($item['email']);

        $question = new Question();
        $question->setId($item['id']);
        $question->setTitle($item['title']);
        $question->setAuthor($author);
        $question->setDate($item['date']);
        $question->setContent($item['content']);

        return $question;
    }
}
