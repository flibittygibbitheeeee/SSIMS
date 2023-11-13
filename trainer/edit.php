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
                                <span class="material-symbols-outlined micon" style="font-size: 30px;" >dashboard</span> 
                                <span class="mtext">Dashboard</span>
							</a>
						</li>
						<li>
							<a href="Tryouts-Application.php" class="dropdown-toggle no-arrow" style="background: #031E23; color: white;">
                                <span class="material-symbols-outlined micon" style="font-size: 30px;" data-color="#ffffff">group</span> 
								<span class="mtext">Try-outs</span>
							</a>
						</li>
				    	<li>
							<a href="trainer-profile.php" class="dropdown-toggle no-arrow">
                                <span class="material-symbols-outlined micon" style="font-size: 30px;">settings_account_box</span> 
								<span class="mtext">My Profile</span>
							</a>
						</li>
						<li>
							<a href="list-of-students.php" class="dropdown-toggle no-arrow" >
                                <span class="material-symbols-outlined micon" style="font-size: 30px;" >group</span> 
								<span class="mtext">Students</span>
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
						<div class="col-md-8">
							<div class="pd-20 card-box mb-30">
								<section>
									<?php 
                                                        
										$query = $mysqli->query("SELECT * FROM Tryouts_Appilcation  WHERE  Tryout_Id = '$id'  ") or die($mysqli->error());
										while($row = $query->fetch_assoc()):
											$file2 = $row['file'];
									?>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label>Age :</label>
												<div class="form-control"><p></p></div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Sex :</label>
												<div class="form-control"><p></p></div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
											    <label>Birthday :</label>
												<div class="form-control"><p></p></div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-8">
											<div class="form-group">
												<label>Mother :</label>
												<div class="form-control"><p></p></div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Mother's Number :</label>
												<div class="form-control"><p></p></div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-8">
											<div class="form-group">
												<label>Father :</label>
												<div class="form-control"><p></p></div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Father's Number :</label>
												<div class="form-control"><p></p></div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<div class="form-group">
												<label>Address : </label>
												<div class="form-control"><p></p></div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<div class="form-group">
												<label>Playing Experience :</label>
												<div class="form-control"><p></p></div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<div class="form-group">
												<label>Awards :</label>
												<div class="form-control"><p></p></div>
											</div>
										</div>
									</div>
									<?php endwhile; ?>
								</section>
							</div>
						</div>
						<?php 
							$query = $mysqli->query("SELECT * FROM Tryouts_Appilcation  WHERE  Tryout_Id = '$id'  ") or die($mysqli->error());
							while($row = $query->fetch_assoc()):
							$file2 = $row['file'];
						?>
						<div class="col-md-4" style="display: flex; align-items: center; flex-direction: column;">
							<div class="card-box d-block mx-auto pd-20 text-secondary">
								<div class="img pb-30">
									<?php if($file2 == ''): ?>
										<img src="../uploads/User.png" class="border-radius-100 shadow" style="height: 50px; width: auto;"> 
									<?php elseif($file2 != ''): ?>
										<img src="../uploads/<?php echo $file2; ?>" class="border-radius-100 shadow" style="height: 50px; width: 50px;"> 
									<?php endif; ?> 								
								</div>
								<div class="content">
									<!-- Modal for accept button -->

									<div class="modal fade" id="Medium-modal1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel1" aria-hidden="true">
										<div class="modal-dialog modal-dialog-centered">
											<div class="modal-content">
												<div class="modal-header">
													<h4 class="modal-title" id="myLargeModalLabel1">
														Add schedule for try-out
													</h4>
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
												</div>
												<div class="modal-body">
													<div class="form-group">
														<label>Select Date</label>
														<input name="dateof" class="form-control" type="date"/>
													</div>
													<div class="form-group">
														<label>Select time</label>
														<input name="timeof" class="form-control" type="time">
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">
														CANCEL
													</button>
													<button name="accept" type="submit" class="btn btn-primary">
														SAVE
													</button>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body">
									<a href="#" data-toggle="modal" data-target="#Medium-modal1" btype="button">
										<button type="button" class="btn btn-success">
											<span>Accept</span>
										</button>
									</a>									
								</div>
								</div>
							</div>
						</div>
						<?php endwhile; ?>
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