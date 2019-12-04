<?php
    include "header.php";
    if(isset($_SESSION['err'])){
        if($_SESSION['err'] != ""){
            echo $_SESSION['err'];
        }
    }
?>

<div class="form_container">
    <form id="login_form" class="login_form" action="create_user.php" method="post">
        <label class="username">Username: <label><input id="user" type="text" name="username"  required><br /> <!-- oninput="TextChange()" -->
        <label class="password">Password: <label><input type="password" name="password" required><br />
        <div>
            Select your favorite news categories<br/><br />

            <input name="sports_cb" type="hidden" value="0">
            <label class="checkbox">Sports</label><input name="sports_cb" type="checkbox" value="1">

            <input name="entertainment_cb" type="hidden" value="0">
            <label class="checkbox">Entertainment</label><input name="entertainment_cb" type="checkbox" value="1">
            
            <input name="general_cb" type="hidden" value="0">
            <label class="checkbox">General News</label><input name="general_cb" type="checkbox" value="1">

            <input name="technology_cb" type="hidden" value="0">
            <label class="checkbox">Technology</label><input name="technology_cb" type="checkbox" value="1">
        </div>
        <br />
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