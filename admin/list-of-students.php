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
    
if(isset($_GET['delete'])){
    
    $id = $_GET['delete'];
    
    $mysqli->query("DELETE FROM Student WHERE User_id = $id") or die($mysqli->error());
    $mysqli->query("DELETE FROM Users WHERE User_id = $id") or die($mysqli->error());
    header("location: list-of-students.php");
}

if(isset($_POST['add_new'])){
    
    $email = $_POST['email'];
    $pass = 'password2023';
    $dept = $_POST['dept'];
    $sno = $_POST['sno'];
    
        $mysqli->query("INSERT INTO Users (Username, Password, Type, Status, Department) VALUES('$email', '$pass', 'student', 'Yes', '$dept')") or die($mysqli->error);
                    
        $result1 = $mysqli->query("SELECT * FROM Users WHERE Username = '$email' ") or die($mysqli->error());
		foreach($result1 as $row){
        	$User_id = $row['User_id'];
        	}
        $mysqli->query("INSERT INTO Student (Student_No, First_Name, Middle_Name, Last_Name, Birthday, Email, Phone_No, User_id) VALUES('$sno', ' ', ' ', ' ', ' ',  '$email', ' ', '$User_id' )") or die($mysqli->error);
        
            $name = 'TAU SSIMS';
            $from = 'administrator@tau-ssims.online';	   
             $message = "Congratulations! Your account has been created.\n\n
             Username: .$email.\nPassword: .$pass";  
                
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
            $mail->Subject = 'Ssims Account';
            $mail->msgHTML(file_get_contents('message.html'), __DIR__);
            $mail->Body = $message;
            
                if (!$mail->send()) {
                   echo 'Mailer Error: ' . $mail->ErrorInfo;
                } 
                else {
            	    header("location: list-of-trainers.php");
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
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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
                                <span class="material-symbols-outlined micon" style="font-size: 30px;">dashboard</span> 
                                <span class="mtext">Dashboard</span>
							</a>
						</li>
						<li>
							<a href="list-of-trainers.php" class="dropdown-toggle no-arrow">
                                <span class="material-symbols-outlined micon" style="font-size: 30px;">person_play</span> 
								<span class="mtext">Trainers</span>
							</a>
						</li> 
						<li>
							<a href="list-of-students.php" class="dropdown-toggle no-arrow" style="background: #031E23; color: white;">
                                <span class="material-symbols-outlined micon" style="font-size: 30px;" data-color="#ffffff">group</span> 
								<span class="mtext">Students</span>
							</a>
						</li>
						<li>
							<a href="Student-Database.php" class="dropdown-toggle no-arrow" >
                                <span class="material-symbols-outlined micon" style="font-size: 30px;">database</span> 
								<span class="mtext">Student Database</span>
							</a>
						</li>
						<li>
							<a href="../index.php" class="dropdown-toggle no-arrow">
                                <span class="material-symbols-outlined micon" style="font-size: 30px;">logout</span></span> 
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
						<div class="col">
							<div class="pd-20 card-box mb-30">
    							<a href="#" data-toggle="modal" data-target="#Medium-modal1" btype="button">
    								<button type="button" class="btn btn-success">
    									<i class="fa-solid fa-plus"></i>
    									<span>New</span>
    								</button>
    							</a>
    							
    				            <div class="modal fade" id="Medium-modal1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel1" aria-hidden="true">
        							<div class="modal-dialog modal-dialog-centered">
        								<div class="modal-content">
        									<div class="modal-header">
        										<h4 class="modal-title" id="myLargeModalLabel1">
        											Add new trainer
        										</h4>
        										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        									</div>
											<div class="modal-body">
                    							<div class="form-group">
                    								<label>Email</label>
                    								<input class="form-control" type="text" name="email"/>
                    							</div>
                    							<div class="form-group">
                    								<label>Student No.</label>
                    								<input class="form-control" type="text" name="sno"/>
                    							</div>
                    							<div class="form-group">
                    							    <label>Department</label>
                    							    <?php 	$department = $mysqli->query("SELECT * FROM Department WHERE Name != 'All'") or die($mysqli->error); ?>
															    <select name="dept" class="custom-select form-control">
                                                            <?php    while($row = $department->fetch_assoc()): ?>
					                                                   <option value="<?php echo $row['Name'];?>"><?php echo $row['Name'];?><?php endwhile;?></option>
					                                            </select>
                    							</div>
											</div>
        									<div class="modal-footer">
        										<button type="button" class="btn btn-secondary" data-dismiss="modal">
        											CANCEL
        										</button>
        										<button name="add_new" type="submit" class="btn btn-primary">
        											CREATE
        										</button>
        									</div>
        								</div>
        							
        							</div>
        						</div>
								<section style="margin-top: 20px;" id="cardTable">
									<div class="row">
										<div class="col">
											<div class="form-group">
                                                <table class="data-table table nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>Photo</th>
                                                            <th class="table-plus">Name</th>
                                                            <th>Email</th>
                                                            <th>Department</th>
                                                            <th>Active</th>
                                                            <th class="datatable-nosort">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <?php 
                                                        $query2 = $mysqli->query("SELECT Department FROM Users WHERE User_id = $User_id ") or die($mysqli->error());
                                                        if($query2->num_rows){
                                                			$row2 = $query2->fetch_array();
                                                			$dept = $row2['Department'];
                                                        }
                                                        $query = $mysqli->query("SELECT s.*, u.* FROM Student as s INNER JOIN Users as u ON s.User_id = u.User_id WHERE u.Type = 'student' ") or die($mysqli->error());
                                                        while($row = $query->fetch_assoc()):
                                                            $file2 = $row['file'];
                                                    ?>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <?php if($file2 == ''): ?>
                                                                    <img src="../uploads/User.png" class="border-radius-100 shadow" style="height: 50px; width: auto;"> 
                                                                <?php elseif($file2 != ''): ?>
                                                                    <img src="../uploads/<?php echo $row['file']; ?>" class="border-radius-100 shadow" style="height: 50px; width: 50px;"> 
                                                                <?php endif; ?>                                            
                                                            </td>
                                                            <td class="table-plus">                                                                    
                                                                <div class="txt">
                                                                    <div class="weight-600" style="text-transform: capitalize;"><?php echo $row['First_Name'];?> <?php echo $row['Middle_Name'];?> <?php echo $row['Last_Name'];?> </div>
                                                                </div>
                                                            </td>                                                            
                                                            <td><?php echo $row['Email'];?></td>
                                                            <td><?php echo $row['Department'];?></td>
                                                            <td>
                                                                <a onClick="return confirm('CONFIRM REQUEST');" style="text-decoration: none" href="list-of-students?active=<?php echo $row['User_id']; ?>">
                                                                    <?php if($row['Status'] == 'Yes'): ?>
                                                                        <span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7"><?php echo $row['Status']; ?></span>
                                                                    <?php elseif($row['Status'] == 'No'): ?>
                                                                        <span class="badge badge-pill" data-bgcolor="#f5e1e3" data-color="#dc3545"><?php echo $row['Status']; ?></span>
                                                                    <?php endif; ?> 
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <div class="table-actions">
                                                                    <!-- <a href="#" data-color="#265ed7">
                                                                        <i class="icon-copy dw dw-edit2"></i>
                                                                    </a> -->
                                                                    <a onClick="return confirm('CONFIRM REQUEST');" style="text-decoration: none" href="list-of-students?delete=<?php echo $row['User_id']; ?>" data-color="#e95959">
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
									
								</section>
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