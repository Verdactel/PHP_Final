<?php
    include "header.php";

    if(isset($_SESSION['userID'])){
        echo $_SESSION['userID'];
        echo "Hello ".$_SESSION["username"];

        //display a certain way
            //call database to find interests
            //display based on interests
    }
    else{
        //default display
//generate search bars if necessary

        // $response = file_get_contents('https://newsapi.org/v2/top-headlines?country=us&apiKey=c1bffb35cf8d439fa9cd84b0c4d535e6');
        // $data = json_decode($response);
        // echo '<div class="news_card_container">';
        // foreach($data->articles as $articles){
                //check for null image first
                    //use no-image-available.jpg
        //    echo '<a style="background-image: url('.$articles->urlToImage.');" title="'.$articles->description.'" href="'.$articles->url.'" class="news_card"><div class="title">'.$articles->title.'</div></a>';
        // }
    }
?>

<?php include "footer.php" ?>
<script src="index.js"></script>