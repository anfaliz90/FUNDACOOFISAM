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

$consulta = mysqli_query($conexion,"SELECT usuario FROM instructores WHERE usuario= '$username' ");
$consulta1= mysqli_num_rows($consulta);
echo '<br>';
echo $consulta1;
if(!$consulta1)
{
    echo 'Usuario no encontrado';
    header ("Location:login_instructores.php"); 
}
else
{

    $consulta = mysqli_query($conexion,"SELECT password FROM instructores WHERE usuario= '$username' AND password='$password'");
    $consulta2= mysqli_num_rows($consulta);
    echo '<br>';
    echo $consulta2;
    
    if(!$consulta2)
    {
        echo 'Contraseña incorrecta';
        header ("Location:login_instructores.php"); 
    }
    else
    {
        $activo ="activo";
        $consulta = mysqli_query($conexion,"SELECT usuario FROM instructores WHERE usuario= '$username' AND activo='1'");
        $consulta3= mysqli_num_rows($consulta);
        echo '<br>';
        echo $consulta3;
        
        if(!$consulta3)
        {
            echo 'Error al iniciar sesion';
            header ("Location:login_instructores.php"); 
        }
        else
        {
          
            session_start();
            $_SESSION['login']='logueado';
            $_SESSION['usuario_actual']=$username;
            $_SESSION['agencia'] =$agencia;
            $_SESSION['modalidad'] =$modalidad;
            $_SESSION['categoria'] = $categoria;
            $_SESSION['jornada'] =$jornada;
            header ("Location:panel_instructores.php"); 
          
        }
        
    }
} 



?>  