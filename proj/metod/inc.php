<?php

    //pasimti vertes
    $username = $_POST["username"];
    $password = $_POST["password"];


include '../class/db.php';
include '../class/dbinfo.php';
include '../class/control.php';


$control = new control($username, $password);
$control->valeror();

?>