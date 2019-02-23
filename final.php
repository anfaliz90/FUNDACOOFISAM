
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset  = "utf-8" >
        <title>
            USUARIO CREADO
        </title>
        <link rel="stylesheet" type="text/css" href="registro.css">
    </head>
    
    <body>
    <div style="text-align:center;">
    <h2>LOS DATOS REGISTRADOS SON LOS SIGUIENTES</h2>
    <p>Toma una captura de pantalla de los datos registrados</p>
    <a href="final.html"><input type="button"  class="boton"value="FINALIZAR INSCRIPCIÓN"></a>
    </div>
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
 $_parametro1 = $_GET['ide'];
 $_parametro2 = $_GET['modalidad'];

if($_parametro2=='FUTBOL')
{
    $resultado = mysqli_query($conexion,"SELECT * FROM usuarios WHERE modalidad='FUTBOL' AND ide=$_parametro1");

}
else if($_parametro2=='MUSICA')
{
 $resultado = mysqli_query($conexion,"SELECT * FROM usuarios WHERE modalidad='MUSICA' AND ide=$_parametro1");
   
}
else if($_parametro2=="DANZA")
{
    $resultado = mysqli_query($conexion,"SELECT * FROM usuarios WHERE modalidad='DANZA' AND ide=$_parametro1");

}
else if($_parametro2=="BALONCESTO")
{
        $resultado = mysqli_query($conexion,"SELECT * FROM usuarios WHERE modalidad='BALONCESTO' AND ide=$_parametro1");
}
    while($consulta = mysqli_fetch_array($resultado))
    {
        
        echo " 
        <form action=\"modificar.php\"  method=\"POST\">
                <table class=\"tabla\">
                <tr>
                    <td colspan=\"3\" > <p align=\"center\" class=\"tit_tabla\">Datos del menor asociado</p> </td>
                </tr>
                <tr>
                    <td>Número de inscripción </td>
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
                    <td><a href=".$consulta['adjunto_ide'].">Documento de identidad</a> </td>

                </tr>
                <tr>
                    <td>Certificado de seguridad social </td>
                    <td><a href=".$consulta['adjunto_eps'].">Certificado de seguridad social</a> </td>

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
               
                
                 <a href=\"javascript:;\" onclick=\"window.print()\"><input type=\"button\" value=\"Imprimir\"  onclick='window.print()\' /></a>
                </form> 
               
        
        
        ";
        //echo $consulta['ide'];
        
        
        echo "<br>";
        echo "<br>";
    }

?>





