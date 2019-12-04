<?php
    include "header.php";

    if(isset($_SESSION['UserID'])){
        echo "Hello ".$_SESSION['UserName']."!";
        // echo "Hello ".$_SESSION["username"];

        //display a certain way
        $query = "SELECT news_category FROM user_to_newsfavorites WHERE user_id='".$_SESSION['UserID']."'";
        $result = $sql_inst->query( $query );

        $myArray = [];
        while($row = $result->fetch_assoc()){
            extract($row);
            array_push($myArray, $news_category);
        }

        $newsCatagories = "SELECT _name FROM news_categories WHERE _index in (";
        for($i = 0; $i < count($myArray); $i++){
            if($i >= 1){
                $newsCatagories .= " ,";
            }
            $newsCatagories .= $myArray[$i];
        }
         $newsCatagories .= ")";
         $res = $sql_inst->query( $newsCatagories );
         $link = "https://newsapi.org/v2/top-headlines?country=us&category=";
         while($row = $res->fetch_assoc()){
            extract($row);
            // echo $_name;
            $link .= $_name;
            break;
        }
        $link .= "&apiKey=c1bffb35cf8d439fa9cd84b0c4d535e6";
        echo $link;
        $response = file_get_contents($link);
        $data = json_decode($response);
        foreach($data->articles as $articles){
            //check for null image first
           echo '<a style="background-image: url('.$articles->urlToImage.');" title="'.$articles->description.'" href="'.$articles->url.'" class="news_card"><div class="title">'.$articles->title.'</div></a>';
        }
//insert into news_categories (_index, _name) values (1, "sports")
    }
    else{
        //default display
        //generate search bars if necessary

        $response = file_get_contents('https://newsapi.org/v2/top-headlines?country=us&apiKey=c1bffb35cf8d439fa9cd84b0c4d535e6');
        $data = json_decode($response);
        foreach($data->articles as $articles){
            //check for null image first
           echo '<a style="background-image: url('.$articles->urlToImage.');" title="'.$articles->description.'" href="'.$articles->url.'" class="news_card"><div class="title">'.$articles->title.'</div></a>';
        }
    }
?>

<?php include "footer.php" ?>
<script src="index.js"></script>