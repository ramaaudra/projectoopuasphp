<?php
require 'database.php';
include 'navbarlogin.php';

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
        <header>Login</header>
        <form action="aksilogin.php" method="post" autocomplete="off">
          <div class="field input">
            <label for="username">Username</label>
            <input type="text" name="usernameemail" id="usernameemail" required>
          </div>

          <div class="field input">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
          </div>

          <div class="field">
            <input type="submit" name="submit" value="login" required>
          </div>

          <div class="links">
            Gak punya akun? <a href="registration.php">Daftar lah!</a>
          </div>
        </form>
      </div>
    </div>
  </body>