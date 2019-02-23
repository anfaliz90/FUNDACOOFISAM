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
        include('conn.php');
        if(!$conexion)
        {
            // echo 'Error al conectarse';
        }
        else
        {
            // echo 'Conectado';
        }
		
    $tomarreg = "SELECT COUNT(*) AS NUM FROM usuarios ";
    $cons = mysqli_query($conexion, $tomarreg);
    $row=mysqli_fetch_array($cons);
    $N1 = $row['NUM'];
        
	$consulta="SELECT * FROM usuarios ";
	$ejecuta=mysqli_query($conexion,$consulta);
    
    
?>
  
<?php        
	$consulta="SELECT * FROM usuarios WHERE agencia='GARZON' AND modalidad='FUTBOL' AND jornada=''";
	$ejecuta=mysqli_query($conexion,$consulta);
    echo "<a href=panel.php>Menú principal</a>";
    
?>
        <div >
    
        <table  class="tabla">
            
                <thead>
                    <th colspan="20"><h2> MODIFICAR REGISTROS </h2></th>
                <tr>
                    <th>N°</th>                    
                    <th>CATEGORIA</th>  
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>ID</th>
                    <th>MAÑANA</th>
                    <th>TARDE</th>
                    
                    
                </tr>
                </thead>
           <?php 
            "<form action='modificar.php method='post' class='form-register'>"
           ?>
        <tr>
            <?php
                $num=1;
                    while ($row=mysqli_fetch_array($ejecuta)){

                        echo "<tr><form action=actualizar_jornada.php method=post>";
                        echo "<td>".$num."</td>";

                        echo "<td><input type=text name=categoria       value='".$row['categoria']."'</td>";
                        echo "<td><input type=text name=nombre       value='".$row['nombre']."'</td>";
                        echo "<td><input type=text name=apellido     value='".$row['apellido']."'</td>";
                            
                        echo "<td><input type=text name=ide          value='".$row['ide']."'</td>";
                      
                       
                        if($row['jornada']=="MANANA" ) //|| $row['jornada']=="TARDE")
                        {
                            "<td><input type=submit class=boton value='MANANA'></td>";
                        }
                        else
                        {
                             echo "<td><input type='checkbox' name='manana' value='MANANA' ";   
                             echo "<td><input type=submit class=boton value='MAÑANA'></td>";
                        }
                        if($row['jornada']=="TARDE" ) //|| $row['jornada']=="TARDE")
                        {
                            "<td><input type=submit class=boton value='TARDE'></td>";
                        }
                        else
                        {
                             echo "<td><input type='checkbox' name='tarde' value='TARDE' ";   
                             echo "<td><input type=submit class=boton value='TARDE'></td>";
                        }
                         echo "<td><input type=hidden name=id         value='".$row['id']."'</td>";   
                        echo "</form></tr>";
                        $num++;
                    }





                ?>
            </table>
        </div>
    </body>
</html>