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
                <!-- PICTURE -->
                <div class="form-input">
                    <p>Kindly include your 2 x 2 picture <span>*</span></p>
                    <input type="file" name="files" id="image" accept=".jpg, .jpeg, .png" value=""  />
                </div>
                <!-- APPLICATION DATE -->
                <div class="form-input">
                    <p>Date of Application <span>*</span></p>
                    <input type="date" name="app_date" required>
                </div>
                <!-- NAME -->
                <div class="form-input">
                    <p>Name <span>*</span></p>
                    <input type="text" name="name" placeholder="Short answer text" required>
                </div>
                <!-- SEX -->
                <div class="form-input">
                    <p>Sex <span>*</span></p>
                    <label class="container"><p>Male</p>
                        <input type="radio" name="sex" value="Male" required><span class="checkmark"></span>
                    </label>
                    <label class="container"><p>Female</p>
                        <input type="radio" name="sex" value="Female"><span class="checkmark"></span>
                    </label>
                </div>
                <!-- AGE -->
                <div class="form-input">
                    <p>Age <span>*</span></p>
                    <input type="number" name="age" placeholder="Short answer text" required>
                </div>
                <!-- ADDRESS -->
                <div class="form-input">
                    <p>Address <span>*</span></p>
                    <input type="text" name="address" placeholder="Short answer text" required>
                </div>
                <!-- YEAR -->
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
                <!-- ID Number -->
                <div class="form-input">
                    <p>ID Number <span>*</span></p>
                    <input type="text" name="student_no" placeholder="Short answer text" required>
                </div>
                <!-- CONTACT NUMBER -->
                <div class="form-input">
                    <p>Contact Number <span>*</span></p>
                    <input type="text" name="contact_no" placeholder="Short answer text" required>
                </div>
                <!-- DATE OF BIRTH -->
                <div class="form-input">
                    <p>Date of Birth <span>*</span></p>
                    <input type="date" name="birthdate" required>
                </div>
                <!-- PLACE OF BIRTH -->
                <div class="form-input">
                    <p>Place of Birth <span>*</span></p>
                    <input type="text" name="birthplace" placeholder="Short answer text" required>
                </div>
                <!-- MOTHER'S NAME -->
                <div class="form-input">
                    <p>Mother's Name <span>*</span></p>
                    <input type="text" name="mother" placeholder="Short answer text" required>
                </div>
                <!-- MOTHER'S CONTACT NUMBER -->
                <div class="form-input">
                    <p>Mother's Contact Number <span>*</span></p>
                    <input type="text" name="mother_no" placeholder="Short answer text" required>
                </div>
                <div class="form-input">
                    <p>Father's Name <span>*</span></p>
                    <input type="text" name="father" placeholder="Short answer text" required>
                </div>
                <!-- FATHER'S CONTACT NUMBER -->
                <div class="form-input">
                    <p>Father's Contact Number <span>*</span></p>
                    <input type="text" name="father_no" placeholder="Short answer text" required>
                </div>
                <!-- SPORTS -->
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
                <div class="form-input">
                    <p>Playing Experience  <span>*</span></p>
                    <textarea name="experience" class="textarea" required></textarea>
                </div>
                <div class="form-input">
                    <p>Awards Received  <span>*</span></p>
                    <textarea name="awards" class="textarea" ></textarea>
                </div>
            </section>
            <div class="submit">
                <button type="submit" name="submit">Submit</button>
            </div>
        </form>
    </div> 
</body>
</html>