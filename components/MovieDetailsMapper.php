<?php
require_once 'database2Configuration.php';

class MovieDetailsMapper extends Database2PDOConfiguration{
    
    private $conn;
    private $query;

    public function __construct(){
        $this->conn = $this->getConnection();
    }

    public function getMovieById($id){
        $this->query = "select * from movieinfo where id=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $id);
        $statement->execute();
        return $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    }

}