<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Courses</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/dashboard.css">

</head>
<body>
    <?php
    session_start();
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
          <a class="nav-link " aria-current="page" href="Home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="dashboard.php">My Courses</a>
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
              <a class="nav-link" aria-current="page" href="Home.php">Home</a></li>
            
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
<div class="container">
<div class="title"><h1>My Programs</h1></div>
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link " aria-current="page" href="dashboard.php">In Progress</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="dashboard(completed).php">Completed</a>
  </li>
</ul>
 
<div class="card">
 
  <div class="card-body">
    <h5 class="card-title">C++</h5>
    <p class="card-text">Variables, Loops, STLs, Problem Solving.</p>
    <a href="#" class="btn btn-primary">View</a>
  </div>
</div>
<div class="card">
 
  <div class="card-body">
    <h5 class="card-title">Python</h5>
    <p class="card-text">Variables, Loops, STLs, Problem Solving.</p>
    <a href="#" class="btn btn-primary">View</a>
  </div>
</div>

</div>

<script src="../js/bootstrap.js"></script>
</body>
</html>