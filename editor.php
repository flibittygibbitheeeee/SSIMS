
<?php 

include '../db.php';
session_start();
$User_id = $_SESSION["Username"];

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
							<a href="#" class="dropdown-toggle no-arrow">
								<span class="micon bi bi bi-house"></span>
                                <span class="mtext">Dashboard</span>
							</a>
						</li>
				<!--		<li>
							<a href="student-profile.php" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-person-check"></span>
								<span class="mtext">My Profile</span>
							</a>
						</li>  -->
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
					<div class="row">
						<div class="col-md-9">
							<div class="pd-20 card-box mb-30">
								<section>
									<div class="row">
										<div class="col-md-6"><button>New</button>
											<div class="form-group">
												<label>Schedule: </label>
											</div>
										</div>
										<div class="col-md-6"><button>New</button>
											<div class="form-group">
												<label>Announcement :</label>
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