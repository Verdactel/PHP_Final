<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    if(isset($_SESSION['userID'])){
        echo "<a href='logout.php'>Logout</a>";
    }
    else{
        echo "<a href='login.php'>Login / Sign Up</a>";
    }
?>