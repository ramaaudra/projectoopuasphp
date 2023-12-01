<?php
session_start();

class hutang
{
  private $host = 'localhost';
  private $user = 'root';
  private $password = '';
  private $database = 'hutangpiutang';
  private $koneksi;

  function __construct()
  {
    $this->koneksi = mysqli_connect($this->host, $this->user, $this->password, $this->database);
  }
  function tampil_data()
  {
    $query = mysqli_query($this->koneksi, 'select * from hutang');
    while ($row = mysqli_fetch_array($query)) {
      $data[] = $row;
    }
    return $data;
  }

  function tambah_data($nama, $tanggal, $nominal)
  {
    $query = mysqli_query($this->koneksi, "insert into hutang values ('','$nama','$tanggal','$nominal')");
  }

  function tampil_edit($id)
  {
    $query = mysqli_query($this->koneksi, "select * from hutang where id= '$id'");
    while ($row = mysqli_fetch_array($query)) {
      $data[] = $row;
    }
    return $data;
  }

  function simpan_data($id, $nama, $tanggal, $nominal)
  {
    mysqli_query($this->koneksi, "update hutang set nama='$nama', tanggal='$tanggal', nominal='$nominal' where id= '$id'");
  }


  function hapus_data($id)
  {
    mysqli_query($this->koneksi, "delete from hutang where id= '$id'");
  }

  function getTotalHarga()
  {
    $query = mysqli_query($this->koneksi, "SELECT SUM(nominal) as total FROM hutang");

    if ($query) {
      $row = mysqli_fetch_assoc($query);
      return $row['total'];
    } else {
      return 0;
    }
  }
}

class piutang extends hutang
{
  private $host = 'localhost';
  private $user = 'root';
  private $password = '';
  private $database = 'hutangpiutang';
  private $koneksi;

  function __construct()
  {
    $this->koneksi = mysqli_connect($this->host, $this->user, $this->password, $this->database);
  }


  function tampil_data()
  {
    $query = mysqli_query($this->koneksi, 'select * from piutang');
    while ($row = mysqli_fetch_array($query)) {
      $data[] = $row;
    }
    return $data;
  }

  function tambah_data($nama, $tanggal, $nominal)
  {
    $query = mysqli_query($this->koneksi, "insert into piutang values ('','$nama','$tanggal','$nominal')");
  }

  function tampil_edit($id)
  {
    $query = mysqli_query($this->koneksi, "select * from piutang where id= '$id'");
    while ($row = mysqli_fetch_array($query)) {
      $data[] = $row;
    }
    return $data;
  }

  function simpan_data($id, $nama, $tanggal, $nominal)
  {
    mysqli_query($this->koneksi, "update piutang set nama='$nama', tanggal='$tanggal', nominal='$nominal' where id= '$id'");
  }


  function hapus_data($id)
  {
    mysqli_query($this->koneksi, "delete from piutang where id= '$id'");
  }

  function getTotalHarga()
  {
    $query = mysqli_query($this->koneksi, "SELECT SUM(nominal) as total FROM piutang");

    if ($query) {
      $row = mysqli_fetch_assoc($query);
      return $row['total'];
    } else {
      return 0; // Or any other default value in case of an error
    }
  }
}

class register extends hutang
{
  private $host = 'localhost';
  private $user = 'root';
  private $password = '';
  private $database = 'hutangpiutang';
  private $koneksi;

  function __construct()
  {
    $this->koneksi = mysqli_connect($this->host, $this->user, $this->password, $this->database);
  }

  public function registration($name, $username, $email, $password, $confirmpassword)
  {
    $duplicate = mysqli_query($this->koneksi, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
    if (mysqli_num_rows($duplicate) > 0) {
      return 10;
      // Username or email has already taken
    } else {
      if ($password == $confirmpassword) {
        $query = "INSERT INTO tb_user VALUES('', '$name', '$username', '$email', '$password')";
        mysqli_query($this->koneksi, $query);
        return 1;
        // Registration successful
      } else {
        return 100;
        // Password does not match
      }
    }
  }
}


class Login
{
  private $host = 'localhost';
  private $user = 'root';
  private $password = '';
  private $database = 'hutangpiutang';
  private $koneksi;

  function __construct()
  {
    $this->koneksi = mysqli_connect($this->host, $this->user, $this->password, $this->database);
  }

  public $id;
  public function login($usernameemail, $password)
  {
    $result = mysqli_query($this->koneksi, "SELECT * FROM tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
    $row = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) > 0) {
      if ($password == $row["password"]) {
        $this->id = $row["id"];
        return 1;
        // Login successful
      } else {
        return 10;
        // Wrong password
      }
    } else {
      return 100;
      // User not registered
    }
  }

  public function idUser()
  {
    return $this->id;
  }
}

class Select extends hutang
{
  private $host = 'localhost';
  private $user = 'root';
  private $password = '';
  private $database = 'hutangpiutang';
  private $koneksi;

  function __construct()
  {
    $this->koneksi = mysqli_connect($this->host, $this->user, $this->password, $this->database);
  }

  public function selectUserById($id)
  {
    $result = mysqli_query($this->koneksi, "SELECT * FROM tb_user WHERE id = $id");
    return mysqli_fetch_assoc($result);
  }
}
