<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1cfb698203.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
    <link rel="stylesheet" href="CSS/faqs.css">

    <title>FRADS | FAQS</title>
</head>
<body>
    <input type="checkbox" id="check">
    <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cancel"></i>
    </label>

    <div class="sidebar">
        <header><img src="IMAGES/frads.PNG" alt="logo image" class="logo" height="70" width="70">
         SPA</header>

        <ul>
           <li><a href="index.html"><i class="fas fa-home"></i>HOME</a></li>
            <li><a href="plans&pricing.html"><i class="fab fa-angellist"></i>PLANS&PRICING</a></li>
           <li><a href="book_online.html"><i class="fas fa-building"></i>BOOK ONLINE</a></li>
            <li><a href="sign_up.html"><i class="fas fa-sign-in-alt"></i>SIGN UP</a></li>
            <li><a href="log_in.html"><i class="fas fa-arrow-alt-circle-right"></i>LOG IN</a></li>
            <li><a href="./Admin/index.html"><i class="fas fa-user-shield"></i>ADMIN</a></li>
            <li><a href="employee.php"><i class="fas fa-address-card"></i>EMPLOYEE</a></li>
            <li><a href="faqs.html"><i class="fas fa-question"></i>FAQS</a></li>
            <li><a href="contact.html"><i class="fas fa-phone-volume"></i>CONTACT US</a></li>
        </ul>
    </div>

    <section> 
        <br>
        <br>
        <!--header section -->
        <header>
        <div class="help">
            <img src="IMAGES/frads.PNG" alt="logo image" class="centre" width="200"> <br>
            <br>
            <br>
            <h3>We are here to help!!!!Any issues?....</h3>
        </div>
        </header>
        <?php
        session_start();
         if(isset($_SESSION['success'])){
             echo '<p class="success">'.$_SESSION['success'].'</p>';
             unset($_SESSION['success']);
         }
            if(isset($_SESSION['error'])){
                echo '<p class="error">'.$_SESSION['error'].'</p>';
                unset($_SESSION['error']);
            }

        ?>

        <br>
        <form action="fsave.php" method="post">
            <div class="container">
            <div class="message">

            <label for="subject">Subject:</label>
            <input type="text" name="subject" id="subject" size="30">
            <br>
            <br>
            <label for="message">Message: </label>
            <textarea name="message" id="message" cols="30" rows="10">Type here..</textarea>
            <br>
            <br>
            <button>Send message</button>
            </div>
            </div>
        </form>
        <br>
        <br>
        <br>
        <footer class="socialmedia">
            <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
            <a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a>
            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
    
            <br>
           <p> All rights reserved. &copy;2022, Daniel Mukenya&trade;.</p>
        </footer>
    </section>
</body>
</html>