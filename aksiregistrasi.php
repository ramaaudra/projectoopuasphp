<?php

require "database.php";

$register = new register();

if(isset($_POST["submit"])){
    $result = $register->registration($_POST["name"], $_POST["username"], $_POST["email"], $_POST["password"], $_POST["confirmpassword"]);

   if ($result == 1) {
    echo "<script>alert('success'), setTimeout(function(){ window.location.href = 'index.php'; }, 1000);;</script>";
} else if ($result == 10) {
    echo "<script>alert('already taken'), setTimeout(function(){ window.location.href = 'registration.php'; }, 1000);;</script>";
} else if ($result == 100) {
    echo "<script>alert('wrong pass'), setTimeout(function(){ window.location.href = 'registration.php'; }, 1000);;</script>";
}

}
?>
