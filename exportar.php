<?php
session_start();
        include('conn.php');
        include('seguridad.php');
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
$sql= "SELECT * FROM usuarios";
$resultado = mysqli_query ($conexion, $sql) or die (mysql_error ());

$libros = array();
while( $rows = mysqli_fetch_assoc($resultado) ) {
 $libros[] = $rows;
}
mysqli_close($conexion);


if(isset($_POST["export_data"])) {
 if(!empty($libros)) {
 $filename = "libros.xls";
 header("Content-Type: application/vnd.ms-excel");
 header("Content-Disposition: attachment; filename=".$filename);

 $mostrar_columnas = false;

 foreach($libros as $libro) {
 if(!$mostrar_columnas) {
 echo implode("\t", array_keys($libro)) . "\n";
 $mostrar_columnas = true;
 }
 echo implode("\t", array_values($libro)) . "\n";
 }

 }else{
 echo 'No hay datos a exportar';
 }
 exit;
}
echo "<a href=panel.php>Menú principal</a>";
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset  = "utf-8" >
        <title>
            Exportar listado
        </title>
        <link rel="stylesheet" type="text/css" href="registro.css">
    </head>
    <body>
    <div class="container">
 <h2 class=form-title>Exportar datos a Excel con PHP y MySQL</h2>

 <div class="well-sm col-sm-12">
 <div class="btn-group pull-right">
 <form action=" <?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
 <button type="submit" id="export_data" name='export_data'
value="Export to excel" class="boton">Exportar a Excel</button>
 </form>
 </div>
 </div>




</div>

        
        
    </body>
</html>