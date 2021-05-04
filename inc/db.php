<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "ip";

$conn = new mysqli($servername, $username, $password, $db);


if ($conn->connect_error) {
  die("Bağlantı başarısız. " . $conn->connect_error);
}


?>