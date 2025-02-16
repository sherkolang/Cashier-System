<?php

session_start();
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute(); 
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])){
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['role'] = $user['role'];

        if ($user['role'] == 'admin') {
            header("Location: ../admin_dashboard.html");    
        } else {
            header("Location: ../cashier_dashboard.html");
        }
        exit() ;
    } else {
        echo "<script>alert('Invalid email or password!'); window.location.href='../Sign-In-&-Sign-Up-UI.html';</script>";
    }
}
?>

