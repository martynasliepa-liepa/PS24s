<?php
class db extends config {

    protected function connect() {
        
            $this->adress = self::DB_HOST;
            $this->database = self::DB_NAME;
            $this->user = self::DB_USER;    
            $this->pass = self::DB_PASS;

        try {
            $db= NEW PDO("mysql:host=$this->adress;dbname=$this->database;charset=utf8", $this->user, $this->pass);
            return $db;
        }
        catch (PDOException $e) {
            echo "nepavyko prisijungti : " . $e->getMessage();
            exit();
        }
}
}
?>