<?php
require_once 'databaseConfiguration.php';

class MessageMapper extends DatabasePDOConfiguration{

    private $conn;
    private $query;

    public function __construct()
    {
        $this->conn = $this->getConnection();
    }


    public function getAllMessages(){
        $this->query = "select * from messages";
        $statement = $this->conn->prepare($this->query);
        $statement->execute();
        return $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    }


    public function deleteMessage($id){
        $this->query = "delete from messages where id=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $id);
        $statement->execute();
    }

    public function insertMessage($message){
        $query = "insert into messages (email, name, lastname, message) values (:email, :name, :lastname, :message)";
        $statement = $this->conn->prepare($query);
        
        $email = $message->getEmail();
        $name = $message->getName();
        $lastname = $message->getLastname();
        $message = $message->getMessage();

        $statement->bindParam(":email", $email);
        $statement->bindParam(":name", $name);
        $statement->bindParam(":lastname", $lastname);
        $statement->bindParam(":message", $message);
        $statement->execute();
    }

}