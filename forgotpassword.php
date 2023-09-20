<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/93e3069a39.js" crossorigin="anonymous"></script>
    <title>TAU - SSIMS</title>
    <link rel="icon" type="image/png" sizes="16x16" href="assets/mini.png"/>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form autocomplete="off" method="POST" class="sign-in-form">

              <div class="heading">
                <h2>Forgot Password</h2>
              </div>

              <div class="actual-form">
                <div class="input-field">
                  <i class="fa-regular fa-envelope"></i>                  
                  <input type="email" name="email" placeholder="Email"  autocomplete="off" required/>
                </div>

                <div class="input-field" style="margin-bottom: 10px;">
                    <i class="fa-solid fa-key"></i>                  
                    <input type="text" name="code" placeholder="Verification code" autocomplete="off" required/>
                </div>

                <div class="gc">
                    <input type="submit" name="getcode" value="Get Code" class="gc-btn"/>
                </div>

                <input type="submit" name="login" value="Sign In" class="sign-btn" />

                <div class="return">
                  <a href="#"><i class="fa-solid fa-caret-left"></i> Go back</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </main>

    <!-- Javascript file -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </body>
</html>