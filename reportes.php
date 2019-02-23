<?php
session_start();
include('conn.php');
include('seguridad.php');
include('datos_graf.php');
if($_SESSION['login'] != 'logueado')
{ 
  //Si no hay sesión activa, lo direccionamos al index.php (inicio de sesión) 
  header("Location: login.php"); 
  exit(); 
} 
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
            PANEL REPORTES
        </title>
        <link rel="stylesheet" type="text/css" href="registro.css">
    </head>
    <script type="application/javascript">
    function seleccion1()
        {
            
        if(document.getElementById("seleccion").value=="rep_fua")
            {
                document.getElementById("agencia").style.visibility="visible";
            }            

        }
    
    
    </script>
    <body>
        
        <br>
        <form action="reportes2.php" method="post" class="form-register">
            <h2 class="form-title"> PANEL DE REPORTES </h2>
            <label for="seleccion">SELECCIONE UN REPORTE</label>
            <select name="seleccion" id="seleccion" onChange="seleccion1()">
                <option value="">Selecciona una opcion</option>
                <option value="rep_age">Estudiantes por agencia  </option>
                <option value="rep_mod">Estudiantes por modalidad  </option>
                <option value="rep_fut">Futbol: Estudiantes por categoria - total  </option>
             <!--   <option value="rep_fua">Futbol: Estudiante por categoria  y agencia   </option> -->
                <option value="rep_muc">Musica: Estudiantes por categoria</option>
            <!--    <option value="rep_dam">REPORTE DIAGRAMA DE BARRAS MATRICULAS POR AGENCIA Y MODALIDAD</option>-->
                <option value="rep_dmp">REPORTE DIAGRAMA DE BARRAS POR MODALIDAD Y PAGO</option>
                <option value="ciclo1">INSCRITOS vs. CICLO 1</option>
                <option value="ciclo2">INSCRITOS vs. CICLO 2</option>
                <option value="ciclo3">INSCRITOS vs. CICLO 3</option>

            </select>
            <select name="agencia" id="agencia" style="visibility:hidden;" >
                <option value="">AGENCIA</option>
                <option value="GARZON">GARZON</option>
                <option value="PITAL">EL PITAL</option>
                <option value="AGRADO">AGRADO</option>
                <option value="ARGENTINA">LA ARGENTINA</option>
                <option value="RIVERA">RIVERA</option>
                <option value="TARQUI">TARQUI</option>
                <option value="PLATA">LA PLATA</option>
                <option value="PITALITO">PITALITO</option>
                <option value="GUADALUPE">GUADALUPE</option>
                <option value="SUAZA">SUAZA</option>
            </select>
            <select name="modalidad"id="modalidad" style="visibility:hidden;">
                <option value="">FUTBOL</option>
                <option value="MUSICA">MUSICA</option>
                <option value="DANZA">DANZA</option>
                <option value="BALONCESTO">BALONCESTO</option> 
            </select>
            <select name="cat_fut"  id="cat_fut" style="visibility:hidden;">
                <option value="">PREJUVENIL</option>
                <option value="">INFANTIL</option>
                <option value="">PREINFANTIL</option>
                <option value="">GORRION</option>
                <option value="">SAMI</option>
                <option value="">PRESAMI</option>
            </select>
            <input type="submit" value="Continuar"  class="boton" >
        
        
        </form>
        
    </body>
</html>