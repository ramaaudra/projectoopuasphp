<?php
require 'database.php';
include 'navbarregis.php';

if(!empty($_SESSION["id"])){
  header("Location: index.php");
}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>bayarBang.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body data-bs-theme="dark">

<!-- form -->
      <form class="w-50 mx-auto p-5" action="aksiregistrasi.php" method="post" autocomplete="off">
        <div class="mb-3">
          <label for="Nama" class="form-label" >Nama</label>
          <input type="text" class="form-control" name="name" required value="">
        </div>
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control"  name="username">
        </div>
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" name="email" required value="">
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" class="form-control" name="password" required value="">
        </div>
        <div class="mb-3">
          <label class="form-label">Confirm Password</label>
          <input type="password" class="form-control" name="confirmpassword" required value="">
        </div>

        <button type="submit" name="submit" class="btn btn-outline-light" value="">Daftar</button>
        <a href="login.php" class="btn btn-outline-light" data-bs-theme="">Login</a>
      </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>