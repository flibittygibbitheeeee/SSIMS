<?php 

include '../db.php';
session_start();
$User_id = $_SESSION["Username"];
require '../vendor/autoload.php';

    
if(isset($_GET['delete'])){
    
    $id = $_GET['delete'];
    
    $mysqli->query("DELETE FROM Student_List WHERE Student_Id = $id") or die($mysqli->error());
   // $mysqli->query("DELETE FROM Users WHERE User_id = $id") or die($mysqli->error());
    header("location: Student-Database.php");
}

if(isset($_POST['add_new'])){
    
    $email = $_POST['email'];
    $sno = $_POST['sno'];
    
    $mysqli->query("INSERT INTO Student_List (Student_No, Email) VALUES( '$sno', '$email' )") or die($mysqli->error);
    header("location: Student-Database.php");
  
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
							<a href="list-of-students.php" class="dropdown-toggle no-arrow" >
                                <span class="material-symbols-outlined micon" style="font-size: 30px;">group</span> 
								<span class="mtext">Students</span>
							</a>
						</li>
						<li>
							<a href="Students-Database.php" class="dropdown-toggle no-arrow" style="background: #031E23; color: white;" >
                                <span class="material-symbols-outlined micon" style="font-size: 30px;" data-color="#ffffff">database</span> 
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
					<h2 class="h3 mb-0">Master's List</h2>
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
        											Add new
        										</h4>
        										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        									</div>
											<div class="modal-body">
                    							<div class="form-group">
                    								<label>Email</label>
                    								<input class="form-control" type="text" name="email"/>
                    							</div>
                    							<div class="form-group">
                    							    <label>Student Number</label>
                    							    <input class="form-control" type="text" name="sno"/>
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
                                                            <th>Student Number</th>
                                                            <th>Email</th>
                                                            <th class="datatable-nosort">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <?php 
                                                        $query = $mysqli->query("SELECT * FROM Student_List ") or die($mysqli->error());
                                                        while($row = $query->fetch_assoc()):
                                                    ?>
                                                    <tbody>
                                                        <tr>
                                                            <td><?php echo $row['Student_No'];?></td>
                                                            <td><?php echo $row['Email'];?></td>
                                                            <td>
                                                                <div class="table-actions">
                                                                    <!-- <a href="#" data-color="#265ed7">
                                                                        <i class="icon-copy dw dw-edit2"></i>
                                                                    </a> -->
                                                                    <a onClick="return confirm('CONFIRM REQUEST');" style="text-decoration: none" href="Student-Database.php?delete=<?php echo $row['Student_Id']; ?>" data-color="#e95959">
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