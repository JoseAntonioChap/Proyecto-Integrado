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
      <br>
        <br>
        <h1>Modificar equipación</h1>
  <form class="" action="val_mod_equipacion.php" method="post">
ID <input type="text" name="id" > <br>
PRODUCTOS <input type="text" name="producto" > <br>
PRECIO <input type="number" name="precio" step="0.01"> <br>
MARCA <input type="text" name="marca" > <br>
DESCRIPCIÓN <input type="text" name="descripcion" > <br>
LIGA <input type="text" name="liga" > <br>
IMÁGEN <input type="text" name="img" > <br>
<button  type="Equipación" name="Equipación" id="aceptar">Confirmar</button>
  </form>
  <br>
    <br>
<table class="tabla">


<?php

echo "<tr>";
echo "<th>ID</th> <th>PRODUCTOS</th> <th>PRECIO</th> <th>MARCA</th> <th>DESCRIPCIÓN</th> <th>LIGA</th> <th>IMÁGEN</th>  ";
echo "</tr>";

  $mysql = new mysqli("localhost", "root", "", "tienda");
  $productos = mysqli_query($mysql, "select id, producto, precio, marca, descripcion, Liga, img from equipación");
  $row;



  while($row = $productos->fetch_array()){
    echo "<tr>";
    echo "<td>". $row['id'] ."</td>  <td>". $row['producto'] ." </td> <td>".
     $row['precio'] ." </td> <td>". $row['marca'] ." </td> <td>". $row['descripcion'] ."</td> <td>".
      $row['Liga'] ." </td> <td>". $row['img']. "</td>" ;
    echo "</tr>";

}




  ?>
  </table>

  </body>
</html>
