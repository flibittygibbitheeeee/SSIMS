<?php 

include 'db.php';
session_start();
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;

$a = $_SESSION["User"];


//if($a == ''){
//	 header('location: index.php');
//}

if(isset($_POST['update'])){	
	
	 $new = $_POST['newpassword'];
	 $confirm = $_POST['confirmpassword'];
	 
	 $result1 = $mysqli->query("SELECT * FROM Student WHERE User_id = '$a'") or die($mysqli->error());
    					foreach($result1 as $row){
                    	$email = $row['Email'];
                    	}
	 
	 if($new==$confirm){
	 
        $name = 'TAU SSIMS';
        $from = 'administrator@tau-ssims.online';	   
        $code = rand(100000, 900000);  
            
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPDebug = false;
        $mail->Host = 'smtp.hostinger.com';
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->Username = 'administrator@tau-ssims.online';
        $mail->Password = 'Adminssims2023!';
        $mail->setFrom('administrator@tau-ssims.online', 'TAU SSIMS');
        $mail->addReplyTo($from, $name);
        $mail->addAddress($email, 'User');
        $mail->Subject = 'Reset Password';
        $mail->msgHTML(file_get_contents('message.html'), __DIR__);
        $mail->Body = 'You have successfully changed your password.' ;
        
            if (!$mail->send()) {
               echo 'Mailer Error: ' . $mail->ErrorInfo;
            } 
            else {   
                $mysqli->query("Update Users SET  Password = '$confirm' WHERE User_id = '$a'") or die($mysqli->error);
                header("location: login.php");
        }    		
    }		
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/93e3069a39.js" crossorigin="anonymous"></script>
    <title>TAU - SSIMS</title>
    <link rel="icon" type="image/png" sizes="16x16" href="assets/mini.png"/>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form autocomplete="off" method="POST" class="sign-in-form">

              <div class="heading">
                <h2>Forgot Password</h2>
              </div>

              <div class="actual-form">
                <div class="input-field">
                  <i class="fas fa-lock"></i>
                  <input type="password" name="newpassword" minlength="6" id="password-input" placeholder="New password" autocomplete="off" required/>
                  <span id="toggle-password">
                      <i id="toggle-icon" class="fa-regular fa-eye-slash"></i>
                  </span>
                </div>
                <div class="input-field">
                  <i class="fas fa-lock"></i>
                  <input type="password" name="confirmpassword" minlength="6" id="confirm" placeholder="Confirm password" autocomplete="off" required/>
                  <span id="toggle-confirm">
                      <i id="icon-confirm" class="fa-regular fa-eye-slash"></i>
                  </span>
                </div>

                <input type="submit" name="update" value="Reset" class="sign-btn" />
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

        const con = document.getElementById('confirm');
        const toggleConfirm = document.getElementById('toggle-confirm');
        const iconConfirm = document.getElementById('icon-confirm');

        toggleConfirm.addEventListener('click', function() {
            if (con.type === 'password') {
                con.type = 'text';
                iconConfirm.classList.remove('fa-eye-slash');
                iconConfirm.classList.add('fa-eye');
            } else {
                con.type = 'password';
                iconConfirm.classList.remove('fa-eye');
                iconConfirm.classList.add('fa-eye-slash');
            }
        });

    </script>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </body>
</html>

                                                                                                                                                                                                                             