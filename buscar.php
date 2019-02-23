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
        include('conn.php');
        if(!$conexion)
        {
            // echo 'Error al conectarse';
        }
        else
        {
            // echo 'Conectado';
        }
 $_parametro = $_POST['documento'];

$resultado = mysqli_query($conexion,"SELECT * FROM usuarios WHERE ide=$_parametro");
    while($consulta = mysqli_fetch_array($resultado))
    {
        
        echo " 
        <form action=\"modificar.php\"  method=\"POST\">
                <table class=\"tabla\">
                <tr>
                    <td colspan=\"3\" > <p align=\"center\" class=\"tit_tabla\">Datos del menor asociado</p> </td>
                </tr>
                <tr>
                    <td>Documento de identidad </td>
                    <td><input type=\"text\"    name\"var1\"  value=".$consulta['ide']."> </td>
                    <td><input type=\"submit\"  name=\"var2\" value=\"Modificar\"> 
                        
                    </td>
                </tr>
                <tr>
                    <td>Nombre</td>
                    <td> ".$consulta['nombre']." </td>
                    <td><input type=\"submit\" value=\"Modificar\"> </td>
                </tr>
                <tr>
                    <td>Apellidos </td>
                    <td>".$consulta['apellido']." </td>
                    <td><input type=\"submit\" value=\"Modificar\"> </td>
                </tr>
                <tr>
                    <td>Agencias </td>
                    <td>".$consulta['agencia']." </td>
                    <td><input type=\"submit\" value=\"Modificar\"> </td>
                </tr>
                <tr>
                    <td>Modalidad</td>
                    <td> ".$consulta['modalidad']." </td>
                    <td><input type=\"submit\" value=\"Modificar\"> </td>
                </tr>
                <tr>
                    <td>Tipo de documento de identidad </td>
                    <td>".$consulta['tipo_id']." </td>
                    <td><input type=\"submit\" value=\"Modificar\"> </td>
                </tr>
                <tr>
                    <td>Sexo </td>
                    <td>".$consulta['sexo']." </td>
                    <td><input type=\"submit\" value=\"Modificar\"> </td>
                </tr>
                <tr>
                    <td>Institución Educativa</td>
                    <td> ".$consulta['IE']." </td>
                    <td><input type=\"submit\" value=\"Modificar\"> </td>
                </tr>
                <tr>
                    <td>Seguridad Social </td>
                    <td>".$consulta['EPS']." </td>
                    <td><input type=\"submit\" value=\"Modificar\"> </td>
                </tr>
                <tr>
                    <td>Fecha de nacimiento</td>
                    <td>".$consulta['fecha_nac']." </td>
                    <td><input type=\"submit\" value=\"Modificar\"> </td>
                </tr>
                <tr>
                    <td colspan=\"3\" ><p class=\"tit_tabla\">Datos del acudiente</p> </td>
                </tr>
                <tr>
                    <td>Nombre</td>
                    <td> ".$consulta['nombre_rep']." </td>
                    <td><input type=\"submit\" value=\"Modificar\"> </td>
                </tr>
                <tr>
                    <td>Apellidos </td>
                    <td>".$consulta['apellido_rep']." </td>
                    <td><input type=\"submit\" value=\"Modificar\"> </td>
                </tr>
                <tr>
                    <td>Parentesco </td>
                    <td>".$consulta['parentesco']." </td>
                    <td><input type=\"submit\" value=\"Modificar\"> </td>
                </tr>
                <tr>
                    <td>N° de cédula</td>
                    <td> ".$consulta['id_rep']." </td>
                    <td><input type=\"submit\" value=\"Modificar\"> </td>
                </tr>
                <tr>
                    <td>Teléfono</td>
                    <td>".$consulta['tel']." </td>
                    <td><input type=\"submit\" value=\"Modificar\"> </td>
                </tr>
                <tr>
                    <td>Dirección</td>
                    <td> ".$consulta['direccion']." </td>
                    <td><input type=\"submit\" value=\"Modificar\"> </td>
                </tr>
                <tr>
                    <td>Municipio </td>
                    <td>".$consulta['municipio']." </td>
                    <td><input type=\"submit\" value=\"Modificar\"> </td>
                </tr>
                <tr>
                    <td>Email </td>
                    <td>".$consulta['email']." </td>
                    <td><input type=\"submit\" value=\"Modificar\"> </td>
                </tr>
                </table>
                </form>
                <form action=\"modificar.php\"  method=\"POST\">
                <input type=\"text\" name=\"modificar\"  class=\"ocultar\" value=".$consulta['ide']." >
                <input type=\"submit\" value=\"Modificar\">
                 <a href=\"javascript:;\" onclick=\"window.print()\"><input type=\"button\" value=\"Imprimir\"  onclick='window.print()\' /></a>
                </form> 
               
        
        
        ";
        //echo $consulta['ide'];
        echo "<br>";
    }

?>
    