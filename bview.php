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
     require_once 'bconnect.php';
     $stmt = $db->query('SELECT * FROM online');
     $feedbacks = $stmt->fetchAll();
     echo '<table>';
     echo '<tr>';
        echo '<th>name</th>';
        echo '<th>email</th>';
        echo '<th>number</th>';
        echo '<th>date</th>';
        echo '<th>time</th>';
        echo '<th>service</th>';
        echo '</tr>';
     foreach($feedbacks as $feedback){
            echo '<tr>';
            echo '<td>'.$feedback['name'].'</td>';
            echo '<td>'.$feedback['email'].'</td>';
            echo '<td>'.$feedback['number'].'</td>';
            echo '<td>'.$feedback['date'].'</td>';
            echo '<td>'.$feedback['time'].'</td>';
            echo '<td>'.$feedback['service'].'</td>';
            echo '</tr>';
     }
     echo '</table>';


    ?>
    
</body>
</html>