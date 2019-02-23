<?php 
session_start();
include('conn.php');

if($_SESSION['login'] != 'logueado')
{ 
  //Si no hay sesión activa, lo direccionamos al index.php (inicio de sesión) 
  header("Location: login_instructores.php"); 
  exit(); 
}
$usuario = $_SESSION['usuario_actual'];





?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset  = "utf-8" >
        <title>
            Cambiar Contraseña
        </title>
        <link rel="stylesheet" type="text/css" href=registro.css>
    </head>
    <body>
        
        <form action="cambiar_password2.php" method="post" class=form-register>
        <h2> CAMBIAR CONTRASEÑA</h2>
        <div class="contenedor">
        <label for usuario class="mitad">USUARIO</label>
        <input type="text" name="usuario" class="mitad">            
            
        <label for pass_viejo class="mitad">CONTRASEÑA ANTERIOR</label>
        <input type="password" name="pass_viejo" class="mitad">
        
        <label for pass_nuevo class="mitad">CONTRASEÑA NUEVA</label>
        <input type="password" name="pass_nuevo" class="mitad">
            
        <label for pass_nuevo2 class="mitad">CONFIRMAR CONTRASEÑA NUEVA</label>
        <input type="password" name="pass_nuevo2" class="mitad">    
            
        <input type="submit" value="Cambiar Contraseña" class="boton">
            </div>
        </form>
    </body>
</html>