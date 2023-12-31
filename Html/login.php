<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>login</title>
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="../css/login.css" />
  </head>
  <body>
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
            
          </ul>
        </div>
      </div>
    </nav>';
    }
    ?>
    <?php
    if(isset($_SESSION["truedata"])&&$_SESSION["truedata"] == false){
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Try Again!</strong> Wrong Email Or Password.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
    }
    
    ?>

    <div class="s-l-container d-flex justify-content-center col-sm">
      <div class="sign-up-div">
        <a href="sign up.php" class="sign-up-linking"> 
        <div class="sign-up">Sign up</div>
      </a>
      </div>
      <div class="log-in-div">
        <div class="log-in">Sign in</div>
      </div>
    </div>
    <div
      class="container d-flex justify-content-center align-items-center min-vh-100"
    >
      <div class="row border rounder-5 p-3 bg-white shadow box-area">
        <form action="checkuser.php" method="post" class="form-container col-md-6 rounded">
          <p class="p-1">Sign in to your account.</p>
          <small class="small-word">Together to a bright future.</small>
          <input name="email" type="email" class="email-address" placeholder="Email Adress" / required>
          <input name="pass" type="password" id="pass" class="password" placeholder="Password"/ required>
          <a href="#" class="forgot">forgot your password?</a>
          <smaller class="smaller-2"
            >by clicking "sign in,"you agree to our
            <a href="#">terms of use</a> and our
            <a href="#">privacy policy</a></smaller
          >
          <button class="btn btn-primary" type="submit">Submit</button>
        </form>

        <div class="col-md-6 right-box"></div>
      </div>
    </div>
    
    <script src="../js/bootstrap.js"></script>
    <script src="../js/login.js"></script>
  </body>
</html>
