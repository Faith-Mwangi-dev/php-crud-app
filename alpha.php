<?php
$post = (object)$_POST;
if($post->action == "Create User"){
    echo "User Created";
    die();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Signup Page</title>
    </head>
    <body>
        <form action="" method="POST" >
            <input type="text" required name="username" id="username" placeholder="Enter your preferred Username">
            <input type="password" required name="password" id="password" placeholder="enter your password">
            <input type="password" required name="repassword" id="repassword" placeholder="enter your password again">
            <input type="email" required name="email" id="email" placeholder="ENter Your email">
            <input type="submit" value="Create User" name="action">
        </form>
    </body>
</html>
