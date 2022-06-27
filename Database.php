<?php


/**
 * Dit is de database class
 */

 require '/Database.php';

 class database
 {
     // Properties
     private $dbHost = "localhost";
     private $dbUser = "akkie2";
     private $dbPass = "hoi";
     private $dbName = "oop-pdo-toets-herkansing";
     private $pdo;
     private $statement;

     public function __construct()
     {
        $dsn = "mysql:host=$this->dbHost;dbname=$this->dbName;charset=UTF8";
        // echo $dsn;exit();
        try {
          $this->pdo = new PDO($dsn, $this->dbUser, $this->dbPass);
        
          $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          if ($this->pdo) {
            // echo "Connected to the $this->dbName database successfully!";
          }
        } catch (PDOException $e) {
          echo $e->getMessage();
        }
     }

     public function query($sql)
     {
          $this->statement = $this->pdo->prepare($sql);
     }

     public function execute()
     {
       return $this->statement->execute();
     }

     public function resultSet()
     {
       $this->execute();
       return $this->statement->fetchAll(PDO::FETCH_OBJ);
     }
 }
