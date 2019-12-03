<?php
    include "header.php";

    if(isset($_SESSION['userID'])){
        //use user data
    }
    else{
        //default display
        $response = file_get_contents('https://community-open-weather-map.p.rapidapi.com/weather?q=salt%20lake%20city');
        $data = json_decode($response);

        echo $data->weather;
    }
?>
<button onclick="getLocation()">Try It</button>

<p id="demo"></p>
<script src="weather.js"></script>
<?php
    include "footer.php";
?>