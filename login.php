<?php
session_start();
include "db.php";

// check if form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // check if fields are empty
    if(empty($email) || empty($password)){
        echo "Please fill in all fields";
        exit();
    }

    // get user from database
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){

        $user = mysqli_fetch_assoc($result);

        // verify password
        if(password_verify($password, $user['password'])){
            
            // create session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['name'] = $user['name'];

            // redirect to dashboard
            header("Location: dashboard.php");
            exit();

        } else {
            echo "Wrong password";
        }

    } else {
        echo "User not found";
    }
}
?>