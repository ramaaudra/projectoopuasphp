<?php
require 'database.php';
include 'navbar.php';

$select = new Select();

if(!empty($_SESSION["id"])){
  $user = $select->selectUserById($_SESSION["id"]);
}
else{
  header("Location: login.php");
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
  <body style="background:  rgb(24,24,24)">

  <!-- php -->
<?php


  $hutangObj = new hutang();
  $totalHutang = $hutangObj->getTotalHarga();
?>
  <!-- end of php -->

    <!-- card  -->
<div class="row mb-3 position-absolute top-50 start-50 translate-middle " style="width: 40% ">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card text-bg-dark rounded-4">
      <div class="card-body">
        <h5 class="card-title">Hutang</h5>
        <p class="card-text fs-6 fw-lighter fst-italic">Uang yang dipinjam (Meminjam)</p>
        <p class="card-text ">Total Hutang Rp. <?php echo number_format($totalHutang) ?> </p>
        <a href="hutang/mainhutang.php" class="btn btn-outline-light">List Hutang</a>
      </div>
    </div>

    <!-- php function total -->
<?php

  $piutangObj = new piutang();
  $totalPiutang = $piutangObj->getTotalHarga();

?>
    <!--end  php--> 

  </div>
  <div class="col-sm-6">
    <div class="card text-bg-dark rounded-4">
      <div class="card-body">
        <h5 class="card-title">Piutang</h5>
        <p class="card-text fs-6 fw-lighter fst-italic">Uang yang dipinjamkan (Dipinjam)</p>
        <p class="card-text">Total Piutang Rp. <?php echo number_format($totalPiutang); ?></p>

        <a href="piutang/mainpiutang.php" class="btn btn-outline-light">List Piutang</a>
      </div>
    </div>
  </div>
</div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>