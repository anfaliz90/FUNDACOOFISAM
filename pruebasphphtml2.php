                 <div class="cupos">
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
             
        //PREJUVENIL

        // GUITARRA
        // PRESAMI
        $CU_PRES="SELECT COUNT(*)AS NUM FROM usuarios WHERE categoria='GUITARRA'";
        $EJ9=mysqli_query($conexion, $CU_PRES);     
             
        $row11=mysqli_fetch_array($EJ9);
        $N11 = $row11['NUM'];
             
             
        $CT_PRES ="SELECT * FROM categoria WHERE variante='GUITARRA'";
        $EJ9=mysqli_query($conexion, $CT_PRES);    
             
        $row6=mysqli_fetch_array($EJ9);
        $N12 = $row6[3];
             
        $PRES_DIS = $N12 - $N11;     
             
        $PRES="UPDATE categoria SET cupos_disponibles='$PRES_DIS'                                  WHERE variante='GUITARRA'";     
        mysqli_query($conexion,$PRES);    
        
                     
                     //TECLADO
        $CU_PRES="SELECT COUNT(*)AS NUM FROM usuarios WHERE categoria='TECLADO'";
        $EJ9=mysqli_query($conexion, $CU_PRES);     
             
        $row11=mysqli_fetch_array($EJ9);
        $N11 = $row11['NUM'];
             
             
        $CT_PRES ="SELECT * FROM categoria WHERE variante='TECLADO'";
        $EJ9=mysqli_query($conexion, $CT_PRES);    
             
        $row6=mysqli_fetch_array($EJ9);
        $N12 = $row6[3];
             
        $PRES_DIS = $N12 - $N11;     
             
        $PRES="UPDATE categoria SET cupos_disponibles='$PRES_DIS'                                  WHERE variante='TECLADO'";     
        mysqli_query($conexion,$PRES);                      
             
                     
        // ESTIMULACION
        $CU_PRES="SELECT COUNT(*)AS NUM FROM usuarios WHERE categoria='ESTIMULACION'";
        $EJ9=mysqli_query($conexion, $CU_PRES);     
             
        $row11=mysqli_fetch_array($EJ9);
        $N11 = $row11['NUM'];
             
             
        $CT_PRES ="SELECT * FROM categoria WHERE variante='ESTIMULACION'";
        $EJ9=mysqli_query($conexion, $CT_PRES);    
             
        $row6=mysqli_fetch_array($EJ9);
        $N12 = $row6[3];
             
        $PRES_DIS = $N12 - $N11;     
             
        $PRES="UPDATE categoria SET cupos_disponibles='$PRES_DIS'                                  WHERE variante='ESTIMULACION'";     
        mysqli_query($conexion,$PRES);                 
        $TABLA_G="SELECT * FROM categoria ";
        $ejecuta=mysqli_query($conexion,$TABLA_G);
        ?>
        
        <table class="tabla_cupos"  id="cupos" name="cupos" >
                <thead>
                    <tr >
                        <th colspan="5" style="text-align:center;" class="form-title"><span align="center">Cupos Disponibles Garzón</span></th>
                    </tr>
                </thead>
                <thead>
                
                <tr>
                    <th>N°</th>
                    <th>MODALIDAD</th>
                    <th>CATEGORÍA</th>
                    <th>CUPOS TOTALES</th>
                    <th>CUPOS DISPONIBLES</th>
                </tr>
                </thead>

                <form action="" method="post">
                <tr>
                <?php
                    while ($row=mysqli_fetch_array($ejecuta)){

                        echo "<tr><form action=modificar.php method=post>";
                        echo "<td>".$row['id']."</td>";
                        echo "<td>".$row['modalidad']."</td>";
                        echo "<td>".$row['variante']."</td>";
                        echo "<td>".$row['cupos_totales']."</td>";
                        echo "<td>".$row['cupos_disponibles']."</td>";


                        echo "</form></tr>";
                    }





                ?>
            </table>
    </div>