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

      <form class="form-ingreso animated bounceInUp" action="login.controller.php" method="post">
      <h2 class="ingresa">Ingresar</h2>
      <div class="contenedor-inputs">
        <input type="text" name="email" placeholder="&#128274;    E-mail" class="input-100" required="">
        <input type="password" name="clave" placeholder="&#128273;    Contraseña" class="input-100" required="">
        <input type="checkbox" name="recordar" class="input-10" id="recordar">
        <label for="recordar" class="input-90">Recordar contraseña</label>
        <input type="submit" value="Ingresar" class="btn-ingresar" required="">
        <p class="form-link">¿olvidaste tu contraseña? <a href="#">ingresa aquí</a></p>
      </div>
    </form>
  </article>

  <?php include"footer.php" ?>

  </body>

</html>
