<?php ob_start();
session_start();
unset($_SESSION["username"]);
unset($_SESSION["id"]);
unset($_SESSION["name"]);
unset($_SESSION["username"]);
unset($_SESSION["password"]);
unset($_SESSION["email"]);
unset($_SESSION["perm"]);
header("Location: ../index.php");
ob_flush();
?>