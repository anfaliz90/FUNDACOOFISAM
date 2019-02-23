<?php
include('conn.php');
include('datos_graf.php');





// CATEGORIAS DE FUTBOL EN UNA SOLA GARZON
$AGENCIA ='GARZON';
$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='FUTBOL' AND (agencia ='$AGENCIA')";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
   $FUTBOL_GA = $row['NUM'];

$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='MUSICA' AND (agencia ='$AGENCIA')";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
   $MUSICA_GA = $row['NUM'];

$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='DANZA' AND (agencia ='$AGENCIA')";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
   $DANZA_GA = $row['NUM'];

$AGENCIA ='AGRADO';
$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='FUTBOL' AND (agencia ='$AGENCIA')";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
   $FUTBOL_AG = $row['NUM'];

$AGENCIA ='ARGENTINA';
$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='FUTBOL' AND (agencia ='$AGENCIA')";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
   $FUTBOL_AR = $row['NUM'];

$AGENCIA ='RIVERA';
$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='FUTBOL' AND (agencia ='$AGENCIA')";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
   $FUTBOL_RI = $row['NUM'];

$AGENCIA ='PITALITO';
$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='FUTBOL' AND (agencia ='$AGENCIA')";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
   $FUTBOL_PIT = $row['NUM'];

$AGENCIA ='PLATA';
$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='FUTBOL' AND (agencia ='$AGENCIA')";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
   $FUTBOL_PL = $row['NUM'];

$AGENCIA ='GUADALUPE';
$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='FUTBOL' AND (agencia ='$AGENCIA')";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
   $FUTBOL_GU = $row['NUM'];

$AGENCIA ='SUAZA';
$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='FUTBOL' AND (agencia ='$AGENCIA')";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
   $FUTBOL_SU = $row['NUM'];


$AGENCIA ='TARQUI';
$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='FUTBOL' AND (agencia ='$AGENCIA')";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
   $FUTBOL_TA = $row['NUM'];

$AGENCIA ='PITAL';
$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='FUTBOL' AND (agencia ='$AGENCIA')";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
   $FUTBOL_PI = $row['NUM'];

$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='BALONCESTO' AND (agencia ='$AGENCIA')";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
   $BALONCESTO_PI = $row['NUM'];







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

// PAGO POR MODALIDAD Y POR AGENCIA
// CATEGORIAS DE FUTBOL EN UNA SOLA GARZON
$AGENCIA ='GARZON';
$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='FUTBOL' AND (agencia ='$AGENCIA' AND ciclo1='pagado')";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
   $FUTBOL_GAP = $row['NUM'];

$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='MUSICA' AND (agencia ='$AGENCIA' AND ciclo1='pagado')";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
    $MUSICA_GAP = $row['NUM'];

$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='DANZA' AND (agencia ='$AGENCIA' AND ciclo1='pagado')";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
   $DANZA_GAP = $row['NUM'];

$AGENCIA ='AGRADO';
$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='FUTBOL' AND (agencia ='$AGENCIA' AND ciclo1='pagado')";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
   $FUTBOL_AGP = $row['NUM'];

$AGENCIA ='ARGENTINA';
$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='FUTBOL' AND (agencia ='$AGENCIA' AND ciclo1='pagado')";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
   $FUTBOL_ARP = $row['NUM'];

$AGENCIA ='RIVERA';
$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='FUTBOL' AND (agencia ='$AGENCIA' AND ciclo1='pagado')";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
   $FUTBOL_RIP = $row['NUM'];

$AGENCIA ='PITALITO';
$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='FUTBOL' AND (agencia ='$AGENCIA' AND ciclo1='pagado')";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
   $FUTBOL_PITP = $row['NUM'];

$AGENCIA ='PLATA';
$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='FUTBOL' AND (agencia ='$AGENCIA' AND ciclo1='pagado')";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
   $FUTBOL_PLP = $row['NUM'];

$AGENCIA ='GUADALUPE';
$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='FUTBOL' AND (agencia ='$AGENCIA' AND ciclo1='pagado')";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
   $FUTBOL_GUP = $row['NUM'];

$AGENCIA ='SUAZA';
$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='FUTBOL' AND (agencia ='$AGENCIA' AND ciclo1='pagado')";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
   $FUTBOL_SUP = $row['NUM'];


$AGENCIA ='TARQUI';
$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='FUTBOL' AND (agencia ='$AGENCIA' AND ciclo1='pagado')";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
   $FUTBOL_TAP = $row['NUM'];

$AGENCIA ='PITAL';
$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='FUTBOL' AND (agencia ='$AGENCIA' AND ciclo1='pagado')";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
    $FUTBOL_PIP = $row['NUM'];

$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='BALONCESTO' AND (agencia ='$AGENCIA' AND ciclo1='pagado')";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
    $BALONCESTO_PIP = $row['NUM'];


// no pagos
$AGENCIA ='GARZON';
$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='FUTBOL' AND (agencia ='$AGENCIA' AND ciclo1='')";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
    $FUTBOL_GAN = $row['NUM'];

$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='MUSICA' AND (agencia ='$AGENCIA' AND ciclo1='')";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
    $MUSICA_GAN = $row['NUM'];

$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='DANZA' AND (agencia ='$AGENCIA' AND ciclo1='')";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
   $DANZA_GAN = $row['NUM'];

$AGENCIA ='AGRADO';
$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='FUTBOL' AND (agencia ='$AGENCIA' AND ciclo1='')";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
   $FUTBOL_AGN = $row['NUM'];

$AGENCIA ='ARGENTINA';
$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='FUTBOL' AND (agencia ='$AGENCIA' AND ciclo1='')";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
   $FUTBOL_ARN = $row['NUM'];

$AGENCIA ='RIVERA';
$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='FUTBOL' AND (agencia ='$AGENCIA' AND ciclo1='')";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
   $FUTBOL_RIN = $row['NUM'];

$AGENCIA ='PITALITO';
$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='FUTBOL' AND (agencia ='$AGENCIA' AND ciclo1='')";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
   $FUTBOL_PITN = $row['NUM'];

$AGENCIA ='PLATA';
$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='FUTBOL' AND (agencia ='$AGENCIA' AND ciclo1='')";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
   $FUTBOL_PLN = $row['NUM'];

$AGENCIA ='GUADALUPE';
$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='FUTBOL' AND (agencia ='$AGENCIA' AND ciclo1='')";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
   $FUTBOL_GUN = $row['NUM'];

$AGENCIA ='SUAZA';
$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='FUTBOL' AND (agencia ='$AGENCIA' AND ciclo1='')";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
   $FUTBOL_SUN = $row['NUM'];


$AGENCIA ='TARQUI';
$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='FUTBOL' AND (agencia ='$AGENCIA' AND ciclo1='')";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
   $FUTBOL_TAN = $row['NUM'];

$AGENCIA ='PITAL';
$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='FUTBOL' AND (agencia ='$AGENCIA' AND ciclo1='')";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
    $FUTBOL_PIN = $row['NUM'];

$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='BALONCESTO' AND (agencia ='$AGENCIA' AND ciclo1='pagado')";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
    $BALONCESTO_PIN = $row['NUM'];

$cons_agencia="SELECT COUNT(categoria) AS NUM FROM usuarios WHERE modalidad='BALONCESTO' AND (agencia ='$AGENCIA' AND ciclo1='pagado')";
$cons_ag_query=mysqli_query($conexion, $cons_agencia);
    $row=mysqli_fetch_array($cons_ag_query);
    $BALONCESTO_PIN = $row['NUM'];


//TOTAL PAGOS



$total_agencia="SELECT COUNT(agencia) AS NUM FROM usuarios WHERE ciclo1='pagado'";
$total_ag_query=mysqli_query($conexion, $total_agencia);
    $row=mysqli_fetch_array($total_ag_query);
     $TOTAL_PAGO = $row['NUM'];

$total_agencia="SELECT COUNT(agencia) AS NUM FROM usuarios WHERE ciclo1=''";
$total_ag_query=mysqli_query($conexion, $total_agencia);
    $row=mysqli_fetch_array($total_ag_query);
     $TOTAL_PAGON = $row['NUM'];
?>