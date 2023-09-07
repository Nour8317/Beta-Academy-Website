<?php
session_start();
$uid = $_SESSION['id'];
$cid = $_GET['id'];
$conn= new mysqli("localhost","root","","beta");
    if($conn->connect_error){
    die("connection failed!" . $conn->connect_error);   
}
 $check = "select * from enroll where uid = '$uid' and cid ='$cid'";
 $run = $conn->query($check);
 if(mysqli_num_rows($conn->query($check))>0){
    echo "this course already enrolled";
    header("location: courses.php");
}else{
     $sql = "insert into enroll (uid,cid) values('$uid','$cid')";
     //$sql = "delete from enroll";
    $enrollcourse = $conn->query($sql);
    header("location: courses.php");
}


?>