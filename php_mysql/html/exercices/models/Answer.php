<?php
require_once dirname(__FILE__) . '/../config/db.php';
require_once 'HasAuthor.php';
require_once 'Question.php';
class Answer extends HasAuthor
{
    static private $TABLE_NAME = 'answer';
    private $content;
    private $question;
    private $date;
    private $id;


    public function __construct()
    {
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
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

    public function setQuestion($question)
    {
        if ($question instanceof question) {
            //            question is already an object
            $this->question = $question;
        } elseif (!is_nan(intval($question))) {
            //            an question_id is provided
            $this->question = Question::get($question);
        } elseif (gettype($question) === "string") {
            //            we create an question from string
            $this->question = new Question($question);
        } else {
            throw new Exception("Format de question incorrect : " . gettype($question));
        }
        return $this;
    }

    public function save()
    {
        global $dsn, $db_user, $db_pass;
        $dbh = new PDO($dsn, $db_user, $db_pass);
        $timestamp = $this->date->format('Y-m-d H:i:s');
        $authorId = $this->author->getId();
        $questionId = $this->question->getId();

        $stmt = $dbh->prepare("INSERT INTO " . self::$TABLE_NAME . " (content, date, author_id, question_id) VALUES (:content, :date, :author_id, :question_id)");
        $stmt->bindParam(':content', $this->content);
        $stmt->bindParam(':date', $timestamp);
        $stmt->bindParam(':author_id', $authorId);
        $stmt->bindParam(':question_id', $questionId);

        return $stmt->execute();
    }

    public static function getList(int $question_id)
    {
        global $dsn, $db_user, $db_pass;
        $dbh = new PDO($dsn, $db_user, $db_pass);

        $stmt = $dbh->prepare("SELECT answer.id, content, author_id, name, email, date FROM answer INNER JOIN author ON answer.author_id = author.id WHERE question_id = :question_id");
        $stmt->bindParam(":question_id", $question_id, PDO::PARAM_INT);
        $stmt->execute();
        $resultArray = $stmt->fetchAll();
        return array_map(function ($item) {
            return self::formatAnswer($item);
        }, $resultArray);
    }

    public static function formatAnswer($item)
    {
        $author = new Author();
        $author->setName($item['name']);
        $author->setId($item['author_id']);
        $author->setEmail($item['email']);

        $answer = new Answer();
        $answer->setId($item['id']);
        $answer->setAuthor($author);
        $answer->setDate($item['date']);
        $answer->setContent($item['content']);

        return $answer;
    }
}
