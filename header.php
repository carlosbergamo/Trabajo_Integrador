<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Principal</title>
    <link rel="stylesheet" href="css/estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/icomoon/style.css">
    <link rel="stylesheet" href="css/animate.css">
  </head>
  <body>
    <header>
      <input type="checkbox" id=btn-menu name="" value="">
      <label class="label-menu"for="btn-menu"><span class="icon-menu"></span></label>
      <nav class="menu">
        <ul>
          <!-- SI EXISTE LOGIN, cambiar botonera -->
          
          <!-- <?php if (isset($_SESSION['login'])): ?>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="preguntas_frecuentes.php" class="pregunta__bold">?</a></li>
            <li><a href="logout.php">Cerrar Sesión</a></li>
            <li><a href="perfil.php">Perfil</a></li> -->

          <?php endif; ?>

          <!-- Fin del cambio en botonera -->


          <li><a href="index.php">Inicio</a></li>
          <li><a href="registracion.php">Registrate</a></li>
          <li><a href="ingresar.php">Ingresa</a></li>
          <li><a href="preguntas_frecuentes.php" class="pregunta__bold">?</a></li>
        </ul>
      </nav>
      <a href="index.php"><img class="logo"src="imagenes/logo blanco 50px.png" alt="logo houdini 2.0"></a>
    </header>
  </body>
</html>
