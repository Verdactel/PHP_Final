<?php
    include "header.php";

    if(isset($_SESSION['userID'])){
        //use user data
    }
    else{
        //default display
    }
    
?>
<!-- <button onclick="getLocation()">Try It</button> -->

<p id="demo"></p>
<script src="weather.js"></script>
<?php
    include "footer.php";
?>