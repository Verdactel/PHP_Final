<?php
    include "header.php";
    if(isset($_SESSION['err'])){
        if($_SESSION['err'] != ""){
            echo $_SESSION['err'];
        }
    }
?>

<div class="form_container">
    <form class="login_form" id="user_create_form" action="create_user.php" method="post">
        <label class="username">Username: </label><input id="user" type="text" name="username"  required><br /> <!-- oninput="TextChange()" -->
        <label class="password">Password: </label><input type="password" name="password" required><br />
        <input type="submit" value="Create!">
    </form>
</div>
<!-- <p id="tag"></p>

<script>
    function TextChange() {
        var user = document.getElementById("user").value;
        document.getElementById("tag").innerHTML = user;
        
        
    }
</script> -->