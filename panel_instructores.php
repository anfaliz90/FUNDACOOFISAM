    <?php
       session_start();
        error_reporting(0);
    include('conn.php')    ;
    include("seguridad.php"); 
    if($_SESSION['login'] != 'logueado')
    { 
      //Si no hay sesión activa, lo direccionamos al index.php (inicio de sesión) 
      header("Location: login_instructores.php"); 
      exit(); 
    } 
    echo "&nbsp";
    echo $usuario = $_SESSION['usuario_actual'];
    echo "&nbsp; <a href='logout.php'>Cerrar sesión</a>";
    $cons_datos ="SELECT * FROM instructores WHERE usuario ='$usuario'";
    $ejec_cons = mysqli_query($conexion,$cons_datos);
    if(!$ejec_cons)
    {
        echo '';
    }
    else 
    {
        echo '';
    }
     while($consulta = mysqli_fetch_array($ejec_cons))
     {
        $agencia =$consulta['agencia'];
        $categoria =$consulta['categoria'];
        $modalidad =$consulta['modalidad'];

         echo "
  <table class=\"tabla\">
                <tr>
                    <td colspan=\"3\" > <p align=\"center\" class=\"tit_tabla\">Datos del instructor</p> </td>
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
                    <td>Agencia </td>
                    <td>".$consulta['agencia']." </td>
                   
                </tr>
                <tr>
                    <td>Modalidad</td>
                    <td> ".$consulta['modalidad']." </td>
                    
                </tr>
                <tr>
                    <td>Categoría a cargo</td>
                    <td> ".$consulta['categoria']." </td>
                    
                </tr>                     
            
                <tr>
                    <td>Lugar de Entrenamiento</td>
                    <td> ".$consulta['lug_en']." </td>
                    
                </tr>     



                </table> ";        
         
}
    

?>
    <!DOCTYPE html>
    <html lang="es">
        <head>
            <meta charset  = "utf-8" >
            <title>
                INSTRUCTORES
            </title>
            <link rel="stylesheet" type="text/css" href="registro.css">
        </head>
        
        <body>
            <div class=form-register>
                <h1 class="form-title">Panel de Instructores</h1>
                <ol>
                <li><?php echo"<a href=boletin/listado_estudiantes.php>LISTADO DE ESTUDIANTES</a> </li>";?>
                <li><?php echo "<a href=../horario.php>ADJUNTAR HORARIO</a> </li>"; ?>
                <li><?php echo "<a href=exportar_ins.php>EXPORTAR LISTADO DE ESTUDIANTES</a> 
                </li>";?>
                <li><?php echo "<a href=../inventario_ins.php>INVENTARIO INSTRUCTORES</a> 
                </li>";?>
                    

                    <?php    $tomarreg = "SELECT COUNT(*) AS NUM FROM usuarios WHERE modalidad='$modalidad' AND agencia='$agencia' AND categoria='$categoria'";
                    $cons = mysqli_query($conexion, $tomarreg);
                    $row=mysqli_fetch_array($cons);
                    $N1 = $row['NUM'];
                    ?>
                <p> TOTAL DE REGISTROS: <?php echo ' '.$N1 ?></p>
                </ol>
            </div>
            <div class='form-register'>

          
            </div>
        </body>
    </html>
