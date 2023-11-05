<?php 

// session_start();
// include '../db.php';


// if(isset($_POST['apply'])){

// 	$cat = 'Archery';
	
// 	header("location: ../Try-outs/Verification.php"); $_SESSION["User"] = $cat;
// }

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
                    <div class="col-sm-12 col-lg-4">
						<img src="../assets/archery.png" alt="" />
					</div>
					<div class="col-sm-12 col-lg-8">
						<h4 class="font-20 weight-500 mb-10 text-capitalize">
							<div class="weight-600 font-30" style="color: #2c772c;">What is Archery?</div>
						</h4>
						<p class="font-16">
                            <span>Archery</span> is one of the <span>oldest</span> sports that is still being practiced <span>today</span>. It's the act of shooting <span>arrows</span> with a 
                            <span>bow</span>. It dates back to around <span>10,000 BC</span> in the late <span>Paleolithic</span> period when ancient <span>Egyptian</span> and <span>Nubian</span> cultures 
                            used <span>bows</span> and <span>arrows</span> for <span>hunting</span> and <span>warfare</span>.
                        </p>
                        <p class="font-16">
                            <span>Different</span> equipment and method types <span>evolved</span> over time in <span>various</span> places. In <span>Asia</span>, shorter composite bows were <span>popular</span>, 
                            especially for mounted warriors, while England gained military prowess with longbows made from yew during the Middle Ages. Traditional bow-shooting communities still thrive today.                    
                        </p>
                        <p class="font-16">
                            As warfare <span>evolved</span> with the introduction of <span>gunpowder</span>, archery became <span>less</span> relevant and <span>transformed</span> into a <span>sport</span>.                        
                        </p>
                        <p class="font-16">
                            The <span>first</span> archery competition resembling modern events took place in <span>Finsbury, England</span>, in <span>1583</span>, boasting a staggering <span>3000</span> participants. 
                            Archery was <span>included</span> in the early modern Olympic Games, from <span>1900 to 1908</span> and in <span>1920</span>. To <span>secure</span> its permanent place in the Olympic program, 
                            <span>World Archery</span> was established in <span>1931</span>, ultimately achieving its goal in <span>1972</span>.
                        </p>
					</div>
				</div>
			</div>
            
            <div class="title pb-20 pt-20">
                <h2 class="h3 mb-0">The Members</h2>
            </div>
            

	
            <div class="title pb-20 pt-20">
                <h2 class="h3 mb-0">The Trainers</h2>
            </div>
            
            </div>
            
            
        </section>
        
        <footer>
            <p> &copy; TARLAC AGRICULTURAL UNIVERSITY - SPORTS AND SOCIOCULTURAL INFORMATION MANAGEMENT SYSTEM</p>
        </footer>
    </div>
    
    <script src="../imported/vendors/scripts/core.js"></script>
    <script src="../imported/vendors/scripts/script.min.js"></script>
    <script src="../imported/vendors/scripts/process.js"></script>
    <script src="../imported/vendors/scripts/layout-settings.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
