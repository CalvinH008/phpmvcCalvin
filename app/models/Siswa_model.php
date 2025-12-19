<?php

class Siswa_model{
    private $dbh; //database handler
    private $stmt;

    public function __construct()
    {
        // data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';
        try{
            $this->dbh = new PDO($dsn, 'root','');
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function getAllSiswa(){
        $this->stmt = $this->dbh->prepare('SELECT * FROM siswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}