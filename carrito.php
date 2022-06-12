
<!DOCTYPE html>
<?php

$carrito =array();
$codigohtml = "";
$final= 0;
$existe=0;


if (isset($_GET["vaciar"])) {
  unset($_COOKIE["carrito"]);
  $codigohtml .="El carrito está vacío";
}


if (isset($_COOKIE["carrito"])) {
  $carrito = unserialize($_COOKIE["carrito"]);
}


if (isset($_GET["producto"]) && isset($_GET["preciopro"])) {
  for ($i=0; $i < sizeof($carrito) ; $i++) {

  }




if ($existe==0) {
  $ultimo = count($carrito);
  $carrito[$ultimo]["producto"]=$_GET["producto"];
  $carrito[$ultimo]["preciopro"]=$_GET["preciopro"];
  $carrito[$ultimo]["num"]=$_POST["num"];
  $carrito[$ultimo]["nomb"]=$_POST["nomb"];
  $carrito[$ultimo]["real"]=$_POST["real"];
  $carrito[$ultimo]["talla"]=$_POST["talla"];
}}

$caducidad = time() + (24*60*60);
setcookie("carrito", serialize($carrito), $caducidad);

$codigohtml .="<table class='tabla'>";
$codigohtml .="<tr><th>Producto</th><th>Precio</th><th>número de la camiseta</th><th>Nombre de la camiseta</th><th>Talla</th><th>Jugador real</th></tr>";
foreach ($carrito as $key => $value) {
$codigohtml .="<tr>";
$codigohtml .="<td>" .$value["producto"].
"</td><td>".$value["preciopro"] . "</td>
<td>" . $value["num"]. " </td>
<td>" . $value["nomb"]. " </td>
<td>" . $value["talla"]. "</td>
<td>" . $value["real"]. " </td>";

$codigohtml .= "</tr>";

$final += $value["preciopro"];
}
$codigohtml .= "<td colspan=4>Total de la compra:</td><td colspan='2'>". $final  . "</td>";
$codigohtml .="</table>";

 ?>
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


       <a href="comprar.php"><img src="img/usuario.png" alt="" id="icono_prim"></a>
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
<h1 style="margin: 2%;">PRODUCTOS COMPRADOS</h1>
<?php echo $codigohtml; ?>

    <form  action="validarcompra.php" method="post">

           <button type="submit" id="aceptar">Comprar</button>
    </form>

    <br>
    <br>


<a href="confirmación.php"> <button type="button" id="aceptar">Seguir comprando</button></a>
<a href="carrito.php?vaciar=1"><button type="button" id="aceptar">Vaciar</button></a>
   </div>
  </body>
</html>
