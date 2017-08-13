<?php

include 'config.php';

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);
$cpassword = htmlspecialchars($_POST['cpassword']);

if ($name && $email && $password && $cpassword) {
    if (strlen($password) > 5) {
        if ($password == $cpassword) {
            if (!$connection) {
                die("Could not connect to database!");
            }
            $username = mysqli_query($connection, "SELECT name FROM users WHERE name='$name'");
            $count = mysqli_num_rows($username);
            $remail = mysqli_query($connection, "SELECT email FROM users WHERE email='$email'");
            $checkmail = mysqli_num_rows($remail);

            if ($checkmail != 0) {
                echo "Email is not Available!";
            } else {
                if ($count != 0) {
                    echo "This User has already been registerd!";
                } else {
                    mysqli_query($connection, "INSERT INTO users(name,email,password) VALUES ('$name','$email','$password')");

                    //$registered = mysqli_affected_rows();

                    echo "Successfully Registered";
                }
            }
        } else {
            echo "Passwords does not match!";
        }
    } else {
        echo "Password too short, at least 8 characters!";
    }
} else {
    echo "You have to complete the form!";
}

mysqli_close($connection);

include("links.php");
