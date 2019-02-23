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
		
        if($_SESSION['login'] != 'logueado')
        { 
          //Si no hay sesión activa, lo direccionamos al index.php (inicio de sesión) 
          header("Location: login.php"); 
          exit(); 
        } 

    $tomarreg = "SELECT COUNT(*) AS NUM FROM usuarios";
$cons = mysqli_query($conexion, $tomarreg);
$row=mysqli_fetch_array($cons);
$N1 = $row['NUM'];
        
	$consulta="SELECT * FROM usuarios ";
	$ejecuta=mysqli_query($conexion,$consulta);
    
    
?>
<p> TOTAL DE REGISTROS: <?php echo ' '.$N1 ?></p>
<table >
  	
		<thead>
            <tr >
                        <th colspan="10" style="text-align:center;" class="form-title"><span align="center">VERIFICACIÓN DE PAGO - CICLO</span></th>
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
            


            <th style="text-align:center;">CICLO 1</th>
            <th style="text-align:center;">CICLO 2</th>
            <th style="text-align:center;">CICLO 3</th>
		</tr>
		</thead>
    
    <form action="pagado.php" method="post">
<tr>
 	<?php
   

    $num =1;
			while ($row=mysqli_fetch_array($ejecuta)){
				
				echo "<tr><form action=pagado.php method=post>";
                echo "<td>".$num."</td>";
                echo "<td>".$row['id']."</td>";
                echo "<td>     ".$row['agencia']."</td>";
                echo "<td>     ".$row['modalidad']."</td>";
                echo "<td>     ".$row['ide']."</td>";
				echo "<td>     ".$row['nombre']."</td>";
				echo "<td>     ".$row['apellido']."</td>";
                echo "<td>     ".$row['fecha']."</td>";
                echo "<td>     ".$row['ciclo1']."</td>"; 
                echo "<td>     ".$row['ciclo2']."</td>"; 
                echo "<td>     ".$row['ciclo3']."</td>"; 
               if ($row['ciclo1']!="pagado")
                {
                echo "<td><input type='checkbox' name='pagado1' value='pagado1' ";   
                
				echo "<td><input type=submit class=boton value='CICLO 1'></td>";
                }
                else
                {
                    echo "<td></td>";
                    
				    echo "<td></td>";
                }
                if ($row['ciclo2']!="pagado")
                {
                echo "<td><input type='checkbox' name='pagado2' value='pagado2' ";   
                
				echo "<td><input type=submit class=boton value='CICLO 2'></td>";
                }
                else
                {
                    echo "<td></td>";
                    
				    echo "<td></td>";
                }
                if ($row['ciclo3']!="pagado")
                {
                echo "<td><input type='checkbox' name='pagado3' value='pagado3'";   
                
				echo "<td><input type=submit class=boton value='CICLO 3'></td>";
                }
                else
                {
                    echo "<td></td>";
                    
				    echo "<td></td>";
                }
                
				echo "<td><input type='hidden' name='id'         value='".$row['id']."'</td>";
				
				echo "</form></tr>";
                $num++;
			}
		
		
		
	echo "<a href=panel.php>Menú principal</a>";
		
		?>
    </table>
    
    </body>
</html>