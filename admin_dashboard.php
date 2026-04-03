<?php
session_start();
include 'db.php';

if ($_SESSION['role'] != 'admin') {
    header("Location: login.php");
    exit();
}
?>

<h2>🏫 Admin Dashboard</h2>

<h3>All Students Data</h3>

<table border="1" cellpadding="10">
<tr>
  <th>Name</th>
  <th>Email</th>
  <th>Course</th>
  <th>Attendance</th>
  <th>Marks</th>
</tr>

<?php
$result = $conn->query("SELECT * FROM users WHERE role='student');

while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['name']}</td>
        <td>{$row['email']}</td>
        <td>{$row['course']}</td>
        <td>{$row['attendance']}%</td>
        <td>{$row['marks']}</td>
    </tr>";
}
?>
</table>

<br>
<a href='logout.php'>Logout</a>