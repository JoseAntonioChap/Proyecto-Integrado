<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Shop</title>
    <link rel="stylesheet" href="estilos/estilo.css">
<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
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


      <a href="confirmación.php"><img src="img/usuario.png" alt="" id="icono_prim"></a>
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


<div class="listadeformulas">



<div class="producto-compra">
<?php
$mysql = new mysqli("localhost", "root", "", "tienda");

$detalles = mysqli_query($mysql, "Select descripcion, marca from `equipación` where producto = '". $_GET["nompro"]. "'" );
$Descripcion = mysqli_fetch_array($detalles);
  echo "<h1 class='detalles'>". $_GET["nompro"]. "</h1>";
echo "<h2 class='detalles'>". $_GET["preciopro"]. "€, ". $Descripcion["marca"]. "</h2>";
echo "<p class='detalles'>". $Descripcion["descripcion"]. "</p>"
 ?>

</div>
<div class="img-compra">
  <?php
$mysql = new mysqli("localhost", "root", "", "tienda");
$img = mysqli_query($mysql, "Select img from `equipación` where producto = '". $_GET["nompro"]. "'" );
$imagen = mysqli_fetch_array($img);
  echo "<img src='img/productos/". $imagen['img']. "' alt='Equipación del ". $_GET['nompro']. "' class= 'fotofinal'> ";
   ?>

</div>
<?php


 ?>
<div class="form-compra">
  <?php
echo "<form action='carrito.php?producto=". $_GET['nompro']. "&preciopro=". $_GET['preciopro']."&cantidad=1' method='post'>";
 ?>
<p> Seleccione una talla.
  <select id="select" name="talla">
    <?php
    $mysql = new mysqli("localhost", "root", "", "tienda");
    $talla = mysqli_query($mysql, "Select talla from `stock` where equipo = '". $_GET["nompro"]. "'" );
$tallas;
    while($tallas = $talla->fetch_array()){
      echo "<option>". $tallas['talla']. "</option>";
    }
     ?>
  </select>
</p>



Número de la camiseta: <input type="number" name="num" required min="0"><br>
Nombre de la camiseta: <input type="text" name="nomb" id="nomb" ><br>
<select id="select" name="real">
<option>Sí</option>
<option>No</option>
</select> ¿Es un jugador real? al pulsar esta casilla bastará con poner el número del jugador para que se le añada correctamente los datos, evitando así posibles errores al escribir el nombre.


<br>
<input type="submit" name="Comprar" value="Comprar" id="aceptar">
</form>

</div>
</div>
  </body>
</html>
