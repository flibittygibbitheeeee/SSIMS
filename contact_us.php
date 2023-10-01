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
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
    </script>
    <script type="text/javascript">
        (function(){
            emailjs.init("MDZK6oaYVC3YzD4LA");
        })();
    </script>
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
                        <li class="item" style="background-color: #031E23; color: white;">
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
                                    <li>
                                        <a href="about_us.php">
                                            <span class="material-icons-outlined" id="icon">people</span>
                                            <span class="name">ABOUT US</span>
                                        </a>
                                    </li>
                                </ul>
                                <ul>
                                    <li style="background-color: #031E23; color: white;">
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

        <section class="contact">
            <div class="contactInner">
                <div class="contactInfo">
                    <div class="contactInfoInner">
                        <h2>Contact Information</h2>
                        <ul class="info">
                            <li>
                                <i class="fa-solid fa-location-dot"></i>
                                <p>IT Center</p>
                            </li>
                            <li>
                                <i class="fa-solid fa-phone"></i>
                                <p>09123456789</p>
                            </li>
                            <li>
                                <i class="fa-solid fa-envelope"></i>                                    
                                <p>youremail@gmail.com</p>
                            </li>
                        </ul>
                    </div>
                    <div class="social-media">
                        <a href="#" class="social-icon" id="fb"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#" class="social-icon" id="git"><i class="fa-brands fa-github"></i></a>
                        <a href="#" class="social-icon" id="tg"><i class="fa-brands fa-telegram"></i></a>
                    </div>
                </div>
                <div class="contactForm">
                    <h2>Send a message</h2>
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label style="text-transform: capitalize;">Name </label>
                                    <input type="text" id="name" name="name" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" id="email" name="email" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Write your message here</label>
                                    <textarea id="message" name="message" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <input type="button" value="Send" class="btn" onclick="sendMail()">
                    </form>
                </div>
            </div>
        </section>
    </div>

    <script>
        function sendMail() {
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var message = document.getElementById("message").value;

            if (!name || !email || !message) {
                alert("Please fill in all fields.");
                return;
            }

            var params = {
                from_name: name,
                email_id: email,
                message: message
            };

            emailjs.send("service_8t9706l", "template_jmxzegj", params)
                .then(function (response) {
                    console.log("Email sent successfully: " + response.status);
                    alert("Success! Your email has been sent.");
                })
                .catch(function (error) {
                    console.error("Email failed to send: " + error);
                    alert("Oops! Something went wrong. Please try again later.");
                });
        }
    </script>
    <script src="imported/vendors/scripts/core.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
