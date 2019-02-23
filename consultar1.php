<?php
session_start();
include('conn.php');
if($_SESSION['login'] != 'logueado')
{ 
  //Si no hay sesión activa, lo direccionamos al index.php (inicio de sesión) 
  header("Location: login.php"); 
  exit(); 
} 


?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset  = "utf-8" >
        <title>
            Consultar
        </title>
        <link rel="stylesheet" type="text/css" href="registro.css">
    </head>
    <body>
        <form action="consultar.php" method="post" class="form-register">
        <h2>BÚSQUEDA DE REGISTROS:</h2>
            <div class="contenedor">
            <input type="text" name="documento">
            <br>
            <input type="submit" name="consultar" value="Consultar" class="boton"></form>
        <p><a href=panel.php>Menú principal</a></p>
            </div>
        
        
    </body>
</html>