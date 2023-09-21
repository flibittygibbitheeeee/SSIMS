<?php

// include 'db.php';
// session_start();
// require 'vendor/autoload.php';
// use PHPMailer\PHPMailer\PHPMailer;
// $a = $_SESSION["User"];

// if(isset($_POST['register'])){	
	
	
// 	$fn = $_POST['firstname'];
// 	$mn = $_POST['middlename'];
// 	$ln = $_POST['lastname'];
// 	$phno = $_POST['phonenumber'];
	
// 	$mysqli->query("Update Student SET  First_Name = '$fn', Middle_Name = '$mn', Last_Name = '$ln', Phone_No = '$phno' WHERE User_id = '$a'") or die($mysqli->error);
// 	header("location: login.php");
			
// }


?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Basic Page Info -->
		<meta charset="UTF-8" />
		<title>TAU - SSIMS</title>

		<!-- Site favicon -->
		<link rel="apple-touch-icon" sizes="180x180" href="imported/vendors/images/apple-touch-icon.png"/>
		<link rel="icon" type="image/png" sizes="16x16" href="assets/mini.png"/>

		<!-- Mobile Specific Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

		<!-- CSS -->
        <link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="imported/vendors/styles/core.css" />
		<link rel="stylesheet" type="text/css" href="imported/vendors/styles/icon-font.min.css"/>
		<link rel="stylesheet" type="text/css" href="imported/vendors/styles/style.css" />
	</head>
    <body>
        <div class="pd-20 card-box mb-30" style="background: none; box-shadow: none">
            <div>
                <form method="Post">
                    <h4>Basic Information</h4>
                    <section style="margin-top: 40px;">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>First Name :</label>
                                    <input type="text" name="firstname" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Middle Name :</label>
                                    <input type="text" name="middlename" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Last Name :</label>
                                    <input type="text" name="lastname" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone Number :</label>
                                    <input type="text" name="phonenumber" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select City :</label>
                                    <select class="custom-select form-control">
                                        <option value="">Select City</option>
                                        <option value="Amsterdam">India</option>
                                        <option value="Berlin">UK</option>
                                        <option value="Frankfurt">US</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Date of Birth :</label>
                                    <input type="text" name="register" class="form-control date-picker" placeholder="Select Date"/>
                                </div>
                            </div>
                        </div>
                    </section>
                    <button type="submit" name="register" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </body>

    <script src="imported/vendors/scripts/core.js"></script>
    <script src="imported/vendors/scripts/script.min.js"></script>
    <script src="imported/vendors/scripts/process.js"></script>
    <script src="imported/vendors/scripts/layout-settings.js"></script>
</html>

