<?php

include '../class/config.php';
include '../class/db.php';
include '../class/dbinfo.php';
include '../class/raktas.php';
include '../class/webregister.php';


if (isset($_POST['webreg'])) {
    $webname = filter_input(INPUT_POST, 'webname', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
} else {
    header("location: ../index.php");
    exit();
}
$webregister = new webregister();
$webregister->registerWeb($webname, $password);
?>