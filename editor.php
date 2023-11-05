<?php 

session_start();
include '../db.php';


if(isset($_POST['apply'])){

	$cat = 'Athletics';
	
	header("location: ../Try-outs/Verification.php"); $_SESSION["User"] = $cat;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../imported/vendors/styles/style.css" />
    <link rel="stylesheet" href="../css/style.css">
    <title>TAU - SSIMS</title>    
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/TAU logo.png"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <script src="https://kit.fontawesome.com/93e3069a39.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <header>
            <div class="container-fluid">
                <div class="navb-logo">
                    <img src="../assets/TAU logo.png" alt="hi">
                    <h2><span class="blink">TAU SSIMS</span></h2>
                </div>
    
                <div class="navb-items">
                    <ul class="main-nav">
                        <li class="item">
                            <a href="../index.php">Home</a>
                        </li>
                        <li class="item">
                            <a href="../about_us.php">About Us</a>
                        </li>
                        <li class="item">
                            <a href="../contact_us.php">Contact Us</a>
                       </li>
                        <li class="item">
                            <a href="../sports.php">Sports</a>
                        </li>
                        <li class="item">
                            <a href="../socio.php">Sociocultural</a>
                        </li>
                        <li class="item" id="loginItem">
                            <a href="../login.php">Login</a>
                        </li>
                    </ul>
                </div>
    
                <!-- Button trigger modal -->
                <div class="mobile-toggler">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#navbModal">
                        <i class="fa-solid fa-bars-staggered"></i>                
                    </a>
                </div>
    
                <!-- Modal -->
                <div class="modal fade" id="navbModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span class="material-icons-outlined">close</span></button>
                            </div>
                            <div class="modal-middle">
                                <img src="assets/TAU logo.png" alt="hi">
                                <h2><span class="blink">TAU SSIMS</span></h2>
                            </div>
                            <div class="modal-body">
                                <ul>
                                    <li>
                                        <a href="../index.php">
                                            <span class="material-icons-outlined" id="icon">home</span>
                                            <span class="name">HOME</span>
                                        </a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="../about_us.php">
                                            <span class="material-icons-outlined" id="icon">people</span>
                                            <span class="name">ABOUT US</span>
                                        </a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="../contact_us.php">
                                            <span class="material-icons-outlined" id="icon">contact_support</span>
                                            <span class="name">CONTACT US</span>
                                        </a>
                                    </li>
                                </ul>
                                <ul>
                                    <li >
                                        <a href="../sports.php">
                                            <span class="material-icons-outlined" id="icon">sports_tennis</span>
                                            <span class="name">SPORTS</span>
                                        </a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="../socio.php">
                                            <span class="material-icons-outlined" id="icon">music_note</span>
                                            <span class="name">SOCIOCULTURAL</span>
                                        </a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="../login.php">
                                            <span class="material-icons-outlined" id="icon">login</span>
                                            <span class="name">LOGIN</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    
        <section class="sports">
            <form method="post" class="apply" target="_blank">
                <button type="submit" id="add" name="apply">Apply for Tryouts</button>
            </form>

            <div class="card-box pd-20 height-100-p mb-30 align-items-center" style="width: 100%;">
				<div class="row" style="display: flex; align-items: center; justify-content: center; width: 100%;">
					<div class="col-sm-12 col-lg-8">
						<h4 class="font-20 weight-500 mb-10 text-capitalize">
							<div class="weight-600 font-30" style="color: #024e02;">What is Athletics?</div>
						</h4>
						<p class="font-18">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde
							hic non repellendus debitis iure, doloremque assumenda. Autem
							modi, corrupti, nobis ea iure fugiat, veniam non quaerat
							mollitia animi error corporis.
						</p>
					</div>
					<div class="col-sm-12 col-lg-4">
						<img src="../imported/vendors/images/banner-img.png" alt="" />
					</div>
				</div>
			</div>
            
            <div class="row clearfix">
                <!-- ATHLETICS -->
                
                <?php 
                
                $hos = $mysqli->query("SELECT u.*, s.* FROM Users as u INNER JOIN Student as s ON u.User_Id = s.User_Id WHERE Department = 'Athletics'") or die($mysqli->error);
                
                ?>
                <?php while ($row = $hos->fetch_assoc()): ?> 
                <div class="col-sm-12 col-md-6 col-lg-3 mb-30">
                    <div class="card card-box">
                        <div class="card-body">
                            <h2><?php echo $row['First_Name']; ?> <?php echo $row['Middle_Name']; ?> <?php echo $row['Last_Name']; ?></h2>
                        </div>
                        <img class="card-img-top" src="../uploads/<?php echo $row['file'] ?>" alt="Card image cap" style="border-radius: 0; height: 200px;"/>
                        <div class="card-body">
							<h5 class="card-title weight-500">Track and Field</h5>
							<p class="card-text">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque hic harum modi omnis est. Quos accusantium beatae dignissimos quae modi.
							</p>
							<p class="card-text">
								<small class="text-muted">Active since 2019</small>
							</p>
						</div>
                    </div>
                </div> 
                <?php endwhile; ?>	
                 
            </div>
        </section>
        
        <footer>
            <p> &copy; TARLAC AGRICULTURAL UNIVERSITY - SPORTS AND SOCIOCULTURAL INFORMATION MANAGMENT SYSTEM</p>
        </footer>
    </div>
    
    <script src="../imported/vendors/scripts/core.js"></script>
    <script src="../imported/vendors/scripts/script.min.js"></script>
    <script src="../imported/vendors/scripts/process.js"></script>
    <script src="../imported/vendors/scripts/layout-settings.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
