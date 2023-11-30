<?php

include "../database.php";

$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$nominal = $_POST['nominal'];

$dt = new piutang();

$dt->tambah_data($nama, $tanggal, $nominal);
header('location: mainpiutang.php');