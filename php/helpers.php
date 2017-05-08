<?php

function validarRegistro (){

//como voy a tener varios errores, aramo un array
$errores = [];

//-------------VALIDO NOMBRE----------------------------------------------------

//limpio nombre
$reg_nombre =  trim($_POST["nombre"]);

//si tengo error por no completar el nombre lo guardo en array
if ($reg_nombre == '') {
  $errores[] = "El nombre es obligatorio";
}

//--------------VALIDO APELLIDO-------------------------------------------------

//limpio apellido
$reg_apellido=  trim($_POST["apellido"]);

//si tengo error por no completar el apellido lo guardo en array
if ($reg_apellido == '') {
  $errores[] = "El apellido es obligatorio";
}

//----------------VALIDO MAIL---------------------------------------------------

//limpio mail
$reg_email =  trim($_POST["mail"]);

//si tengo error por no completar el email lo guardo en array
if ($reg_email == '') {
  $errores[] = "El email es obligatorio";
} elseif (!filter_var($reg_email,FILTER_VALIDATE_EMAIL)) {
  $errores[] = "El email ingresado no es válido";
}
// uso una variable especial para validar mail, si no es válido lo mando al array

//--------------VALIDO CONTRASEÑAS----------------------------------------------

$clave = trim($_POST["clave"]);
$clave1 = trim($_POST["clave1"]);

//si tengo error por no completar la contraseña lo guardo en array
if ($clave == '') {
  $errores[] = "Debe ingresar una contraseña";
} elseif ($clave != $clave1) {
  $errores[] = "Las contraseñas no coinciden";
}
// comparo contraseñas, y guardo error si no son iguales

// --------- ABRO SESSION  para persistir --------------------------------------


$_SESSION['nombre'] = $_POST['nombre'];
$_SESSION['apellido'] = $_POST['apellido'];
$_SESSION['mail'] = $_POST['mail'];

return $errores;


}
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
