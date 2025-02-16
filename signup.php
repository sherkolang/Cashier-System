<?php

include ('connect.php');

if(isset($_POST['singup'])){
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password); // Hashing for security
    $role = $_POST['role'];

    $checkemail = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($checkemail);
    if($result->num_rows > 0){
        echo "Account already exists";
    }
    else{
        $insertquery = "INSERT INTO users (firstname, lastname, email, password, role)
                        VALUES ('$firstname', '$lastname', '$email', '$password', '$role')";
        if($conn->query($insertquery) === TRUE){
            header("Location: loginsystem.php");
            exit();
        }
        else{
            echo "Error: " . $conn->error;
        }
    }
}

?>
