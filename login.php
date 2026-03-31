<?php
include "db.php";

function validateLogin($conn) {
    $username = $_POST['username']; 
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Query Failed");
    }

    if (mysqli_num_rows($result) > 0) {
        print "Login Successful";
    } else {
        print "Invalid Login";
    }
}

validateLogin($conn);
?>