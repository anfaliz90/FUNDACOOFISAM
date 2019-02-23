<?php
include('conn.php');


$agencia=$_POST['agencia'];
$modalidad=$_POST['modalidad'];
$categoria=$_POST['categoria'];
$jornada=$_POST['jornada'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$identificacion=$_POST['ide'];
$telefono=$_POST['tel'];
$direccion=$_POST['direccion'];
$municipio=$_POST['municipio'];
$email=$_POST['email'];



$consulta = "INSERT INTO instructores   (
                                    agencia,
                                    modalidad,
                                    categoria,
                                    jornada,
                                    nombre,
                                    apellido,
                                    ide,
                                    telefono,
                                    direccion,
                                    municipio,
                                    email,
                                    usuario,
                                    password,
                                    activo
                                    )
                                    
                                    VALUES
                                    (
                                    '$agencia',
                                    '$modalidad',
                                    '$categoria',
                                    '$jornada',
                                    '$nombre',
                                    '$apellido',
                                    '$identificacion',
                                    '$telefono',
                                    '$direccion',
                                    '$municipio',
                                    '$email',
                                    '$nombre',
                                    '1234',
                                    '1'
                                    )
                                    ";
$ejecutar =mysqli_query($conexion,$consulta);
if(!$ejecutar)
{
    echo 'paila';
}
else
{
    echo 'si';
}
    



?>