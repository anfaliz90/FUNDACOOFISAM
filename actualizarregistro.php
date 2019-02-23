<?php
include('conn.php');

$tomarreg = "SELECT COUNT(*) AS NUM FROM usuarios";
$cons = mysqli_query($conexion, $tomarreg);
$row=mysqli_fetch_array($cons);
echo $N1 = $row['NUM'];
  echo '<br>'           ;
echo $var= 1;
$uno=1;


$sql = "SELECT nombre FROM usuarios";
$resultado = mysqli_query($conexion,$sql);
$numero = 1;
while ($row = mysqli_fetch_array ($resultado)) 
{  
echo $numero . ' - ' . $row['nombre'];      
$numero++;
    echo '<br>';
}


?>