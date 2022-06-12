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

  <form class="Confirmar" action="val_acant.php" method="post">
    <h1>AÑADIR</h1>
ID <input type="number" name="id" > <br>

Cantidad añadir <input type="number" name="cantidad" > <br>
<input type="submit" name="confirmar" value="Confirmar" id="aceptar">
  </form>
<h1>ELIMINAR</h1>
  <form class="" action="val_elacant.php" method="post">
ID <input type="number" name="id" > <br>

Cantidad eliminar <input type="number" name="cantidad" > <br>
<input type="submit" name="confirmar" value="Confirmar" id="aceptar">
  </form>


  <br>
<table class="tabla">


<?php

echo "<tr>";
echo "<th>ID</th> <th>Talla</th> <th>PRECIO</th> <th>cantidad</th>   ";
echo "</tr>";

  $mysql = new mysqli("localhost", "root", "", "tienda");
  $productos = mysqli_query($mysql, "select id, talla, equipo, cantidad from stock");
  $row;



  while($row = $productos->fetch_array()){
    echo "<tr>";
    echo "<td>". $row['id'] ."</td>  <td>". $row['talla'] ." </td> <td>".
     $row['equipo'] ." </td> <td>". $row['cantidad'] ." </td> " ;
    echo "</tr>";

}




  ?>
  </table>

  </body>
</html>
