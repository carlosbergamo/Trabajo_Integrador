<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registrar Cuenta</title>
    <link rel="stylesheet" href="css/estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/icomoon/style.css">
    <link rel="stylesheet" href="css/animate.css">
  </head>

  <body>

    <?php include"header.php" ?>


    <article class="articulo-centrar">

      <?php if (isset($_SESSION["errores"])): ?>
        <div class="errores">
          <?php foreach ($_SESSION["errores"] as $error): ?>
            <p><?php echo $error ?></p>
          <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <!-- PERSISTENCIA DE DATOS -->
    
    <?php
    $nombre='';
    $apellido='';
    $email='';

    if (isset($_SESSION['nombre'])) {
      $nombre = $_SESSION['nombre'];
    }
    if (isset($_SESSION['apellido'])) {
      $apellido = $_SESSION['apellido'];
    }
    if (isset($_SESSION['mail'])) {
      $email = $_SESSION['nombre'];
    }
    ?>

      <form class="form-registro animated bounceInUp" action="php/registro.controller.php" method="post">
      <h2 class="registrarme">Registrarme</h2>
      <div class="contenedor-inputs">
        <input type="text" name="nombre" placeholder="*Nombre" class="input-48" required="" value="<?php echo $nombre; ?>">
        <input type="text" name="apellido" placeholder="*Apellido" class="input-48" required="" value="<?php echo $apellido; ?>">
        <input type="email" name="mail" placeholder="*E-mail" class="input-100" required="" value="<?php echo $email; ?>">

        <!-- FIN PERSISTENCIA DE DATOS -->

        <input type="password" name="clave" placeholder="*Contraseña" class="input-48" required="">
        <input type="password" name="clave1" placeholder="*Repita Contraseña" class="input-48" required="">
        <input type="text" name="telefono" placeholder="Teléfono" class="input-100">
        <input type="checkbox" name="recordar" class="input-10" id="recordar">
        <label for="recordar" class="input-90">Recordar contraseña</label>
        <input type="submit" value="Registrarme" class="btn-registrarme">
        <p class="form-link">¿ya tenés cuenta? <a href="ingresar.php">ingresa aquí</a></p>
      </div>
    </form>
  </article>


    <?php include"footer.php" ?>

  </body>

</html>
