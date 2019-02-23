<?php
include('conn.php');
//include('reportes2.php');
//TOTAL
$total_agencia="SELECT COUNT(agencia) AS NUM FROM usuarios ";
$total_ag_query=mysqli_query($conexion, $total_agencia);
    $row=mysqli_fetch_array($total_ag_query);
     $TOTAL = $row['NUM'];

 
$result = mysqli_query($conexion,"SELECT  consulta FROM consulta"); 

while ($row = mysqli_fetch_array($result)) 
{ 
     $AGENCIA = $row['consulta']; 
} 

//$AGENCIA='GARZON';//
$cons_agencia="SELECT COUNT(agencia) AS NUM FROM usuarios WHERE agencia='GARZON'";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
     $GARZON = $row['NUM'];

$cons_agencia="SELECT COUNT(agencia) AS NUM FROM usuarios WHERE agencia='PITAL'";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
     $PITAL = $row['NUM'];

$cons_agencia="SELECT COUNT(agencia) AS NUM FROM usuarios WHERE agencia='SUAZA'";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
    $SUAZA = $row['NUM'];

$cons_agencia="SELECT COUNT(agencia) AS NUM FROM usuarios WHERE agencia='GUADALUPE'";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
    $GUADALUPE = $row['NUM'];

$cons_agencia="SELECT COUNT(agencia) AS NUM FROM usuarios WHERE agencia='PLATA'";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
    $PLATA = $row['NUM'];

$cons_agencia="SELECT COUNT(agencia) AS NUM FROM usuarios WHERE agencia='AGRADO'";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
    $AGRADO = $row['NUM'];

$cons_agencia="SELECT COUNT(agencia) AS NUM FROM usuarios WHERE agencia='ARGENTINA'";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
    $ARGENTINA = $row['NUM'];

$cons_agencia="SELECT COUNT(agencia) AS NUM FROM usuarios WHERE agencia='PITALITO'";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
    $PITALITO = $row['NUM'];

$cons_agencia="SELECT COUNT(agencia) AS NUM FROM usuarios WHERE agencia='RIVERA'";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
    $RIVERA = $row['NUM'];

$cons_agencia="SELECT COUNT(agencia) AS NUM FROM usuarios WHERE agencia='TARQUI'";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
    $TARQUI = $row['NUM'];


// MODALIDAD
$cons_agencia="SELECT COUNT(modalidad) AS NUM FROM usuarios WHERE modalidad='FUTBOL'";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
    $FUTBOL = $row['NUM'];

$cons_agencia="SELECT COUNT(modalidad) AS NUM FROM usuarios WHERE modalidad='MUSICA' ";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
    $MUSICA = $row['NUM'];

$cons_agencia="SELECT COUNT(modalidad) AS NUM FROM usuarios WHERE modalidad='DANZA'";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
    $DANZA = $row['NUM'];

$cons_agencia="SELECT COUNT(modalidad) AS NUM FROM usuarios WHERE modalidad='BALONCESTO'";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
    $BALONCESTO = $row['NUM'];

// CATEGORIAS DE FUTBOL EN TODAS LAS AGENCIAS
$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='FUTBOL' ";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
    $TOTAL_FUTBOL = $row['NUM'];

$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='FUTBOL' AND categoria='PREJUVENIL'";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
     $PREJUVENIL = $row['NUM'];

$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='FUTBOL' AND categoria='INFANTIL'";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
     $INFANTIL = $row['NUM'];

$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='FUTBOL' AND categoria='PREINFANTIL'";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
     $PREINFANTIL = $row['NUM'];

$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='FUTBOL' AND categoria='GORRION'";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
     $GORRION = $row['NUM'];

$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='FUTBOL' AND categoria='SAMI'";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
     $SAMI = $row['NUM'];

$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='FUTBOL' AND categoria='PRESAMI'";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
     $PRESAMI = $row['NUM'];





// categorias de musica
$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='MUSICA' ";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
    $TOTAL_MUSICA = $row['NUM'];


$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='MUSICA' AND (categoria='ESTIMULACION_ANTIGUO' OR categoria='ESTIMULACION_NUEVO')";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
    $ESTIMULACION = $row['NUM'];

$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='MUSICA' AND (categoria='GUITARRA_NUEVO_MANANA' OR categoria='GUITARRA_NUEVO_TARDE' OR categoria='GUITARRA_ANTIGUO')";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
    $GUITARRA = $row['NUM'];

$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='MUSICA' AND (categoria='TECLADO_NUEVO_MANANA' OR categoria='TECLADO_NUEVO_TARDE' OR categoria='TECLADO_ANTIGUO')";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
    $TECLADO = $row['NUM'];




// CATEGORIAS DE FUTBOL EN UNA SOLA AGENCIA
$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='FUTBOL' AND (agencia ='$AGENCIA')";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
   $TOTAL_A = $row['NUM'];



$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='FUTBOL' AND (categoria='PREJUVENIL' AND agencia ='$AGENCIA')";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
    $PREJUVENIL_A = $row['NUM'];

$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='FUTBOL' AND (categoria='INFANTIL' AND agencia ='$AGENCIA')";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
    $INFANTIL_A = $row['NUM'];

$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='FUTBOL' AND (categoria='PREINFANTIL' AND agencia ='$AGENCIA')";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
    $PREINFANTIL_A = $row['NUM'];

$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='FUTBOL' AND (categoria='GORRION' AND agencia ='$AGENCIA')";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
    $GORRION_A = $row['NUM'];

$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='FUTBOL' AND (categoria='SAMI' AND agencia ='$AGENCIA')";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
   $SAMI_A = $row['NUM'];

$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='FUTBOL' AND (categoria='PRESAMI' AND agencia ='$AGENCIA')";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
    $PRESAMI_A = $row['NUM'];


// CICLO 1
$cons_agencia="SELECT COUNT(*) AS NUM FROM usuarios WHERE ciclo1='pagado'";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
   $CICLO1 = $row['NUM'];

$CICLO1_NP = $TOTAL-$CICLO1;

// CICLO 2
$cons_agencia="SELECT COUNT(*) AS NUM FROM usuarios WHERE ciclo2='pagado'";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
   $CICLO2 = $row['NUM'];

$CICLO2_NP = $TOTAL-$CICLO2;

// CICLO 3
$cons_agencia="SELECT COUNT(*) AS NUM FROM usuarios WHERE ciclo3='pagado'";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
   $CICLO3 = $row['NUM'];

$CICLO3_NP = $TOTAL-$CICLO3;

?>