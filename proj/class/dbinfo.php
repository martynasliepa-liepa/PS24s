<?php

class dbinfo extends db {

    protected function setUser ($username, $password) {
        $db = $this->connect();
        $stmt = $db->prepare("INSERT INTO vartotojas (user, pasw) VALUES (?, ?)");
        
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        if(!$stmt->execute(array($username, $hashedPassword))) {
            $stmt = null;
            echo "staitment failed";
            header("location: ../index.php?error=stmtfailed");
            exit(); 
        }

        $stmt = null;
        
    }

    protected function check ($username, $password) {
        $db = $this->connect();
        $stmt = $db->prepare("SELECT user FROM vartotojas WHERE user = $username");
        
        if(!$stmt->execute()) {
            $stmt = null;
            echo "staitment failed";
            header("location: ../index.php?error=stmtfailed");
            exit(); 
        } 

        $resultCheck = null;
        if($stmt->rowCount() == 0) {
            $resultCheck = false;
        }
        else {
            $resultCheck = true;
        }
        return $resultCheck;
    }
    // dar galim darasyt error handleri
    }
	
?>