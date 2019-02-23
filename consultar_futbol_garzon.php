<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset  = "utf-8" >
        <title>
            Total registrados
        </title>
        <link rel="stylesheet" type="text/css" href="registro.css">
        
    </head>
    <body>
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
    $tomarreg = "SELECT COUNT(*) AS NUM FROM usuarios WHERE categoria='PRESAMI' AND jornada ='MANANA' ";
    $cons = mysqli_query($conexion, $tomarreg);
    $row=mysqli_fetch_array($cons);
    $PRESAMI_M = $row['NUM'];
        
    $tomarreg = "SELECT COUNT(*) AS NUM FROM usuarios WHERE categoria='PRESAMI' AND jornada ='TARDE'";
    $cons = mysqli_query($conexion, $tomarreg);
    $row=mysqli_fetch_array($cons);
    $PRESAMI_T = $row['NUM'];
        
        $tomarreg = "SELECT COUNT(*) AS NUM FROM usuarios WHERE categoria='SAMI' AND jornada ='MANANA'";
    $cons = mysqli_query($conexion, $tomarreg);
    $row=mysqli_fetch_array($cons);
    $SAMI_M = $row['NUM'];
        
    $tomarreg = "SELECT COUNT(*) AS NUM FROM usuarios WHERE categoria='SAMI' AND jornada ='TARDE'";
    $cons = mysqli_query($conexion, $tomarreg);
    $row=mysqli_fetch_array($cons);
    $SAMI_T = $row['NUM'];
     
    $tomarreg = "SELECT COUNT(*) AS NUM FROM usuarios WHERE categoria='GORRION' AND jornada ='MANANA'";
    $cons = mysqli_query($conexion, $tomarreg);
    $row=mysqli_fetch_array($cons);
    $GORRION_M = $row['NUM'];
        
    $tomarreg = "SELECT COUNT(*) AS NUM FROM usuarios WHERE categoria='GORRION' AND jornada ='TARDE'";
    $cons = mysqli_query($conexion, $tomarreg);
    $row=mysqli_fetch_array($cons);
    $GORRION_T = $row['NUM'];   
        
    $tomarreg = "SELECT COUNT(*) AS NUM FROM usuarios WHERE categoria='PREINFANTIL' AND jornada ='MANANA'";
    $cons = mysqli_query($conexion, $tomarreg);
    $row=mysqli_fetch_array($cons);
    $PREINFANTIL_M = $row['NUM'];
        
    $tomarreg = "SELECT COUNT(*) AS NUM FROM usuarios WHERE categoria='PREINFANTIL' AND jornada ='TARDE'";
    $cons = mysqli_query($conexion, $tomarreg);
    $row=mysqli_fetch_array($cons);
    $PREINFANTIL_T = $row['NUM'];   
        
    $tomarreg = "SELECT COUNT(*) AS NUM FROM usuarios WHERE categoria='INFANTIL' AND jornada ='MANANA'";
    $cons = mysqli_query($conexion, $tomarreg);
    $row=mysqli_fetch_array($cons);
    $INFANTIL_M = $row['NUM'];
        
    $tomarreg = "SELECT COUNT(*) AS NUM FROM usuarios WHERE categoria='INFANTIL' AND jornada ='TARDE'";
    $cons = mysqli_query($conexion, $tomarreg);
    $row=mysqli_fetch_array($cons);
    $INFANTIL_T = $row['NUM'];    
        
    $tomarreg = "SELECT COUNT(*) AS NUM FROM usuarios WHERE categoria='PREJUVENIL' AND jornada ='MANANA'";
    $cons = mysqli_query($conexion, $tomarreg);
    $row=mysqli_fetch_array($cons);
    $PREJUVENIL_M = $row['NUM'];
        
    $tomarreg = "SELECT COUNT(*) AS NUM FROM usuarios WHERE categoria='PREJUVENIL' AND jornada ='TARDE'";
    $cons = mysqli_query($conexion, $tomarreg);
    $row=mysqli_fetch_array($cons);
    $PREJUVENIL_T = $row['NUM'];        
        
    $tomarreg = "SELECT COUNT(*) AS NUM FROM usuarios WHERE agencia='GARZON' AND jornada ='MANANA'";
    $cons = mysqli_query($conexion, $tomarreg);
    $row=mysqli_fetch_array($cons);
    $TOTAL_M = $row['NUM']; 
        
    $tomarreg = "SELECT COUNT(*) AS NUM FROM usuarios WHERE jornada ='TARDE'";
    $cons = mysqli_query($conexion, $tomarreg);
    $row=mysqli_fetch_array($cons);
    $TOTAL_T = $row['NUM'];         
        
    $tomarreg = "SELECT COUNT(*) AS NUM FROM usuarios ";
    $cons = mysqli_query($conexion, $tomarreg);
    $row=mysqli_fetch_array($cons);
    $N1 = $row['NUM'];
        
	$consulta="SELECT * FROM usuarios ";
	$ejecuta=mysqli_query($conexion,$consulta);
    
    
?>
    
<?php        
	$consulta="SELECT * FROM usuarios WHERE agencia='GARZON' AND modalidad='FUTBOL' ORDER BY anio DESC ";
	$ejecuta=mysqli_query($conexion,$consulta);
    echo "<a href=panel.php>Menú principal</a>";
    
?>
        <div >
    
        <table  class="form-register">
            
                <thead>
                    <th colspan="20"><h2> CATEGORIAS DE FUTBOL EN GARZON</h2> </th>
                <tr >
                    <th>N°</th>                    
                    <th>CATEGORIA</th>  
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>ID</th>
                    <th>JORNADA</th>

                    
                    
                </tr>
                </thead>
           <?php 
            "<form action='modificar.php method='post' class='form-register'>"
           ?>
        <tr>
            <?php
                $num=1;
                    while ($row=mysqli_fetch_array($ejecuta)){

                        echo "<tr><form action=actualizar_jornada.php method=post>";
                        echo "<td>".$num."</td>";

                        echo "<td><input type=text name=categoria       value='".$row['categoria']."'</td>";
                        echo "<td><input type=text name=nombre       value='".$row['nombre']."'</td>";
                        echo "<td><input type=text name=apellido     value='".$row['apellido']."'</td>";
                            
                        echo "<td><input type=text name=ide          value='".$row['ide']."'</td>";
                         echo "<td><input type=text name=ide          value='".$row['jornada']."'</td>";
                      
                       
                       
                         echo "<td><input type=hidden name=id         value='".$row['id']."'</td>";   
                        echo "</form></tr>";
                        $num++;
                    }

            



                ?>
            </table>
        </div>
        
        <table class=form-register >
                <thead>
                    <th colspan="20"><h2> CATEGORIAS DE FUTBOL EN GARZON</h2> </th>
                        <tr >
                           <!-- <th>N°</th>                    -->
                            <th style="text-align:center;">CATEGORIA</th>  
                            <th style="text-align:center;">J. MAÑANA</th>
                            <th style="text-align:center;">J. TARDE</th>
                        </tr>
                </thead>
                        <tr >
                            <!--<th>1</th>                    -->
                            <th style="text-align:center;">PRESAMI</th>  
                            <th style="text-align:center;"><?php echo $PRESAMI_M?></th>
                            <th style="text-align:center;"><?php echo $PRESAMI_T?></th>
                        </tr>
                        <tr >
                            <!--<th>2</th>                    -->
                            <th style="text-align:center;">SAMI</th>  
                            <th style="text-align:center;"><?php echo $SAMI_M?></th>
                            <th style="text-align:center;"><?php echo $SAMI_T?></th>
                        </tr>
                        <tr >
                            <!--<th>3</th>                    -->
                            <th style="text-align:center;">GORRION</th>  
                            <th style="text-align:center;"><?php echo $GORRION_M?></th>    
                            <th style="text-align:center;"><?php echo $GORRION_T?></th>
                        </tr>
                        <tr >
                            <!--<th>4</th>                    -->
                            <th style="text-align:center;">PREINFANITL</th>  
                            <th style="text-align:center;"><?php echo $PREINFANTIL_M?></th>    
                            <th style="text-align:center;"><?php echo $PREINFANTIL_T?></th>
                        </tr>
                        <tr >
                            <!--<th>5</th>                    -->
                            <th style="text-align:center;">INFANITL</th>  
                            <th style="text-align:center;"><?php echo $INFANTIL_M?></th>
                            <th style="text-align:center;"><?php echo $INFANTIL_T?></th>
                        </tr>
                        <tr >
                            <!--<th>6</th>                    -->
                            <th style="text-align:center;">PREJUVENIL</th>  
                            <th style="text-align:center;"><?php echo $PREJUVENIL_M?></th>
                            <th style="text-align:center;"><?php echo $PREJUVENIL_T?></th>
                        </tr>          
            
                        <tr>
                            <th style="text-align:center;">
                            TOTAL
                            </th>
                            <th style="text-align:center;"><?php echo $TOTAL_M ?></th>
                            <th style="text-align:center;"><?php echo $TOTAL_T ?></th>
                        </tr>
                    </table>
    </body>
</html>