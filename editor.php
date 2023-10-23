<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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
                            <a href="./contact_us.php">Contact Us</a>
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
                                <img src="../assets/TAU logo.png" alt="hi">
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
                                    <li>
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

        <section class="requests">
            <div class="title pb-20">
                <h2 class="h3 mb-0" style="font-weight: 800;">Meet the Members</h2>
            </div>
            <div class="table">
                <section class="table__header">
                    <a href="../application_form.php">Apply for Tryouts</a>
                    <div class="searchbar">
                        <span class="material-icons-outlined" id="search">search</span>
                        <div class="input-group">
                            <input type="search" placeholder="Search here" id="search" autocomplete="off">
                        </div>
                    </div>
                </section>
                <section class="table__body">
                    <table class="mesa" id="myTable">
                        <thead class="mesa-head">
                            <tr>
                                <th onclick="sortTable(0)"> PLAYER <span class="icon-arrow">&UpArrow;</span></th>
                                <th onclick="sortTable(1)"> SEX <span class="icon-arrow">&UpArrow;</span></th>
                                <th onclick="sortTable(2)"> AGE <span class="icon-arrow">&UpArrow;</span></th>
                                <th onclick="sortTable(3)"> DATE JOINED <span class="icon-arrow">&UpArrow;</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-label="PLAYER" style="font-weight: 500;">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#view-player">Greenhills Peligro</a>
                                </td>
                                <td data-label="SEX" style="font-weight: 500;">Female</td>
                                <td data-label="AGE" style="font-weight: 500;">22</td>
                                <td data-label="DATE JOINED" style="font-weight: 500;">10-22-2023</td>
                            </tr>
                            <tr>
                                <td data-label="PLAYER" style="font-weight: 500;">Acmad Cali</td>
                                <td data-label="SEX" style="font-weight: 500;">Male</td>
                                <td data-label="AGE" style="font-weight: 500;">36</td>
                                <td data-label="DATE JOINED" style="font-weight: 500;">10-23-2023</td>
                            </tr>
                            <tr>
                                <td data-label="PLAYER" style="font-weight: 500;">Eugene Valeriano</td>
                                <td data-label="SEX" style="font-weight: 500;">Male</td>
                                <td data-label="AGE" style="font-weight: 500;">35</td>
                                <td data-label="DATE JOINED" style="font-weight: 500;">10-24-2023</td>
                            </tr>
                        </tbody>     
                    </table>
                    <div class="modal fade" id="view-player" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel1">
                                        Add new trainer
                                    </h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                        CANCEL
                                    </button>
                                    <button name="add_new" type="submit" class="btn btn-primary">
                                        CREATE
                                    </button>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </section>
            </div>
        </section>

        <footer>
            <p> &copy; TARLAC AGRICULTURAL UNIVERSITY - SPORTS AND SOCIOCULTURAL INFORMATION MANAGMENT SYSTEM</p>
        </footer>
    </div>
    
    <script src="../js/sorter.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
