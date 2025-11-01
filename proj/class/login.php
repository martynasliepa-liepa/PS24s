<?php

class login extends dbinfo {

    public function getUser ($username, $password) {
        $db = $this->connect();
        $stmt = $db->prepare("SELECT user, pasw FROM vartotojas WHERE user = ?");
        
        if(!$stmt->execute(array($username))) {
            $stmt = null;
            echo "staitment failed";
            header("location: ../index.php?error=stmtfailed");
            exit(); 
        }

        if($stmt->rowCount() == 0) {
            $stmt = null;
            echo "no user found";
            header("location: ../index.php?error=nouser");
            exit(); 
        }

        $userData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $hashedPassword = $userData[0]['pasw'];

        $checkPassword = password_verify($password, $hashedPassword);

        if($checkPassword === false) {
            $stmt = null;
            echo "wrong password";
            header("location: ../index.php?error=wrongpassword");
            exit(); 
        } else if ($checkPassword === true) {
            session_start();
            $_SESSION['user'] = $userData[0]['user'];
            $stmt = null;
            header("location: ../index.php?error=Prisjunges");
            exit();
        }

    }
}
