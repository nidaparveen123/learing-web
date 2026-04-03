
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
    <input type="password" name="password" placeholder="Password" required>

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
        $_SESSION['user'] = $email;
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Invalid email or password!";
    }
}
?>

    <link rel="stylesheet" href="script.js">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>