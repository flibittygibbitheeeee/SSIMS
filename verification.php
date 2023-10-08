<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">    
    <title>Form</title>
</head>
<body>
    <div class="content">
        <form action="" method="POST" enctype="multipart/form-data" id="myForm">
            <section class="one">
                <h1>Verification</h1>
                <p>(For verification, kindly provide your student number and email. Thank you!)</p>
            </section>
            <section class="two" style="margin-top: 0.75rem;">
                <div class="form-input">
                    <p>Student Number <span>*</span></p>
                    <input type="number" name="studentno" placeholder="Short answer text" required>
                </div>
                <div class="form-input">
                    <p>Email Address <span>*</span></p>
                    <input type="email" name="email" placeholder="Short answer text" autocomplete="off" required>
                </div>
            </section>
            <a href="finishedForm.php" target="_blank">
                <div class="submit">
                    <button type="button" name="submit">Submit</button>
                </div>
            </a>
        </form>
    </div>
</body>
</html>
