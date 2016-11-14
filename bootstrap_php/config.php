<?php
$host = "localhost";
$user = "root";
$pass = "1234";
$db = "tpshop";

$link = mysqli_connect($host,$user,$pass,$db)or die(mysqli_connect_errorno());
mysqli_query($link,"set names utf8");

?>
