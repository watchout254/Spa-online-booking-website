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
     $stmt = $db->query('SELECT * FROM faqs');
     $feedbacks = $stmt->fetchAll();
     echo '<table>';
     echo '<tr>';
        echo '<th>subject</th>';
        echo '<th>message</th>';
        echo '</tr>';
     foreach($feedbacks as $feedback){
            echo '<tr>';
            echo '<td>'.$feedback['subject'].'</td>';
            echo '<td>'.$feedback['message'].'</td>';
            echo '</tr>';
     }
     echo '</table>';


    ?>
    
</body>
</html>