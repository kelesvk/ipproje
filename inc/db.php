<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "ip";

$conn = new mysqli($servername, $username, $password, $db);
$conn->set_charset("utf8");

if ($conn->connect_error) {
  die("Bağlantı başarısız. " . $conn->connect_error);
}


?>