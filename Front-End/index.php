<?php
    include "header.php";

    if(isset($_SESSION['userID'])){
        echo $_SESSION['userID'];
        echo "Hello ".$_SESSION["username"];
    }
?>

<button onclick="getLocation()">Try It</button>

<p id="demo"></p>
<script src="index.js"></script>