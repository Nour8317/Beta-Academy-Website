<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/viewcourses.css">
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
    <nav class="navbar navbar-expand-lg navbar-light nav">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php">Beta Admins</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarScroll">
      <ul class="navbar-nav  my-2 my-lg-0 navbar-nav-scroll d-flex ms-auto justify-content-between" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="viewcourses.php">All Courses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="viewusers.php">All Users</a>
        </li>   
      </ul>
    </div>
  </div>
</nav>
<table class="table table-striped">
  <thead>
    <tr>
      <td>Name</td>
      <td>Description</td>
      <td>ID</td>
      <td>Controls</td>
    </tr>
  </thead>
  <tbody>
    <?php
      while ($row = $allcourses->fetch_assoc()) {

      ?>
    <tr>
      <td><?php echo $row['name'];?></td>
      <td><?php echo $row['description'];?></td>
      <td><?php echo $row['id'];?></td>
      <td><a class="btn btn-primary btn-sm" href="#">Edit</a>
      <a class="btn btn-danger btn-sm" href="deletecourse.php?id=<?php echo $row['id'];?>">Delete</a></tr>
    <?php
      }
        ?>
  </tbody>
</table>
<a href="addcourse.php">
    <div class="d-grid gap-2 col-6 mx-auto addcourse-btn">
  <button class="btn btn-primary" type="button">Add A New Course!</button>
</div>
</a>
<script src="../js/bootstrap.js"></script>
</body>
</html>