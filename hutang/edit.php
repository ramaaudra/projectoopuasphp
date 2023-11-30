<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit.php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body data-bs-theme="dark">
  

  <form class="w-50 mx-auto p-5" action="aksi_edit.php" method="post">
<?php
$id = $_GET['id'];
include "../database.php";

$dt = new hutang();
foreach($dt->tampil_edit($id) as $d) {

?>

<!-- form -->
  <div class="mb-3">
    <label for="nama" class="form-label" >Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $d['nama']; ?>">
  </div>
  <div class="mb-3">
    <label for="tanggal" class="form-label">Tanggal</label>
    <input type="date" class="form-control" id="Tanggal" name="tanggal" value="<?php echo $d['tanggal']; ?>">
  </div>
  <div class="mb-3">
    <label class="form-label">Nominal</label>
    <input type="number" class="form-control" id="nominal" name="nominal" value="<?php echo $d['nominal']; ?>">
  </div>
  <input type="hidden" class="form-control" name="id" value="<?php echo $d['id'];?>">
  <button type="submit" class="btn btn-outline-light" value="UPDATE DATA">Edit</button>
  <a href="mainhutang.php" class="btn btn-outline-light">Kembali</a>
</form>
<!-- end of form -->
<?php
}
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>



