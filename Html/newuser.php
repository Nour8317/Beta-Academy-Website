<?php
    $conn= new mysqli("localhost","root","","beta");
    if($conn->connect_error){
        die("connection failed!" . $conn->connect_error);
    }
    echo "Welcome!";
    $firstname= $_POST["fname"];
    $lastname= $_POST["lname"];
    $emailaddress= $_POST["email"];
    $phone= $_POST["phonenumber"];
    $pass = $_POST["pass"];
    $checkemail = "select firstname from users where email = '$emailaddress'";
    $runquery = $conn->query($checkemail);
    $row = $runquery->fetch_assoc();
if (mysqli_num_rows($conn->query($checkemail)) > 0) {
    $_SESSION["unableemail"] = true;
    header("Location: sign up.php");
} else {
    $sql = "insert into users(firstname,lastname,email,phonenumber,password) values('$firstname','$lastname','$emailaddress','$phone','$pass')";
    if ($conn->query($sql)) {
        echo "Your Data Has Been Saved!";
        $_SESSION["unableemail"] = false;
        header("Location: sign up.php");
    }
}
?>