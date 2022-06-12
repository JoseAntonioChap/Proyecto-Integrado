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
        <h1>Envíos en proceso de entrega</h1>
  <form class="" action="val_completar.php" method="post">
ID <input type="text" name="id" > <br>

<button  type="Equipación" name="Equipación" id="aceptar">Confirmar</button>
  </form>
  <br>
    <br>
<table class="tabla">


<?php



  $mysql = new mysqli("localhost", "root", "", "tienda");
  $productos = mysqli_query($mysql, "select * from preparación");
  $row2;



  while($row2 = $productos->fetch_array()){
    echo "<br>";
    echo "<table class='tabla'>";
  echo "<tr>";
  echo "<th>ID: " .$row2["ID"] ."</th>";
  echo "<th>Nombre: " .$row2["Nombre"] ."</th>";
  echo "<th>Apellidos: " .$row2["Apellidos"] ."</th>";
  echo "<th>Dirección: " .$row2["Direccion"] ."</th>";
  echo "<th>Email: " .$row2["Email"] ."</th>";
  echo "<th>Teléfono: " .$row2["Telf"] ."</th>";
  echo "</tr>";
  echo "<tr>";
  echo "<th>Equipación: " .$row2["Producto"] ."</th>";
  echo "<th>Precio: " .$row2["Precio"] ."€</th>";
  echo "<th>Número de la camiseta: " .$row2["numcam"] ."</th>";
  echo "<th>Nombre de la camiseta: " .$row2["nomcam"] ."</th>";
  echo "<th>Talla: " .$row2["talla"] ."</th>";
  echo "<th>Nombre real: " .$row2["realnom"] ."</th>";
  echo "</tr>";
  echo "</table>";
  echo "<br>";

}




  ?>
  </table>

  </body>
</html>
