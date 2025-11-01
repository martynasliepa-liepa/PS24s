<?php

class dbinfo extends db {

    protected function setUser ($username, $password) {
        $db = $this->connect();
        $stmt = $db->prepare("INSERT INTO vartotojas (user, pasw) VALUES (?, ?)");
        
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        $sql = "select * from vartotojas where user = ?";
        $checkStmt = $db->prepare($sql);
        $checkStmt->execute(array($username));
        if($checkStmt->rowCount() > 0) {
            $checkStmt = null;
            echo "username taken";
            header("location: ../index.php?error=usernametaken");
            exit(); 
        }

        
        if(!$stmt->execute(array($username, $hashedPassword))) {
            $stmt = null;
            echo "staitment failed";
            header("location: ../index.php?error=stmtfailed");
            exit(); 
        }
            
        $stmt = null; 
    }
    }
	
?>