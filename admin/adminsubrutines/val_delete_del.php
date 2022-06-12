<?php

$mysql = new mysqli("localhost", "root", "", "tienda");

$búsqueda = mysqli_query($mysql, "SELECT * from papelera where id =". $_POST["id"]);
  while($row = $búsqueda->fetch_array()){
$delete =  mysqli_query($mysql, "DELETE FROM stock WHERE equipo = '" .$row["producto"] ."'");
}
$eliminar = mysqli_query($mysql, "DELETE FROM papelera WHERE id = " .$_POST["id"]);


header("Location: papelera.php");

 ?>
