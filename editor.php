<!DOCTYPE html>
<html lang="en">
<!-- <meta http-equiv="refresh" content="5"> -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/editor.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">    
    <title>ADMIN - RescueMe</title>
</head>
<body>
    <div class="requests">
        <h2>Registered Students</h2>
        <div class="table">
            <section class="table__header">
                <a href="application_form.php">
                    <button id="add" name="add_stud">
                        <span class="material-icons-outlined">add</span>
                        <div class="text">
                            Apply for tryouts
                        </div>
                    </button>
                </a>
                <div class="searchbar">
                    <span class="material-icons-outlined" id="search">search</span>
                    <div class="input-group">
                        <input type="search" placeholder="Search here">
                    </div>
                </div>
            </section>
            <section class="table__body">
                <table class="mesa">
                    <thead class="mesa-head">
                        <tr>
                            <th> NAME <span class="icon-arrow">&UpArrow;</span></th>
                            <th> SEX <span class="icon-arrow">&UpArrow;</span></th>
                            <th> EMAIL <span class="icon-arrow">&UpArrow;</span></th>
                            <th> ACTION <span class="icon-arrow">&UpArrow;</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Greenhills</td>
                            <td>Female</td>
                            <td>gmpeligro2020@tau.edu.ph</td>
                            <td class="flex">
                                <button id="view"><a style="text-decoration: none; color: white" href="students.php">VIEW</a></button>
                                <button id="update"><a style="text-decoration: none; color: white" href="students.php">EDIT</a></button>
                                <button id="remove"><a style="text-decoration: none; color: white" href="students.php">DELETE</a></button>
                            </td>
                        </tr>
                    </tbody>     
                </table>
            </section>
        </div>
    </div>
    <script src="js/sorter.js"></script>       
</body>
</html>