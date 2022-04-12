<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1cfb698203.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/sign_up.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <title>FRADS | Sign Up</title>
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
    <section>

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

  <section class="vh-100 bg-image " style="background-image: url('.jpg');">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card " style="border-radius:15px;">
              <div class="card-body p-5">
              <img src="IMAGES/frads.PNG" alt="logo image" class="logo" height="70" width="70">
                <h2 class="text-uppercase text-center mb-5">Create an account</h2>
                <?php include_once 'sign_up.php'; ?>
  
                <form method="post" action="ssave.php">
  
                  <div class="form-outline mb-4">
                    <input type="text" name="name" id="name" class="form-control form-control-lg" required/>
                    <label class="form-label" for="form3Example1cg" required>Your Name</label>
                  </div>
  
                  <div class="form-outline mb-4">
                    <input type="email" name="email" id="email" class="form-control form-control-lg" required/>
                    <label class="form-label" for="form3Example3cg" required>Your Email</label>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="number" id="id_no" name="id_no" class="form-control form-control-lg" required />
                    <label class="form-label" for="form3Example3cg" required>id no</label>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="password" name="password" id="password" class="form-control form-control-lg" required />
                    <label class="form-label" for="form3Example4cg" required>Password</label>
                  </div>
  
                  <div class="form-outline mb-4">
                    <input type="password" name="confirm_password" id="confirm_password" class="form-control form-control-lg"  required/>
                    <label class="form-label" for="confirm_password" required> confirm your password</label>
                  </div>
                 
                 
  
                  <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                  </div>
  
                  <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="log_in.php" class="fw-bold text-body">Log in</a></p>
  
                </form>
  
              </div>
              <?php
    if(isset($success_message)){
        echo '<div class="success_message">'.$success_message.'</div>';
    }
    if(isset($error_message)){
        echo '<div class="error_message">'.$error_message.'</div>';
    }
    ?>
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
    <script src="./JS/signin.js"></script>
</body>
</html>