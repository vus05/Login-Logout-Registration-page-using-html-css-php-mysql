<?php
session_start();
unset($_SESSION["Username"]);
unset($_SESSION["password"]);
header("Location:login.php");
?>