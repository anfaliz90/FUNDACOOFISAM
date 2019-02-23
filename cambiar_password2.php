<?php
session_start();
include('conn.php');

if($_SESSION['login'] != 'logueado')
{ 
  //Si no hay sesión activa, lo direccionamos al index.php (inicio de sesión) 
  header("Location: login_instructores.php"); 
  exit(); 
}

echo $usuario   = $_POST['usuario'];
echo $password_v= $_POST['pass_viejo'];
echo $password_n= $_POST['pass_nuevo'];
echo $password_n2= $_POST['pass_nuevo2'];

$consulta = "SELECT * FROM instructores WHERE usuario='$usuario' AND password='$password_v'";
$ejecuta = mysqli_query($conexion, $consulta);
    
if(!$ejecuta)
{
    echo 'El usuario y/o la contraseña son incorrectos';
    //echo '<a href=login_instructores.php>';
}
else 
{
    if($password_n==$password_n2)
    {
        $consulta = " UPDATE instructores SET password=$password_n" ;
        $ejecuta = mysqli_query($conexion,$consulta);
        header("Location:login_instructores.php");  
    }
    else
    {
        echo 'La confirmación de la nueva contraseña ha fallado. Vuelva a intentar';
    }
}





?>