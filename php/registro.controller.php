<?php session_start();

include('helpers.php');


$errorNombre = validarNombre();
$errorEmail = validarEmail();
$errorPass = validarPassword();

$errors = [validarnombre(), validarEmail(), validarPassword()];

if(count($erorrs)) {
  $_SESSION['errors'] = $errors;
  header('Location: ../registracion.html');
  exit();
}



 ?>
