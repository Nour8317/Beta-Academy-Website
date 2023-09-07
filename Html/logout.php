<?php
session_start();
$_SESSION["logedin"] = false;
header("Location: Home.php");
?>