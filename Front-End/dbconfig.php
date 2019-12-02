<!-- Database include -->
<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "php_final";

    // $username = "root";
    // $password = "MyNewPass";
    // $db_name = "";

    $mysqli = new mysqli($host, $username, $password, $dbname);

    if(mysqli_connect_errno()) {
        echo "Error: Could not connect to database.";
        exit;
    }
?>