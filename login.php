<?php require "includes/header1.php"?>

    <title>Haywizzy SeaFood | sign-in and sign-up page</title>
    <link rel="stylesheet" href="./css/style-login.css" />
  </head>
  <body>
    <!-- partial:index.partial.html -->
    <div id="container" class="container">
      <!-- FORM SECTION -->
      <div class="row">
        <!-- SIGN UP -->
        <div class="col align-items-center flex-col sign-up">
          <div class="form-wrapper align-items-center">
            <div class="form sign-up">
              <form action="">
                <div class="input-group">
                  <i class="bx bxs-user"></i>
                  <input type="text" placeholder="Username" name="username"/>
                </div>
                <div class="input-group">
                  <i class="bx bx-mail-send"></i>
                  <input type="email" placeholder="Email" name="email" />
                </div>
                <div class="input-group">
                  <i class="bx bxs-lock-alt"></i>
                  <input type="password" placeholder="Password" name="password"/>
                </div>
                <div class="input-group">
                  <i class="bx bxs-lock-alt"></i>
                  <input type="password" placeholder="Confirm password" name="Confirmpassword"/>
                </div>
                <button type="submit">Sign up</button>
              </form>
              <p>
                <span> Already have an account? </span>
                <b onclick="toggle()" class="pointer"> Sign in here </b>
              </p>
            </div>
          </div>
        </div>
        <!-- END SIGN UP -->
        <!-- SIGN IN -->
        <div class="col align-items-center flex-col sign-in">
          <div class="form-wrapper align-items-center">
            <div class="form sign-in">
              <form action="">
                <div class="input-group">
                  <i class="bx bxs-user"></i>
                  <input type="text" placeholder="Username"  name="username"/>
                </div>
                <div class="input-group">
                  <i class="bx bxs-lock-alt"></i>
                  <input type="password" placeholder="Password" name="password"/>
                </div>
                <button type="submit">Sign in</button>
              </form>
              <p>
                <b> Forgot password? </b>
              </p>
              <p>
                <span> Don't have an account? </span>
                <b onclick="toggle()" class="pointer"> Sign up here </b>
              </p>
            </div>
          </div>
          <div class="form-wrapper"></div>
        </div>
        <!-- END SIGN IN -->
      </div>
      <!-- END FORM SECTION -->
      <!-- CONTENT SECTION -->
      <div class="row content-row">
        <!-- SIGN IN CONTENT -->
        <div class="col align-items-center flex-col">
          <div class="text sign-in">
            <p>Welcome Back to</p>
            <h2>Haywizzy SeaFood</h2>
          </div>
          <div class="img sign-in"></div>
        </div>
        <!-- END SIGN IN CONTENT -->
        <!-- SIGN UP CONTENT -->
        <div class="col align-items-center flex-col">
          <div class="img sign-up"></div>
          <div class="text sign-up">
            <p>Join with us @</p>
            <h2>Haywizzy SeaFood</h2>
          </div>
        </div>
        <!-- END SIGN UP CONTENT -->
      </div>
      <!-- END CONTENT SECTION -->
    </div>
    <!-- partial -->
    <script src="./js/script.js"></script>
  </body>
</html>
