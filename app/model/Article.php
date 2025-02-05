<?php
namespace App\model;

use App\config\Database;
use PDO;

class Article{

    protected $connection;

    public function __construct(){
        $this->connection= Database::connect();
    }
    
    public function getArticles(){
        $query= "SELECT * from article";
        $result= $this->connection->prepare($query);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getArticleById($id){
        $query="SELECT * from article where id=$id";
        $result= $this->connection->prepare($query);
        $result->execute();
        return $result->fetch(PDO::FETCH_ASSOC);
    }
    
}

?>