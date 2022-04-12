<?php
 require_once 'bconnect.php';
 session_start();

 if($_SERVER['REQUEST_METHOD'] == 'POST'){
     $name = $_POST['name'];
     $email = $_POST['email'];
     $number = $_POST['number'];
     $date = $_POST['date'];
     $time = $_POST['time'];
     $service = $_POST['service'];
    try {
     $stmt = $db->prepare("INSERT INTO online(name, email, number, date, time, service) VALUES (?,?,?,?,?,?)");
    $stmt->execute([$name, $email, $number, $date, $time, $service]);
    $_SESSION['success'] = 'BOOKED SUCCESSFULLY';
    } catch (PDOException $e) {
        $_SESSION['error'] = $e->getMessage();
    }
 }

 header('Location: book_online.php');