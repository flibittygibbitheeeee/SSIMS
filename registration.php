<?php

// include 'db.php';
// session_start();
// require 'vendor/autoload.php';
// use PHPMailer\PHPMailer\PHPMailer;

// $id = 0;

// if(isset($_POST['contact'])){	
	
	
	
// 	$uname = $_POST['user'];
// 	$pass = $_POST['password'];
// 	$email = $_POST['email'];
// 	$sno = $_POST['studentno'];
	
// 	$sql="select * from Student where Email='".$email."'AND Student_No='".$sno."' limit 1";
//     $result = $mysqli->query($sql);
    
//     $sql2="select * from Student_List where Email='".$email."'AND Student_No='".$sno."' limit 1";
//     $result2 = $mysqli->query($sql2);
	
// 	if(mysqli_num_rows($result2) == 1){
	
//         if(mysqli_num_rows($result) == 0){
        
//             $name = 'TAU SSIMS';
//             $from = 'administrator@tau-ssims.online';	   
//             $message = 'Greetings!';  
                
//             $mail = new PHPMailer;
//             $mail->isSMTP();
//             $mail->SMTPDebug = 2;
//             $mail->Host = 'smtp.hostinger.com';
//             $mail->Port = 587;
//             $mail->SMTPAuth = true;
//             $mail->Username = 'administrator@tau-ssims.online';
//             $mail->Password = 'Adminssims2023!';
//             $mail->setFrom('administrator@tau-ssims.online', 'TAU SSIMS');
//             $mail->addReplyTo($from, $name);
//             $mail->addAddress($email, 'User');
//             $mail->Subject = 'Account Creation Successful';
//             $mail->msgHTML(file_get_contents('message.html'), __DIR__);
//             $mail->Body = 'Message: ' ."$message";
            
//                 if (!$mail->send()) {
//                    echo 'Mailer Error: ' . $mail->ErrorInfo;
//                 } 
//                 else {
//                         $mysqli->query("INSERT INTO Users (Username, Password, Type) VALUES('$uname', '$pass', 'student')") or die($mysqli->error);
//                         $mysqli->query("INSERT INTO Student (Student_No, First_Name, Middle_Name, Last_Name, Email, Phone_No) VALUES('$sno', ' ', ' ', ' ', '$email', ' ' )") or die($mysqli->error);
//                 	    header("location: login.php");
//                 }		
//         }
        
//         elseif(mysqli_num_rows($result) == 1) {
            
//             echo '<script type="text/javascript">';
//     		echo ' alert("ACCOUNT ALREADY REGISTERED")';  
//     		echo '</script>';
            
//         }
// 	}
	
// 	elseif(mysqli_num_rows($result2) != 1){
	 
// 	    echo '<script type="text/javascript">';
// 		echo ' alert("INVALID ACCOUNT\nPLEASE CONTACT ADMINISTRATOR")';  
// 		echo '</script>';
	    
// 	}
			
// }

?>

<?php
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/93e3069a39.js" crossorigin="anonymous"></script>
    <title>TAU - SSIMS</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/mini.png"/>
  </head>
  <body>
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">

            <form method="POST" class="sign-up-form">

              <div class="heading">
                <h2>Get Started</h2>
                <h6>Already have an account?</h6>
                <a href="login.php" class="toggle">Sign in</a>
              </div>

              <div class="actual-form">
                <div class="input-field">
                  <i class="fas fa-user"></i>
                  <input type="text" name="username" autocomplete="off" required pattern="[a-zA-Z'-'\s]*" placeholder="Username"/>
                </div>

                <div class="input-field">
                    <i class="fa-regular fa-envelope"></i>                  
                  <input type="email" name="email" placeholder="Email"  autocomplete="off" required/>
                </div>

                <div class="input-field" style="margin-bottom: 50px;">
                  <i class="fas fa-lock"></i>
                  <input type="password" name="password" minlength="6" placeholder="Password" autocomplete="off" required/>
                </div>

                <input type="submit" name="register" value="Sign Up" class="sign-btn" />
                
                <div class="return">
                    <a href="#"><i class="fa-solid fa-caret-left"></i> Go back</a>
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