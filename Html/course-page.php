<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Courses</title>

    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/course-page.css">
</head>
<body>
     <?php
     session_start();
     echo'<nav class="navbar navbar-expand-lg navbar-dark bg-primary nav">
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
</nav>'?>

<div class="container">
  <div class="main-video">
    <video controls src="../videos/Motion Graphics Infographic - Ahrefs 2D.mp4"class="vid></video>
    <h3 class="vid-title">episode Title</h3>
    
  </div>
  <div class="video-list">
    <div class="vid-container">
      <a href="course-page.php"> <video src="../videos/Motion Graphics Infographic - Ahrefs 2D.mp4"class="vid"></video></a>
      <h3 class="vid-title">episode Title</h3>
    </div>
    <div class="vid-container">
      <a href="course-page.php"> <video src="../videos/Motion Graphics Infographic - Ahrefs 2D.mp4"class="vid"></video></a>
      <h3 class="vid-title">episode Title</h3>
    </div>
    <div class="vid-container">
      <a href="course-page.php"> <video src="../videos/Motion Graphics Infographic - Ahrefs 2D.mp4"class="vid"></video></a>
      <h3 class="vid-title">episode Title</h3>
    </div>

    <div class="vid-container">
      <a href="course-page.php"> <video src="../videos/Motion Graphics Infographic - Ahrefs 2D.mp4"class="vid"></video></a>
      <h3 class="vid-title">episode Title</h3>
    </div>

    <div class="vid-container">
      <a href="course-page.php"> <video src="../videos/Motion Graphics Infographic - Ahrefs 2D.mp4"class="vid"></video></a>
      <h3 class="vid-title">episode Title</h3>
    </div>

    <div class="vid-container">
      <a href="course-page.php"> <video src="../videos/Motion Graphics Infographic - Ahrefs 2D.mp4"class="vid"></video></a>
      <h3 class="vid-title">episode Title</h3>
    </div>

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
</body>
</html>