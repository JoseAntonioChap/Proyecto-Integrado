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
<h1>PEDIDOS REALIZADOS</h1>
<?php

session_start();

$mysql = new mysqli("localhost", "root", "", "tienda");
$user = mysqli_query($mysql, "Select * from usuarios where usuario ='". $_SESSION["usuario"]."'");
$row;
$row2;
while($row = mysqli_fetch_assoc($user)){

$pendiente = mysqli_query($mysql, "Select * from vendido where email ='". $row["email"]."'");
}



while($row2 = mysqli_fetch_assoc($pendiente)){
  echo "<br>";
  echo "<table class='tabla'>";
echo "<tr>";
echo "<th>Nombre: " .$row2["Nombre"] ."</th>";
echo "<th>Apellidos: " .$row2["Apellidos"] ."</th>";
echo "<th  colspan='2'>Dirección: " .$row2["Direccion"] ."</th>";
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


</div>

  </body>
</html>
