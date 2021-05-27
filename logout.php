<?php
session_start();
unset($_SESSION["phone"]);
unset($_SESSION["email"]);
unset($_SESSION["name"]);
unset($_SESSION["type"]);
header("Location:login.php");
?>