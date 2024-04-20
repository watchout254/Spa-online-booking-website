
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/book_online.css">
    <script src="https://kit.fontawesome.com/1cfb698203.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <title>FRADS | BOOK</title>
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
           <li><a href="book_online.php"><i class="fas fa-building"></i>BOOK ONLINE</a></li>
           <!-- <li><a href="sign_up.php"><i class="fas fa-sign-in-alt"></i>SIGN UP</a></li>
            <li><a href="log_in.php"><i class="fas fa-arrow-alt-circle-right"></i>LOG IN</a></li>
            <li><a href="admin.php"><i class="fas fa-user-shield"></i>ADMIN</a></li>
            <li><a href="employee.php"><i class="fas fa-address-card"></i>EMPLOYEE</a></li> -->
            <li><a href="faqs.html"><i class="fas fa-question"></i>FAQS</a></li>
            <li><a href="contact.html"><i class="fas fa-phone-volume"></i>CONTACT US</a></li>
        </ul>
    </div>

    <section>
        <br>
        <div class="container">
        <form action="bsave.php" method="post">

            <P>
                <img src="IMAGES/frads.PNG" alt="logo image" class="centre" width="150"> <br>
                <br>

                Kindy fill the following form to reserve a booking of your interested service:
            </P>
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
            <label for="Fullnames">NAME:</label>
            <input type="text" name="name" size="50" id="name" placeholder="Full names" required>
            <br>
            <br> <br>

            <label for="Email">EMAIL:</label>
            <input type="email" name="email" size="50" id="email" placeholder="abcd@gmail.com" required>
            <br>
            <br> <br>


            <label for="Phonenumber">TEL:</label>
            <input type="tel" name="number" size="50" id="number" placeholder="+25470000000" required>
            <br>
            <br> <br>


            <label for="date">DATE:</label>
            <input type="date" name="date" size="50" id="date" required>
            <br>
            <br> <br>

            <label for="time">TIME:</label>
            <input type="time" name="time" size="50"  id="time"  required>
            <br>
            <br> <br>

            <label for="Service done">SERVICE:</label>
            <select name="service" id="service">
                <option value="#"></option>
                <option value="Swedish massage">Swedish massage</option>
                <option value="deep tissue massage">Deep tissue massage</option>
                <option value="prenetal massage">Prenetal massage</option>
                <option value="sports massage">Sports massage</option>
                <option value="hot stone massage">Hot stone massage</option>
                <option value="aromatherapy massage">Aromatherapy massage</option>
                <option value="reflexology massage">Reflexology massage</option>
                <option value="acupuncture">Acupuncture</option>
                <option value="myofascial">Myofascial</option>
                <option value="triggerpoint">Triggerpoint </option>
                <option value="craniosacral">Craniosacral</option>
                <option value="kinetic body">Kinetic body</option>
                <option value="polarity">Polarity</option>
                <option value="rolfing">Rolfing</option>
                <option value="reiki">Reiki</option>
                <option value="microdermabrasion">Microdermabrasion</option>
                <option value="laser skin resurfacing">Laser skin-resurfacing</option>
                <option value="chemical peels">Chemical Peels</option>
                <option value="laser skin rejuvenation">laser skin-rejuvenation</option>
                <option value="envy facials">ENVY facials</option>
                <option value="hydrafacials">HydraFacial</option>
                <option value="fraxel skin resurfacing">Fraxel skin-resurfacing</option>
                <option value="photo resurfacing">IPL photo Resurfacing</option>
                <option value="cleanser">Cleanser</option>
                <option value="exfoliator">Exfoliator</option>
                <option value="serum">Serum</option>
                <option value="face oil">Face oil</option>
                <option value="sunscreen">Sunscreen</option>
                <option value="moisturizer">Moisturizer</option>
                <option value="chemical peel">Chemical peel</option>
                <option value="classic ped">Classic pedicure</option>
                <option value="french ped">French pedicure</option>
                <option value="gel ped">Gel pedicure</option>
                <option value="paraffin ped">Paraffin ped</option>
                <option value="hot stone">Hot stone ped</option>
                <option value="fish ped">Fish ped</option>
                <option value="mini ped">Mini ped</option>
                <option value="spa ped">Spa ped</option>
                <option value="hot oil man">Hot oil manicure</option>
                <option value="spa man">Spa man</option>
                <option value="paraffin wax man">Paraffin wax man</option>
                <option value="brazillian man">Brazillian man</option>
                <option value="shellac man">Shellac man</option>
                <option value="3d man">3D man</option>
                <option value="acrylic man">Acrylic man</option>
                <option value="soft waxing">Soft waxing</option>
                <option value="hard wax">Hard waxing</option>
                <option value="fruit waxing">Fruit waxing</option>
                <option value="chocolate waxing">Chocolate waxing</option>
                <option value="sugar waxing">Sugar waxing</option>
                <option value="traditional sauna">Traditional sauna</option>
                <option value="dry sauna">Dry sauna</option>
                <option value="steam sauna">Steam sauna</option>
                <option value="infrared sauna">Infrared sauna</option>
                <option value="drop in whirlpool">Drop-in whirlpool</option>
                <option value="corner whirlpool">Corner whirlpool</option>
                <option value="freestanding whirlpool">Freestanding whirlpool</option>
                <option value="jacuzzi whirlpool">Jacuzzi whirlpool</option>
                <option value="dounle whirlpool">Double ended whirlpool</option>
                <option value="walk in whirlpool">Walk-in whirlpool</option>
                <option value="white mud">White mud bath</option>
                <option value="black mud">Black mud bath</option>
                <option value="grey mud">Grey mud bath</option>
                <option value="salt scrub">Salt scrub</option>
                <option value="sea weed">Sea weed</option>
                <option value="hot stone">Hot stone</option>
            </select>
            <br>
            <br>

            <button>BOOK NOW</button>
        </form>
        </div>
    </section>

    <!--footer section-->
    <footer class="socialmedia">
        <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
        <a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a>
        <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>

        <br>
       <p> All rights reserved. &copy;2022, Daniel Mukenya&trade;.</p>
    </footer>
</body>
<script src="./JS/book.js"></script>
</html>
