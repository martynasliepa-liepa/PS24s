<?php
class webregister extends dbinfo {
    public function registerWeb ($webname, $password) {
        $db = $this->connect();
        $stmt = $db->prepare("INSERT INTO webpsw (psl_vardas, pswrd, vartotojo_id) VALUES (?, ?, ?)");

        session_start();
        $stmt3 = $db->prepare("SELECT raktas FROM vartotojas WHERE user = ?");
        $stmt3->execute(array($_SESSION['user']));
        $keyData = $stmt3->fetchAll(PDO::FETCH_ASSOC);
        $randomKey = $keyData[0]['raktas'];

        $raktas = new raktas();
        $decryptedPassword = $raktas->aes128_decrypt($randomKey, $userData[0]['pasw']);
        $encryptedPassword = $raktas->aes128_encrypt($password , $randomKey);
        $password = $encryptedPassword;
        
        $stmt2 = $db->prepare("SELECT id FROM vartotojas WHERE user = ?");
        $stmt2->execute(array($_SESSION['user']));
        $user = $stmt2->fetchAll(PDO::FETCH_ASSOC);
        $userId = $user[0]['id'];

        if(!$stmt->execute(array($webname, $password, $userId))) {
            $stmt = null;
            echo "staitment failed";
            header("location: ../index.php?error=stmtfailed");
            exit(); 
        }
            
        $stmt = null; 
        header("location: ../index.php?error=webregsuccess");
        exit();
        
    }
}