<?php
session_start();
include("db.php"); // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $myusername = mysqli_real_escape_string($db, $_POST['username']);
    $mypassword = mysqli_real_escape_string($db, $_POST['password']);

    $sql = "SELECT aid, username, role FROM admin WHERE username = '$myusername' AND password = '$mypassword'";
    $result = mysqli_query($db, $sql);

    if ($result) {
        $count = mysqli_num_rows($result);
        
        if ($count == 1) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['login_user'] = $row['username'];
            $_SESSION['user_id'] = $row['aid'];
            $_SESSION['role'] = $row['role'];
            
            header("location: ../dashboard.php?dab=1");
        } else {
            header("location: index.php?error=1");
        }
    } else {
        echo "Database error!";
    }
}
?>
