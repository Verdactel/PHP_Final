<!-- Database include -->

<?php

$host = "localhost";
$username = "root";
$password = "MyNewPass";
$db_name = "php_final";

$sql_inst = new mysqli($host, $username, $password, $db_name);

if(mysqli_connect_errno()){
    echo "Fatal error: Could not connect to sql database.";
    exit;
}else{
    echo "Connection successful";
}

?>