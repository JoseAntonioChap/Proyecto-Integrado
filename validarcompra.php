<?php
include ("carrito.php");
session_start();
echo $_SESSION['usuario'];
$mysql = new mysqli("localhost", "root", "", "tienda");
$user = mysqli_query($mysql, "Select * from usuarios where usuario ='". $_SESSION["usuario"]."'");
$row;


  while($row = mysqli_fetch_assoc($user)){
    foreach ($carrito as $key => $value) {
echo "update stock set cantidad = cantidad-1 WHERE talla = '" .$value["talla"] ."' and equipo='" .$value["producto"] ."'";
  $enviar = mysqli_query($mysql, "insert into preparación
   (Nombre, Apellidos, Direccion, Email, Telf, Producto, Precio, numcam, nomcam, talla, realnom )
   values ('" .$row["nombre"] ."', '" .$row["apellido"] ."', '" .$row["direccion"] ."', '" .$row["email"] ."', " .$row["telefono"] ."
   , '" .$value["producto"] ."', " .$value["preciopro"] .", " .$value["num"] .", '" .$value["nomb"] ."', '" .$value["talla"] ."', '" .$value["real"] ."')");
$resta = mysqli_query($mysql, "update stock set cantidad = cantidad-1 WHERE talla = '" .$value["talla"] ."' and equipo='" .$value["producto"] ."'");
echo "update stock set cantidad = cantidad-1 WHERE talla = '" .$value["talla"] ."' and equipo='" .$value["producto"] ."'";
 }}

header("Location: usuario.php?vaciar=1");

 ?>
