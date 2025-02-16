<?php

include 'conenct.php';

if(isset($_POST['singup'])){
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password); // hashing for security
    $role = $_POST['role'];

    $checkemail = "SELECT * FROM users WHERE email = '$email' ";
    $result = $conn->query($checkemail);
    if($result ->num_rows > 0){
        echo "Account already exist";
    }
    else{
        $insertquery = "INSERT * FROM users(firsname, lastname, email, password, role)
                    values('$fullname','$lastname', '$email', '$password', '$role')";
        if($conn->query($insertquery)==True){
            header("location:loginsystem.php");
        }
        else{
            echo "Error".$conn->error;
        }
    }
}


?>