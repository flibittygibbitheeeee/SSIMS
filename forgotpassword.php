<?php

include 'db.php';
session_start();
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;

$id = 0;
$e= 'Email';
$update = true;

if(isset($_POST['getcode'])){	
	
	$email = $_POST['email'];
	//$getcode = $_POST['getcode'];
      
    if($email==''){
        $update = false;
        $es= 'Enter email';
    }  
    elseif($email!=''){  
        $name = 'TAU SSIMS';
        $from = 'administrator@tau-ssims.online';	   
        $code = rand(100000, 900000);  
            
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPDebug = 2;
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
        $mail->Body = 'Your activation code is: ' ."$code";
        
            if (!$mail->send()) {
               echo 'Mailer Error: ' . $mail->ErrorInfo;
            } 
            else {   
            	    header("location: forgotpassword.php"); 
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

              <?php if ($update == false): ?>
                    <div class="login-title">
                        <h4 class="text-center">Email Required</h4>
                    </div>
                <?php endif; ?>

              <div class="actual-form">
                <div class="input-field">
                  <i class="fa-regular fa-envelope"></i>                  
                  <input type="email" name="email" placeholder="Email"  autocomplete="off" />
                </div>

                <div class="input-field" style="margin-bottom: 20px;">
                    <i class="fa-solid fa-key"></i>                  
                    <input type="text" name="code" placeholder="Verification code" autocomplete="off" />
                </div>

                <div class="gc">
                    <input type="submit" name="getcode" value="Get Code" class="gc-btn"/>
                </div>

                <input type="submit" name="login" value="Sign In" class="sign-btn" />

                <div class="return">
                  <a href="login.php"><i class="fa-solid fa-caret-left"></i> Go back</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </main>

    <!-- Javascript file -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </body>
</html>