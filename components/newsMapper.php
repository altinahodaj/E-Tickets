<?php
require_once 'databaseConfiguration.php';

class NewsMapper extends DatabasePDOConfiguration{

    private $conn;
    private $query;

    public function __construct()
    {
        $this->conn = $this->getConnection();
    }

    public function getAllNews(){
        $this->query = "select * from news";
        $statement = $this->conn->prepare($this->query);
        $statement->execute();
        return $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getNewsByName($name){
        $this->query = "select * from news where name=:name";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":name", $name);
        $statement->execute();
        return $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteNews($newsId){
        $this->query = "delete from news where id=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $newsId);
        $statement->execute();
    }

    public function insertNews($news){
        $query = "insert into news (name, img_path, pfd_path) values (:name, :img_path, :pfd_path)";
        $statement = $this->conn->prepare($query);
        
        $name = $news->getName();
        $image = $news->getImage();
        $pfd = $news->getPFD();

        $statement->bindParam(":name", $name);
        $statement->bindParam(":img_path", $image);
        $statement->bindParam(":pfd_path", $pfd);
        $statement->execute();
    }

}