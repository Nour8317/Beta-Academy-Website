<?php
$conn= new mysqli("localhost","root","","beta");
    if($conn->connect_error){
        die("connection failed!" . $conn->connect_error);
    }
$uid = $_GET["id"];
$sql = "DELETE FROM users WHERE id = $uid";
if($conn->query($sql)){
header("location: viewusers.php");
}

?>