<?php 

include '../db.php';
session_start();
$User_id = $_SESSION["Username"];

if($User_id ==''){
    header("location: ../index.php");
}

    $fname = '';
	$mname =''; 
	$lname = '';
	$phone = '';
		
if(isset($_POST['update']) and isset ($_FILES['photo'])){	

	$fname = $_POST['firstname'];
	$mname = $_POST['middlename'];
	$lname = $_POST['lastname'];
	$phone = $_POST['phonenumber'];
	
	$file = rand(1000,100000)."-".$_FILES['photo']['name'];
	$file_loc = $_FILES['photo']['tmp_name'];
	$file_size = $_FILES['photo']['size'];
	$file_type = $_FILES['photo']['type'];
	$folder="../uploads/";
	move_uploaded_file($file_loc,$folder.$file);
	
	$mysqli->query("UPDATE `Student` SET First_Name = '$fname', Middle_Name = '$mname', Last_Name = '$lname', Phone_No = '$phone', file = '$file', type = '$file_type', size = '$file_size' WHERE User_id = $User_id") or die($mysqli->error);
	header("location: student-profile.php");
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
							<a href="student-profile.php" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-person-check"></span>
								<span class="mtext">My Profile</span>
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
													</tr>
												</thead>
												<tbody>
													<?php  while($row3 = $result2->fetch_assoc()): ?> 
													<tr>
														<td><?php echo $row3['Message']; ?></td>
														<td><?php echo $row3['Date']; ?></td>
													</tr>
													<?php endwhile; ?>
												</tbody>
											</table>
										</div>						            
                                    </div>
						        </div>
						        <div class="col-md-6">
						            <div class="pd-20 card-box mb-30">
										<div class="form-group" style="margin-top: 20px;">
											<label style="font-weight: 600; font-size: 24px; color: red;">Announcement :</label>
										</div>

										<div class="card-box pb-10">
                                            <table class="data-table table nowrap">
                                                <tbody>
                                                <?php
                                                    $result2 = $mysqli->query("SELECT * FROM Announcement") or die($mysqli->error);
                                                    while($row2 = $result2->fetch_assoc()){ ?>
                                                    <tr>
                                                        <td><?php echo $row2['Message']; ?></td>
                                                    </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
									</div>
						        </div>
						    </div>
						</div>
						<div class="col-md-2" style="display: flex; align-items: center; flex-direction: column;">
							<div class="pd-20 card-box mb-30">
								<div class="img-profile">
								    <?php 
                				        $result1 = $mysqli->query("SELECT * FROM Student as s INNER JOIN Users as u ON s.User_id = u.User_id WHERE s.User_id = $User_id") or die($mysqli->error());
                            	        if($result1->num_rows){
                                			$row = $result1->fetch_array();
                                			$file = $row['file'];
                		                }
				                    ?>
									<?php if($file==''): ?>
								        <img src="../uploads/User.png  "> 
								    <?php elseif($file != ''): ?>
									    <img src="../uploads/<?php echo $file; ?>"> 
								    <?php endif; ?>
									<p class="studname">
										<?php
											$name = $mysqli->query("SELECT First_Name FROM Student WHERE User_id = $User_id") or die($mysqli->error);
												
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