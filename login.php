<?php 
  /*  session_start(); // Iniciar sesión
    $_SESSION['usuario']='Pedro';

    
/*
    $host="localhost";
	$user='root';
	$pw="";
	$db_nombre="fundasam_usuarios";
	$conexion=mysqli_connect($host, $user,$pw,$db_nombre);
$usuario  = $_POST['user'];
$password = $_POST['password'];
*/
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset  = "utf-8" >
        <title>
            Acceso Restringido
        </title>
        <link rel="stylesheet" href="registro.css">
    </head>
    <body>
        
        <form action="validar.php" method="post" class="form-register">
        <h2>:BÚSQUEDA DE REGISTROS: </h2>
            <div class="contenedor">
        <input type="text" placeholder="USUARIO"      name="user"> 
        <input type="password" placeholder="PASSWORD" name="password"> 
        
        <input type="submit" value="Iniciar Sesión"class="boton">
        
        
        </form>
    
    </body>
</html>