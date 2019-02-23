    <?php
       session_start();
        error_reporting(0);
    include('conn.php')    ;
    include("seguridad.php"); 
    if($_SESSION['login'] != 'logueado')
    { 
      //Si no hay sesión activa, lo direccionamos al index.php (inicio de sesión) 
      header("Location: login.php"); 
      exit(); 
    } 


    ?>


    <!DOCTYPE html>
    <html lang="es">
        <head>
            <meta charset  = "utf-8" >
            <title>
                USUARIOS
            </title>
            <link rel="stylesheet" type="text/css" href="registro.css">
        </head>
        <a href="logout.php">Cerrar sesión</a>
        <body>
            <div class=form-register>
                <h1 class="form-title">Panel de Usuario</h1>
                <ol>
                <li><?php echo"<a href=consultar1.php>CONSULTAR POR DOCUMENTO DE IDENTIDAD</a> </li>";?>
                <li><?php echo "<a href=totalregistros.php>TODOS LOS REGISTROS - MODIFICAR</a> </li>"; ?>
                <li><?php echo "<a href=eliminar.php>TODOS LOS REGISTROS - ELIMINAR</a> </li>"; ?>
                <li><?php echo "<a href=verificarciclo.php>VERIFICAR PAGO DE CICLO</a> </li>"; ?>
                <li><?php echo "<a href=exportar.php>EXPORTAR LISTADO DE REGISTRO</a> </li>";?>
                <li><?php echo "<a href=reportes.php>REPORTES</a> </li>";?>
                <li><?php echo "<a href=registro_extraof.php>REGISTRO EXTRAOFICIAL</a> </li>";?>
                    

                    <?php    $tomarreg = "SELECT COUNT(*) AS NUM FROM usuarios";
                    $cons = mysqli_query($conexion, $tomarreg);
                    $row=mysqli_fetch_array($cons);
                    $N1 = $row['NUM']-1;
                    ?>
                <p> TOTAL DE REGISTROS: <?php echo ' '.$N1 ?></p>
                </ol>
            </div>
            <div class='form-register'>

            <a href="actualizar_futbol_garzon.php">ACTUALIZAR JORNADAS DE FUTBOL EN GARZON</a><br>
            <a href="consultar_futbol_garzon.php">LISTADO FUTBOL EN GARZON POR JORNADA</a>
            </div>
        </body>
    </html>
