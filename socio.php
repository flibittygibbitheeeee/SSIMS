
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
                        <li class="item">
                            <a href="about_us.php">About Us</a>
                        </li>
                        <li class="item">
                            <a href="contact_us.php">Contact Us</a>
                       </li>
                        <li class="item">
                            <a href="sports.php">Sports</a>
                        </li>
                        <li class="item" style="background-color: #031E23; color: white;">
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
                                    <li>
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
                                    <li style="background-color: #031E23; color: white;">
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
    
        <section class="socio">
            <div class="title pb-20">
                <h2 class="h3 mb-0" style="font-weight: 800;">What's your talent?</h2>
            </div>
            <div class="row clearfix" class="background: red">
                <!-- BAND -->
                <div class="col-sm-12 col-md-12 col-lg-4 mb-30">
                    <div class="card card-box">
                        <div class="card-body">
                            <h2>Band</h2>
                        </div>
                        <img class="card-img-top" src="assets/band.jpg" alt="Combo Maxx" style="border-radius: 0; height: 350px;"/>
                        <div class="card-body">
                            <a href="socio/band.php" class="btn btn-primary">Take me there</a>
                        </div>
                    </div>
                </div> 
                <!-- BAND -->

                <!-- CHORALE -->
                <div class="col-sm-12 col-md-6 col-lg-4 mb-30">
                    <div class="card card-box">
                        <div class="card-body">
                            <h2>Chorale</h2>
                        </div>
                        <img class="card-img-top" src="assets/tauc-wacky.jpg" alt="TAUC" style="border-radius: 0; height: 350px;"/>
                        <div class="card-body">
                            <a href="socio/tauc.php" class="btn btn-primary">Take me there</a>
                        </div>
                    </div>
                </div> 
                <!-- CHORALE -->

                <!-- PG -->
                <div class="col-sm-12 col-md-6 col-lg-4 mb-30">
                    <div class="card card-box">
                        <div class="card-body">
                            <h2>PG</h2>
                        </div>
                        <img class="card-img-top" src="assets/pg.jpg" alt="Performing Guild" style="border-radius: 0; height: 350px;"/>
                        <div class="card-body">
                            <a href="socio/pg.php" class="btn btn-primary">Take me there</a>
                        </div>
                    </div>
                </div> 
                <!-- PG -->
            </div>
        </section>
        
        <footer>
            <p> &copy; TARLAC AGRICULTURAL UNIVERSITY - SPORTS AND SOCIOCULTURAL INFORMATION MANAGEMENT SYSTEM</p>
        </footer>
    </div>
    
    <script src="imported/vendors/scripts/core.js"></script>
    <script src="imported/vendors/scripts/script.min.js"></script>
    <script src="imported/vendors/scripts/process.js"></script>
    <script src="imported/vendors/scripts/layout-settings.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
