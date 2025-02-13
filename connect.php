<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cashier-system"; //database name eg. CashierSystem

    //create a connection to the databse 
    $conn = new mysqli($host,$user, $pass, $db);

    //check db connection
    if($conn->connect_error){
        echo "Failed to connect to database" .$conn -> connect_error;
    }
    else{
        echo "Successfully connecterd to database";
    }

    //hello
?>
