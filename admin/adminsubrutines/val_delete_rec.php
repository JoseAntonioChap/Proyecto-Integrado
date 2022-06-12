<?php

$mysql = new mysqli("localhost", "root", "", "tienda");
$búsqueda = mysqli_query($mysql, "Select * FROM papelera where ID = " .$_POST["id"]);
$row;
  while($row = $búsqueda->fetch_array()){


$agregar = mysqli_query($mysql, "insert into equipación (id, descripcion, img, precio, producto, Liga, marca) values (".$row["ID"].", '".$row["descripcion"] ."', '" .$row["img"] ."', " .$row["precio"] .", '" .$row["producto"] ."'
, '" .$row["liga"] ."'
, '" .$row["marca"] ."')");

$borrar = mysqli_query($mysql, "DELETE FROM papelera WHERE id = " .$_POST["id"]);

}



header("Location: papelera.php");

 ?>
