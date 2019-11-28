<?php
    session_start();
    include "dbconfig.php";
        
    $query = "select * from users where username=".$_POST['username'];
    $result = $mysqli->query($query);
    
    if($result == NULL){
        $_SESSION['err'] = "";
        $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $query = "insert into `users` (`Username`, `Password`) VALUES (";

        $query .= '"'.$_POST['username'].'",';
        $query .= '"'.$hash.'"';
        $query .= ")";

        $mysqli->query($query);

        //auto-login
        header("Location: ../Front-End");
    }
    else{
        $_SESSION['err'] = "Invalid Username";
        header("Location: ../Front-End/create_user.php");
    }
?>