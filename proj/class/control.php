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

    $this->setUser($this->username, $this->password);
        header("location: ../index.php?error=none");
    }


    // gal dar rasyti tikrinimus??
}