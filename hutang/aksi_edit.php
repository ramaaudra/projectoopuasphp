<?php

include "../database.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$nominal = $_POST['nominal'];

$dt = new hutang();

$dt->simpan_data($id, $nama, $tanggal, $nominal);
header('location: mainhutang.php');

