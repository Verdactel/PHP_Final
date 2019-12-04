<?php
    session_start();
    include "../Back-End/dbconfig.php";
    
    // Create user and parse into database
    $query = "select * from users where username=".$_POST['username'];
    $resultUser = $sql_inst->query($query);
    
    if($resultUser == NULL){ // Did not find another username with the one provided in the database
        $_SESSION['err'] = "";
        $_SESSION["UserName"] = $_POST['username'];

        $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $query = "insert into `users` (`Username`, `Password`) VALUES (";

        $query .= '"'.$_POST['username'].'",';
        $query .= '"'.$hash.'"';
        $query .= ")";

        $sql_inst->query($query);
        
        // Begin saving users selected news favorites
        // Delete all rows from tables: delete from user_to_newsfavorites
        $queryForUserID = "SELECT USER_ID FROM users WHERE Username='".$_POST['username']."'";
        $res = $sql_inst->query( $queryForUserID );
        $UserID = "";
        while($row = $res->fetch_assoc()){
            // Find the first match of the UserID 
            // (Should be the current one we just created) and break
            // We dont need to look anymore
            extract($row);
            $UserID = $USER_ID;
            break;
        }
        $_SESSION["userID"] = $UserID;
        if($_POST["sports_cb"] == "1"){
            
            $sportsSelected = $_POST["sports_cb"];
            $querySports = "INSERT INTO user_to_newsfavorites (user_id, news_category) VALUES (".$UserID.", 1)";
            $sql_inst->query( $querySports );
        }
        
        if($_POST["entertainment_cb"] == "1"){
            $entertainmentSelected = $_POST["entertainment_cb"];
            $queryEntertainment = "INSERT INTO user_to_newsfavorites (user_id, news_category) VALUES (".$UserID.", 2)";
            $sql_inst->query( $queryEntertainment );
        }
        
        if($_POST["general_cb"] == "1"){ // Change to GENERAL!!!
            $politicsSelected = $_POST["general_cb"];
            $queryPolitics = "INSERT INTO user_to_newsfavorites (user_id, news_category) VALUES (".$UserID.", 3)";
            $sql_inst->query( $queryPolitics );
        }
        
        if($_POST["technology_cb"] == "1"){
            $politicsSelected = $_POST["technology_cb"];
            $queryTech = "INSERT INTO user_to_newsfavorites (user_id, news_category) VALUES (".$UserID.", 4)";
            $sql_inst->query( $queryTech );
        }

        //auto-login
        header("Location: index.php");
    }
    else{
        $_SESSION['err'] = "That username is already taken.";
        header("Location: sign-up.php");
    }

?>