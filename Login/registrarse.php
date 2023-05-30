<?php
ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);

if (isset($_POST["registrarse"])) {
    require_once("RegistroUser.php");

    $register = new RegistroUser();

    $register -> setCamperID(4);
    $register -> setEmail($_POST["email"]);
    $register -> setUsername($_POST["username"]);
    $register -> setPassword($_POST["password"]);

    $register -> insertData();

    echo "<script> alert('El registro se realizo satisfactoriamente');document.location ='loginRegister.php'</script>";
}

?>