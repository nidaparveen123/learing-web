<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

</head>

<body class="auth-page">

  <?php
  session_start();
  include 'db.php';
  ?>

  <div class="form-box">
    <form method="POST">
      <h2>Login</h2>

      <input type="email" name="email" placeholder="Email" required>
      <div style="position: relative;">
        <input type="password" id="password" name="password" placeholder="Password" required>
        <i class="fa fa-eye mt-2" id="togglePassword"
          style="position:absolute; right:10px; top:12px; cursor:pointer;"></i>
      </div>
      <button name="login">Login</button>

      <p>Don't have an account? <a href="signup.php">Sign up</a></p>
      <p> back to <a href="index.php">Home</a></p>
      <a
        </form>
  </div>
  <?php
  if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = $conn->query("SELECT * FROM users 
                           WHERE email='$email' AND password='$password'");

    if ($result->num_rows > 0) {

      $user = $result->fetch_assoc();  

      $_SESSION['user'] = $user['email'];
      $_SESSION['role'] = $user['role'];  

      if ($user['role'] == 'admin') {
        header("Location: admin_dashboard.php");
      } else {
        header("Location: dashboard.php");
      }

      exit();
    } else {
      echo "Invalid email or password!";
    }
  }
  ?>



  <script>
    const toggle = document.getElementById("togglePassword");
    const password = document.getElementById("password");

    toggle.addEventListener("click", function() {
      const type = password.type === "password" ? "text" : "password";
      password.type = type;

      this.classList.toggle("fa-eye-slash");
    });
  </script>
  <link rel="stylesheet" href="script.js">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>