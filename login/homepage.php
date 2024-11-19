<?php
session_start();
include("connect.php"); // Added semicolon here

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kids Learning Platform</title>
</head>
<body>
    
<div style="text-align: center; padding: 15%;">
    <p style="font-size: 50px; font-weight:bold">

    Hello <?php
        if(isset($_SESSION['email'])){
            $email=$_SESSION['email'];
            $query = mysqli_query($conn, "SELECT user.* FROM `users` WHERE users.email='$email'"); // Added space after user.*
            while($row = mysqli_fetch_array($query)){ // Removed extra parenthesis
                echo $row['firstName'] . ' ' . $row['lastName']; // Added a space between firstName and lastName
            }
        }
    ?>
    </p>
</div>
<a href="logout.php">Logout</a>
</body>
</html>
