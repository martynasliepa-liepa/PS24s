<?php
// connect dar reikia configo db tobulint
class db {
    protected function connect() {
        try {
            $username = "root";
            $password = "";
            $db= NEW PDO('mysql:host=localhost;dbname=regdb;charset=utf8mb4', $username, $password);
            return $db;
        }
        catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            die();
        }
}
}
?>