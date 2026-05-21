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
include 'db.php';
?>
<div class="form-box">
<form method="POST">
  <h2>Sign Up</h2>

  <input type="text" name="name" placeholder="Name" required><br>
  <input type="email" name="email" placeholder="Email" required><br>
<div style="position: relative;">
  <input type="password" id="password" name="password" placeholder="Password" required>
  <i class="fa fa-eye mt-2" id="togglePassword" 
     style="position:absolute; right:10px; top:12px; cursor:pointer;"></i>
</div>
  <button type="submit" name="register">Register</button>
    <p>Already have an account? <a href="login.php">Login</a></p>
    <p> back to <a href="index.php">Home</a></p>

</form>
</div>
<?php
if (isset($_POST['register'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $check = $conn->query("SELECT * FROM users WHERE email='$email'");

    if ($check->num_rows > 0) {
        echo "Email already exists!";
    } else {
        $conn->query("INSERT INTO users (name,email,password) 
                      VALUES ('$name','$email','$password')");
        echo "Registration successful! <a href='login.php'>Login</a>";
    }
}
?>




<script>
const toggle = document.getElementById("togglePassword");
const password = document.getElementById("password");

toggle.addEventListener("click", function () {
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