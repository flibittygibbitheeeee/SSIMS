<?php

// include 'db.php';
// session_start();

// if(isset($_POST['log'])){	
	
// 	$uname=$_POST['username'];
//     $password=$_POST['password'];
//     $sql="select * from Users where Username='".$uname."'AND Password='".$password."' limit 1";
//     $result = $mysqli->query($sql);
    
//     if(mysqli_num_rows($result)==1){
//         header("location: home.php"); $_SESSION["Username"] = $_POST['username'];
//     }
// }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/93e3069a39.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" sizes="16x16" href="assets/mini.png"/>
    <title>TAU - SSIMS</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form autocomplete="off" method="POST" class="sign-in-form">

              <div class="heading">
                <h2>Welcome Back</h2>
                <h6>Not registered yet?</h6>
                <a href="registration.php" class="toggle">Sign up</a>
              </div>

              <div class="actual-form">
                <div class="input-field">
                  <i class="fa-regular fa-envelope"></i>                  
                  <input type="email" name="email" placeholder="Email"  autocomplete="off" required/>
                </div>

                <div class="input-field" style="margin-bottom: 10px;">
                  <i class="fas fa-lock"></i>
                  <input type="password" name="password" minlength="6" id="password-input" placeholder="Password" autocomplete="off" required/>
                  <span id="toggle-password">
                      <i id="toggle-icon" class="fa-regular fa-eye-slash"></i>
                  </span>
                </div>

                <div class="fp">
                  <a href="forgotpassword.php">Forgot Password?</a>
                </div>

                <input type="submit" name="login" value="Sign In" class="sign-btn" />

                <div class="return">
                  <a href="index.php"><i class="fa-solid fa-caret-left"></i> Go back</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </main>

    <!-- Javascript file -->
    <script>
        const passwordInput = document.getElementById('password-input');
        const togglePassword = document.getElementById('toggle-password');
        const toggleIcon = document.getElementById('toggle-icon');

        togglePassword.addEventListener('click', function() {
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </body>
</html>