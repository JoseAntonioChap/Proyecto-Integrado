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
        <h1>Eliminar definitivamente</h1>
  <form class="" action="val_delete_rec.php" method="post">
ID <input type="number" name="id" > <br>

<button  type="Equipación" name="Equipación" id="aceptar">Confirmar</button>
  </form>
  <br>
    <br>
    <h1>Recuperar definitivamente</h1>
<form class="" action="val_delete_rec.php" method="post">
ID <input type="number" name="id" > <br>

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
  $productos = mysqli_query($mysql, "select ID, producto, precio, marca, descripcion, liga, img from papelera");
  $row;



  while($row = $productos->fetch_array()){
    echo "<tr>";
    echo "<td>". $row['ID'] ."</td>  <td>". $row['producto'] ." </td> <td>".
     $row['precio'] ." </td> <td>". $row['marca'] ." </td> <td>". $row['descripcion'] ."</td> <td>".
      $row['liga'] ." </td> <td>". $row['img']. "</td>" ;
    echo "</tr>";

}




  ?>
  </table>

  </body>
</html>
