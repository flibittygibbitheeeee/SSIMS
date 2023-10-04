<?php 

include '../db.php';
session_start();
$User_id = $_SESSION["Username"];

$fname = '';
	$mname =''; 
	$lname = '';
	$phone = '';
		
if(isset($_POST['update']) and isset ($_FILES['photo'])){	

	
	$file = rand(1000,100000)."-".$_FILES['photo']['name'];
	$file_loc = $_FILES['photo']['tmp_name'];
	$file_size = $_FILES['photo']['size'];
	$file_type = $_FILES['photo']['type'];
	$folder="../uploads/";
	move_uploaded_file($file_loc,$folder.$file);
	$mysqli->query("UPDATE `Student` SET  file = '$file', type = '$file_type', size = '$file_size' WHERE User_id = $User_id") or die($mysqli->error);
	header("location: student-profile.php");
}	

if(isset($_POST['update_info'])){
	
	$fname = $_POST['firstname'];
	$mname = $_POST['middlename'];
	$lname = $_POST['lastname'];
	$phone = $_POST['phonenumber'];
	$bday = $_POST['bday'];
	$uname = $_POST['uname'];
	$pass = $_POST['password'];
	$mysqli->query("UPDATE `Users` SET Username = '$uname', Password = '$pass' WHERE User_id = $User_id") or die($mysqli->error);
	$mysqli->query("UPDATE `Student` SET First_Name = '$fname', Middle_Name = '$mname', Last_Name = '$lname', Birthday = '$bday', Phone_No = '$phone' WHERE User_id = $User_id") or die($mysqli->error);
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
							<a href="dashboard.php" class="dropdown-toggle no-arrow">
								<span class="micon bi bi bi-house"></span>
                                <span class="mtext">Dashboard</span>
							</a>
						</li>
						<li>
							<a href="#" class="dropdown-toggle no-arrow" style="background: #031E23; color: white;">
								<span class="micon bi bi-person-check" data-color="#ffffff"></span>
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
					<h2 class="h3 mb-0">My Profile</h2>
				</div>
				<form method="Post" enctype="multipart/form-data">
				    <?php 
				        $result1 = $mysqli->query("SELECT * FROM Student as s INNER JOIN Users as u ON s.User_id = u.User_id WHERE s.User_id = $User_id") or die($mysqli->error());
                	        if($result1->num_rows){
                    			$row = $result1->fetch_array();
                    			$fname = $row['First_Name'];
                    			$mname = $row['Middle_Name'];
                    			$lname = $row['Last_Name'];
                    			$bday = $row['Birthday'];
                    			$email = $row['Email'];
                    			$phone = $row['Phone_No'];
                    			$file = $row['file'];
                    			$uname = $row['Username'];
                    			$password = $row['Password'];
    		                }
				    ?>
					<div class="row">
						<div class="col-md-10">
							<div class="pd-20 card-box mb-30">
								<section>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>First Name : </label>
												<input type="text" name="firstname" class="form-control" value="<?php echo $fname; ?>" />
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Middle Name :</label>
												<input type="text" name="middlename" class="form-control" value="<?php echo $mname; ?>" />
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Last Name :</label>
												<input type="text" name="lastname" class="form-control" value="<?php echo $lname; ?>"  />
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
											    <label>Email :</label>
												<input type="text" name="email" class="form-control" value="<?php echo $email; ?>" disabled/>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Phone Number :</label>
												<input type="number" name="phonenumber" class="form-control" value="<?php echo $phone; ?>" />
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Birthday :</label>
												<input type="date" name="bday" onfocus="(this.type='date')" class="form-control" value="<?php echo $bday; ?>" />
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Username :</label>
												<input type="text" name="uname" class="form-control" value="<?php echo $uname; ?>" />
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Password :</label>
												<div class="form-control pass">
													<input type="password" name="password" minlength="6" id="password-input" autocomplete="off" value="<?php echo $password; ?>" />
													<span id="toggle-password">
														<i id="toggle-icon" class="fa-regular fa-eye-slash"></i>
													</span>
												</div>
											</div>
										</div>
									</div>
									<button type="submit" name="update_info" class="btn" id="submit-button">Update</button>
								</section>
							</div>
						</div>
						<div class="col-md-2" style="display: flex; align-items: center; flex-direction: column;">
							<div class="pd-20 card-box mb-30">
								<div class="img-profile">
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
								<hr>
								<div class="upload-file">
									<label class="hide-file" for="upload">Upload File</label>
									<input type="file" name="photo" multiple id="upload" />
								</div>						
							</div>
							<button type="submit" name="update" class="btn" id="submit-button">Update Picture</button>
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
