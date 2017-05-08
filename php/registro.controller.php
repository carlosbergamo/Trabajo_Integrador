<?php
session_start();
include ("helpers.php");

$errores = validarRegistro();

// ABRO ARCHIVO JSON PARA METER LOS DATOS DEL USUARIO--------------------------

$datos = "datos.json";
$recurso =  fopen($datos, "a");

// Codifico los datos mandados por POST a JSON----------------------------------

// ponerle sub-índice para hacer el POST más seguro

$misDatos = [
  "nombre" => $_POST['nombre'],
  "apellido" => $_POST['apellido'],
  "mail" => $_POST['mail'],
  // ------ Hasheo de contraeña --------------------------------------------------
  "clave" =>  password_hash($_POST['clave'], PASSWORD_DEFAULT, ['cost' => 12]),
  "telefono" => $_POST['telefono'],
  "recordar" => $_POST['recordar']
];

$misDatosJSON = json_encode($misDatos);

//Si hay errores corto la ejecución y los devuelvo
if (count($errores)) {
  $_SESSION["errores"] = $errores;
  header("Location: ../registracion.php");

// Si NO existen errores, codifico los datos en JSON y redirijo ----------------

} else {
  fwrite($recurso, $misDatosJSON. PHP_EOL);
  fclose($recurso);
  // $_SESSION['login'] = true;
  header("Location: ../registro-exitoso.php");

}

// Si existe "recordar contraseña", seteo cookie--------------------------------

if (isset($_POST['recordar'])){
  $cookieName = 'Recordar';
  setcookie($cookieName, "$reg_nombre", time()+ (60 * 60 * 24 * 365));
}



 ?>
