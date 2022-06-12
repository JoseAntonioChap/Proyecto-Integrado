<?php

$mysql = new mysqli("localhost", "root", "", "tienda");
$cantidad = mysqli_query($mysql, "Update stock set cantidad = cantidad + " .$_POST["cantidad"] ." where id =" .$_POST["id"]);

header("Location: acant.php");


 ?>
