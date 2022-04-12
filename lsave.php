<?php
 require_once 'lconnect.php';
 session_start();

 if($_SERVER['REQUEST_METHOD'] == 'POST'){
     $email = $_POST['email'];
     $password = $_POST['password'];
    try {
     $stmt = $db->prepare("INSERT INTO man(email, password) VALUES (?,?)");
    $stmt->execute([$email, $password]);
    $_SESSION['success'] = 'LOGIN SUCCESSFULLY!!!!!';
    } catch (PDOException $e) {
        $_SESSION['error'] = $e->getMessage();
    }
 }

 header('Location: log_in.php');