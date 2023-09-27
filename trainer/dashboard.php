

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
							<a href="#" class="dropdown-toggle no-arrow" style="background: #031E23; color: white;">
								<span class="micon bi bi bi-house" data-color="#ffffff"></span>
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
										<div class="col-md-6">
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
																<input class="form-control date-picker" type="text"/>
															</div>
															<div class="form-group">
																<label>What's on your mind?</label>
																<textarea class="form-control"></textarea>
															</div>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-secondary" data-dismiss="modal">
																CANCEL
															</button>
															<button type="button" class="btn btn-primary">
																SAVE
															</button>
														</div>
													</div>
												</div>
											</div>

											<div class="form-group" style="margin-top: 20px;">
												<label style="font-weight: 600; font-size: 16px;">Schedules </label>
											</div>
										</div>
										<div class="col-md-6">
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
																<label>What's on your mind?</label>
																<textarea class="form-control"></textarea>
															</div>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-secondary" data-dismiss="modal">
																CANCEL
															</button>
															<button type="button" class="btn btn-primary">
																POST
															</button>
														</div>
													</div>
												</div>
											</div>

											<div class="form-group" style="margin-top: 20px;">
												<label style="font-weight: 600; font-size: 16px;">Announcements</label>
											</div>
										</div>
									</div>
								</section>
							</div>
						</div>
						<div class="col-md-3" style="display: flex; align-items: center; flex-direction: column;">
							<div class="pd-20 card-box mb-30">
								<div class="img-profile">

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