

<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$email = $_SESSION['user'];
$result = $conn->query("SELECT * FROM users WHERE email='$email'");
$user = $result->fetch_assoc();

// get page
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Student Dashboard</title>
  <style>
    
    body {
      font-family: Arial;
      margin: 0;
    }

    .menu a:hover {
      color: #3498db;
    }

    .header {
      background: #3498db;
      color: white;
      padding: 15px;
      text-align: center;
    }

    .menu {
      background: #eee;
      padding: 10px;
      text-align: center;
    }

    .menu a {
      margin: 10px;
      text-decoration: none;
      font-weight: bold;
    }

    .content {
      padding: 20px;
    }

    .container {
      margin-top: 20px;
      padding: 15px;
      border: 1px solid #ddd;
      border-radius: 5px;
    }
  </style>
</head>
<body>

<div class="header">
  <h2>🎓 Student Dashboard</h2>
  <p>Welcome, <?php echo $user['name']; ?> 👋</p>
</div>

<div class="menu">
  <a href="dashboard.php?page=home">Dashboard</a>
  <a href="dashboard.php?page=courses">Courses</a>
  <a href="dashboard.php?page=attendance">Attendance</a>
  <a href="dashboard.php?page=marks">Marks</a>
  <a href="logout.php">Logout</a>
</div>

<div class="content">

<?php
if ($page == 'home') {
    echo "<h3>Overview</h3>";
    echo "Welcome to your student panel.";
    echo '<div class="container">';
    echo '<h3>Pay Fee</h3>';
    echo '<label>Select Payment Method:</label>';
    echo '<select id="method">';
    echo '<option>UPI</option>';
    echo '<option>Card</option>';
    echo '<option>Net Banking</option>';
    echo '</select>';
    echo '<br><br>';
    echo '<button onclick="payNow()">Pay Now</button>';
    echo '<p id="msg"></p>';
    echo '</div>';
}

elseif ($page == 'courses') {
    echo "<h3>My Course</h3>";
    echo $user['course'];
}

elseif ($page == 'attendance') {
    echo "<h3>Attendance</h3>";
    echo $user['attendance'] . "%";
}

elseif ($page == 'marks') {
    echo "<h3>Marks</h3>";
    echo $user['marks'];
}
?>

</div>

<script>
function payNow() {
  let method = document.getElementById("method").value;

  document.getElementById("msg").innerHTML =
    "Processing payment via " + method + "...";

  setTimeout(() => {
    document.getElementById("msg").innerHTML =
      "✅ Payment Successful! Transaction ID: TXN" + Math.floor(Math.random()*1000000);
  }, 2000);
}
</script>
</body>
</html>