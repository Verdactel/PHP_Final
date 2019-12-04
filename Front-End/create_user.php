<?php
    session_start();
    include "../Back-End/dbconfig.php";
    
    // Create user and parse into database
    $query = "select * from users where username=".$_POST['username'];
    $resultUser = $sql_inst->query($query);
    
    if($resultUser == NULL){ // Did not find another username with the one provided in the database
        $_SESSION['err'] = "";
        $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $query = "insert into `users` (`Username`, `Password`) VALUES (";

        $query .= '"'.$_POST['username'].'",';
        $query .= '"'.$hash.'"';
        $query .= ")";

        $sql_inst->query($query);

        $query = "select * from users";
        $result = $sql_inst->query( $query );
        $numUsers = $result->num_rows;
        
        if($_POST["sports_cb"] == "1"){ // 1 in db
            $sportsSelected = $_POST["sports_cb"];
            // If this is checked add a row to user_to_newsfavorites
            // with numUsers + 1 as 'user_id'
            // and 1 as 'news_catagory'
        
            $curUserIndex = $numUsers + 1;
            $querySports = "INSERT INTO user_to_newsfavorites (user_id, news_catagory) VALUES (".$curUserIndex.", 1)";
        
            $sql_inst->query( $querySports );
        }
        
        if($_POST["entertainment_cb"] == "1"){ // 2 in db
            $entertainmentSelected = $_POST["sports_cb"];
            echo $entertainmentSelected;
        }
        
        if($_POST["politics_cb"] == "1"){ // 3 in db
            $politicsSelected = $_POST["sports_cb"];
            echo $politicsSelected;
        }
        
        if($_POST["technology_cb"] == "1"){ // 4 in db
            $politicsSelected = $_POST["technology_cb"];
            echo $politicsSelected;
        }

        //auto-login
        header("Location: index.php");
    }
    else{
        $_SESSION['err'] = "That username is already taken.";
        header("Location: sign-up.php");
    }

?>