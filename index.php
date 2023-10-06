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
    <style>

    </style>
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
                        <li class="item" style="background-color: #031E23; color: white;">
                            <a href="index.php">Home</a>
                        </li>
                        <li class="item">
                            <a href="about_us.php">About Us</a>
                        </li>
                        <li class="item">
                            <a href="contact_us.php">Contact Us</a>
                       </li>
                       <li class="item" style="border-bottom-left-radius: 0; border-bottom-right-radius: 0;">
                            <a href="tryouts.php">Try-outs</a>
                            <!-- Dropdown content -->
                            <ul class="submenu">
                                <li>
                                    <a href="#">
                                        <span class="menu-item-name">Case Studies</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="menu-item-name">Design Samples</span>
                                    </a>
                                </li>
                            </ul>                       
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
                                    <li style="background-color: #031E23; color: white;">
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
                                    <li style="border-bottom-left-radius: 0; border-bottom-right-radius: 0;">
                                        <a>
                                            <span class="material-icons-outlined" id="icon">sort</span>
                                            <span class="name">TRY-OUTS</span>
                                        </a>
                                        <ul class="modal-submenu">
                                            <li>
                                                <a href="#">
                                                    <span class="menu-item-name">Case Studies</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="menu-item-name">Design Samples</span>
                                                </a>
                                            </li>
                                        </ul>
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
        
        <section class="home">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="imported/vendors/images/img1.jpg" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="color-white">First slide label</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="imported/vendors/images/img2.jpg" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="color-white">Second slide label</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="imported/vendors/images/img3.jpg" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="color-white">Third slide label</h5>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="imported/vendors/images/img4.jpg" alt="Fourth slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="color-white">Fourth slide label</h5>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="imported/vendors/images/img5.jpg" alt="Fifth slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="color-white">Fifth slide label</h5>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>						
        </section>

        <section class="articles">
            <div class="title pb-20">
                <h2 class="h3 mb-0" style="font-weight: 800;">LATEST NEWS</h2>
            </div>
            <div class="row clearfix">

                <!-- BEGINNING OF ARTICLE CARD -->
                <div class="col-sm-12 col-md-12 col-lg-4 mb-30">
                    <div class="card card-box" style="border-radius: 0;">
                        <img class="card-img-top" src="imported/vendors/images/img4.jpg" alt="Card image cap" style="border-radius: 0;"/>
                        <div class="card-body">
                            <a href="articles.php" data-toggle="tooltip" data-placement="left" title="Click to read more">
                                <h5 class="card-title weight-600">TAU to host the National SCUAA 2023</h5>
                            </a>
                            <p class="card-text" style="font-weight: 300;">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere ipsam non reprehenderit iure facilis quisquam ducimus laborum pariatur, repellendus rerum.
                            </p>
                            <p class="card-text">
                                <small class="text-muted">Posted an hour ago</small>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- END OF ARTICLE CARD -->

                <!-- BEGINNING OF ARTICLE CARD -->
                <div class="col-sm-12 col-md-12 col-lg-4 mb-30">
                    <div class="card card-box" style="border-radius: 0;">
                        <img class="card-img-top" src="imported/vendors/images/img4.jpg" alt="Card image cap" style="border-radius: 0;"/>
                        <div class="card-body">
                            <a href="articles.php" data-toggle="tooltip" data-placement="left" title="Click to read more">
                                <h5 class="card-title weight-600">TAU to host the National SCUAA 2023</h5>
                            </a>
                            <p class="card-text" style="font-weight: 300;">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere ipsam non reprehenderit iure facilis quisquam ducimus laborum pariatur, repellendus rerum.
                            </p>
                            <p class="card-text">
                                <small class="text-muted">Posted an hour ago</small>
                            </p>
                        </div>
                    </div>
                </div> 
                <!-- END OF ARTICLE CARD -->

                <!-- BEGINNING OF ARTICLE CARD -->
                <div class="col-sm-12 col-md-12 col-lg-4 mb-30">
                    <div class="card card-box" style="border-radius: 0;">
                        <img class="card-img-top" src="imported/vendors/images/img4.jpg" alt="Card image cap" style="border-radius: 0;"/>
                        <div class="card-body">
                            <a href="articles.php" data-toggle="tooltip" data-placement="left" title="Click to read more">
                                <h5 class="card-title weight-600">TAU to host the National SCUAA 2023</h5>
                            </a>
                            <p class="card-text" style="font-weight: 300;">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere ipsam non reprehenderit iure facilis quisquam ducimus laborum pariatur, repellendus rerum.
                            </p>
                            <p class="card-text">
                                <small class="text-muted">Posted an hour ago</small>
                            </p>
                        </div>
                    </div>
                </div> 
                <!-- END OF ARTICLE CARD -->


            </div>
        </section>

        <footer>
            <p> &copy; TARLAC AGRICULTURAL UNIVERSITY - SPORTS AND SOCIOCULTURAL INFORMATION MANAGMENT SYSTEM</p>
        </footer>
    </div>
    <script src="imported/vendors/scripts/core.js"></script>
    <script src="imported/vendors/scripts/script.min.js"></script>
    <script src="imported/vendors/scripts/process.js"></script>
    <script src="imported/vendors/scripts/layout-settings.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
