<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <link rel="stylesheet" href="css/form.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">    
    <title>Form</title>
</head>
<body>
    <div class="content">
        <form action="" method="POST" enctype="multipart/form-data">
            <section class="one">
                <h1>OFFICE OF THE SPORTS AND DEVELOPMENT</h1>
                <p>VARSITY PLAYER APPLICATION FORM</p>
            </section>
            <section class="two" style="margin-top: 0.75rem;">
                
            <div class="form-input">
                    <p>Kindly include your 2 x 2 picture <span>*</span></p>
                    <input type="file" name="files" id="image" accept=".jpg, .jpeg, .png" value=""  />
                </div>
                <!-- COURSE -->
                <div class="form-input">
                    <p>Course <span>*</span></p>
                    <select name="course" id="course" class="select" required>
                        <option>Choose Below</option>
                        <option value="BSA (Agricultural Economics)">BSA (Agricultural Economics)</option>
                        <option value="BSA (Agricultural Extension)">BSA (Agricultural Extension)</option>
                        <option value="BSA (Agronomy)">BSA (Agronomy)</option>
                        <option value="BSA (Animal Science)">BSA (Animal Science)</option>
                        <option value="BSA (Soil Science)">BSA (Soil Science)</option>
                        <option value="BSA (Crop Protection)">BSA (Crop Protection)</option>
                        <option value="BAS">Bachelor of Animal Science</option>
                        <option value="Food-Tech">Bachelor of Science in Food Technology</option>
                        <option value="Forestry">Bachelor of Science in Forestry</option>
                        <option value="VetMed">Doctor of Veterinary Medicine</option>
                        <option value="BSABE">BSABE (Agricultural and Biosystems)</option>
                        <option value="Geodetic">BSGE (Geodetic)</option>
                        <option value="BSIT">BSIT (Information and Technology)</option>
                        <option value="Elem-Educ">Bachelor of Elementary Education</option>
                        <option value="Early-Educ">Bachelor of Early Childhood Education</option>
                        <option value="TLE(Home-Econ)">BTLE (Home Economics)</option>
                        <option value="TLE(ICT)">BTLE (Technology)</option>
                        <option value="TLE(Agri-Fishery)">BTLE (Agri-Fishery Arts)</option>
                        <option value="BSE">Bachelor of Secondary Education (Science)</option>
                        <option value="Cert-HomeTech">Certificate in Home Technology Management</option>
                        <option value="BSP">Bachelor of Science in Psychology</option>
                        <option value="Economics">Bachelor of Arts in Economics</option>
                        <option value="DevCom">BSDC (Developement Communication)</option>
                        <option value="BSBA(HRM)">BSBA (Human Resource Management)</option>
                        <option value="BSBA(FM)">BSBA (Final Management)</option>
                        <option value="BSBA(MM)">BSBA (Marketing Management)</option>
                        <option value="Entrep">Bachelor of Science in Entrepreneurship</option>
                        <option value="Tourism">Bachelor of Science in Tourism Management</option>
                        <option value="AgriBusiness">Bachelor of Science in Agribusiness</option>

                    </select>                
                </div>
                <div class="form-input">
                    <p>Year Level <span>*</span></p>
                    <label class="container"><p>First Year</p>
                        <input type="radio" name="year" value="First Year" required><span class="checkmark"></span>
                    </label>
                    <label class="container"><p>Second Year</p>
                        <input type="radio" name="year" value="Second Year"><span class="checkmark"></span>
                    </label>
                    <label class="container"><p>Third Year</p> 
                        <input type="radio" name="year" value="Third Year"><span class="checkmark"></span>
                    </label>
                    <label class="container"><p>Fourth Year</p> 
                        <input type="radio" name="year" value="Fourth Year"><span class="checkmark"></span>
                    </label>
                </div>
                <div class="form-input">
                    <p>Family Name <span>*</span></p>
                    <input type="text" name="lastname" placeholder="Short answer text" required>
                </div>
                <div class="form-input">
                    <p>Given Name <span>*</span></p>
                    <input type="text" name="givenname" placeholder="Short answer text" required>
                </div>
                <div class="form-input">
                    <p>Middle Name <span>*</span></p>
                    <input type="text" name="middlename" placeholder="Short answer text" required>
                </div>
                <div class="form-input">
                    <p>Address <span>*</span></p>
                    <input type="text" name="address" placeholder="Short answer text" required>
                </div>
                <div class="form-input">
                    <p>Telephone Number <span>*</span></p>
                    <input type="text" name="telephone" placeholder="Short answer text" required>
                </div>
                <div class="form-input">
                    <p>Cellphone Number <span>*</span></p>
                    <input type="text" name="cellphone" placeholder="Short answer text" required>
                </div>
                <div class="form-input">
                    <p>Email Address <span>*</span></p>
                    <input type="email" name="email" placeholder="Short answer text" required>
                </div>
                <div class="form-input">
                    <p>Date of Birth <span>*</span></p>
                    <input type="date" name="birthdate" required>
                </div>
                <div class="form-input">
                    <p>Sex <span>*</span></p>
                    <label class="container"><p>Male</p>
                        <input type="radio" name="sex" value="Male" required><span class="checkmark"></span>
                    </label>
                    <label class="container"><p>Female</p>
                        <input type="radio" name="sex" value="Female"><span class="checkmark"></span>
                    </label>
                </div>
                <div class="form-input">
                    <p>Civil Status <span>*</span></p>
                    <label class="container"><p>Single</p>
                        <input type="radio" name="status" value="single" required><span class="checkmark"></span>
                    </label>
                    <label class="container"><p>Married</p>
                        <input type="radio" name="status" value="married"><span class="checkmark"></span>
                    </label>
                    <label class="container"><p>Widowed</p> 
                        <input type="radio" name="status" value="widowed"><span class="checkmark"></span>
                    </label>
                    <label class="container"><p>Divorced</p> 
                        <input type="radio" name="status" value="divorced"><span class="checkmark"></span>
                    </label>
                </div>
                <div class="form-input">
                    <p>Religion <span>*</span></p>
                    <input type="text" name="religion" placeholder="Short answer text" required>
                </div>
                <div class="form-input">
                    <p>Nationality <span>*</span></p>
                    <input type="text" name="nationality" placeholder="Short answer text" required>
                </div>
                <div class="form-input">
                    <p>Father's Name <span>*</span></p>
                    <input type="text" name="father" placeholder="Short answer text" required>
                </div>
                <div class="form-input">
                    <p>Mother's Name <span>*</span></p>
                    <input type="text" name="mother" placeholder="Short answer text" required>
                </div>
                <div class="form-input">
                    <p>Guardian's Name <span>*</span></p>
                    <input type="text" name="guardian" placeholder="Short answer text" required>
                </div>
                <div class="form-input">
                    <p>Guardian's Cellphone/Telephone Number <span>*</span></p>
                    <input type="text" name="guardianNo" placeholder="Short answer text" required>
                </div>
                <div class="form-input">
                    <p>Parent's Address <span>*</span></p>
                    <input type="text" name="parentAddress" placeholder="Short answer text" required>
                </div>
                <div class="form-input">
                    <p>Parent's Cellphone/Telephone Number <span>*</span></p>
                    <input type="text" name="parentNumber" placeholder="Short answer text" required>
                </div>
            </section>
            <section class="one" style="margin-top: 0.75rem;">
                <h1>Personal History</h1>
            </section>
            <section class="two">
                <div class="form-input">
                    <p>Menarche (Edad ng unang regla) <span>*</span></p>
                    <input type="text" name="menarche" placeholder="Short answer text">
                </div>
                <div class="form-input">
                    <p>Circumcision (Edad ng pagkatuli) <span>*</span></p>
                    <input type="text" name="circumcise" placeholder="Short answer text">
                </div>
            </section> 
            <div class="submit">
                <button type="submit" name="submit">Submit</button>
            </div>
        </form>
    </div> 
</body>
</html>

<div class="form-input">
	<p>Preferred Sports Events <span>*</span></p>
	<select name="sports" id="sports" class="select" required>
		<option selected="">Choose Below</option>
		<option value="athletics">Athletics</option>
		<option value="arnis">Arnis</option>
		<option value="archery">Archery</option>
		<option value="badminton">Badminton</option>
		<option value="baseball">Baseball</option>
		<option value="basketball">Basketball</option>
		<option value="beach volleyball">Beach Volleyball</option>
		<option value="boxing">Boxing</option>
		<option value="chess">Chess</option>
		<option value="dancesports">Dancesports</option>
		<option value="football">Football</option>
		<option value="futsal">Futsal</option>
		<option value="karate-do">Karate-do</option>
		<option value="lawn tennis">Lawn Tennis</option>
		<option value="pencaksilat">Pencaksilat</option>
		<option value="sepak takraw">Sepak Takraw</option>
		<option value="softball">Softball</option>
		<option value="swimming">Swimming</option>
		<option value="table tennis">Table Tennis</option>
		<option value="taekwondo">Taekwondo</option>
		<option value="volleyball">Volleyball</option>
		<option value="billiard">Billiard</option>
		<option value="others">Others</option>
	</select>                
</div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>