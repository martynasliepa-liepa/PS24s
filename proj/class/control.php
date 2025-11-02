<?php
//ivesties paimimas ir tikrinimas
class control extends dbinfo {
    private $username;
    private $password;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

    public function valeror() {
        if ($this->username == false) {
            header("location: ../index.php?error=emptyusername");
            exit();
    }
        if ($this->password == false) {
            header("location: ../index.php?error=emptypassword");
            exit();
    }
    $keygen = new keygen();
    $randomKey = $keygen->generateRandomKey(16);
    $raktas = new raktas();
    $plaintext = $this->password;  
    $key = $randomKey;
    $encryptedPassword = $raktas->aes128_encrypt($plaintext, $key);


    $this->setUser($this->username, $this->password, $encryptedPassword);
        header("location: ../index.php?error=none");
        exit();
    }
}