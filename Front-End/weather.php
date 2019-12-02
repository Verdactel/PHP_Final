<?php
    include "header.php";

    if(isset($_SESSION['userID'])){
        //use user data
    }
    else{
        //default display
        // $response = file_get_contents('https://newsapi.org/v2/top-headlines?country=us&apiKey=c1bffb35cf8d439fa9cd84b0c4d535e6');
        // $data = json_decode($response);
    }
?>
<button onclick="getLocation()">Try It</button>

<p id="demo"></p>
<script src="weather.js"></script>
<?php
    include "footer.php";
?>