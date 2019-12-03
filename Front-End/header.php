<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <ul class="navbar">
        <li><a id="news" href="index.php">News</a></li>
        <?php
            if(isset($_SESSION['userID'])){
                echo "<li class='login'><a id='login' href='logout.php'>Logout</a></li>";
            }
            else{
                echo "<li class='login'><a id='login' href='login.php'>Login / Sign Up</a></li>";
            }
            ?>
        <li class="weather"><a id="weather" href="weather.php">Weather</a></li>
    </ul>
    <script src="setActive.js"></script>
    <div id="content" class="content">