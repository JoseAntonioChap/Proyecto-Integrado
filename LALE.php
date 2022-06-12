
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



<div class="listaproductos">
  <?php
$mysql = new mysqli("localhost", "root", "", "tienda");
$productos = mysqli_query($mysql, "Select producto, precio, img from equipación where Liga = 'Bundesliga'");
$row;


while($row = $productos->fetch_array()){
  echo "<div class='producto'>";
  echo "<form action='producto.php?nompro=". $row['producto']."&preciopro=". $row['precio']. "' method='post'>";
  echo "<div class='imgpro'> <img src='img/productos/". $row['img']. "' alt='Equipación del". $row['producto']. "' class='imgproduct'> " ;
  echo "</div>";
  echo "<p id='nompro'>". $row['producto'] ."</p>";
  echo "<p id='preciopro'>". $row['precio'] ." €</p>";
  echo "<input type='submit' name='' value='Compar' id='ver'>";
  echo "</form>";
  echo "</div>";
}
  ?>


</div>

  </body>
</html>
