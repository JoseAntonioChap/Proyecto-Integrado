

<?php

$mysql = new mysqli("localhost", "root", "", "tienda");
$cantidad = mysqli_query($mysql, "Update equipación set producto = '" .$_POST["producto"] ."' ,
precio = " .$_POST["precio"] .", marca = '" .$_POST["marca"] ."', descripcion = '" .$_POST["descripcion"] ."'
, Liga = '" .$_POST["liga"]   ."', img = '".$_POST["img"] ."' where ID = ".$_POST["id"] );


header("Location: modificarequipo.php");


 ?>
