<?php

require "database.php";
$login = new Login();

if(isset($_POST["submit"])){
  $result = $login->login($_POST["usernameemail"],$_POST["password"]);

   if ($result == 1) {
    $_SESSION["login"] = true;
    $_SESSION["id"] = $login->idUser();
    header("location: index.php");
    
} elseif ($result == 10) {
    echo "<script>alert('wrong password')";
} elseif ($result == 100) {
    echo "<script>alert('not registered');</script>";
}
}

?>