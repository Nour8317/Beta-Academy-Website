<?php
    $conn= new mysqli("localhost","root","","beta");
    if($conn->connect_error){
        die("connection failed!" . $conn->connect_error);
    }
    $emailaddress= $_POST["email"];
    $pass = $_POST["pass"];
$sql = "select * from users where email = '$emailaddress' AND password = '$pass'";
$info = $conn->query($sql);
$row = $info->fetch_assoc();
if ( mysqli_num_rows($conn->query($sql))>0) {
    header("Location: Home.php");
    session_start();
    $_SESSION["logedin"] = true;
    $_SESSION["firstname"] = $row["firstname"];
    $_SESSION["id"] = $row["id"];
}else{
    $_SESSION["truedata"] = false;
    header("Location: login.php");
    
}
?>