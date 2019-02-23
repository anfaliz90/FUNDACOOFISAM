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


 
echo $username = $_POST['user']; 
echo '<br>';
echo $password = $_POST['password'] ;
echo '<br>';

$consulta = mysqli_query($conexion,"SELECT Email FROM user WHERE Email= '$username' ");
$consulta1= mysqli_num_rows($consulta);
echo '<br>';
echo $consulta1;
if(!$consulta1)
{
    echo 'Usuario no encontrado';
}
else
{

    $consulta = mysqli_query($conexion,"SELECT Password FROM user WHERE Email= '$username' AND Password='$password'");
    $consulta2= mysqli_num_rows($consulta);
    echo '<br>';
    echo $consulta2;
    
    if(!$consulta2)
    {
        echo 'Contraseña incorrecta';
    }
    else
    {
        $activo ="activo";
        $consulta = mysqli_query($conexion,"SELECT Name FROM user WHERE Email= '$username' AND Estado='activo'");
        $consulta3= mysqli_num_rows($consulta);
        echo '<br>';
        echo $consulta3;
        
        if(!$consulta3)
        {
            echo 'Error al iniciar sesion';
        }
        else
        {
            $consulta = mysqli_query($conexion,"SELECT Name FROM user WHERE rol='administrador' AND Email='$username'");
            $consulta4= mysqli_num_rows($consulta);
            //INICIAR SESION
            if(!$consulta4)
            {
            session_start();
            $_SESSION['login']='logueado';
            echo $_SESSION['usuario_actual']=$username;
            echo 'usuario normal';
            header ("Location: panel.php"); 
            }
            else
            {
            session_start();
            $_SESSION['login']='logueado';
            echo $_SESSION['usuario_actual']=$username;
            header ("Location: panel_admin.php"); 
            echo 'usuario admin';
            }
        }
        
    }
} 



?>  