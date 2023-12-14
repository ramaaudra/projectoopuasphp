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

  protected function getKoneksi()
  {
    return $this->koneksi;
  }

  function tampil_data()
  {
    $data = array();
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
    $data = array();
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
  function __construct()
  {
    parent::__construct();
  }


  function tampil_data()
  {
    $data = array();
    $query = mysqli_query($this->getKoneksi(), 'select * from piutang');
    while ($row = mysqli_fetch_array($query)) {
      $data[] = $row;
    }
    return $data;
  }

  function tambah_data($nama, $tanggal, $nominal)
  {
    $query = mysqli_query($this->getKoneksi(), "insert into piutang values ('','$nama','$tanggal','$nominal')");
  }

  function tampil_edit($id)
  {
    $data = array();
    $query = mysqli_query($this->getKoneksi(), "select * from piutang where id= '$id'");
    while ($row = mysqli_fetch_array($query)) {
      $data[] = $row;
    }
    return $data;
  }

  function simpan_data($id, $nama, $tanggal, $nominal)
  {
    mysqli_query($this->getKoneksi(), "update piutang set nama='$nama', tanggal='$tanggal', nominal='$nominal' where id= '$id'");
  }


  function hapus_data($id)
  {
    mysqli_query($this->getKoneksi(), "delete from piutang where id= '$id'");
  }

  function getTotalHarga()
  {
    $query = mysqli_query($this->getKoneksi(), "SELECT SUM(nominal) as total FROM piutang");

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
  function __construct()
  {
    parent::__construct();
  }

  public function registration($name, $username, $email, $password, $confirmpassword)
  {
    $duplicate = mysqli_query($this->getKoneksi(), "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
    if (mysqli_num_rows($duplicate) > 0) {
      return 10;
      // Username or email has already taken
    } else {
      if ($password == $confirmpassword) {
        $query = "INSERT INTO tb_user VALUES('', '$name', '$username', '$email', '$password')";
        mysqli_query($this->getKoneksi(), $query);
        return 1;
        // Registration successful
      } else {
        return 100;
        // Password does not match
      }
    }
  }
}


class Login extends register
{
  public $id;

  function __construct()
  {
    parent::__construct();
  }

  function login($usernameemail, $password)
  {
    $result = mysqli_query($this->getKoneksi(), "select * from tb_user where username = '$usernameemail' or email = '$usernameemail'");
    $row = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) > 0) {
      if ($password == $row["password"]) {
        $this->id = $row["id"];
        return 1;
      } else {
        return 10;
      }
    } else {
      return 100;
    }
  }

  function idUser()
  {
    return $this->id;
  }
}

class Select extends login
{
  function __construct()
  {
    parent::__construct();
  }
  function selectUserById($id)
  {
    $result = mysqli_query($this->getKoneksi(), "select * from tb_user where id = $id");
    return mysqli_fetch_assoc($result);
  }
}
