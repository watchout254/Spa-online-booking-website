
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1cfb698203.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
    <link rel="stylesheet" href="CSS/log_in.css">
  
    <title>FRADS | Log in </title>
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
            <li><a href="sign_up.php"><i class="fas fa-sign-in-alt"></i>SIGN UP</a></li>
            <li><a href="log_in.php"><i class="fas fa-arrow-alt-circle-right"></i>LOG IN</a></li>
            <li><a href="admin.php"><i class="fas fa-user-shield"></i>ADMIN</a></li>
            <li><a href="employee.php"><i class="fas fa-address-card"></i>EMPLOYEE</a></li>
            <li><a href="faqs.php"><i class="fas fa-question"></i>FAQS</a></li>
            <li><a href="contact.php"><i class="fas fa-phone-volume"></i>CONTACT US</a></li>
        </ul>
    </div>


<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
  
              <div class="mb-md-5 mt-md-4 pb-5">

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
  
                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                <p class="text-white-50 mb-5">Please enter your email and password!</p>
                
                <form action="lsave.php" method="POST">
                <div class="form-outline form-white mb-4">
                  <input type="email" name="email"  id="email" class="form-control form-control-lg" />
                  <label class="form-label" for="email">Email</label>
                </div>
  
                <div class="form-outline form-white mb-4">
                  <input type="password"  name="password"  id="password" class="form-control form-control-lg" />
                  <label class="form-label" for="password">Password</label>
                </div>
  
                <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>
  
                <button class="btn btn-outline-light btn-lg px-5" type="submit">Log in</button>
  
                <div class="d-flex justify-content-center text-center mt-4 pt-1">
                  <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                  <a href="Https://WWW.twitter.com"><i class="fab fa-twitter fa-lg mx-4 px"></i></a>
                  <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                </div>
      
              </div>
  
              <div>
                <p class="mb-0">Don't have an account? <a href="sign_up.php" class="text-white-50 fw-bold">Sign Up</a></p>
              </div>
  
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

    <footer class="socialmedia">
        <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
        <a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a>
        <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>

       <p> All rights reserved. &copy;2022, Daniel Mukenya&trade;.</p>
    </footer>
    </section>
</body>
</html>