<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="UTF-8" />
		<title>TAU - SSIMS</title>

		<!-- Site favicon -->
		<link rel="apple-touch-icon" sizes="180x180" href="imported/vendors/images/apple-touch-icon.png"/>
		<link rel="icon" type="image/png" sizes="32x32" href="imported/vendors/images/favicon-32x32.png"/>
		<link rel="icon" type="image/png" sizes="16x16" href="imported/vendors/images/favicon-16x16.png"/>

		<!-- Mobile Specific Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

		<!-- Google Font -->
		<!-- <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"/> -->

		<!-- CSS -->
        <link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="imported/vendors/styles/core.css" />
		<link rel="stylesheet" type="text/css" href="imported/vendors/styles/icon-font.min.css"/>
		<link rel="stylesheet" type="text/css" href="imported/vendors/styles/style.css" />
	</head>
	<body class="login-page">
		<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
			<div class="container">
                <div class="login-box border-radius-10">
                    <div class="login-title">
                        <h2 class="text-center">Sign in to continue</h2>
                    </div>
                    <form>
                        <div class="input-group custom">
                            <input type="text" class="form-control form-control-lg" placeholder="Username"/>
                            <div class="input-group-append custom">
                                <span class="input-group-text">
                                    <i class="icon-copy dw dw-user1"></i>
                                </span>
                            </div>
                        </div>
                        <div class="input-group custom">
                            <input id="password-input" type="password" class="form-control form-control-lg" placeholder="Password"/>
                            <div class="input-group-append custom">
                                <span id="toggle-password" class="input-group-text" style="cursor: pointer">
                                    <i id="toggle-icon" class="icon-copy bi bi-eye-slash"></i>
                                </span>
                            </div>
                        </div>
                        <div class="row pb-30">
                            <div class="col">
                                <div class="forgot-password">
                                    <a href="#" style="font-size: 14px;">Forgot Password?</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="input-group mb-0">
                                    <input type="submit" class="btn btn-lg btn-block" data-bgcolor="#336b4f" data-color="#ffffff">
                                </div>
                                <div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">OR</div>
                                <div class="input-group mb-0" id="reg-btn">
                                    <a class="btn btn-lg btn-block" style="border: 1px solid #336b4f;" href="#">Register</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
			</div>
		</div>
		<!-- js -->
        <script>
            const passwordInput = document.getElementById('password-input');
            const togglePassword = document.getElementById('toggle-password');
            const toggleIcon = document.getElementById('toggle-icon');

            togglePassword.addEventListener('click', function() {
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    toggleIcon.classList.remove('bi-eye-slash');
                    toggleIcon.classList.add('bi-eye');
                } else {
                    passwordInput.type = 'password';
                    toggleIcon.classList.remove('bi-eye');
                    toggleIcon.classList.add('bi-eye-slash');
                }
            });
        </script>

		<script src="imported/vendors/scripts/core.js"></script>
		<script src="imported/vendors/scripts/script.min.js"></script>
		<script src="imported/vendors/scripts/process.js"></script>
		<script src="imported/vendors/scripts/layout-settings.js"></script>
	</body>
</html>
