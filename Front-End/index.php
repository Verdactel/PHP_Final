<?php
    include "header.php";

    if(isset($_SESSION['userID'])){
        echo $_SESSION['userID'];
        echo "Hello ".$_SESSION["username"];

        //display a certain way
    }
    else{
        //default display
    }
?>

<?php
    for($i = 0; $i < 5; $i++){
        echo "<div class='news_card'><div class='title'>This is a card</div></div>";
    }
?>

<?php include "footer.php" ?>
<script src="index.js"></script>