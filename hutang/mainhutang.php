
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>bayarBang.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body style="background:  rgb(24,24,24)">

<?php
include "../database.php";
include 'navbarhutang.php';
$no = 1;
$total = 0;

$dt= new hutang();

foreach ($dt->tampil_data() as $d) {
$total += $d['nominal'];
?>
  
  


    <!-- php -->




<div class="card text-center w-50 mx-auto p-2 text-bg-dark mt-2" style="width: 200px;">
  <div class="card-header ">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link active text-bg-dark fw-lighter " href="edit.php?id=<?php echo $d['id']; ?>">Edit</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link active text-bg-dark fw-lighter" href="aksi_hapus.php?id=<?php echo $d['id']; ?>">Hapus</a>
      </li>
    </ul>
  </div>
   <div class="card-body">
    <h5 class="card-title fs-5"><?php echo $d['nama'] ?></h5>
    <p class="card-text fw-lighter fs-6 "><?php echo $d['tanggal'] ?></p>
    <p class="card-text ">Rp. <?php echo number_format($d['nominal']); ?></p>
  </div>
</div>



<?php
}
?>
                
                <!-- end of php -->
        
    <a style="position: fixed; bottom: 0px; right: 0; margin-right: 30px; margin-bottom: 30px;" data-bs-toggle="modal" data-bs-target="#exampleModal" href ="tambah.php"> <img src="../icon/plus.png" width="85" height="85"></a>
    


                  </div>

<!-- end -->

<!-- modal tambah -->
<div class="text-bg-dark">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-theme="dark">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah hutang</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                  <form action="aksi_tambah.php" method="post">
                    <div class="mb-3">
                      <label for="nama" class="form-label" >Nama</label>
                      <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                      <label for="tanggal" class="form-label">Tanggal</label>
                      <input type="date" class="form-control" id="tanggal" name="tanggal">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Nominal</label>
                      <input type="number" class="form-control" id="nominal" name="nominal">
                    </div>
                    <button type="submit" class="btn btn-outline-light">Tambah</button>
                  </form>
                  </div>
<!-- end of form -->
    


<!-- end of -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>