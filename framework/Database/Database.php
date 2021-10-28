<?php

namespace framework\Database;

use PDO;

class Database
{
    protected $pdo;

    public function __construct($dbh){
        $this->pdo=$dbh;
    }


    public function selectAll($table){

        $statement = $this->pdo->prepare("SELECT * FROM $table;");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

}