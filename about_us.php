<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="imported/vendors/styles/style.css" />
    <link rel="stylesheet" href="css/style.css">
    <title>TAU - SSIMS</title>    
    <link rel="icon" type="image/png" sizes="16x16" href="assets/TAU logo.png"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <script src="https://kit.fontawesome.com/93e3069a39.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <header>
            <div class="container-fluid">
                <div class="navb-logo">
                    <img src="assets/TAU logo.png" alt="hi">
                    <h2><span class="blink">TAU SSIMS</span></h2>
                </div>
    
                <div class="navb-items">
                    <ul class="main-nav">
                        <li class="item">
                            <a href="index.php">Home</a>
                        </li>
                        <li class="item" style="background-color: #031E23; color: white;">
                            <a href="about_us.php">About Us</a>
                        </li>
                        <li class="item">
                            <a href="contact_us.php">Contact Us</a>
                       </li>
                        <li class="item">
                            <a href="sports.php">Sports</a>
                        </li>
                        <li class="item">
                            <a href="socio.php">Sociocultural</a>
                        </li>
                        <li class="item" id="loginItem">
                            <a href="login.php">Login</a>
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
                                        <a href="index.php">
                                            <span class="material-icons-outlined" id="icon">home</span>
                                            <span class="name">HOME</span>
                                        </a>
                                    </li>
                                </ul>
                                <ul>
                                    <li style="background-color: #031E23; color: white;">
                                        <a href="about_us.php">
                                            <span class="material-icons-outlined" id="icon">people</span>
                                            <span class="name">ABOUT US</span>
                                        </a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="contact_us.php">
                                            <span class="material-icons-outlined" id="icon">contact_support</span>
                                            <span class="name">CONTACT US</span>
                                        </a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="sports.php">
                                            <span class="material-icons-outlined" id="icon">sports_tennis</span>
                                            <span class="name">SPORTS</span>
                                        </a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="socio.php">
                                            <span class="material-icons-outlined" id="icon">music_note</span>
                                            <span class="name">SOCIOCULTURAL</span>
                                        </a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="login.php">
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

        <section class="about">
            <div class="aboutUpperLeft">
                <div class="inUl">
                    <h1>About Us</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati esse earum nobis autem vel 
                        inventore ea illum repellat dolorum aliquid nostrum aspernatur provident optio ut magnam 
                        nesciunt dolore eveniet quia asperiores, reiciendis nisi ipsum culpa. Quia aliquid, eligendi 
                        similique non nobis rem cum illo in repellat voluptatibus asperiores! Odio, tempora.</p>
                </div>
            </div>
            <div class="aboutUpperRight">
                <img src="./assets/first.png" class="desktop">
                <img src="./assets/first.jpg" class="mobile">
            </div>
        </section>

        <section class="team">
            <div class="title pb-20">
                <h2 class="mb-0" style="font-weight: 800;">The Team</h2>
            </div>
            <div class="row">
                <div class="col-md-4 mb-20">
                    <a class="card-box d-block mx-auto pd-20 text-secondary">
                        <div class="img pb-30">
                            <img src="assets/man2.avif" alt="" />
                        </div>
                        <div class="content">
                            <h3 class="h4">Jan Patrick Felipe Mauricio</h3>
                            <p>FRONTEND DEVELOPER</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-20">
                    <a class="card-box d-block mx-auto pd-20 text-secondary">
                        <div class="img pb-30">
                        <img src="assets/man3.avif" alt="" />
                        </div>
                        <div class="content">
                            <h3 class="h4">Julian Naval Consul III</h3>
                            <p>PROJECT MANAGER</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-20">
                    <a class="card-box d-block mx-auto pd-20 text-secondary">
                        <div class="img pb-30">
                            <img src="assets/man4.avif" alt="" />
                        </div>
                        <div class="content">
                            <h3 class="h4">Alain Dumpit Pandez</h3>
                            <p>BACKEND DEVELOPER</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <section class="values">
            <div class="card-box pd-20 height-100-p mb-30 align-items-center" style="width: 100%;">
				<div class="row" style="display: flex; align-items: center; justify-content: space-between; justify-content: center; width: 100%;">
                    <div class="col-sm-12 col-lg-4" style="display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                        <img src="./assets/values2.png" class="desktop">
                        <img src="./assets/values.png" class="mobile">
					</div>
					<div class="col-sm-12 col-lg-8" style="display: flex; align-items: center; justify-content: space-between; margin-top: 20px; padding: 40px;">
                        <ul>
                            <li>
                                <h2>Lorem ipsum dolor sit amet.</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    Error architecto mollitia reprehenderit vero voluptatum 
                                    dolor! Libero incidunt alias esse culpa?</p>
                            </li>
                            <li>
                                <h2>Lorem ipsum dolor sit amet.</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    Error architecto mollitia reprehenderit vero voluptatum 
                                    dolor! Libero incidunt alias esse culpa?</p>
                            </li>
                            <li>
                                <h2>Lorem ipsum dolor sit amet.</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    Error architecto mollitia reprehenderit vero voluptatum 
                                    dolor! Libero incidunt alias esse culpa?</p>
                            </li>
                            <li>
                                <h2>Lorem ipsum dolor sit amet.</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    Error architecto mollitia reprehenderit vero voluptatum 
                                    dolor! Libero incidunt alias esse culpa?</p>
                            </li>
                        </ul>
					</div>
				</div>
			</div>
        </section>

    <script src="imported/vendors/scripts/core.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
