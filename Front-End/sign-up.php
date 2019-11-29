<?php
    include "header.php";
    if(isset($_SESSION['err'])){
        if($_SESSION['err'] != ""){
            echo $_SESSION['err'];
        }
    }
?>

<form id="user_create_form" action="create_user.php" method="post">
    Username: <input id="user" type="text" name="username"  required><br /> <!-- oninput="TextChange()" -->
    Password: <input type="password" name="password" required><br />
    <input type="submit" value="Create!">
</form>
<!-- <p id="tag"></p>

<script>
    function TextChange() {
        var user = document.getElementById("user").value;
        document.getElementById("tag").innerHTML = user;
        
        
    }
</script> -->