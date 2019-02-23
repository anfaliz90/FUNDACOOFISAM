<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset  = "utf-8" >
        <title>
            Búsqueda de registro
        </title>
        <link rel="stylesheet" type="text/css" href="registro.css">
    </head>
    
    <body>
    
    </body>
</html>

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
 $_parametro = $_POST['documento'];

$resultado = mysqli_query($conexion,"SELECT * FROM usuarios WHERE ide=$_parametro ORDER BY id DESC");
    while($consulta = mysqli_fetch_array($resultado))
    {
        
        echo " 
        <form action=\"modificar.php\"  method=\"POST\">
                <table class=\"tabla\">
                <tr>
                    <td colspan=\"3\" > <p align=\"center\" class=\"tit_tabla\">Datos del menor asociado</p> </td>
                </tr>
                <tr>
                    <td>Registro de inscripción </td>
                    <td> ".$consulta['id']." </td>
                    
                </tr>
                <tr>
                    <td>Documento de identidad </td>
                    <td> ".$consulta['ide']." </td>
                    
                </tr>
                <tr>
                    <td>Nombre</td>
                    <td> ".$consulta['nombre']." </td>

                </tr>
                <tr>
                    <td>Apellidos </td>
                    <td>".$consulta['apellido']." </td>
                    
                </tr>
                <tr>
                    <td>Agencias </td>
                    <td>".$consulta['agencia']." </td>
                   
                </tr>
                <tr>
                    <td>Modalidad</td>
                    <td> ".$consulta['modalidad']." </td>
                    
                </tr>
                <tr>
                    <td>Tipo de documento de identidad </td>
                    <td>".$consulta['tipo_id']." </td>

                </tr>
                <tr>
                    <td>Documento de identidad </td>
                    <td><a href=".$consulta['adjunto_ide']." target='_blank'>Documento de identidad</a> </td>

                </tr>
                <tr>
                    <td>Sexo </td>
                    <td>".$consulta['sexo']." </td>
                    
                </tr>
                <tr>
                    <td>Institución Educativa</td>
                    <td> ".$consulta['IE']." </td>

                </tr>
                <tr>
                    <td>Seguridad Social </td>
                    <td>".$consulta['EPS']." </td>
                
                </tr>
                <tr>
                    <td>Certificado de seguridad social </td>
                    <td><a href=".$consulta['adjunto_eps']." target='_blank''>Certificado de seguridad social</a> </td>

                </tr>
                <tr>
                    <td>Fecha de nacimiento (MM/DD/AAAA)</td>
                    <td>".$consulta['mes']." - ".$consulta['dia']." - ".$consulta['anio']." </td>

                </tr>
                <tr>
                    <td colspan=\"3\" ><p class=\"tit_tabla\">Datos del acudiente</p> </td>
                </tr>
                <tr>
                    <td>Nombre</td>
                    <td> ".$consulta['nombre_rep']." </td>

                </tr>
                <tr>
                    <td>Apellidos </td>
                    <td>".$consulta['apellido_rep']." </td>

                </tr>
                <tr>
                    <td>Parentesco </td>
                    <td>".$consulta['parentesco']." </td>
                   
                </tr>
                <tr>
                    <td>N° de cédula</td>
                    <td> ".$consulta['id_rep']." </td>
                    
                </tr>
                <tr>
                    <td>Teléfono</td>
                    <td>".$consulta['tel']." </td>
                    
                </tr>
                <tr>
                    <td>Dirección</td>
                    <td> ".$consulta['direccion']." </td>

                </tr>
                <tr>
                    <td>Municipio </td>
                    <td>".$consulta['municipio']." </td>

                </tr>
                <tr>
                    <td>Email </td>
                    <td>".$consulta['email']." </td>
                    
                </tr>
                </table>
                </form>
                <form action=\"modificar.php\"  method=\"POST\">
                
                 <a href=\"javascript:;\" onclick=\"window.print()\"><input type=\"button\" value=\"Imprimir\"  onclick='window.print()\' /></a>
                </form> 
               
        
        
        ";
        //echo $consulta['ide'];
        
        echo "<a href='javascript:history.back(-1);' title='Ir la página anterior'>Volver</a>";
        echo "<br>";
        echo "<br>";
    }

?>
    