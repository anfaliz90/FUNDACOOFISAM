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
echo $pagado1 = $_POST['pagado1'];
echo $pagado2 = $_POST['pagado2'];
echo $pagado3 = $_POST['pagado3'];
echo $id     = $_POST['id'];

if($pagado1=='pagado1')
{
    $consulta="UPDATE usuarios SET ciclo1='pagado' WHERE id='$id'";
    $ejecutar=mysqli_query($conexion,$consulta);
    header("Location:verificarciclo.php");
}
if($pagado2=='pagado2')
{
    $consulta="UPDATE usuarios SET ciclo2='pagado' WHERE id='$id'";
    $ejecutar=mysqli_query($conexion,$consulta);
    header("Location:verificarciclo.php");   
}
if($pagado3=='pagado3')
{
    $consulta="UPDATE usuarios SET ciclo3='pagado' WHERE id='$id'";
    $ejecutar=mysqli_query($conexion,$consulta);
    header("Location:verificarciclo.php"); 
}



?>