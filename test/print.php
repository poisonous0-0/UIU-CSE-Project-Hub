<?php
session_start();
include("/xampp/htdocs/UIU-CSE-Project-Show/DBMSConnections/connection.php");

if (!isset($_SESSION["email"])) {
    header("Location: /loginPanel/login_panel.php");
    exit();
}

$email = $_SESSION["email"];
$sql = "SELECT * FROM student_information WHERE email = '".$email."'";

$result = mysqli_query($conn, $sql);
$data_array = mysqli_fetch_array($result);
$name = $data_array["name"]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <h2>Welcome to Homepage</h2>
    <p>Your email: <?php echo $name; ?></p>
    <a href="logout.php">Logout</a>
</body>
</html>
