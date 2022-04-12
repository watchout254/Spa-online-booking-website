<?php
 require_once 'sconnect.php';
 session_start();

 if($_SERVER['REQUEST_METHOD'] == 'POST'){
     $name = $_POST['name'];
     $email = $_POST['email'];
     $id_no = $_POST['id_no'];
     $password = $_POST['password'];
   
     
    try {
     $stmt = $db->prepare("INSERT INTO up( name, email, id_no, password)
      VALUES (?,?,?,?)");
    $stmt->execute([$name, $email, $id_no, $password]);
    $_SESSION['success'] = 'SIGNED UP SUCCESSFULLY!!!';
    } catch (PDOException $e) {
        $_SESSION['error'] = $e->getMessage();
    }
 }

 header('Location: sign_up.php');