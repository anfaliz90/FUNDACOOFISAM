<?php
include("conn.php");
	$consulta="SELECT * FROM usuarios ";
	$ejecuta=mysqli_query($conexion,$consulta);
?>
        <div >
        <table >
                <thead>
                    <th class=modificar colspan="20"> MODIFICAR REGISTROS </th>
                <tr>
                    <th>ID</th>
                    <th>AGENCIA</th>
                    <th>MODALIDAD</th>
                    <th>CATEGORIA</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>TIPO_ID</th>
                    <th>ID</th>
                </tr>
                </thead>
                <tr>
            <?php
                    while ($row=mysqli_fetch_array($ejecuta))
                    {

                        
                        echo "<td class='colang'><input type=text name=id           value='".$row['id']."'</td>";
                        echo "<td><input type=text name=agencia       value='".$row['agencia']."'</td>";
                        echo "<td><input type=text name=modalidad       value='".$row['modalidad']."'</td>";
                        echo "<td><input type=text name=categoria       value='".$row['categoria']."'</td>";
                        echo "<td><input type=text name=nombre       value='".$row['nombre']."'</td>";
                        echo "<td><input type=text name=apellido     value='".$row['apellido']."'</td>";
                        echo "<td><input type=text name=tipo_id      value='".$row['tipo_id']."'</td>";
                        echo "<td><input type=text name=ide          value='".$row['ide']."'</td>";
                        echo "<td><input type=hidden name=id         value='".$row['id']."'</td>";
                        $ruta1="store/".$row['ide']."_DI.pdf";
                        $ide = $row['ide'];
                        echo $ruta1;
                        $datos1= "UPDATE usuarios SET adjunto_ide='$ruta1' WHERE ide='$ide'" ;   
                        $consulta1 =mysqli_query($conexion,$datos1);
                        $ruta2="store/".$row['ide']."_EPS.pdf";                         
                        echo $ruta2;
                        $datos2= "UPDATE usuarios SET adjunto_eps='$ruta2' WHERE ide='$ide'";                    
                        $consulta2 =mysqli_query($conexion,$datos2);
                        echo '</tr>';
                                    }
            
                ?>
                </table>
</div>
 



