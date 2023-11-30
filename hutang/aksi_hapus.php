<?php

include "../database.php";

$id = $_GET['id'];


$dt = new hutang();

$dt->hapus_data($id);
header('location: mainhutang.php');

