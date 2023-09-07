<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Courses</title>
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="../css/courses.css" />
  </head>
  <body>
    <?php
      $conn= new mysqli("localhost","root","","beta");
      if($conn->connect_error){
        die("connection failed!" . $conn->connect_error);
      }
      $sql = "select * from courses";
      $allcourses = $conn->query($sql);
    ?>

    <?php
    session_start();
    if (isset($_SESSION["logedin"])&&$_SESSION["logedin"] == true) {

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
          <a class="nav-link " aria-current="page" href="dashboard.php">My Courses</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link active" href="courses.php">Courses</a>
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
              <a class="nav-link " aria-current="page" href="Home.php">Home</a></li>
            
            <li class="nav-item">
              <a class="nav-link active" href="courses.php"> Courses </a>
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

    <div class="container-fluid the-container d-flex">
      <div class="the-header row bg-primary">
        <div class="row the-header-text col-sm-8 col-md-6 d-flex justify-content-center flex-column align-items-center">
          <div class="header-title">
            <h1 class="h-1">Individual Learners Catalog</h1>
          </div>
          <div class="header-description">
            <p>Transform your career with Nanodegree programs starting at$399/mo.</p>
          </div>
        </div>
        <div class="searchbar">
          <input onchange="search()" id="search" type="search" placeholder="Search" class="search" />
        </div>
      </div>
    </div>
    <div class="container py-5">
      <h1 class="text-center h-2">Available Courses</h1>
      <div class="row row-cols-1 row-cols-md-3 g-4 py-5">

      <?php
      while ($row = $allcourses->fetch_assoc()) {

      ?>
        <div class="col">
          
         <div class="card" id="card">
          <div class="image"><img src="<?php echo'../Admins/images/' . $row['image']; ?>" class="rounded mx-auto d-block" alt="..."></div>
            <div class="content">
              <a href="#">
                <span class="title"> <?php echo $row["name"]; ?> </span></a>

              <p class="desc"><?php echo $row["description"]; ?></p>
              <a class="action" href="course-details.php?id=<?php echo $row['id'];?>">
                Find out more
                <span aria-hidden="true">→</span>
              </a>
            </div>
          </div>
        </div>
        <?php
      }
        ?>
      </div>
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
    <script src="../js/courses.js"></script>
  </body>
  
</html>
