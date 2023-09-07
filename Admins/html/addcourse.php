<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Course</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/addcourse.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php">Beta Admins</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav">
      <ul class="navbar-nav ms-auto ">
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


        <div class="input">
            <form action="newcourse.php" method="post">
            <div class="add-course"><h1>Add A New Course</h1></div>
            <br>
            <br>
                <label for="name" class="text-right">Course Name</label>
                <br>
                <div class="form-floating mb-3">
                <input type="text" name="coursename" class="form-control" id="Coursename" placeholder="Course Name" style="height: 8px" required>
            </div>
                
                <label for="description">Course Description</label>
                <br>
                <div class="form-floating">
              <textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" required></textarea>       
            </div>
                <br>
                <br>
                <label for="image">Course Image</label>
                <br>
                <div class="input-group mb-3">
              <input type="file" name ="image"class="form-control" id="inputGroupFile02" required>
            </div>
                <br>
                <br>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
<script src="../js/bootstrap.js"></script>
</body>
</html>