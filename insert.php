<?php
$conn = mysqli_connect("localhost", "root", "", "myproject_db");

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

//hash password (IMPORTANT)
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashedPassword')";

if(mysqli_query($conn, $sql)){
    echo "Signup successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>