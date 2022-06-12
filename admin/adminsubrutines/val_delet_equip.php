<?php

$mysql = new mysqli("localhost", "root", "", "tienda");
$búsqueda = mysqli_query($mysql, "Select * FROM equipación where ID = " .$_POST["id"]);
$row;
  while($row = $búsqueda->fetch_array()){


$agregar = mysqli_query($mysql, "insert into papelera (ID, descripcion, img, precio, producto, liga, marca) values (".$row["ID"].", '".$row["descripcion"] ."', '" .$row["img"] ."', " .$row["precio"] .", '" .$row["producto"] ."'
, '" .$row["Liga"] ."'
, '" .$row["marca"] ."')");

$borrar = mysqli_query($mysql, "DELETE FROM equipación WHERE id = " .$_POST["id"]);

}



header("Location: elimproduct.php");

 ?>
