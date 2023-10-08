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
                <h1>Assessment Questionnaire</h1>
                <p>(Rest assured that we will handle your information with confidentiality. Thank you!)</p>
            </section>
            <section class="two" style="margin-top: 0.75rem;">
                <div class="form-input">
                    <p>First Question <span>*</span></p>
                    <label class="container"><p>Rarely</p>
                        <input type="radio" name="q1" value="Rarely" required><span class="checkmark"></span>
                    </label>
                    <label class="container"><p>Sometimes</p>
                        <input type="radio" name="q1" value="Sometimes"><span class="checkmark"></span>
                    </label>
                    <label class="container"><p>Almost</p> 
                        <input type="radio" name="q1" value="Almost"><span class="checkmark"></span>
                    </label>
                    <label class="container"><p>Always</p> 
                        <input type="radio" name="q1" value="Always"><span class="checkmark"></span>
                    </label>
                </div>
                <div class="form-input">
                    <p>Kindly include your 2 x 2 picture <span>*</span></p>
                    <input type="file" name="files" id="image" accept=".jpg, .jpeg, .png" value=""  />
                </div>
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
                    <p>Guardian's Name <span>*</span></p>
                    <input type="text" name="guardian" placeholder="Short answer text" required>
                </div>
                <div class="form-input">
                    <p>Guardian's Cellphone/Telephone Number <span>*</span></p>
                    <input type="text" name="guardianNo" placeholder="Short answer text" required>
                </div>
            </section>
            <div class="submit">
                <button type="submit" name="submit">Submit</button>
            </div>
        </form>
    </div> 
</body>
</html>