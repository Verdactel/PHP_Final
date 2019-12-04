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
    <div>
        Select your favorite news categories<br/>

        <input name="sports_cb" type="hidden" value="0"><br/>
        Sports<input name="sports_cb" type="checkbox" value="1"><br/>

        <input name="entertainment_cb" type="hidden" value="0"><br/>
        Entertainment<input name="entertainment_cb" type="checkbox" value="1"><br/>
        
        <input name="politics_cb" type="hidden" value="0"><br/>
        Politics<input name="politics_cb" type="checkbox" value="1"><br/>

        <input name="technology_cb" type="hidden" value="0"><br/>
        Technology<input name="technology_cb" type="checkbox" value="1"><br/>
    </div>
    <input type="submit" value="Create!">
</form>
<!-- <p id="tag"></p>

<script>
    function TextChange() {
        var user = document.getElementById("user").value;
        document.getElementById("tag").innerHTML = user;
        
        
    }
</script> -->