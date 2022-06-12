<?php
$usuario = "'" .$_POST['usuario'] ."'";
$contraseña ="'" .$_POST['contraseña'] ."'";
$repcont = "'" .$_POST['repcont'] ."'";
$nombre = "'" .$_POST['nombre'] ."'";
$apellido ="'" .$_POST['apellido'] ."'";
$dirección ="'" .$_POST['dirección'] ."'";
$telef = $_POST['telef'] ;
$email = "'" .$_POST['email'] ."'";
$emailcomp = $_POST['email'];

$mysql = new mysqli("localhost", "root", "", "tienda");
$comprobar = mysqli_query($mysql, "SELECT * FROM usuarios WHERE email =" .$email);
$comprobar2 = mysqli_query($mysql, "SELECT * FROM usuarios WHERE usuario =" .$usuario);
$fila = mysqli_num_rows($comprobar);
$fila2 = mysqli_num_rows($comprobar2);

$check = 0;
if (filter_var($emailcomp, FILTER_VALIDATE_EMAIL)) {
$check = 1;
}


if ($repcont != $contraseña) {
echo "La contraseña no coincide con la contraseña repetida <a href='registrar.php'>VOLVER</a>.";
}elseif (strlen($contraseña) < 6 ) {
echo "La contraseña debe de tener más de seis caracteres <a href='registrar.php'>VOLVER</a>.";
}elseif (strlen($contraseña) > 20){
  echo "la contraseña debe de medir menos de 20 caracteres <a href='registrar.php'>VOLVER</a>.";
}elseif ($check == 0) {
  echo "El email no es real <a href='registrar.php'>VOLVER</a>.";
}elseif($fila == 1){
  echo "Ya existe un correo electrónico <a href='registrar.php'>VOLVER</a>.";

}elseif($fila2 == 1){
  echo "El usuario ya existe <a href='registrar.php'>VOLVER</a>.";

}else{
  $password_hash = password_hash($contraseña, PASSWORD_BCRYPT);
  $mysql = new mysqli("localhost", "root", "", "tienda");
  $productos = mysqli_query($mysql, "insert into usuarios (usuario, contraseña, nombre,
   apellido, direccion, telefono, email) values
  (" .$usuario  ."
   ,'" .$password_hash ."', " .$nombre ."
    , " .$apellido ." , " .$dirección ." , " .$telef ."
    , " .$email .")" );
  echo "Valores introudcidos con exito <a href='index.php'>ir al menú principal</a>";


}

?>
