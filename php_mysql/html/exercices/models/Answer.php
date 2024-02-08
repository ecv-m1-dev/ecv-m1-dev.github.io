<?php
require_once dirname(__FILE__) . '/../config/db.php';
require_once 'HasAuthor.php';
class Answer extends HasAuthor
{
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

    public static function getList(int $question_id)
    {
        global $dsn, $db_user, $db_pass;
        $dbh = new PDO($dsn, $db_user, $db_pass);

        $stmt = $dbh->prepare("SELECT id, content, date FROM answer WHERE question_id = :question_id");
        $stmt->bindParam(":question_id", $question_id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
