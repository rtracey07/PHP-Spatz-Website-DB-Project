<?php

$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'root';
$db_name = 'cs2141';

$link = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die ("Failed");
session_start();
?>