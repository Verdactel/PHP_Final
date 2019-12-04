<?php
    include "header.php";
    if(isset($_POST['username']) && isset($_POST['password']))
    {
        ValidateLogin($_POST['username'], $_POST['password']);
    }

    function ValidateLogin($user, $pass){
        include "../Back-End/dbconfig.php";
        

        $query = "select * from users where Username='".$user."'";
        $result = $mysqli->query($query);
        if($result != null){
            $row = $result->fetch_assoc();
            extract($row);
            
            if(password_verify($pass, $Password))
            {
                $_SESSION['userID'] = $USER_ID;
                $_SESSION['username'] = $Username;
                if(isset($_SESSION['login_error'])){
                    unset($_SESSION['login_error']);
                }
                header("Location: index.php");
            }
            else
            {
                $_SESSION['login_error'] = "Your username or password is incorrect.";
            }
        }
    }
?>

<div class="form_container">
    <form class="login_form" action="" method="post">
        <label class="username">Username: </label> <input type="text" name="username" required><br />
        <label class="password">Password: </label> <input type="password" name="password" required><br />
        <input type="submit" value="Login">
    </form>
    <label class="signup_label">Don't have an account? </label><a class="signup_anchor" href="sign-up.php">Sign up here</a>
</div>

<?php include "footer.php" ?>