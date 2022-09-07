<?php
include_once 'addRegistration.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link href=".css/login.css" rel="stylesheet">
        <script> src=".js/registration.js" </script>
    </head>
    </div>
    <div class="header">
        <img src="tech2.jpg" alt="logo" class="src">
    </div>
    <div class="navbar">
        <a href="index.php">Home</a>
          <?php
            if (isset($_SESSION["userID"])){
              echo("<a href=\"logout.php\" class=\"right\">Logout</a>");
              echo("<a href=\"profile.php?userID=". $_SESSION["userID"] ."\" class=\"right\">". $_SESSION["username"] ."</a>");
            }
            else{
              echo("<a href=\"registration.php\" class=\"right\" >Register</a>");
              echo("<a href=\"login.php\" class=\"right\">Login</a>");
            }?>
    </div>
    <body>
        <div class="container text-center">
        <div class="row">
        <div class="col-sm-12">
        <div class="row">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-6">
        <div class="panel panel-default text-left">
        <form id="form" action="#" method="post">
            <div class="center">
                <h2>Sign Up</h2>
                <p>
                    <label for="username" class="floatLabel">Username:</label>
                    <input id="username" name="username" type="text" required>
                </p>
                <p>
                    <label for="Email" class="floatLabel">Email:</label>
                    <input id="Email" name="Email" type="text" required>
                </p>
                <p>
                    <label for="password" class="floatLabel">Password (8 characters minimun):</label>
                    <input id="password" name="password" type="password" onkeyup="check();" autocomplete="current-password" minlength="8" required>
                </p>
                <p>
                    <label for="confirm_password" class="floatLabel">Confirm Password:</label>
                    <input id="confirm_password" name="confirm_password" type="password" onkeyup="check();" required>
                    <span id="match"></span>
                </p>
                <p>
                    <button id="submit" type="button" >Create My Account</button>
                </p>
    </body>
    </div>
    <footer class="footer">
    <h5></h5>
    </footer>
    <footer class="footer">
    <p>Project by Team 01 for SOEN 341  <a>https://github.com/jasonhillinger/soen341project</a></p>
    </footer>
    </form>
</html>
