<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
    <script src="em.js"></script>
    <title>EMPLOYEE</title>
</head>
<body>
    <div class="container">
        <ul>
           <li><a href="index.html"><i class="fas fa-home"></i>HOME</a></li>
            <li><a href="plans&pricing.html"><i class="fab fa-angellist"></i>PLANS&PRICING</a></li>
           <li><a href="book_online.php"><i class="fas fa-building"></i>BOOK ONLINE</a></li>
            <li><a href="sign_up.php"><i class="fas fa-sign-in-alt"></i>SIGN UP</a></li>
            <li><a href="log_in.php"><i class="fas fa-arrow-alt-circle-right"></i>LOG IN</a></li>
            <li><a href="admin.php"><i class="fas fa-user-shield"></i>ADMIN</a></li>
            <li><a href="employee.php"><i class="fas fa-address-card"></i>EMPLOYEE</a></li>
            <li><a href="faqs.php"><i class="fas fa-question"></i>FAQS</a></li>
            <li><a href="contact.php"><i class="fas fa-phone-volume"></i>CONTACT US</a></li>
        </ul>
    <h1>CLIENT BOOKINGS</h1>
    <nav>
        <a href="index.php">Home</a>
        <a href="bview.php">View bookings</a>
    </nav>
    
    <?php
     require_once 'connect.php';
     $stmt = $db->query('SELECT * FROM online');
     $feedbacks = $stmt->fetchAll();
     echo '<table>';
     echo '<tr>';
        echo '<th>Name</th>';
        echo '<th>Email</th>';
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
    </div>
    
</body>
</html>