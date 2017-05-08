<?php
 function validarLogin();

 // Traigo el JSON para desencodearlo y poder leerlo como array------------------

 $jsonVerify = file_get_contents(datos.json);
 $datosDecode = json_decode($jsonVerify);

 $logError = [];

//------------- Verificar Email -----------------------------------------------

//limpio mail
$log_email =  trim($_POST["mail"]);

//si tengo error por no completar el email lo guardo en array
if ($log_email == '') {
  $logError[] = "El email es obligatorio";
} elseif (!filter_var($log_email,FILTER_VALIDATE_EMAIL)) {
  $logError[] = "El email ingresado no es válido";
}
foreach ($datosDescode as $valor) {
  password_verify($log_email, $email);
}
// uso una variable especial para validar mail, si no es válido lo mando al array

//--------Valido Password-------------------------------------------------------
$log_pass = ($_POST['clave']);

foreach ($datosDecode as $password) {
  password_verify($log_pass, $clave);
}


//--------- Verificar Contraseña -----------------------------------------------

if (password_verify(($log_email), )) {

}

 ?>
