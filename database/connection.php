<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "test";

$connection = mysql_connect($host, $user ,$pass) or die ("Tidak dapat tersambung ke server");

mysql_select_db($db, $connection) or die ("Database tidak ditemukan");

?>