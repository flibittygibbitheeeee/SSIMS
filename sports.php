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
                        <li class="item" style="background-color: #031E23; color: white;">
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
                                    <li style="background-color: #031E23; color: white;">
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
    
        <div class="sports">
            <div class="title pb-20">
                <h2 class="h3 mb-0" style="font-weight: 800;">Choose Your Sport</h2>
            </div>
            <div class="row clearfix">
                <!-- ATHLETICS -->
                <div class="col-sm-12 col-md-12 col-lg-3 mb-30">
                    <div class="card card-box">
                        <div class="card-body">
                            <h2>Athletics</h2>
                        </div>
                        <img class="card-img-top" src="imported/vendors/images/img5.jpg" alt="Card image cap" style="border-radius: 0;"/>
                        <div class="card-body">
                            <a href="sports/athletics.php" class="btn btn-primary">Take me there</a>
                        </div>
                    </div>
                </div> 
                <!-- ATHLETICS -->

                <!-- ARNIS -->
                <div class="col-sm-12 col-md-12 col-lg-3 mb-30">
                    <div class="card card-box">
                        <div class="card-body">
                            <h2>Arnis</h2>
                        </div>
                        <img class="card-img-top" src="imported/vendors/images/img5.jpg" alt="Card image cap" style="border-radius: 0;"/>
                        <div class="card-body">
                            <a href="sports/arnis.php" class="btn btn-primary">Take me there</a>
                        </div>
                    </div>
                </div> 
                <!-- ARNIS -->

                <!-- ARCHERY -->
                <div class="col-sm-12 col-md-12 col-lg-3 mb-30">
                    <div class="card card-box">
                        <div class="card-body">
                            <h2>Archery</h2>
                        </div>
                        <img class="card-img-top" src="imported/vendors/images/img5.jpg" alt="Card image cap" style="border-radius: 0;"/>
                        <div class="card-body">
                            <a href="sports/archery.php" class="btn btn-primary">Take me there</a>
                        </div>
                    </div>
                </div> 
                <!-- ARCHERY -->

                <!-- BADMINTON -->
                <div class="col-sm-12 col-md-12 col-lg-3 mb-30">
                    <div class="card card-box">
                        <div class="card-body">
                            <h2>Badminton</h2>
                        </div>
                        <img class="card-img-top" src="imported/vendors/images/img5.jpg" alt="Card image cap" style="border-radius: 0;"/>
                        <div class="card-body">
                            <a href="badminton.php" class="btn btn-primary">Take me there</a>
                        </div>
                    </div>
                </div> 
                <!-- BADMINTON -->
            </div>
            <div class="row clearfix">
                <!-- BASEBALL -->
                <div class="col-sm-12 col-md-12 col-lg-3 mb-30">
                    <div class="card card-box">
                        <div class="card-body">
                            <h2>Baseball</h2>
                        </div>
                        <img class="card-img-top" src="imported/vendors/images/img5.jpg" alt="Card image cap" style="border-radius: 0;"/>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary">Take me there</a>
                        </div>
                    </div>
                </div> 
                <!-- BASEBALL -->

                <!-- BASKETBALL -->
                <div class="col-sm-12 col-md-12 col-lg-3 mb-30">
                    <div class="card card-box">
                        <div class="card-body">
                            <h2>Basketball</h2>
                        </div>
                        <img class="card-img-top" src="imported/vendors/images/img5.jpg" alt="Card image cap" style="border-radius: 0;"/>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary">Take me there</a>
                        </div>
                    </div>
                </div> 
                <!-- BASKETBALL -->

                <!-- BEACH VOLLEYBALL -->
                <div class="col-sm-12 col-md-12 col-lg-3 mb-30">
                    <div class="card card-box">
                        <div class="card-body">
                            <h2>Beach Volleyball</h2>
                        </div>
                        <img class="card-img-top" src="imported/vendors/images/img5.jpg" alt="Card image cap" style="border-radius: 0;"/>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary">Take me there</a>
                        </div>
                    </div>
                </div> 
                <!-- BEACH VOLLEYBALL -->
                
                <!-- BOXING -->
                <div class="col-sm-12 col-md-12 col-lg-3 mb-30">
                    <div class="card card-box">
                        <div class="card-body">
                            <h2>Boxing</h2>
                        </div>
                        <img class="card-img-top" src="imported/vendors/images/img5.jpg" alt="Card image cap" style="border-radius: 0;"/>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary">Take me there</a>
                        </div>
                    </div>
                </div> 
                <!-- BOXING -->
            </div>
            <div class="row clearfix">
                <!-- CHESS -->
                <div class="col-sm-12 col-md-12 col-lg-3 mb-30">
                    <div class="card card-box">
                        <div class="card-body">
                            <h2>Chess</h2>
                        </div>
                        <img class="card-img-top" src="imported/vendors/images/img5.jpg" alt="Card image cap" style="border-radius: 0;"/>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary">Take me there</a>
                        </div>
                    </div>
                </div> 
                <!-- CHESS -->

                <!-- DANCESPORTS -->
                <div class="col-sm-12 col-md-12 col-lg-3 mb-30">
                    <div class="card card-box">
                        <div class="card-body">
                            <h2>Dancesports</h2>
                        </div>
                        <img class="card-img-top" src="imported/vendors/images/img5.jpg" alt="Card image cap" style="border-radius: 0;"/>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary">Take me there</a>
                        </div>
                    </div>
                </div> 
                <!-- DANCESPORTS -->

                <!-- FOOTBALL -->
                <div class="col-sm-12 col-md-12 col-lg-3 mb-30">
                    <div class="card card-box">
                        <div class="card-body">
                            <h2>Football</h2>
                        </div>
                        <img class="card-img-top" src="imported/vendors/images/img5.jpg" alt="Card image cap" style="border-radius: 0;"/>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary">Take me there</a>
                        </div>
                    </div>
                </div> 
                <!-- FOOTBALL -->
                
                <!-- FUTSAL -->
                <div class="col-sm-12 col-md-12 col-lg-3 mb-30">
                    <div class="card card-box">
                        <div class="card-body">
                            <h2>Futsal</h2>
                        </div>
                        <img class="card-img-top" src="imported/vendors/images/img5.jpg" alt="Card image cap" style="border-radius: 0;"/>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary">Take me there</a>
                        </div>
                    </div>
                </div> 
                <!-- FUTSAL -->
            </div>
            <div class="row clearfix">
                <!-- KARATE-DO -->
                <div class="col-sm-12 col-md-12 col-lg-3 mb-30">
                    <div class="card card-box">
                        <div class="card-body">
                            <h2>Karate-do</h2>
                        </div>
                        <img class="card-img-top" src="imported/vendors/images/img5.jpg" alt="Card image cap" style="border-radius: 0;"/>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary">Take me there</a>
                        </div>
                    </div>
                </div> 
                <!-- KARATE-DO -->

                <!-- LAWN TENNIS -->
                <div class="col-sm-12 col-md-12 col-lg-3 mb-30">
                    <div class="card card-box">
                        <div class="card-body">
                            <h2>Lawn Tennis</h2>
                        </div>
                        <img class="card-img-top" src="imported/vendors/images/img5.jpg" alt="Card image cap" style="border-radius: 0;"/>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary">Take me there</a>
                        </div>
                    </div>
                </div> 
                <!-- LAWN TENNIS -->

                <!-- PENCAKSILAT -->
                <div class="col-sm-12 col-md-12 col-lg-3 mb-30">
                    <div class="card card-box">
                        <div class="card-body">
                            <h2>Pencaksilat</h2>
                        </div>
                        <img class="card-img-top" src="imported/vendors/images/img5.jpg" alt="Card image cap" style="border-radius: 0;"/>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary">Take me there</a>
                        </div>
                    </div>
                </div> 
                <!-- PENCAKSILAT -->
                
                <!-- SEPAK TAKRAW -->
                <div class="col-sm-12 col-md-12 col-lg-3 mb-30">
                    <div class="card card-box">
                        <div class="card-body">
                            <h2>Sepak Takraw</h2>
                        </div>
                        <img class="card-img-top" src="imported/vendors/images/img5.jpg" alt="Card image cap" style="border-radius: 0;"/>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary">Take me there</a>
                        </div>
                    </div>
                </div> 
                <!-- SEPAK TAKRAW -->
            </div>
            <div class="row clearfix">
                <!-- SOFTBALL -->
                <div class="col-sm-12 col-md-12 col-lg-3 mb-30">
                    <div class="card card-box">
                        <div class="card-body">
                            <h2>Softball</h2>
                        </div>
                        <img class="card-img-top" src="imported/vendors/images/img5.jpg" alt="Card image cap" style="border-radius: 0;"/>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary">Take me there</a>
                        </div>
                    </div>
                </div> 
                <!-- SOFTBALL -->

                <!-- SWIMMING -->
                <div class="col-sm-12 col-md-12 col-lg-3 mb-30">
                    <div class="card card-box">
                        <div class="card-body">
                            <h2>Swimming</h2>
                        </div>
                        <img class="card-img-top" src="imported/vendors/images/img5.jpg" alt="Card image cap" style="border-radius: 0;"/>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary">Take me there</a>
                        </div>
                    </div>
                </div> 
                <!-- SWIMMING -->

                <!-- TABLE TENNIS -->
                <div class="col-sm-12 col-md-12 col-lg-3 mb-30">
                    <div class="card card-box">
                        <div class="card-body">
                            <h2>Table Tennis</h2>
                        </div>
                        <img class="card-img-top" src="imported/vendors/images/img5.jpg" alt="Card image cap" style="border-radius: 0;"/>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary">Take me there</a>
                        </div>
                    </div>
                </div> 
                <!-- TABLE TENNIS -->
                
                <!-- TAEKWONDO -->
                <div class="col-sm-12 col-md-12 col-lg-3 mb-30">
                    <div class="card card-box">
                        <div class="card-body">
                            <h2>Taekwondo</h2>
                        </div>
                        <img class="card-img-top" src="imported/vendors/images/img5.jpg" alt="Card image cap" style="border-radius: 0;"/>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary">Take me there</a>
                        </div>
                    </div>
                </div> 
                <!-- TAEKWONDO -->
            </div>
            <div class="row clearfix">
                <!-- VOLLEYBALL -->
                <div class="col-sm-12 col-md-12 col-lg-3 mb-30">
                    <div class="card card-box">
                        <div class="card-body">
                            <h2>Volleyball</h2>
                        </div>
                        <img class="card-img-top" src="imported/vendors/images/img5.jpg" alt="Card image cap" style="border-radius: 0;"/>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary">Take me there</a>
                        </div>
                    </div>
                </div> 
                <!-- VOLLEYBALL -->

                <!-- BILLIARD -->
                <div class="col-sm-12 col-md-12 col-lg-3 mb-30">
                    <div class="card card-box">
                        <div class="card-body">
                            <h2>Billiard</h2>
                        </div>
                        <img class="card-img-top" src="imported/vendors/images/img5.jpg" alt="Card image cap" style="border-radius: 0;"/>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary">Take me there</a>
                        </div>
                    </div>
                </div> 
                <!-- BILLIARD -->

                <!-- OTHERS -->
                <div class="col-sm-12 col-md-12 col-lg-3 mb-30">
                    <div class="card card-box">
                        <div class="card-body">
                            <h2>Others</h2>
                        </div>
                        <img class="card-img-top" src="imported/vendors/images/img5.jpg" alt="Card image cap" style="border-radius: 0;"/>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary">Take me there</a>
                        </div>
                    </div>
                </div> 
                <!-- OTHERS -->
            </div>
        </div>
        
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
