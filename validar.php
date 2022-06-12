<?php
$email = $_POST['email'];
$contraseña = "'" .$_POST['contraseña'] ."'";

$mysql = new mysqli("localhost", "root", "", "tienda");
$comprobar = mysqli_query($mysql, "SELECT * FROM usuarios WHERE email = '$email'" );
$row;

$fila = mysqli_num_rows($comprobar);




if ($fila == 1) {
  while($row = mysqli_fetch_assoc($comprobar)){
    if (password_verify($contraseña, $row['contraseña'])){
      $login = true;
      session_start();
      $_SESSION['loggedin'] = true;
      $_SESSION['usuario'] = $row['usuario'];
      header("Location: confirmación.php");
    }else{
      echo "<h1>La contraseña es irreconocible <a href='login.php'>VOLVER</a></h1>";
    }
  }

    }else{
      echo "<h1>El correo no existe <a href='login.php'>VOLVER</a></h1>";
    }







?>
