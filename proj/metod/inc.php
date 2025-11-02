<?php

if (isset($_POST['submit'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
} else {
    header("location: ../index.php");
    exit();
}

include '../class/config.php';
include '../class/db.php';
include '../class/dbinfo.php';
include '../class/control.php';
include '../class/keygen.php';
include '../class/raktas.php';

$control = new control($username, $password);
$control->valeror();

?>