<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset  = "utf-8" >
        <title>
            Total registrados
        </title>
        <link rel="stylesheet" type="text/css" href="registro.css">
    </head>
    <body>
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
        include('seguridad.php');
        if($_SESSION['login'] != 'logueado')
{ 
  //Si no hay sesión activa, lo direccionamos al index.php (inicio de sesión) 
  header("Location: login.php"); 
  exit(); 
} 
	$consulta="SELECT * FROM usuarios ";
	$ejecuta=mysqli_query($conexion,$consulta);
        
        

    $tomarreg = "SELECT COUNT(*) AS NUM FROM usuarios";
    $cons = mysqli_query($conexion, $tomarreg);
    $row=mysqli_fetch_array($cons);
    $N1 = $row['NUM'];
        
	$consulta="SELECT * FROM usuarios ORDER BY id ASC";
	$ejecuta=mysqli_query($conexion,$consulta);
    
    
?>
<p> TOTAL DE REGISTROS: <?php echo ' '.$N1 ?></p>           
    <p><?php echo "<a href=panel.php>Menú principal</a>";?></p>
<table >
  	
		<thead>
            <tr >
                        <th colspan="10" style="text-align:center;" class="form-title"><span align="center">ELIMINAR REGISTRO</span></th>
                    </tr>
		<tr>
            <th>N°</th>
			<th>ID</th>
			<th>AGENCIA</th>
            <th>MODALIDAD</th>
            <th>IDE</th>
            <th>NOMBRE</th>
            <th>APELLIDO</th>
            
			
            <th>FECHA</th>
            	
		</tr>
		</thead>
    
    <?php echo "<form action=eliminar1.php method=post>"; ?>
<tr>
 	<?php
    $num=1;
			while ($row=mysqli_fetch_array($ejecuta)){
				
				echo "<tr><form action=eliminar1.php method=post>";
                echo "<td>".$num."</td>";
                echo "<td><input type=text  width='100px' name=id1 value='".$row['id']."'</td>";
                
                
				echo "<td>    ".$row['agencia']."</td>";
                echo "<td>    ".$row['modalidad']."</td>";
                echo "<td>    ".$row['ide']."</td>";
                echo "<td>    ".$row['nombre']."</td>";
				echo "<td>    ".$row['apellido']."</td>";
                echo "<td>    ".$row['fecha']."</td>";
				echo "<td><input type=hidden name='id'         value='".$row['id']."'</td>";
				echo "<td><input type=submit class=boton value='ELIMINAR'></td>";
				echo "</form></tr>";
                $num++;
			}
		
		
		
		
		
		?>
    </table>
    
    </body>
</html>