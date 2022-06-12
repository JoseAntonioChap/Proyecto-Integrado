<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Shop</title>
    <link rel="stylesheet" href="estilos/estilo.css">

    <meta http-equiv="Expires" content="0">
     <meta http-equiv="Last-Modified" content="0">
     <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
     <meta http-equiv="Pragma" content="no-cache">


  </head>
  <body>

    <header>
    <div class="cabeza">
    <a href="confirmación.php"> <img src="img/logo1.png" alt="Spain Gaming" id="logo"> </a>

  <p id="Titulologo">Football Sport Shirts</p>


      <a href="usuario.php"><img src="img/usuario.png" alt="" id="icono_prim"></a>
      <a href="carrito.php"><img src="img/carrito.png" alt="" id="iconos_sec"></a>
      <a href="cerrar.php"><img src="img/cerrar.png" alt="" id="iconos_sec"></a>
    </div>
    </header>

    <ul class="navegacion">
      <li><a href="LESP.php">LIGA ESPAÑOLA</a></li>
      <li><a href="LING.php">LIGA INGLESA</a></li>
      <li><a href="LALE.php">LIGA ALEMANA</a></li>
      <li><a href="LFRA.php">LIGA FRANCESA</a></li>
      <li><a href="LITA.php">LIGA ITALIANA</a></li>
    </ul>


<div class="divtabla">
  <h1>DATOS PERSONALES</h1>
  <h2>DATOS EXISTENTES</h2>
  <?php
  session_start();
  $mysql = new mysqli("localhost", "root", "", "tienda");
  $user = mysqli_query($mysql, "Select * from usuarios where usuario ='". $_SESSION["usuario"]."'");
  $row;
  while($row = mysqli_fetch_assoc($user)){
echo "<p>NOMBRE: " .$row["nombre"] ."</p>";
echo "<p>APELLIDOS: " .$row["apellido"] ."</p>";
echo "<p>EMAIL:  " .$row["email"] ." </p>";
echo "<p>TELÉFONO:  " .$row["telefono"] ." </p>";
echo "<p>DIRECCIÓN:  " .$row["direccion"] ." </p>";
}


   ?>
   <h2>CAMBIO DE DATOS</h2>
<form  action="validaractualizacion.php" method="post">
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



</div>
<p></p>
  </body>
</html>
