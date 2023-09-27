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
                    <h2>TAU-SSIMS</h2>
                </div>
    
                <div class="navb-items">
                    <ul class="main-nav">
                        <li class="item">
                            <a href="index.php">HOME</a>
                        </li>
                        <li class="item">
                            <a href="#">ABOUT US</a>
                        </li>
                        <li class="item">
                            <a href="#">CONTACT US</a>
                       </li>
                        <li class="item">
                            <a href="#">SPORTS</a>
                        </li>
                        <li class="item">
                            <a href="#">SOCIOCULTURAL</a>
                        </li>
                        <li class="item" id="loginItem">
                            <a href="login.php">LOGIN</a>
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
                                <h2>TAU-SSIMS</h2>
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
                                        <a href="#">
                                            <span class="material-icons-outlined" id="icon">people</span>
                                            <span class="name">ABOUT US</span>
                                        </a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <span class="material-icons-outlined" id="icon">contact_support</span>
                                            <span class="name">CONTACT US</span>
                                        </a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <span class="material-icons-outlined" id="icon">sports_tennis</span>
                                            <span class="name">SPORTS</span>
                                        </a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="#">
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
            <div class="row clearfix">
                <div class="col-sm-12 col-md-12 col-lg-4 mb-30">
                    <div class="card card-box">
                        <img class="card-img-top" src="imported/vendors/images/img4.jpg" alt="Card image cap"/>
                        <div class="card-body">
                            <h5 class="card-title weight-500">Card title</h5>
                            <p class="card-text">
                                This is a wider card with supporting text below as a natural
                                lead-in to additional content. This content is a little bit
                                longer.
                            </p>
                            <p class="card-text">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 mb-30">
                    <div class="card bg-dark card-box">
                        <img class="card-img" src="imported/vendors/images/img1.jpg" alt="Card image"/>
                        <div class="card-img-overlay">
                            <h5 class="card-title weight-500">Card title</h5>
                            <p class="card-text">
                                This is a wider card with supporting text below as a natural
                                lead-in.
                            </p>
                            <p class="card-text">Last updated 3 mins ago</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 mb-30">
                    <div class="card card-box">
                        <div class="card-body">
                            <h5 class="card-title weight-500">Card title</h5>
                            <p class="card-text">
                                This is a wider card with supporting text below as a natural
                                lead-in to additional content. This content is a little bit
                                longer.
                            </p>
                            <p class="card-text">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                        <img class="card-img-bottom" src="imported/vendors/images/img5.jpg" alt="Card image cap"/>
                    </div>
                </div>
            </div>
        </section>

        <!-- <footer>
            <div class="one child">
                <img src="assets/code.gif" alt="hi">
                <h2>Let's Code!</h2>
                <h3>Pugak Pugak</h3>
            </div>
            <div class="two child">
                <h2>SECTION 2</h2>
                <h3>Kim Namjoon</h3>
                <h3>Kim Seokjin</h3>
                <h3>Min Yoongi</h3>
                <h3>Jung Hoseok</h3>
                <h3>Park Jimin</h3>
                <h3>Kim Taehyung</h3>
                <h3>Jeon Jungkook</h3>
            </div>
            <div class="three child">
                <h2>SECTION 3</h2>
                <h3>Kim Namjoon</h3>
                <h3>Kim Seokjin</h3>
                <h3>Min Yoongi</h3>
                <h3>Jung Hoseok</h3>
                <h3>Park Jimin</h3>
                <h3>Kim Taehyung</h3>
                <h3>Jeon Jungkook</h3>            
            </div>
            <div class="four child">
                <h2>SECTION 4</h2>
                <h3>Kim Namjoon</h3>
                <h3>Kim Seokjin</h3>
                <h3>Min Yoongi</h3>
                <h3>Jung Hoseok</h3>
                <h3>Park Jimin</h3>
                <h3>Kim Taehyung</h3>
                <h3>Jeon Jungkook</h3>
            </div>
        </footer> -->
    <script src="imported/vendors/scripts/core.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
