<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="index.php">Home</a>
        <a href="view.php">View Messages</a>
    </nav>
    <h1>All Messages</h1>
    <?php
     require_once 'lconnect.php';
     $stmt = $db->query('SELECT * FROM man');
     $feedbacks = $stmt->fetchAll();
     echo '<table>';
     echo '<tr>';
        echo '<th>email</th>';
        echo '<th>password</th>';
        echo '</tr>';
     foreach($feedbacks as $feedback){
            echo '<tr>';
            echo '<td>'.$feedback['email'].'</td>';
            echo '<td>'.$feedback['password'].'</td>';
            echo '<td><a href="delete.php?id='.$feedback['id'].'">Delete</a> <a href="edit.php?id='.$feedback['id'].'">Edit</a> </td>'; 
            echo '</tr>';
        }
     echo '</table>';


    ?>
    
</body>
</html>