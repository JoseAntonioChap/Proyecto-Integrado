

<?php

$mysql = new mysqli("localhost", "root", "", "tienda");
$cantidad = mysqli_query($mysql, "insert into equipación (producto, precio, marca, descripcion,
 Liga, img)
  VALUES ('" .$_POST["producto"] ."', ".$_POST["precio"]  ." , '".$_POST["marca"]  ."', '".$_POST["descripcion"]  ."', '".$_POST["liga"]  ."', '".$_POST["img"]  ."')");
    $XS = mysqli_query($mysql, "insert into stock (talla, equipo, cantidad)
    VALUES ('XS', '" .$_POST["producto"] ."', 0)");
    $S = mysqli_query($mysql, "insert into stock (talla, equipo, cantidad)
      VALUES ('S', '" .$_POST["producto"] ."', 0)");
      $M = mysqli_query($mysql, "insert into stock (talla, equipo, cantidad)
        VALUES ('M', '" .$_POST["producto"] ."', 0)");
        $L = mysqli_query($mysql, "insert into stock (talla, equipo, cantidad)
          VALUES ('L', '" .$_POST["producto"] ."', 0)");
          $XL = mysqli_query($mysql, "insert into stock (talla, equipo, cantidad)
            VALUES ('XL', '" .$_POST["producto"] ."', 0)");
            $XXL = mysqli_query($mysql, "insert into stock (talla, equipo, cantidad)
              VALUES ('XXL', '" .$_POST["producto"] ."', 0)");

header("Location: aequip.php");



 ?>
