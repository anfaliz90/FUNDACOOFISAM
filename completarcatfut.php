<?php
include("conn.php");

// FUTBOL

$datos= "UPDATE usuarios SET categoria='PREJUVENIL'  WHERE modalidad='FUTBOL' AND anio='2001'";
$consulta =mysqli_query($conexion,$datos);

$datos= "UPDATE usuarios SET categoria='PREJUVENIL'  WHERE modalidad='FUTBOL' AND anio='2002'";
$consulta =mysqli_query($conexion,$datos);

$datos= "UPDATE usuarios SET categoria='PREJUVENIL'  WHERE modalidad='FUTBOL' AND anio='2003'";
$consulta =mysqli_query($conexion,$datos);

$datos= "UPDATE usuarios SET categoria='INFANTIL'  WHERE modalidad='FUTBOL' AND anio='2004'";
$consulta =mysqli_query($conexion,$datos);

$datos= "UPDATE usuarios SET categoria='INFANTIL'  WHERE modalidad='FUTBOL' AND anio='2005'";
$consulta =mysqli_query($conexion,$datos);

$datos= "UPDATE usuarios SET categoria='PREINFANTIL'  WHERE modalidad='FUTBOL' AND anio='2006'";
$consulta =mysqli_query($conexion,$datos);

$datos= "UPDATE usuarios SET categoria='PREINFANTIL'  WHERE modalidad='FUTBOL' AND anio='2007'";
$consulta =mysqli_query($conexion,$datos);

$datos= "UPDATE usuarios SET categoria='GORRION'  WHERE modalidad='FUTBOL' AND anio='2008'";
$consulta =mysqli_query($conexion,$datos);

$datos= "UPDATE usuarios SET categoria='GORRION'  WHERE modalidad='FUTBOL' AND anio='2009'";
$consulta =mysqli_query($conexion,$datos);

$datos= "UPDATE usuarios SET categoria='SAMI'  WHERE modalidad='FUTBOL' AND anio='2010'";
$consulta =mysqli_query($conexion,$datos);

$datos= "UPDATE usuarios SET categoria='SAMI'  WHERE modalidad='FUTBOL' AND anio='2011'";
$consulta =mysqli_query($conexion,$datos);

$datos= "UPDATE usuarios SET categoria='PRESAMI'  WHERE modalidad='FUTBOL' AND anio='2012'";
$consulta =mysqli_query($conexion,$datos);

$datos= "UPDATE usuarios SET categoria='PRESAMI'  WHERE modalidad='FUTBOL' AND anio='2013'";
$consulta =mysqli_query($conexion,$datos);

$datos= "UPDATE usuarios SET categoria='PRESAMI'  WHERE modalidad='FUTBOL' AND anio='2014'";
$consulta =mysqli_query($conexion,$datos);

// MUSICA CATEGORIAS/
/*
$datos= "UPDATE usuarios SET categoria='ESTIMULACION'  WHERE modalidad='MUSICA - ESTIMULACION'";
$consulta =mysqli_query($conexion,$datos);

$datos= "UPDATE usuarios SET categoria='ESTIMULACION'  WHERE modalidad='MUSICA - ESTIMULACIO'";
$consulta =mysqli_query($conexion,$datos);

$datos= "UPDATE usuarios SET categoria='GUITARRA'  WHERE modalidad='MUSICA - GUITARRA'";
$consulta =mysqli_query($conexion,$datos);

$datos= "UPDATE usuarios SET categoria='TECLADO'  WHERE modalidad='MUSICA - TECLADO'";
$consulta =mysqli_query($conexion,$datos);
*/

//

?>