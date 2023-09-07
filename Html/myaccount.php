
<!-- TEAM MEMBERS
Nour Eldeen Ahmed.
Omar Ahmed Mahmoud.
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Beta Academy</title>
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="../css/myaccount.css" />
  </head>
  <body>
    <?php
    session_start();
      $conn= new mysqli("localhost","root","","beta");
      if($conn->connect_error){
        die("connection failed!" . $conn->connect_error);
      }
    $uid = $_SESSION["id"];
      $sql = "select * from useres where id = '$uid'";
      $user = $conn->query($sql);
      $row = $user->fetch_assoc();
    ?>
    <?php
    
    if ($_SESSION["logedin"] == true) {

      echo '<nav class="navbar navbar-expand-lg navbar-dark bg-primary nav">
    <div class="container-fluid">
    <a class="navbar-brand" href="Home.php"><span>Beta</span> Academy</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarScroll">
        
      <ul class="navbar-nav  my-2 my-lg-0 navbar-nav-scroll d-flex ms-auto justify-content-between" style="--bs-scroll-height: 100px;">
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="dashboard.php">My Courses</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="courses.php">Courses</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            ' . $_SESSION["firstname"] .' 
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="myaccount.php?id='.$_SESSION["id"].'">My Account</a></li>
            <li><a class="dropdown-item" href="logout.php">Logout!</a></li>
          </ul>
        </li>
        
      </ul>
    </div>
  </div>
</nav>';
    }
    else{
       echo '<nav class="navbar navbar-expand-lg navbar-dark bg-primary nav">
      <div class="container-fluid">
        <a class="navbar-brand" href="Home.php"><span>Beta</span> Academy</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarScroll"
          aria-controls="navbarScroll"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul
            class="navbar-nav my-2 my-lg-0 navbar-nav-scroll d-flex ms-auto justify-content-between"
            style="--bs-scroll-height: 100px"
          >
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="Homephp">Home</a></li>
            
            <li class="nav-item">
              <a class="nav-link" href="courses.php"> Courses </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Beta</a>
              <ul
                class="dropdown-menu"
                aria-labelledby="navbarScrollingDropdown"
              >
                <li><a class="dropdown-item" href="#">About Us</a></li>
                <li>
                  <a
                    class="dropdown-item"
                    href="https://goo.gl/maps/o9r25HqLjoBXxakd7"
                    >Location</a
                  >
                </li>
              </ul>
            </li>
            <li>
             <a href="login.php"><button type="button" class="btn btn-light login">Sign in</button></a> 
            </li>
          </ul>
        </div>
      </div>
    </nav>';
    }
    ?>

<div class="cont">
  <div class="input-group mb-3 info">
    <span class="input-group-text" id="inputGroup-sizing-default">First Name</span>
    <input type="text" class="form-control" disabled aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $row["firstname"]?>">
  </div>

  <div class="input-group mb-3 info">
    <span class="input-group-text" id="inputGroup-sizing-default">Last Name</span>
    <input type="text" class="form-control"disabled aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $row["lastname"];?>">
  </div>

  <div class="input-group mb-3 info">
    <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
    <input type="text" class="form-control" disabled aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $row["email"];?>">
  </div>

  <div class="input-group mb-3 info">
    <span class="input-group-text" id="inputGroup-sizing-default">Phonenum</span>
    <input type="text" class="form-control" disabled aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $row["phonenumber"];?>">
  </div>

  <div class="input-group mb-3 info">
    <span class="input-group-text" id="inputGroup-sizing-default">Password</span>
    <input type="text" class="form-control" disabled aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $row["password"];?>">
  </div>
<a class="btn btn-secondary edit">Edit</a>
</div>

    <div class="footer-content">
      <h3 class="footertitle">Beta Academy</h3>
      <p class="text">
        Unlocking Potential, Building Futures: Beta Academy empowers students
        with cutting-edge education in technology and engineering,<br />
        fostering innovation and expertise for a dynamic world.
      </p>
      <ul class="iconlist">
        <li class="l-item">
          <a href="https://www.facebook.com/BetaAcademy.B/"
            ><img src="../Icons/icons8-facebook-50.png" alt
          /></a>
        </li>
        <li class="l-item">
          <a
            href="https://www.linkedin.com/company/beta-training-academy/?fbclid=IwAR2wqG5S2cjkfpSv4adkRRwAQCPTzfFGJ8msTuuOK7i1PduFQvPu-awxL8A"
            ><img src="../Icons/icons8-linkedin-50.png" alt
          /></a>
        </li>
      </ul>
    </div>
    <script src="../js/bootstrap.js"></script>
  </body>
</html>
