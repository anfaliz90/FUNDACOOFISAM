<?php
include('conn.php');
include('datos_graf.php');
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
    <body>
        
        <br>
        <form action="reportes2.php" method="post" class="form-register">
            <h2 class="form-title"> PANEL DE REPORTES </h2>
            <label for="seleccion">SELECCIONE UN REPORTE</label>
            <select name="seleccion">
                <option value="">Selecciona una opcion</option>
                <option value="rep_age">Estudiantes por agencia  </option>
                <option value="rep_mod">Estudiantes por modalidad  </option>
                <option value="rep_fut">Futbol: Estudiantes por categoria - total  </option>
                <option value="rep_fua">Futbol: Estudiante por categoria  y agencia   </option>
                <option value="rep_muc">Musica: Estudiantes por categoria</option>
                <option value="ciclo1">INSCRITOS vs. CICLO 1</option>
                <option value="ciclo2">INSCRITOS vs. CICLO 2</option>
                <option value="ciclo3">INSCRITOS vs. CICLO 3</option>

            </select>
            <select name="agencia">
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
            <select name="modalidad">
                <option value="FUTBOL">FUTBOL</option>
                <option value="MUSICA">MUSICA</option>
                <option value="DANZA">DANZA</option>
                <option value="BALONCESTO">BALONCESTO</option>
            </select>
            <select name="cat_fut">
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