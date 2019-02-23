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
		
    $tomarreg = "SELECT COUNT(*) AS NUM FROM usuarios";
    $cons = mysqli_query($conexion, $tomarreg);
    $row=mysqli_fetch_array($cons);
    $N1 = $row['NUM'];
        
	$consulta="SELECT * FROM usuarios ORDER BY id ASC";
	$ejecuta=mysqli_query($conexion,$consulta);
    
    
?>
<p> TOTAL DE REGISTROS: <?php echo ' '.$N1 ?></p>    
<?php        
	$consulta="SELECT * FROM usuarios ORDER BY id ASC";
	$ejecuta=mysqli_query($conexion,$consulta);
    echo "<a href=panel.php>Menú principal</a>";
    
?>
        <div >
    
        <table  >

                <thead>
                    <th colspan="20"> MODIFICAR REGISTROS </th>
                <tr>
                    <th>N°</th>
                    <th>ID</th>
                    <th>AGENCIA</th>
                    <th>MODALIDAD</th>
                    <th>CATEGORIA</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>TIPO_ID</th>
                    <th>ID</th>
                    <th>SEXO</th>
                    <th>IE</th>
                    <th>EPS</th>
                    <th>FECHA</th>
                    <th>DE </th>
                    <th>NACIMIENTO</th>
                    <th>NOMBRE REPRESENTANTE</th>
                    <th>APELLIDO REPRESENTANTE</th>
                    <th>PARENTESCO</th>
                    <th>ID_REPRESENTANTE</th>
                    <th>TELEFONO</th>
                    <th>DIRECCION</th>
                    <th>MUNICIPIO</th>
                    <th>EMAIL</th>		
                    <th>DOCUMENTO DE IDENTIDAD</th>	
                    <th>CERTIFICADO DE SEGURIDAD SOCIAL</th>	
                </tr>
                </thead>
           <?php 
            "<form action='modificar.php method='post'>"
           ?>
        <tr>
            <?php
                $num=1;
                    while ($row=mysqli_fetch_array($ejecuta)){

                        echo "<tr><form action=modificar.php method=post>";
                        echo "<td>".$num."</td>";
                        echo "<td class='colang'><input type=text name=id           value='".$row['id']."'</td>";
                        
                        echo "<td><input type=text name=agencia       value='".$row['agencia']."'</td>";
                        echo "<td><input type=text name=modalidad       value='".$row['modalidad']."'</td>";
                        echo "<td><input type=text name=categoria       value='".$row['categoria']."'</td>";
                        echo "<td><input type=text name=nombre       value='".$row['nombre']."'</td>";
                        echo "<td><input type=text name=apellido     value='".$row['apellido']."'</td>";
                        echo "<td><input type=text name=tipo_id      value='".$row['tipo_id']."'</td>";
                        echo "<td><input type=text name=ide          value='".$row['ide']."'</td>";
                        echo "<td><input type=text name=sexo         value='".$row['sexo']."'</td>";
                        echo "<td><input type=text name=IE           value='".$row['IE']."'</td>";
                        echo "<td><input type=text name=EPS          value='".$row['EPS']."'</td>";
                        echo "<td><input type=text name=mes          value='".$row['mes']."'</td>";
                        echo "<td><input type=text name=dia          value='".$row['dia']."'</td>";
                        echo "<td><input type=text name=anio         value='".$row['anio']."'</td>";
                        echo "<td><input type=text name=nombre_rep   value='".$row['nombre_rep']."'</td>";
                        echo "<td><input type=text name=apellido_rep value='".$row['apellido_rep']."'</td>";
                        echo "<td><input type=text name=parentesco   value='".$row['parentesco']."'</td>";
                        echo "<td><input type=text name=id_rep       value='".$row['id_rep']."'</td>";
                        echo "<td><input type=text name=tel          value='".$row['tel']."'</td>";
                        echo "<td><input type=text name=direccion    value='".$row['direccion']."'</td>";
                        echo "<td><input type=text name=municipio    value='".$row['municipio']."'</td>";
                        echo "<td><input type=text name=email        value='".$row['email']."'</td>";
                        echo "<td><a href=".$row['adjunto_ide'].">Documento de identidad</a></td>";                    
                        echo "<td><a href=".$row['adjunto_eps'].">Certificado de salud</a></td>";                    
                        echo "<td><input type=hidden name=id         value='".$row['id']."'</td>";
                        
                        echo "<td><input type=submit class=boton value='Modificar'></td>";
                        echo "</form></tr>";
                        $num++;
                    }





                ?>
            </table>
        </div>
    </body>
</html>