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
// si esta la variable arriba en tomar el post, debe estar abajo en el insert :D





//error_reporting(0);
 
 echo  $agencia       = $_POST['agencia'];
echo '<br>';
echo  $modalidad     = $_POST['modalidad'];
echo '<br>';
 echo $nombre        = $_POST['nombre'];
echo '<br>';
 echo $apellido      = $_POST['apellido'];
echo '<br>';
 echo $tipo_id       = $_POST['tipo_id'];
echo '<br>';
 echo $ide           = $_POST['ide'];  
echo '<br>';

 echo $sexo          =$_POST['sexo'];
echo '<br>';
 echo $IE            =$_POST['IE'];
echo '<br>';
 echo $EPS           =$_POST['EPS'];
echo '<br>';
 echo $mes           =$_POST['mes'];
echo '<br>';
 echo $dia           =$_POST['dia'];
echo '<br>';
 echo $anio           =$_POST['anio'];
   echo '<br>';
 echo $nombre_rep    = $_POST['nombre_rep'];
echo '<br>';
 echo $apellido_rep  = $_POST['apellido_rep'];
echo '<br>';
 echo $parentesco    = $_POST['parentesco'];
echo '<br>';
 echo $id_rep        = $_POST['id_rep'];
echo '<br>';
 echo $tel           = $_POST['tel'];
echo '<br>';
 echo $direccion     = $_POST['direccion'];
echo '<br>';
 echo $municipio     = $_POST['municipio'];
echo '<br>';
 echo $email         = $_POST['email'];
 echo '<br>';



echo $cat =$_POST['categoria'];
echo $cat1  = $_POST['categoria1'] ;

if($modalidad==="FUTBOL")
{   
    if($agencia=="GARZON")
    {
        $a = $_POST['categoria1'];
        $b = $_POST['jornada'];
        $categoria = $a.$b;
    }
    else
    {
    $categoria = $_POST['categoria1'];
    }
}
elseif($modalidad==="MUSICA")
{
    $categoria  = $_POST['categoria'] ;
}
elseif($modalidad==="BALONCESTO")
{
    $categoria ='NA';
}
elseif($modalidad=="DANZA")
{
    $categoria='NA';
}
 echo $categoria;
 // adjuntar PDF Documento de Identidad
 $_FILES['adjunto_ide']['name'];
 "<br>";
 $tipo=  $_FILES['adjunto_ide']['type'];
 "<br>";
 $_FILES['adjunto_ide']['size'];
 "<br>";
 $_FILES['adjunto_ide']['tmp_name'];
 "<br>";
 $_FILES['adjunto_ide']['error'];
 "<br>";

 $ruta="store/".$ide.'_DI.pdf';
if(move_uploaded_file($_FILES['adjunto_ide']['tmp_name'], $ruta))
{
    echo '';
};


 // adjuntar PDF Documento de Identidad
 $_FILES['adjunto_eps']['name'];
 "<br>";
 $tipo1=  $_FILES['adjunto_eps']['type'];
 "<br>";
 $_FILES['adjunto_eps']['size'];
 "<br>";
 $_FILES['adjunto_eps']['tmp_name'];
 "<br>";
 $_FILES['adjunto_eps']['error'];
 "<br>";

 $ruta1="store/".$ide.'_EPS.pdf';
if(move_uploaded_file($_FILES['adjunto_eps']['tmp_name'], $ruta1))
{
    echo '';
};

if($agencia=="GARZON")
{
    if($modalidad=="FUTBOL")
    {
        $CU_PREJ="SELECT cupos_disponibles AS NUM FROM categoria WHERE variante='$categoria'  ";
        $EJ1=mysqli_query($conexion, $CU_PREJ);     
             
        $row=mysqli_fetch_array($EJ1);
        
        echo $N1 = $row['NUM'];
             
    
        if($N1 <=0)
        {

            echo ' NO HAY CUPOS';
            header("Location:cupolleno.php");
        }
        else
        {
            echo ' SI HAY CUPOS';
            $insertar = "INSERT INTO usuarios 
                                (
                                agencia, 
                                modalidad, 
                                nombre, 
                                apellido, 
                                tipo_id, 
                                ide,
                                adjunto_ide,
                                sexo,
                                IE,
                                EPS,
                                mes,
                                dia,
                                anio,
                                adjunto_eps,
                                
                                nombre_rep,
                                apellido_rep,
                                parentesco,
                                id_rep,
                                tel,
                                direccion,
                                municipio,
                                email,
                                ciclo1,
                                ciclo2,
                                ciclo3,
                                categoria
                                
                                
                                
                                ) 
                                
                        VALUES (
                                '$agencia', 
                                '$modalidad', 
                                '$nombre',
                                '$apellido',
                                '$tipo_id',
                                '$ide',
                                '$ruta',
                                '$sexo',
                                '$IE',
                                '$EPS',
                                '$mes',
                                '$dia',
                                '$anio',
                                '$ruta1',
                                
                                '$nombre_rep',
                                '$apellido_rep',
                                '$parentesco',
                                '$id_rep',
                                '$tel',
                                '$direccion',
                                '$municipio',
                                '$email',
                                '',
                                '',
                                '',
                                '$categoria'
                                
                                
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

        }
    }
    elseif($modalidad=="MUSICA")
    {
        $CU_PREJ="SELECT cupos_disponibles AS NUM FROM cat_musica WHERE variante='$categoria'";
        $EJ1=mysqli_query($conexion, $CU_PREJ);     
             
        $row1=mysqli_fetch_array($EJ1);
        
        echo $N1 = $row1['NUM'];
             
    
        if($N1 <=0)
        {

            echo ' NO HAY CUPOS';
            header("Location:cupolleno.php");
        }
        else
        {
            echo ' SI HAY CUPOS';        
            $insertar = "INSERT INTO usuarios 
                    (
                    agencia, 
                    modalidad, 
                    nombre, 
                    apellido, 
                    tipo_id, 
                    ide,
                    adjunto_ide,
                    sexo,
                    IE,
                    EPS,
                    mes,
                    dia,
                    anio,
                    adjunto_eps,

                    nombre_rep,
                    apellido_rep,
                    parentesco,
                    id_rep,
                    tel,
                    direccion,
                    municipio,
                    email,
                    ciclo1,
                    ciclo2,
                    ciclo3,
                    categoria



                    ) 

            VALUES (
                    '$agencia', 
                    '$modalidad', 
                    '$nombre',
                    '$apellido',
                    '$tipo_id',
                    '$ide',
                    '$ruta',
                    '$sexo',
                    '$IE',
                    '$EPS',
                    '$mes',
                    '$dia',
                    '$anio',
                    '$ruta1',

                    '$nombre_rep',
                    '$apellido_rep',
                    '$parentesco',
                    '$id_rep',
                    '$tel',
                    '$direccion',
                    '$municipio',
                    '$email',
                    '',
                    '',
                    '',
                    '$categoria'


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

        }
    }
    else
    {
        $insertar = "INSERT INTO usuarios 
                    (
                    agencia, 
                    modalidad, 
                    nombre, 
                    apellido, 
                    tipo_id, 
                    ide,
                    adjunto_ide,
                    sexo,
                    IE,
                    EPS,
                    mes,
                    dia,
                    anio,
                    adjunto_eps,

                    nombre_rep,
                    apellido_rep,
                    parentesco,
                    id_rep,
                    tel,
                    direccion,
                    municipio,
                    email,
                    ciclo1,
                    ciclo2,
                    ciclo3,
                    categoria



                    ) 

            VALUES (
                    '$agencia', 
                    '$modalidad', 
                    '$nombre',
                    '$apellido',
                    '$tipo_id',
                    '$ide',
                    '$ruta',
                    '$sexo',
                    '$IE',
                    '$EPS',
                    '$mes',
                    '$dia',
                    '$anio',
                    '$ruta1',

                    '$nombre_rep',
                    '$apellido_rep',
                    '$parentesco',
                    '$id_rep',
                    '$tel',
                    '$direccion',
                    '$municipio',
                    '$email',
                    '',
                    '',
                    '',
                    '$categoria'


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

    }
}
else
{
                $insertar = "INSERT INTO usuarios 
                                (
                                agencia, 
                                modalidad, 
                                nombre, 
                                apellido, 
                                tipo_id, 
                                ide,
                                adjunto_ide,
                                sexo,
                                IE,
                                EPS,
                                mes,
                                dia,
                                anio,
                                adjunto_eps,
                                
                                nombre_rep,
                                apellido_rep,
                                parentesco,
                                id_rep,
                                tel,
                                direccion,
                                municipio,
                                email,
                                ciclo1,
                                ciclo2,
                                ciclo3,
                                categoria
                                
                                
                                
                                ) 
                                
                        VALUES (
                                '$agencia', 
                                '$modalidad', 
                                '$nombre',
                                '$apellido',
                                '$tipo_id',
                                '$ide',
                                '$ruta',
                                '$sexo',
                                '$IE',
                                '$EPS',
                                '$mes',
                                '$dia',
                                '$anio',
                                '$ruta1',
                                
                                '$nombre_rep',
                                '$apellido_rep',
                                '$parentesco',
                                '$id_rep',
                                '$tel',
                                '$direccion',
                                '$municipio',
                                '$email',
                                '',
                                '',
                                '',
                                '$categoria'
                                
                                
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

}
/*
$insertar = "INSERT INTO usuarios 
                                (
                                agencia, 
                                modalidad, 
                                nombre, 
                                apellido, 
                                tipo_id, 
                                ide,
                                adjunto_ide,
                                sexo,
                                IE,
                                EPS,
                                mes,
                                dia,
                                anio,
                                adjunto_eps,
                                
                                nombre_rep,
                                apellido_rep,
                                parentesco,
                                id_rep,
                                tel,
                                direccion,
                                municipio,
                                email,
                                ciclo1,
                                ciclo2,
                                ciclo3,
                                categoria
                                
                                
                                
                                ) 
                                
                        VALUES (
                                '$agencia', 
                                '$modalidad', 
                                '$nombre',
                                '$apellido',
                                '$tipo_id',
                                '$ide',
                                '$ruta',
                                '$sexo',
                                '$IE',
                                '$EPS',
                                '$mes',
                                '$dia',
                                '$anio',
                                '$ruta1',
                                
                                '$nombre_rep',
                                '$apellido_rep',
                                '$parentesco',
                                '$id_rep',
                                '$tel',
                                '$direccion',
                                '$municipio',
                                '$email',
                                '',
                                '',
                                '',
                                '$categoria'
                                
                                
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


*/
mysqli_close($conexion);
//header("Location:final.php?ide=".$ide."&modalidad=".$modalidad."");

        
?>