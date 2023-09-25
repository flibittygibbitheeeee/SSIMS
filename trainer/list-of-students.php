<?php 

include '../db.php';
session_start();
$User_id = $_SESSION["Username"];
require '../vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;


if(isset($_GET['active'])){	

	$id = $_GET['active'];
	
	$result = $mysqli->query("SELECT Status FROM Users WHERE User_id = $id") or die($mysqli->error());

	if($result->num_rows){
		$row = $result->fetch_array();
		$Status = $row['Status'];
	}
	
	if($Status=='Yes'){
    	
        $result1 = $mysqli->query("SELECT * FROM Student WHERE User_id=$id") or die($mysqli->error());
            foreach($result1 as $row){
            $email = $row['Email'];
        }
    	
    	    $name = 'TAU SSIMS';
            $from = 'administrator@tau-ssims.online';	   
            $message = 'We regret to inform you that your account has been blacklisted. Please contact your administrator.';  
                
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
            $mail->Subject = 'Account Blacklisted';
            $mail->msgHTML(file_get_contents('message.html'), __DIR__);
            $mail->Body = $message;
            
                if (!$mail->send()) {
                   echo 'Mailer Error: ' . $mail->ErrorInfo;
                } 
                else {
                    $mysqli->query("UPDATE `Users` SET `Status`= 'No' WHERE User_id=$id") or die($mysqli->error);
            	    header("location: list-of-students.php");
                }		
	}
	elseif($Status=='No'){
	    
    	$result1 = $mysqli->query("SELECT * FROM Student WHERE User_id=$id") or die($mysqli->error());
            foreach($result1 as $row){
            $email = $row['Email'];
        }
    	
    	    $name = 'TAU SSIMS';
            $from = 'administrator@tau-ssims.online';	   
            $message = 'Welcome back! Your account has been activated.';  
                
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
            $mail->Subject = 'Account Reactivation';
            $mail->msgHTML(file_get_contents('message.html'), __DIR__);
            $mail->Body = $message;
            
                if (!$mail->send()) {
                   echo 'Mailer Error: ' . $mail->ErrorInfo;
                } 
                else {
                    $mysqli->query("UPDATE `Users` SET `Status`= 'Yes' WHERE User_id=$id") or die($mysqli->error);
            	    header("location: list-of-students.php");
                }	
        }
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="UTF-8" />
		<title>TAU - SSIMS</title>

		<!-- Site favicon -->
		<link rel="icon" type="image/png" sizes="16x16" href="../assets/TAU logo.png"/>

		<!-- Mobile Specific Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		
        <!-- CSS -->
		<link rel="stylesheet" type="text/css" href="../css/user.css">    
		<link rel="stylesheet" type="text/css" href="../imported/vendors/styles/core.css" />
		<link rel="stylesheet" type="text/css" href="../imported/vendors/styles/icon-font.min.css"/>
		<link rel="stylesheet" type="text/css" href="../imported/src/plugins/datatables/css/dataTables.bootstrap4.min.css"/>
		<link rel="stylesheet" type="text/css" href="../imported/src/plugins/datatables/css/responsive.bootstrap4.min.css"/>
		<link rel="stylesheet" type="text/css" href="../imported/vendors/styles/style.css" />
		<script src="https://kit.fontawesome.com/93e3069a39.js" crossorigin="anonymous"></script>

	</head>
	<body>
		<div class="header">
			<div class="header-left">
				<div class="menu-icon bi bi-list"></div>
			</div>
		</div>
		<div class="left-side-bar sidebar-light">
			<div class="profile">
                <div class="prof-top">
				    <img src="../assets/TAU logo.png">
                    <p class="studname">
                        <?php
							$name = $mysqli->query("SELECT First_Name, Middle_Name, Last_Name FROM Trainer WHERE User_id = $User_id") or die($mysqli->error);
								
							while($row = $name->fetch_assoc()) 
								{
									echo $row['First_Name']; echo ' ';
									echo $row['Middle_Name']; echo ' ';
									echo $row['Last_Name'];
								}
						?>
                    </p>
                </div>
				<div class="close-sidebar" data-toggle="left-sidebar-close">
					<i class="ion-close-round"></i>
				</div>
			</div>
			
			<div class="menu-block customscroll">
				<div class="sidebar-menu">
					<ul id="accordion-menu">
						<li>
							<a href="dashboard.php" class="dropdown-toggle no-arrow">
								<span class="micon bi bi bi-house"></span>
                                <span class="mtext">Dashboard</span>
							</a>
						</li>
				<!--		<li>
							<a href="student-profile.php" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-person-check"></span>
								<span class="mtext">My Profile</span>
							</a>
						</li> -->
						<li>
							<a href="list-of-students.php" class="dropdown-toggle no-arrow" style="background: #031E23; color: white;">
								<span class="micon bi bi-person-check"></span>
								<span class="mtext">Students</span>
							</a>
						</li>
						<li>
							<a href="../index.php" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-arrow-left"></span>
								<span class="mtext">Logout</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="mobile-menu-overlay"></div>

		<div class="main-container"> 
			<div class="xs-pd-20-10 pd-ltr-20">
				<div class="title pb-20">
					<h2 class="h3 mb-0">Students</h2>
				</div>
			
				<form method="Post" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-9">
							<div class="pd-20 card-box mb-30">
								<section>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
											    
                                            <div class="card-box pb-10">
                                                <table class="data-table table nowrap">
                                                <?php 
                                                    $query = $mysqli->query("SELECT s.*, u.* FROM Student as s INNER JOIN Users as u ON s.User_id = u.User_id ") or die($mysqli->error());
                                                    while($row = $query->fetch_assoc()):
                                                        $file2 = $row['file'];
                                                ?>
                                                    <thead>
                                                        <tr>
                                                            <th>Photo</th>
                                                            <th class="table-plus">Name</th>
                                                            <th>Email</th>
                                                            <th>Active</th>
                                                            <th class="datatable-nosort">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="avatar mr-2 flex-shrink-0">
                                                                    <?php if($file2 == ''): ?>
                                                                        <img src="../uploads/User.png" class="border-radius-100 shadow" width="40" height="40"> 
                                                                    <?php elseif($file2 != ''): ?>
                                                                        <img src="../uploads/<?php echo $row['file']; ?>" class="border-radius-100 shadow" width="40" height="40"> 
                                                                    <?php endif; ?>                                            
                                                                </div>
                                                            </td>
                                                            <td class="table-plus">                                                                    
                                                                <div class="txt">
                                                                    <div class="weight-600"><?php echo $row['First_Name'];?> <?php echo $row['Middle_Name'];?> <?php echo $row['Last_Name'];?> </div>
                                                                </div>
                                                            </td>
                                                            <td><?php echo $row['Email'];?></td>
                                                            <td>
                                                                <a onClick="return confirm('CONFIRM REQUEST');" style="text-decoration: none" href="list-of-students?active=<?php echo $row['User_id']; ?>">
                                                                    <span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7"><?php echo $row['Status']; ?></span>
                                                                </a>


                                                                <a onClick="return confirm('CONFIRM REQUEST');" style="text-decoration: none" href="list-of-students?active=<?php echo $row['User_id']; ?>">
                                                                    <?php if($row['Status'] == 'yes'): ?>
                                                                        <span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7"><?php echo $row['Status']; ?></span>
                                                                    <?php elseif($row['Status'] == 'no'): ?>
                                                                        <span class="badge badge-pill" data-bgcolor="#f1bec3" data-color="#dc3545"><?php echo $row['Status']; ?></span>
                                                                    <?php endif; ?> 
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <div class="table-actions">
                                                                    <!-- <a href="#" data-color="#265ed7">
                                                                        <i class="icon-copy dw dw-edit2"></i>
                                                                    </a> -->
                                                                    <a onClick="return confirm('CONFIRM REQUEST');" style="text-decoration: none" href="list-of-students.php?delete=<?php echo $row['User_id']; ?>" data-color="#e95959">
                                                                        <i class="icon-copy dw dw-delete-3"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <?php endwhile; ?>
                                                </table>
                                            </div>
                                                
											</div>
										</div>
									</div>
									
								</section>
							</div>
						</div>
						<div class="col-md-3" style="display: flex; align-items: center; flex-direction: column;">
							<div class="pd-20 card-box mb-30">
								<div class="img-profile">
								    <?php 
                                        $result1 = $mysqli->query("SELECT * FROM Trainer as s INNER JOIN Users as u ON s.User_id = u.User_id WHERE s.User_id = $User_id") or die($mysqli->error());
                                        if($result1->num_rows){
                                            $row = $result1->fetch_array();
                                            $file = $row['file'];
                                            }
				                    ?>
								    <?php if($file==''): ?>
								        <img src="../uploads/User.png  "> 
								    <?php elseif($file != ''): ?>
									    <img src="../uploads/<?php echo $row['file']; ?>"> 
								    <?php endif; ?>
								</div>
							</div>
						
						</div>
					</div>
				</form>
			</div>
		</div>

		<!-- js -->

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

		<script src="../imported/vendors/scripts/core.js"></script>
		<script src="../imported/vendors/scripts/script.min.js"></script>
		<script src="../imported/vendors/scripts/process.js"></script>
		<script src="../imported/vendors/scripts/layout-settings.js"></script>
		<script src="../imported/vendors/scripts/dashboard3.js"></script>
	</body>
</html>