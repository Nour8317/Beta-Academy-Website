<?php
session_start();
$uid = $_SESSION['id'];
$cid = $_GET['id'];
$conn= new mysqli("localhost","root","","beta");
    if($conn->connect_error){
    die("connection failed!" . $conn->connect_error);   
}
    $sql = "delete from enroll where cid ='$cid'";
    $enrollcourse = $conn->query($sql);
    header("location: dashboard.php");
?>