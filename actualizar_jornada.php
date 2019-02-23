<?php
session_start();
        include('conn.php');
        if(!$conexion)
        {
            // echo 'Error al conectarse';
        }
        else
        {
            // echo 'Conectado';
        }
// error_reporting(0);
 if($_SESSION['login'] != 'logueado')
{ 
  //Si no hay sesión activa, lo direccionamos al index.php (inicio de sesión) 
  header("Location: login.php"); 
  exit(); 
} 
echo $manana  = $_POST['manana'];
echo $tarde   = $_POST['tarde'];

echo $id     = $_POST['id'];

if($manana=='MANANA')
{
    $consulta="UPDATE usuarios SET jornada='MANANA' WHERE id='$id'";
    $ejecutar=mysqli_query($conexion,$consulta);
    header("Location:actualizar_futbol_garzon.php");
}
if($tarde=='TARDE')
{
    $consulta="UPDATE usuarios SET jornada='TARDE' WHERE id='$id'";
    $ejecutar=mysqli_query($conexion,$consulta);
    header("Location:actualizar_futbol_garzon.php");   
}


?>