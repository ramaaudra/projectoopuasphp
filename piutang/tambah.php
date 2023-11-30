<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>bayarBang.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <a href="mainpiutang.php" class="btn btn-warning">Kembali</a>

  <!-- form -->
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
  <button type="submit" class="btn btn-primary">Tambah</button>
</form>
<!-- end of form -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>



