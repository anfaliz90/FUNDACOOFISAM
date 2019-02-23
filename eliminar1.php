<html>
<head>
<meta charset="utf-8">
<title></title>
    <link rel="stylesheet" type="text/css" href="registro.css">
    
    </head>


<?php
    include('seguridad.php');
echo $_GET['user'];
        include('conn.php');
        if(!$conexion)
        {
            // echo 'Error al conectarse';
        }
        else
        {
            // echo 'Conectado';
        }
     echo $id= $_POST['id'];
   
	 $consulta= "DELETE FROM usuarios  WHERE id=$id";
    $ejecuta=mysqli_query($conexion,$consulta);
    if(!$ejecuta)
        
    {
        echo ' No ';
    }
    else
    {
        echo ' si ';
    }
			echo "<h1 align='center' class='form-title'>Registro Eliminado</h1><br><br>";
           
			
			 echo "<a href=panel.php>Menú principal</a>";
			mysqli_close($conexion);
			
?>
