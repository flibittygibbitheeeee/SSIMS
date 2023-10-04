<?php 

include '../db.php';
session_start();
$User_id = $_SESSION["Username"];
require '../vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;


if(isset($_POST['submit_anno'])){	
	
	$message = $_POST['message'];
	$dept = $_POST['dept'];
	
	$mysqli->query("INSERT INTO Announcement (Message, Status, Department) VALUES('$message', 'Active', '$dept')") or die($mysqli->error);
    header("location: dashboard.php");
}

if(isset($_POST['submit_sched'])){	
	
	$messages = $_POST['messages'];
	$dates = $_POST['dates'];
	$dept = $_POST['depts'];
	
	
	if ($dept=='All'){
	    
	$c = $mysqli->query("SELECT Email FROM Trainer") or die ($mysqli->error);
    while ($row2 = $c->fetch_assoc())
    {
        $email = $row2['Email'];   
    
        $name = 'TAU SSIMS';
        $from = 'administrator@tau-ssims.online';	   
        $message = $messages;  
        $mail = new PHPMailer;
     // $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->Host = 'smtp.hostinger.com';
        $mail->Port = 587;
        $mail->SMTPAuth = false;
        $mail->Username = 'administrator@tau-ssims.online';
        $mail->Password = 'Adminssims2023!';
        $mail->setFrom('administrator@tau-ssims.online', 'TAU SSIMS');
        $mail->addReplyTo($from, $name);
        $mail->addAddress($email, 'User');
        $mail->Subject = 'Schedule Update';
        $mail->msgHTML(file_get_contents('message.html'), __DIR__);
        $mail->Body = $message;
        
            if(!$mail->send()){
               echo 'Mailer Error: ' . $mail->ErrorInfo;
            } 
    } 
    
    $d = $mysqli->query("SELECT Email FROM Student") or die ($mysqli->error);
    while ($row3 = $d->fetch_assoc())
    {
        $emails = $row3['Email'];   
    
        $names = 'TAU SSIMS';
        $froms = 'administrator@tau-ssims.online';	   
        $message2 = $messages;  
        $mail = new PHPMailer;
     // $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->Host = 'smtp.hostinger.com';
        $mail->Port = 587;
        $mail->SMTPAuth = false;
        $mail->Username = 'administrator@tau-ssims.online';
        $mail->Password = 'Adminssims2023!';
        $mail->setFrom('administrator@tau-ssims.online', 'TAU SSIMS');
        $mail->addReplyTo($froms, $names);
        $mail->addAddress($emails, 'User');
        $mail->Subject = 'Schedule Update';
        $mail->msgHTML(file_get_contents('message.html'), __DIR__);
        $mail->Body = $message2;
        
            if(!$mail->send()){
               echo 'Mailer Error: ' . $mail->ErrorInfo;
            } 
    } 
	
	$mysqli->query("INSERT INTO Schedule (Message, Date, Status, Department) VALUES('$messages', '$dates', 'Active', '$dept')") or die($mysqli->error);
    header("location: dashboard.php");
    
	}
	
	else{
	    
	$c = $mysqli->query("SELECT Email FROM Trainer as T INNER JOIN Users as s ON T.User_id = s.User_id WHERE Department = '$dept' ") or die ($mysqli->error);
    while ($row2 = $c->fetch_assoc())
    {
        $email = $row2['Email'];   
    
        $name = 'TAU SSIMS';
        $from = 'administrator@tau-ssims.online';	   
        $message = $messages;  
        $mail = new PHPMailer;
     // $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->Host = 'smtp.hostinger.com';
        $mail->Port = 587;
        $mail->SMTPAuth = false;
        $mail->Username = 'administrator@tau-ssims.online';
        $mail->Password = 'Adminssims2023!';
        $mail->setFrom('administrator@tau-ssims.online', 'TAU SSIMS');
        $mail->addReplyTo($from, $name);
        $mail->addAddress($email, 'User');
        $mail->Subject = 'Schedule Update';
        $mail->msgHTML(file_get_contents('message.html'), __DIR__);
        $mail->Body = $message;
        
            if(!$mail->send()){
               echo 'Mailer Error: ' . $mail->ErrorInfo;
            } 
    }   
	
	$mysqli->query("INSERT INTO Schedule (Message, Date, Status, Department) VALUES('$messages', '$dates', 'Active', '$dept')") or die($mysqli->error);
    header("location: dashboard.php");
	}
}

if(isset($_GET['delete'])){
    
    $id = $_GET['delete'];
    
    $mysqli->query("DELETE FROM Schedule WHERE Sched_id = $id") or die($mysqli->error());
    $mysqli->query("DELETE FROM Schedule WHERE Sched_id = $id") or die($mysqli->error());
    header("location: dashboard.php");
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
                </div>
				<div class="close-sidebar" data-toggle="left-sidebar-close">
					<i class="ion-close-round"></i>
				</div>
			</div>
			
			<div class="menu-block customscroll">
				<div class="sidebar-menu">
					<ul id="accordion-menu">
						<li>
							<a href="#" class="dropdown-toggle no-arrow" style="background: #031E23; color: white;">
								<span class="micon bi bi bi-house" data-color="#ffffff"></span>
                                <span class="mtext">Dashboard</span>
							</a>
						</li>
				        <li>
							<a href="list-of-trainers.php" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-person-check"></span>
								<span class="mtext">Trainers</span>
							</a>
						</li> 
						<li>
							<a href="list-of-students.php" class="dropdown-toggle no-arrow">
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
					<h2 class="h3 mb-0">Dashboard</h2>
				</div>
				<form method="Post" enctype="multipart/form-data">
				    <?php 
				        $result1 = $mysqli->query("SELECT * FROM Users  WHERE User_id = $User_id") or die($mysqli->error);
            	       	    while($row = $result1->fetch_assoc()) {
                			    $dept = $row['Department'];
            	            }
				    ?>
					<div class="row">
						<div class="col-md-10">
						    <div class="row">
						        <div class="col-md-6">
						            <div class="pd-20 card-box mb-30">
						                <a href="#" data-toggle="modal" data-target="#Medium-modal1" btype="button">
        									<button type="button" class="btn btn-success">
        										<i class="fa-solid fa-plus"></i>
        										<span>New</span>
        									</button>
        								</a>
        								
										<!-- Modal for new schedule -->

										<div class="modal fade" id="Medium-modal1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel1" aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered">
												<div class="modal-content">
													<div class="modal-header">
														<h4 class="modal-title" id="myLargeModalLabel1">
															Add new schedule
														</h4>
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
													</div>
													<div class="modal-body">
														<div class="form-group">
															<label>Select Date</label>
															<input name="dates" class="form-control" type="date"/>
														</div>
														
														<div class="form-group">
															<label>Send to:</label>	
            												<?php 	$department = $mysqli->query("SELECT * FROM Department") or die($mysqli->error); ?>
															    <select name="depts" class="custom-select form-control">
                                                            <?php    while($row = $department->fetch_assoc()): ?>
					                                                   <option value="<?php echo $row['Name'];?>"><?php echo $row['Name'];?><?php endwhile;?></option>
					                                            </select>
														</div>
												
														<div class="form-group">
															<label>What's on your mind?</label>
															<textarea name="messages" class="form-control"></textarea>
														</div>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-dismiss="modal">
															CANCEL
														</button>
														<button name="submit_sched" type="submit" class="btn btn-primary">
															SAVE
														</button>
													</div>
												</div>
											</div>
										</div>

										<div class="form-group" style="margin-top: 20px;">
											<label style="font-weight: 600; font-size: 24px; color: red;">Schedule: </label>
										</div>
										
										<?php $result2 = $mysqli->query("SELECT * FROM Schedule ") or die($mysqli->error); ?>


                                        <div class="card-box pb-10">
                                                <table class="data-table table nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>Event</th>
                                                            <th>Date</th>
                                                            <th class="datatable-nosort">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php  while($row3 = $result2->fetch_assoc()): ?> 
                                                        <tr>
                                                            <td><?php echo $row3['Message']; ?></td>
                                                            <td><?php echo $row3['Date']; ?></td>
                                                            <td>
                                                                <div class="table-actions">
                                                                    <a onClick="return confirm('CONFIRM REQUEST');" style="text-decoration: none" href="list-of-students.php?delete=<?php echo $row['User_id']; ?>" data-color="#e95959">
                                                                        <i class="icon-copy dw dw-delete-3"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <?php endwhile; ?>
                                                    </tbody>
                                                </table>
                                            </div>						            
                                    </div>
						        </div>
						        <div class="col-md-6">
						            <div class="pd-20 card-box mb-30">
										<a href="#" data-toggle="modal" data-target="#Medium-modal2" btype="button">
											<button type="button" class="btn btn-success">
												<i class="fa-solid fa-plus"></i>
												<span>New</span>
											</button>
										</a>

										<!-- Modal for new announcement -->
										<div class="modal fade" id="Medium-modal2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel2" aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered">
												<div class="modal-content">
													<div class="modal-header">
														<h4 class="modal-title" id="myLargeModalLabel2">
															Add new announcement
														</h4>
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
													</div>
													<div class="modal-body">
														<div class="form-group">
															<label>Send to:</label>	
            												<?php 	$department = $mysqli->query("SELECT * FROM Department") or die($mysqli->error); ?>
															    <select name="dept" class="custom-select form-control">
                                                            <?php    while($row = $department->fetch_assoc()): ?>
					                                                   <option value="<?php echo $row['Name'];?>"><?php echo $row['Name'];?><?php endwhile;?></option>
					                                            </select>
														</div>
													</div>
													<div class="modal-body">
														<div class="form-group">
															<label>What's on your mind?</label>
															<textarea name="message" class="form-control"></textarea>
														</div>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-dismiss="modal">
															CANCEL
														</button>
														<button name="submit_anno" type="submit" class="btn btn-primary">
															POST
														</button>
													</div>
												</div>
											</div>
										</div>

										<div class="form-group" style="margin-top: 20px;">
											<label style="font-weight: 600; font-size: 24px; color: red;">Announcement :</label>
										</div>
										
										
										<?php 
											$result2 = $mysqli->query("SELECT * FROM Announcement") or die($mysqli->error);
                                	        while($row2 = $result2->fetch_assoc())
                                	        {
                                    			$mes = $row2['Message'];
                                    			echo $mes; 
                                    	?>
                                    	    <br><br>		
                    		            <?php } ?>
										</div>
						        </div>
						    </div>
						</div>
						<div class="col-md-2" style="display: flex; align-items: center; flex-direction: column;">
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
                                    <p class="studname">
                        <?php
							$name = $mysqli->query("SELECT First_Name FROM Admin WHERE User_id = $User_id") or die($mysqli->error);
								
							while($row = $name->fetch_assoc()) 
								{
									echo $row['First_Name']; echo ' ';
								}
						?>
                    </p>
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