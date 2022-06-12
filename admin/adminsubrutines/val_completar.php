<?php

$mysql = new mysqli("localhost", "root", "", "tienda");
$búsqueda = mysqli_query($mysql, "Select * FROM preparación where ID = " .$_POST["id"]);
$row;
  while($row = $búsqueda->fetch_array()){


$agregar = mysqli_query($mysql, "insert into vendido (ID, Nombre, Apellidos, Direccion, Email, Telf, Producto, Precio, numcam, nomcam, talla, realnom)
values (".$row["ID"].", '".$row["Nombre"] ."', '" .$row["Apellidos"] ."', '" .$row["Direccion"] ."', '" .$row["Email"] ."'
, " .$row["Telf"] .", '" .$row["Producto"] ."', " .$row["Precio"] .", " .$row["numcam"] .", '" .$row["nomcam"] ."', '" .$row["talla"] ."', '" .$row["realnom"] ."')");

$borrar = mysqli_query($mysql, "DELETE FROM preparación WHERE id = " .$_POST["id"]);

}



header("Location: pendientesproduct.php");

 ?>
