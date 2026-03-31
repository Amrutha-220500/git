<?php
include "db.php";
static $count = 0;
$count++;
function registerUser($conn) {
    $username = $_POST['username'];   
    $email = $_POST['email'];         
    $password = $_POST['password'];   
    $success = false; 
    $sql = "INSERT INTO users (username, email, password)
            VALUES ('$username', '$email', '$password')";
    if (mysqli_query($conn, $sql)) {
        $success = true;
        echo "Registration Successful<br>";
    } else {
        die("Registration Failed");
    }
    return $success;
}
$result = registerUser($conn);
echo "Total registrations in this request: " . $count;
?>