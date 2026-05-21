<?php
session_start();
include 'db.php';

if ($_SESSION['role'] != 'admin') {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background: #f4f6f9;
    }

    .header {
      background: #343a40;
      color: white;
      padding: 15px;
    }

    .container-box {
      margin: 30px;
      background: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .logout-btn {
      float: right;
    }
  </style>
</head>

<body>

<!-- HEADER -->
<div class="header d-flex justify-content-between">
  <h3>🏫 Admin Dashboard</h3>
  <a href="logout.php" class="btn btn-danger logout-btn">Logout</a>
</div>

<!-- CONTENT -->
<div class="container-box">

  <h4 class="mb-3">👨‍🎓 Student Records</h4>

  <table class="table table-bordered table-hover">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Course</th>
        <th>Attendance</th>
        <th>Marks</th>
      </tr>
    </thead>

    <tbody>

    <?php
    $result = $conn->query("SELECT * FROM users WHERE role='student'");

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['email']}</td>
            <td>{$row['course']}</td>
            <td>{$row['attendance']}%</td>
            <td>{$row['marks']}</td>
        </tr>";
    }
    ?>





    </tbody>
  </table>


  <hr>

<h3>📩 Enquiries</h3>

<table class="table table-bordered table-hover">
  <thead class="table-dark">
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Phone</th>
      <th>Message</th>
    </tr>
  </thead>

  <tbody>

<?php
$result = $conn->query("SELECT * FROM enquiries");

while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['phone']}</td>
        <td>{$row['message']}</td>
    </tr>";
}
?>

</div>

</body>
</html>