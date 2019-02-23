<?php

include('conn.php');

$datos= "UPDATE usuarios SET modalidad='MUSICA'  WHERE modalidad='MUSICA - GUITARRA'";
$consulta =mysqli_query($conexion,$datos);

$datos= "UPDATE usuarios SET modalidad='MUSICA'  WHERE modalidad='MUSICA - ESTIMULACION'";
$consulta =mysqli_query($conexion,$datos);

$datos= "UPDATE usuarios SET modalidad='MUSICA'  WHERE modalidad='MUSICA - ESTIMULACIO'";
$consulta =mysqli_query($conexion,$datos);

$datos= "UPDATE usuarios SET modalidad='MUSICA'  WHERE modalidad='MUSICA - TECLADO'";
$consulta =mysqli_query($conexion,$datos);


?>