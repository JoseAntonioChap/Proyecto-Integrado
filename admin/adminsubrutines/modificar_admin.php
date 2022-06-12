<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Shop</title>
    <link rel="stylesheet" href="../../estilos/estilo.css">

    <meta http-equiv="Expires" content="0">
     <meta http-equiv="Last-Modified" content="0">
     <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
     <meta http-equiv="Pragma" content="no-cache">


  </head>
  <body>
    <header>
    <div class="cabeza">
    <a href="../opciones.php"> <img src="../../img/logo1.png" alt="Spain Gaming" id="logo"> </a>
    <p id="Titulologo">Football Sport Shirts</p>



    </header>
    <div class="divtabla">
<a href="../opciones.php">  <input type="button" name="Atrás" value="Atrás" id="aceptar"></a>
<h1>Añadir usuario</h1>
      <form class="registrar" action="val_mod_admin.php" method="post" >
    <p> <label>Usuario</label>
    <input type="text" name="usuario" required id="formusuario"></p>
    <p><label>Contraseña</label>
    <input type="password" name="contraseña" required id="formcontraseña"></p>
    <p><label>Repetir contraseña</label>
    <input type="password" name="repcont" id="formrepcont"></p>
    <p><label>Nombre</label>
    <input type="text" name="nombre" required id="formnombre"></p>


    <p><label>Teléfono</label>
    <input type="tel" name="telef" required id="formtelef" pattern="[0-9]{9}"></p>
    <p><label>Dirección de correo electrónico</label>
    <input type="text" name="email" required id="formemail"></p>
    <input type="submit" name="Confirmar" value="Confirmar" id="aceptar" >



      </form>

  <br>
<table class="tabla">


<?php

echo "<tr>";
echo "<th>ID</th> <th>USUARIO</th> <th>NOMBRE</th> <th>EMAIL</th> <TH>NÚMERO TELEFONO</TH>   ";
echo "</tr>";

  $mysql = new mysqli("localhost", "root", "", "tienda");
  $productos = mysqli_query($mysql, "select * from administradores");
  $row;



  while($row = $productos->fetch_array()){
    echo "<tr>";
    echo "<td>". $row['ID'] ."</td>  <td>". $row['usuario'] ." </td> <td>".
     $row['nombre'] ." </td> <td>". $row['email'] ." </td> <td>" .$row["número"] ."</td>" ;
    echo "</tr>";

}




  ?>
  </table>

  </body>
</html>
