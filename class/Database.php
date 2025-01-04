<?php
class Database {
    private $host = "localhost";
    private $db_name = "for_oop";
    private $username = "root";
    private $password = "";

    protected function connect() {
        try{
            $pdo = new PDO("mysql:host=$this->host;dbname=$this->db_name", $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }catch(PDOException $e){
            die("ERROR: Could not connect. " . $e->getMessage());
        }
    }
}
?>