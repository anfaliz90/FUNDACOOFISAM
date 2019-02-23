<?php
include('conn.php');
 echo $modalidad= "MUSICA";


if($modalidad=="FUTBOL")
{
    
        $CU_PREJ="SELECT cupos_disponibles AS NUM FROM categoria WHERE variante='PREJUVENIL'";
        $EJ1=mysqli_query($conexion, $CU_PREJ);     
             
        $row1=mysqli_fetch_array($EJ1);
        
        echo $N1 = $row1['NUM'];
             
    
        if($N1 <=0)
        {

            echo ' NO HAY CUPOS';
        }
        else
        {
            echo ' SI HAY CUPOS';
        }  
}
else if($modalidad=="MUSICA")
{
 $CU_PREJ="SELECT cupos_disponibles AS NUM FROM cat_musica WHERE variante='TECLADO'";
        $EJ1=mysqli_query($conexion, $CU_PREJ);     
             
        $row1=mysqli_fetch_array($EJ1);
        
        echo $N1 = $row1['NUM'];
             
    
        if($N1 <=0)
        {

            echo ' NO HAY CUPOS';
        }
        else
        {
            echo ' SI HAY CUPOS';
        }  
}
else
{
    
}

?>