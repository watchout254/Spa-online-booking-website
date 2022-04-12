<?php
 require_once 'fconnect.php';
 session_start();

 if($_SERVER['REQUEST_METHOD'] == 'POST'){
     $subject = $_POST['subject'];
     $message = $_POST['message'];
    try {
     $stmt = $db->prepare("INSERT INTO faqs(subject, message) VALUES (?,?)");
    $stmt->execute([$subject, $message]);
    $_SESSION['success'] = 'ASKED SUCCESSFULLY!!!!!!';
    } catch (PDOException $e) {
        $_SESSION['error'] = $e->getMessage();
    }
 }

 header('Location: faqs.php');