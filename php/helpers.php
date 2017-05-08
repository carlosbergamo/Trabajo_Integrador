<?php

//-------VALIDACIONES-----------------------------------------------------------

 //  Validar nombre
function validarNombre() {

  $errorNombre = [];

  $nombre = trim($_POST['nombre']);
  if ($nombre == '') {
    $errorsNombre[] = "Faltó ingresar nombre";
    return $errorNombre;
  }
}

//  Validar email
function validarEmail(){
  $errorEmail = [];
  $email = trim($_POST['correo']);
  if ($email = '') {
    $errorEmail[] = 'Faltó ingresar email'
  }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errorEmail[] = 'El correo ingresado no es válido';
  }
  return $errorEmail;
}

//  Validar password
function validarPassword(){
  $errorPass = [];
  if ($_POST['clave'] != $_POST['clave2']) {
    $errorPass[] = 'Las contraseñas no coinciden';
  }
  return $errorPass;
}






 ?>
