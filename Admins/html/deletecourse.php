<?php
$conn= new mysqli("localhost","root","","beta");
    if($conn->connect_error){
        die("connection failed!" . $conn->connect_error);
    }
$cid = $_GET["id"];
$sql = "DELETE FROM courses WHERE id = $cid";
if($conn->query($sql)){
header("location: viewcourses.php");
}

?>