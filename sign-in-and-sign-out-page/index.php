<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>Sign in & Sign up Form</title>
  </head>


  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" method="POST" class="sign-in-form">
              <?php include('errors.php') ?>
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Username" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" required/>
            </div>
            <input type="submit" value="Login" name="login_user" class="btn solid" />
	    <p class="social-text"> Forgot Password ?</p>
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form action="#" method="POST" class="sign-up-form">
            <?php include('errors.php') ?>
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Username" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" placeholder="Email" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password_1" placeholder="Password" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password_2" placeholder="Confirm Password" required/>
            </div>
	    <label class="form-check-label"><input type="checkbox" required="required"> I accept the <a id="terms-and-condition" href="#">Terms And Conditions</a></label>

            <input type="submit" class="btn" name="reg_user" value="Sign up" />
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3> </br>
            <p>
              Provide a hand for a paw
            </p> </br>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/login.jpg" class="image" alt="" /> 
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Keep protecting creatures, you may lose mind however you will discover a spirit without a doubt
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.jpg" class="image" alt="" /> 
        </div>
      </div>
    </div>


    <script src="app.js"></script>
  </body>
</html>
