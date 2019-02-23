<html>
<head>
<meta charset="utf-8">
<title></title>
    <link rel="stylesheet" type="text/css" href="registro.css">
    
    </head>


<?php
    session_start();
        
include('conn.php')    ;
    if($_SESSION['login'] != 'logueado')
{ 
  //Si no hay sesión activa, lo direccionamos al index.php (inicio de sesión) 
  header("Location: login.php"); 
  exit(); 
} 
echo "<a href=panel.php>Menú principal</a>";
echo "<h1 align='center'class='form-title'>Formulario de Modificacion</h1>
	<table align='center'>
	<tr>
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
		</tr>
		</thead>
		
		
	</tr>";
	
        include('conn.php');
        if(!$conexion)
        {
            // echo 'Error al conectarse';
        }
        else
        {
            // echo 'Conectado';
        }
	$consulta="UPDATE usuarios SET          agencia='$_POST[agencia]',
                                            modalidad='$_POST[modalidad]',
                                            categoria='$_POST[categoria]',
                                            nombre='$_POST[nombre]',
                                            apellido='$_POST[apellido]',
                                            tipo_id='$_POST[tipo_id]',
                                            ide=    '$_POST[ide]',
                                            sexo=   '$_POST[sexo]',
                                            IE=     '$_POST[IE]',
                                            EPS=    '$_POST[EPS]',
                                            mes=    '$_POST[mes]',
                                            dia=    '$_POST[dia]',
                                            anio=    '$_POST[anio]',
                                    nombre_rep=     '$_POST[nombre_rep]',
                                    apellido_rep=   '$_POST[apellido_rep]',
                                    parentesco=     '$_POST[parentesco]',
                                        id_rep=     '$_POST[id_rep]',
                                            tel=    '$_POST[tel]',
                                        direccion=  '$_POST[direccion]',
                                        municipio=  '$_POST[municipio]',
                                        email=      '$_POST[email]'
                                            WHERE id='$_POST[id]'";
		if(mysqli_query($conexion,$consulta)){
			echo "<h1 align='center' class='form-title'>Registro Actualizado</h1><br><br>";
            
			echo "<tr><td>  $_POST[agencia]</td>";
            echo "<td>      $_POST[modalidad]</td>";
            echo "<td>      $_POST[categoria]</td>";
            echo "<td>      $_POST[nombre]</td>";
			echo "<td>      $_POST[apellido]</td>";
            echo" <th>      $_POST[tipo_id]</th>";
            echo" <th>      $_POST[ide]</th>";
            echo" <th>      $_POST[sexo]</th>";
            echo" <th>      $_POST[IE]</th>";
            echo" <th>      $_POST[EPS]</th>";
            echo" <th>      $_POST[mes]</th>";
            echo" <th>      $_POST[dia] </th>";
            echo" <th>      $_POST[anio]</th>";
            echo" <th>$_POST[nombre_rep]</th>";
            echo" <th>$_POST[apellido_rep] </th>";
            echo" <th>$_POST[parentesco]</th>";
            echo" <th>$_POST[id_rep]</th>";
            echo" <th>$_POST[tel]</th>";
            echo" <th>$_POST[direccion]</th>";
            echo" <th>$_POST[municipio]</th>";
            echo" <th>$_POST[email]</th>		";
			
			
		}else{
				echo "Not Update";
				} 
			
			echo "<br><br><br><a href=panel.php?user=$_GET[user]>Pulsa para volver al menu</a>";
			mysqli_close($conexion);
			
?>
