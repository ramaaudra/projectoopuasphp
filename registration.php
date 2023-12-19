<?php
require 'database.php';
include 'navbarregis.php';

if (!empty($_SESSION["id"])) {
  header("Location: index.php");
}

?>


<!doctype html>
<ht lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-IA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BayarBang</title>
    <link rel="stylesheet" href="style/style.css">
  </head>

  <!-- form -->

  <body>
    <div class="container">
      <div class="box form-box">
        <header>Register</header>
        <form action="aksiregistrasi.php" method="post" autocomplete="off">
          <div class="field input">
            <label for="username">Name</label>
            <input type="text" name="name" id="name" autocomplete="off" required>
          </div>

          <div class="field input">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" autocomplete="off" required>
          </div>

          <div class="field input">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" autocomplete="off" required>
          </div>

          <div class="field input">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" autocomplete="off" required>
          </div>

          <div class="field input">
            <label for="password">Confirm Password</label>
            <input type="password" name="confirmpassword" id="confirmpassword" autocomplete="off" required>
          </div>


          <div class="field">
            <input type="submit" name="submit" value="Register" autocomplete="off" required>
          </div>

          <div class="links">
            Sudah punya akun? <a href="login.php">Login kan!</a>
          </div>
        </form>
      </div>
    </div>
  </body>