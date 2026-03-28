<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Student Dashboard</title>
  <style>
    body {
      font-family: Arial;
      background: #f2f2f2;
      text-align: center;
    }

    .box {
      background: white;
      padding: 30px;
      margin: 100px auto;
      width: 350px;
      box-shadow: 0 0 10px gray;
    }

    a {
      display: block;
      margin: 10px;
      text-decoration: none;
      background: #3498db;
      color: white;
      padding: 10px;
    }
  </style>
</head>
<body>

<div class="box">
  <h2>🎓 Student Dashboard</h2>

  <p>Welcome, <?php echo $_SESSION['user']; ?> 👋</p>

  <a href="#">Profile</a>
  <a href="#">Courses</a>
  <a href="#">Attendance</a>

  <a href="logout.php" style="background:red;">Logout</a>
</div>

</body>
</html>