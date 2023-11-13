<?php 

include '../db.php';
session_start();
$User_id = $_SESSION["Username"];
require '../vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;



    
if(isset($_GET['delete'])){
    
    $id = $_GET['delete'];
    
    $mysqli->query("DELETE FROM Tryouts_Appilcation WHERE Tryout_Id = $id") or die($mysqli->error()); 
    header("location: Tryouts-Application.php");
}

if(isset($_GET['view'])){
    
    $id = $_GET['view'];
    
    header("location: View_Application.php"); $_SESSION["id"] = $id;
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
						<div class="col">
							<div class="pd-20 card-box mb-30">
								<section>
									<div class="row">
										<div class="col">
											<div class="form-group">
                                                <table class="data-table table nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>Image</th>
                                                            <th class="table-plus">Name</th>
                                                            <th>Year</th>
                                                            <th>Course</th>
                                                            <th>Contact Number</th>
                                                            <th>Email</th>
                                                            <th>Status</th>
                                                            <th class="datatable-nosort" colspan="2">Action</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <?php 
                                                        $query2 = $mysqli->query("SELECT Department FROM Users WHERE User_id = $User_id ") or die($mysqli->error());
                                                        if($query2->num_rows){
                                                			$row2 = $query2->fetch_array();
                                                			$dept = $row2['Department'];
                                                        }
                                                        $query = $mysqli->query("SELECT * FROM Tryouts_Appilcation  WHERE Department = '$dept' AND Status = 'Pending' ") or die($mysqli->error());
                                                        while($row = $query->fetch_assoc()):
                                                            $file2 = $row['file'];
                                                    ?>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <?php if($file2 == ''): ?>
                                                                    <img src="../uploads/User.png" class="border-radius-100 shadow" style="height: 50px; width: auto;"> 
                                                                <?php elseif($file2 != ''): ?>
                                                                    <img src="../uploads/<?php echo $file2; ?>" class="border-radius-100 shadow" style="height: 50px; width: 50px;"> 
                                                                <?php endif; ?>                                            
                                                            </td>
                                                            <td class="table-plus">                                                                    
                                                                <div class="txt">
                                                                    <div class="weight-600" style="text-transform: capitalize;"><?php echo $row['First_Name'];?> <?php echo $row['Middle_Name'];?> <?php echo $row['Last_Name'];?> </div>
                                                                </div>
                                                            </td>                                                            
                                                            <td><?php echo $row['Year_Level'];?></td>
                                                            <td><?php echo $row['Course'];?></td>
                                                            <td><?php echo $row['Contact_Number'];?></td>
                                                            <td><?php echo $row['Email'];?></td>
                                                            <td><?php echo $row['Status'];?></td>
                                                            <td>
                                                                <div class="table-actions">
                                                                    <!-- <a href="#" data-color="#265ed7">
                                                                        <i class="icon-copy dw dw-edit2"></i>
                                                                    </a> -->
                                                                    <a onClick="return confirm('CONFIRM REQUEST');" style="text-decoration: none" href="Tryouts-Application?delete=<?php echo $row['Tryout_Id']; ?>" data-color="#e95959">
                                                                        <i class="icon-copy dw dw-delete-3"></i>
                                                                    </a>
                                                                    <a  style="text-decoration: none" href="Tryouts-Application?view=<?php echo $row['Tryout_Id']; ?>" data-color="#e95959">
                                                                        <i class="fa-solid fa-eye"></i>
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