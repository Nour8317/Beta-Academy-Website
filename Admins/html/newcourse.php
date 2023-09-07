<?php
$conn= new mysqli("localhost","root","","beta");
if($conn->connect_error){
    die("connection failed!" . $conn->connect_error);
}

$name= $_POST["coursename"];
$desc = $_POST["description"];
$img = $_POST["image"];

$sql = "insert into courses(name,description,image) values('$name','$desc','$img')";
$query_run = mysqli_query($conn, $sql);
header("Location: addcourse.php");

?>