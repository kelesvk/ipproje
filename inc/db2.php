<?php

$servername = "localhost";
$username = "kritikk2_proje";
$password = "swdaa123qwe";
$db = "kritikk2_ip";

$conn = new mysqli($servername, $username, $password, $db);
$conn->set_charset("utf8");

if ($conn->connect_error) {
  die("Bağlantı başarısız. " . $conn->connect_error);
}


?>