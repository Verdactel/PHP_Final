<?php include "header.php" ?>
<html>
    <form>
        <!-- Page Title:</br> <input type="text" name="PageTitle_txtIn"></br>
        Page Header: <input type="text" name="PageHeader_txtIn"></br>
        Page Content: <input type="text" name="PageContent_txtIn"></br>
        
        <input type="submit" value="Submit"> -->
    </form>
        
</html>

<?php

$query = "select * from users";
$result = $sql_inst->query( $query );
$numUsers = $result->num_rows;

if($_POST["sports_cb"] == "1"){ // 1 in db
    $sportsSelected = $_POST["sports_cb"];
    // If this is checked add a row to user_to_newsfavorites
    // with numUsers + 1 as 'user_id'
    // and 1 as 'news_catagory'

    $curUserIndex = $numUsers + 1;
    $querySports = "INSERT INTO user_to_newsfavorites (user_id, news_catagory) VALUES (".$curUserIndex.", 1)";

    $sql_inst->query( $querySports );
}

if($_POST["entertainment_cb"] == "1"){ // 2 in db
    $entertainmentSelected = $_POST["sports_cb"];
    echo $entertainmentSelected;
}

if($_POST["politics_cb"] == "1"){ // 3 in db
    $politicsSelected = $_POST["sports_cb"];
    echo $politicsSelected;
}

if($_POST["technology_cb"] == "1"){ // 4 in db
    $politicsSelected = $_POST["technology_cb"];
    echo $politicsSelected;
}

?>

<?php include "footer.php" ?>