<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbName = "dbpenyakit";

// Create connection
$koneksi = mysqli_connect($host, $user, $pass);
$db = mysqli_select_db($koneksi, $dbName) or die(mysqli_error($koneksi));

// Disable ONLY_FULL_GROUP_BY mode for this connection
mysqli_query($koneksi, "SET SESSION sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''))");
?>