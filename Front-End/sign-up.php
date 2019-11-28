<?php
    session_start();
    if(isset($_SESSION['err'])){
        if($_SESSION['err'] != ""){
            echo $_SESSION['err'];
        }
    }
?>

<form id="user_create_form" action="../Back-End/create_user.php" method="post">
    <input id="user" type="text" name="username"  required> <!-- oninput="TextChange()" -->
    <input type="password" name="password" required>
    <input type="submit" value="Create!">
</form>
<!-- <p id="tag"></p>

<script>
    function TextChange() {
        var user = document.getElementById("user").value;
        document.getElementById("tag").innerHTML = user;
        
        
    }
</script> -->