<?php 
        include('conn.php');
        if(!$conexion)
        {
             echo 'Error al conectarse';
        }
        else
        {
             echo 'Conectado';
        }
echo '<br />';
echo $nombre   = "hol"; /*$_POST['nombre'];*/
echo '<br />';
echo $apellido  = "hol";/*$_POST['apellido'];*/
echo '<br />';
echo $tipo_id   ="hol";/* $_POST['tipo_id'];*/
echo '<br />';
echo $fecha_nac ="hol"; /*$_POST['fecha_nac'];*/
echo '<br />';
echo $ide       ="hol";/* $_POST['ide'];*/
echo '<br />';
echo $tel       ="hol"; /*$_POST['tel'];*/
echo '<br />';
echo $email_p   ="hol"; /*$_POST['email_p'];*/
echo '<br />';
echo $email_c   ="hol"; /*$_POST['email_c'];*/
echo '<br />';


echo $agencia   ="hol"; /*$_POST['agencia'];*/
echo '<br />';
echo $modalidad ="hol"; /*$_POST['modalidad'];*/
echo '<br />';
echo $categoria ="hol"; /*$_POST['categoria'];*/
echo '<br />';
echo $jornada   ="hol"; /*$_POST['jornada'];*/
echo '<br />';

echo $fecha_i   ="hol"; /*$_POST['fecha_i'];*/
echo '<br />';
echo $fecha_f   ="hol"; /*$_POST['fecha_f'];*/
echo '<br />';
echo $lug_en    ="hol"; /*$_POST['lug_en'];*/
echo '<br />';


  
   $insertar = "INSERT INTO instructores

                                
                        VALUES (
                                                               
                                                               
                                '$agencia', 
                                '$modalidad',
                                '$categoria',
                                '$jornada',
                                '$nombre', 
                                '$apellido', 
                                '$tipo_id', 
                                '$ide',
                                
                                
                                '$tel',
                                '$email_p',
                                '$email_c',
                                '$fecha_i',
                                '$fecha_f',
                                '$lug_en'
                                '$ide',
                                '1234',
                                '1'
                                
                                
                                )";

                                $resultado=mysqli_query($conexion,$insertar);
                                if(!$resultado)
                                {
                                    echo ' No registrado';
                                }
                                else
                                {
                                    echo ' REGISTRADO';

                                }

 ?>