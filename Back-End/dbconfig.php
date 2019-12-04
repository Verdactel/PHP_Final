<!-- Database include -->

<?php
header("Access-Control-Allow-Origin: *");

$host = "localhost";
$username = "garrett";
$password = "sqlpass";
$db_name = "PHP_Final";

$sql_inst = new mysqli($host, $username, $password, $db_name);

if(mysqli_connect_errno()){
    echo "Fatal error: Could not connect to sql database.";
    exit;
}else{
    //echo "Connection successful";
}

?>