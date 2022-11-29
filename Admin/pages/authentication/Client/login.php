<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Log In</title>
    <link rel="icon" href="./img/logo.png" rel="icon"/>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <?php
      if(isset($_GET['msg'])){
        if($_GET['msg'] === 'loginFail'){
          echo "<div onclick='hide()' id='error' style='position: absolute; top: 30px; right: 0px; font-family: Arial, Helvetica, sans-serif; background-color: rgb(245, 46, 46); padding: 10px 80px; padding-left: 20px; border-radius: 5px 0 0 5px;'>
            <h3 style='font-weight: 600; padding: 2px; color: #fff;'>Login Failed..</h3>
            <h4 style='font-weight: 300; padding: 2px; color: #fff;'>Try Again</h4>
          </div>";
        }
      }
    ?>


    <div class="container">
      <div class="mainCard">
        <div class="left"></div>

        <!--End of left div-->
        <div class="right">
          <form action="../backend/login-submit.php" method="post">
            <h2 class="title">Login</h2>

            <div class="emailDiv">
              <label for="emailInput" id="email">Email</label>
              <input
                type="email"
                name="email"
                id="emailInput"
                placeholder="Enter Your Email"
                required
              />
            </div>

            <div class="passwordDiv">
              <label for="passwordInput" id="password">Password</label>
              <input
                type="password"
                name="pass"
                id="passwordInput"
                placeholder="Enter Your Password"
                required
              />
            </div>

            <p class="forget-password" style="visibility: hidden">Forgot Password</p>

            <div class="submit"
            style="padding-top:20px"
            >
              <button>Login</button>
            </div>

          </form>
          <!--End of form-->
        </div>
        <!--End of right div-->
      </div>
    </div>
    <!--End of container-->

    <!-- Java Script Part -->
    <script>
      function hide(){
        document.getElementById('error').style="display:none";
      }
    </script>
  </body>
</html>
