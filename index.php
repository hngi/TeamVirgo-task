<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" />
    <title>TeamVirgo Sign-in/Sign-up</title>
     </head>
  <body>
  	 <div class="container" id="container">
      <div class="form-container sign-up-container">
        <form action="registration.php" method="POST">
          <h1>Create Account</h1>
          <input type="text" placeholder="Username" required name="username">
          <input type="email" placeholder="Email" required name="email" >
          <input type="password" placeholder="Password" required name="password">
          <button>Sign Up</button>
        </form>
      </div>
        

      <div class="form-container sign-in-container">
        <form action="validation.php" METHOD="POST">
         
          <h1>Let's get you logged in.</h1>
          <h3>Enter your username and password</h3>
          <input type="text" placeholder="Username" required name="username">
          <input type="password" placeholder="Password" required name="password">
          <a href="#">Forgot your password?</a>
          <button>LogIn</button>
        </form>
      </div>

      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <div class="teamVirgoFont">
              <h1>teamVirgo</h1>
            </div>
                 <img alt="avatars" src="images/avatars.png">
            <p><h3>Let's get you logged in</h3></p>
                 <button class="ghost" id="signIn">LogIn</button>
          </div>
          <div class="overlay-panel overlay-right">
            <div class="teamVirgoFont">
              <h1>teamVirgo</h1>
            </div>
                 <img alt="avatars" src="images/avatars.png">
            <h1>Hello, Friend!</h1>
            <p><b>Start your journey with us.</b></p>
            <button class="ghost" id="signUp">Sign Up</button>
          </div>
        </div>
      </div>
    </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>