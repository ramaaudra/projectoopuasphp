<?php

include "../database.php";

$id = $_GET['id'];


$dt = new piutang();

$dt->hapus_data($id);
header('location: mainpiutang.php');

