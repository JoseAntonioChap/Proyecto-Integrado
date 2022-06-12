<!DOCTYPE html>
<html lang="es">

  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="estilos/estilo.css">
<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
  </head>

  <script type="text/javascript">
    function confirm(){
      var respuesta = confirm("Deseas introducir los datos");
      if (respuesta == true) {
        return true;
        window.open("index.php")
      }else {
        return false;
      }
    }
  </script>

  <header>
  <div class="cabeza">
    <a href="index.php"> <img src="img/logo1.png" alt="Spain Gaming" id="logo"> </a>
  <p id="Titulologo">Football Sport Shirts</p>



  </header>


  <body>
<div class="registro">
  <form class="registrar" action="validarregistro.php" method="post" >
<p> <label>Usuario</label>
<input type="text" name="usuario" required id="formusuario"></p>
<p><label>Contraseña</label>
<input type="password" name="contraseña" required id="formcontraseña"></p>
<p><label>Repetir contraseña</label>
<input type="password" name="repcont" id="formrepcont"></p>
<p><label>Nombre</label>
<input type="text" name="nombre" required id="formnombre"></p>
<p><label>Apellido</label>
<input type="text" name="apellido" required id="formapellidos"></p>
<p><label>Dirección</label>
<input type="text" name="dirección" required id="formdirección"></p>
<p><label>Teléfono</label>
<input type="tel" name="telef" required id="formtelef" pattern="[0-9]{9}"></p>
<p><label>Dirección de correo electrónico</label>
<input type="text" name="email" required id="formemail"></p>
<input type="submit" name="Confirmar" value="Confirmar" id="aceptar" >



  </form>

  <a href="login.php"> <button type="button" id="aceptar">Entrar</button></a>




</div>


  </body>
</html>
