<?php
session_start();
include "db.php";

// protect page
if(!isset($_SESSION['user_id'])){
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

    <h2>Welcome, <?php echo $_SESSION['name']; ?> 🎉</h2>

    <p>You have successfully logged in.</p>

    <a href="logout.php">Logout</a>

</body>
</html>