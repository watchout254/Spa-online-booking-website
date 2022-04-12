<?php
  $hostname = 'localhost';
  $username = 'root';  
  $password = '';
  $dbname = 'frads';

  try {
      $db = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
      echo 'Connection failed: ' . $e->getMessage();
  }
