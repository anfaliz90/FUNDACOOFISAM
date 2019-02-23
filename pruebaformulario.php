<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset  = "utf-8" >
        <title>
            Fundacoofisam - Registro 
        </title>
        <link rel="stylesheet" href="registro.css">
<script type="text/javascript" language="javascript">

function agregarOpciones(form)
{
var selec = form.agencia.options;
var combo = form.modalidad.options;
combo.length = null;
document.getElementById("2001").style.display="block";
                document.getElementById("2002").style.display="block";
                document.getElementById("2003").style.display="block";
                document.getElementById("2004").style.display="block";
                document.getElementById("2005").style.display="block";
                document.getElementById("2006").style.display="block";
                document.getElementById("2007").style.display="block";
                document.getElementById("2008").style.display="block";
                document.getElementById("2009").style.display="block";
                document.getElementById("2010").style.display="block";
                document.getElementById("2011").style.display="block";
                document.getElementById("2012").style.display="block";
                document.getElementById("2013").style.display="block";
    if (selec[0].selected == true)
    {
    var seleccionar = new Option("AGENCIA","","","");
    combo[0] = seleccionar;
    }

    if (selec[1].selected == true)
    {
       
     //document.getElementById("cupos").style.display="block";
    var popular1 = new Option("MODALIDAD","","","");
    var popular2 = new Option("FUTBOL","FUTBOL","","");
    var popular3 = new Option("MUSICA","MUSICA","","");
    var popular4 = new Option("DANZA","DANZA","","");
    
    combo[0] = popular1;
    combo[1] = popular2;
    combo[2] = popular3;
    combo[3] = popular4;
    }

    if (selec[2].selected == true)
    {
    
    document.getElementById("cupos").style.display="none";
    var popular1 = new Option("MODALIDAD","","","");
    var popular2 = new Option("FUTBOL","FUTBOL","","");
    combo[0] = popular1;
    combo[1] = popular2;
   
    }
    
    if (selec[3].selected == true)
    {
    document.getElementById("cupos").style.display="none";
    var popular1 = new Option("MODALIDAD","","","");
    var popular2 = new Option("FUTBOL","FUTBOL","","");
    combo[0] = popular1;
    combo[1] = popular2;
   
    }
    if (selec[4].selected == true)
    {
    document.getElementById("cupos").style.display="none";
    var popular1 = new Option("MODALIDAD","","","");    
    var popular2 = new Option("FUTBOL","FUTBOL","","");
    var popular3 = new Option("BALONCESTO","BALONCESTO","","");

    combo[0] = popular1;
    combo[1] = popular2;
    combo[2] = popular3;
    
    
    }
    if (selec[5].selected == true)
    {
    document.getElementById("cupos").style.display="none";
    var popular1 = new Option("MODALIDAD","","","");    
    var popular2 = new Option("FUTBOL","FUTBOL","","");
    combo[0] = popular1;
    combo[1] = popular2;
        
   
    }
    if (selec[6].selected == true)
    {
    document.getElementById("cupos").style.display="none";
    var popular1 = new Option("MODALIDAD","","","");    
    var popular2 = new Option("FUTBOL","FUTBOL","","");
    combo[0] = popular1;
    combo[1] = popular2;
   
    }
    if (selec[7].selected == true)
    {
    document.getElementById("cupos").style.display="none";
    var popular1 = new Option("MODALIDAD","","","");    
    var popular2 = new Option("FUTBOL","FUTBOL","","");
    combo[0] = popular1;
    combo[1] = popular2;
   
    }
    if (selec[8].selected == true)
    {
    document.getElementById("cupos").style.display="none";
    var popular1 = new Option("MODALIDAD","","","");    
    var popular2 = new Option("FUTBOL","FUTBOL","","");
    combo[0] = popular1;
    combo[1] = popular2;
   
    }
    if (selec[9].selected == true)
    {
    document.getElementById("cupos").style.display="none";
    var popular1 = new Option("MODALIDAD","","","");    
    var popular2 = new Option("FUTBOL","FUTBOL","","");
    combo[0] = popular1;
    combo[1] = popular2;
   
    }
    if (selec[10].selected == true)
    {
    document.getElementById("cupos").style.display="none";
    var popular1 = new Option("MODALIDAD","","","");    
    var popular2 = new Option("FUTBOL","FUTBOL","","");
    combo[0] = popular1;
    combo[1] = popular2;
   
    }    
}
    </script>
<script  type="application/javascript" >
    function categoriafut()
    {
        
        if(document.getElementById("modalidad").value=="FUTBOL" && document.getElementById("agencia").value=="GARZON")
            {
             document.getElementById("cupos").style.display="block";   
             document.getElementById("cupos1").style.display="none";
            }
        else if(document.getElementById("modalidad").value=="MUSICA" && document.getElementById("agencia").value=="GARZON"))
            {
            document.getElementById("cupos1").style.display="block";
            document.getElementById("cupos").style.display="none";
            }
        else
            {
                document.getElementById("cupos").style.display="none";
                document.getElementById("cupos1").style.display="none";
            }
    }
        
        
</script>
        
<script type="application/javascript">
function estimulacion()
    {
        if(document.getElementById("categoria").value=="ESTIMULACION_NUEVOS"  )
            {
                document.getElementById("2001").style.display="none";
                document.getElementById("2002").style.display="none";
                document.getElementById("2003").style.display="none";
                document.getElementById("2004").style.display="none";
                document.getElementById("2005").style.display="none";
                document.getElementById("2006").style.display="none";
                document.getElementById("2007").style.display="none";
                document.getElementById("2008").style.display="none";
                document.getElementById("2009").style.display="none";
                document.getElementById("2010").style.display="none";
                document.getElementById("2011").style.display="none";
                document.getElementById("estimulacion").style.display="block";
                document.getElementById("estimulacion1").style.display="none";
                document.getElementById("guitec").style.display="none";
            }
        else if(document.getElementById("categoria").value=="ESTIMULACION_ANTIGUOS")
            {
                document.getElementById("2001").style.display="none";
                document.getElementById("2002").style.display="none";
                document.getElementById("2003").style.display="none";
                document.getElementById("2004").style.display="none";
                document.getElementById("2005").style.display="none";
                document.getElementById("2006").style.display="none";
                document.getElementById("2007").style.display="none";
                document.getElementById("2008").style.display="none";
                document.getElementById("2009").style.display="none";
                document.getElementById("2010").style.display="none";
                document.getElementById("2011").style.display="none";
                
                document.getElementById("estimulacion1").style.display="block";
                document.getElementById("estimulacion").style.display="none";
                document.getElementById("guitarra1").style.display="none";
                document.getElementById("guitarra2").style.display="none";
                document.getElementById("guitarra3").style.display="none";
                document.getElementById("teclado1").style.display="none";
                document.getElementById("teclado2").style.display="none";
                document.getElementById("teclado3").style.display="none";                
                
            }
        else if(document.getElementById("categoria").value=="GUITARRA_NUEVO_MANANA")
            {
                document.getElementById("2001").style.display="block";
                document.getElementById("2002").style.display="block";
                document.getElementById("2003").style.display="block";
                document.getElementById("2004").style.display="block";
                document.getElementById("2005").style.display="block";
                document.getElementById("2006").style.display="block";
                document.getElementById("2007").style.display="block";
                document.getElementById("2008").style.display="block";
                document.getElementById("2009").style.display="block";
                document.getElementById("2010").style.display="block";
                document.getElementById("2011").style.display="block";

                document.getElementById("estimulacion1").style.display="none";
                document.getElementById("estimulacion").style.display="none";
                document.getElementById("guitarra1").style.display="block";
                document.getElementById("guitarra2").style.display="none";
                document.getElementById("guitarra3").style.display="none";
                document.getElementById("teclado1").style.display="none";
                document.getElementById("teclado2").style.display="none";
                document.getElementById("teclado3").style.display="none";  
            }
        else if(document.getElementById("categoria").value=="GUITARRA_NUEVO_TARDE")
            {
                document.getElementById("2001").style.display="block";
                document.getElementById("2002").style.display="block";
                document.getElementById("2003").style.display="block";
                document.getElementById("2004").style.display="block";
                document.getElementById("2005").style.display="block";
                document.getElementById("2006").style.display="block";
                document.getElementById("2007").style.display="block";
                document.getElementById("2008").style.display="block";
                document.getElementById("2009").style.display="block";
                document.getElementById("2010").style.display="block";
                document.getElementById("2011").style.display="block";

                document.getElementById("estimulacion1").style.display="none";
                document.getElementById("estimulacion").style.display="none";
                document.getElementById("guitarra1").style.display="none";
                document.getElementById("guitarra2").style.display="block";
                document.getElementById("guitarra3").style.display="none";
                document.getElementById("teclado1").style.display="none";
                document.getElementById("teclado2").style.display="none";
                document.getElementById("teclado3").style.display="none";  
            }   
        else if(document.getElementById("categoria").value=="GUITARRA_ANTIGUO")
            {
                document.getElementById("2001").style.display="block";
                document.getElementById("2002").style.display="block";
                document.getElementById("2003").style.display="block";
                document.getElementById("2004").style.display="block";
                document.getElementById("2005").style.display="block";
                document.getElementById("2006").style.display="block";
                document.getElementById("2007").style.display="block";
                document.getElementById("2008").style.display="block";
                document.getElementById("2009").style.display="block";
                document.getElementById("2010").style.display="block";
                document.getElementById("2011").style.display="block";

                document.getElementById("estimulacion1").style.display="none";
                document.getElementById("estimulacion").style.display="none";
                document.getElementById("guitarra1").style.display="none";
                document.getElementById("guitarra2").style.display="none";
                document.getElementById("guitarra3").style.display="block";
                document.getElementById("teclado1").style.display="none";
                document.getElementById("teclado2").style.display="none";
                document.getElementById("teclado3").style.display="none";  
            }        
        else if(document.getElementById("categoria").value=="TECLADO_NUEVO_MANANA")
            {
                document.getElementById("2001").style.display="block";
                document.getElementById("2002").style.display="block";
                document.getElementById("2003").style.display="block";
                document.getElementById("2004").style.display="block";
                document.getElementById("2005").style.display="block";
                document.getElementById("2006").style.display="block";
                document.getElementById("2007").style.display="block";
                document.getElementById("2008").style.display="block";
                document.getElementById("2009").style.display="block";
                document.getElementById("2010").style.display="block";
                document.getElementById("2011").style.display="block";

                document.getElementById("estimulacion1").style.display="none";
                document.getElementById("estimulacion").style.display="none";
                document.getElementById("guitarra1").style.display="none";
                document.getElementById("guitarra2").style.display="none";
                document.getElementById("guitarra3").style.display="none";
                document.getElementById("teclado1").style.display="block";
                document.getElementById("teclado2").style.display="none";
                document.getElementById("teclado3").style.display="none";  
            }       
        else if(document.getElementById("categoria").value=="TECLADO_NUEVO_TARDE")
            {
                document.getElementById("2001").style.display="block";
                document.getElementById("2002").style.display="block";
                document.getElementById("2003").style.display="block";
                document.getElementById("2004").style.display="block";
                document.getElementById("2005").style.display="block";
                document.getElementById("2006").style.display="block";
                document.getElementById("2007").style.display="block";
                document.getElementById("2008").style.display="block";
                document.getElementById("2009").style.display="block";
                document.getElementById("2010").style.display="block";
                document.getElementById("2011").style.display="block";

                document.getElementById("estimulacion1").style.display="none";
                document.getElementById("estimulacion").style.display="none";
                document.getElementById("guitarra1").style.display="none";
                document.getElementById("guitarra2").style.display="none";
                document.getElementById("guitarra3").style.display="none";
                document.getElementById("teclado1").style.display="none";
                document.getElementById("teclado2").style.display="block";
                document.getElementById("teclado3").style.display="none";  
            }   
        else if(document.getElementById("categoria").value=="TECLADO_ANTIGUO")
            {
                document.getElementById("2001").style.display="block";
                document.getElementById("2002").style.display="block";
                document.getElementById("2003").style.display="block";
                document.getElementById("2004").style.display="block";
                document.getElementById("2005").style.display="block";
                document.getElementById("2006").style.display="block";
                document.getElementById("2007").style.display="block";
                document.getElementById("2008").style.display="block";
                document.getElementById("2009").style.display="block";
                document.getElementById("2010").style.display="block";
                document.getElementById("2011").style.display="block";

                document.getElementById("estimulacion1").style.display="none";
                document.getElementById("estimulacion").style.display="none";
                document.getElementById("guitarra1").style.display="none";
                document.getElementById("guitarra2").style.display="none";
                document.getElementById("guitarra3").style.display="none";
                document.getElementById("teclado1").style.display="none";
                document.getElementById("teclado2").style.display="none";
                document.getElementById("teclado3").style.display="block";  
            }        
        else{
                document.getElementById("2001").style.display="block";
                document.getElementById("2002").style.display="block";
                document.getElementById("2003").style.display="block";
                document.getElementById("2004").style.display="block";
                document.getElementById("2005").style.display="block";
                document.getElementById("2006").style.display="block";
                document.getElementById("2007").style.display="block";
                document.getElementById("2008").style.display="block";
                document.getElementById("2009").style.display="block";
                document.getElementById("2010").style.display="block";
                document.getElementById("2011").style.display="block";
                document.getElementById("2012").style.display="block";
                document.getElementById("2013").style.display="block";
                document.getElementById("2014").style.display="none";

                document.getElementById("estimulacion1").style.display="none";
                document.getElementById("estimulacion").style.display="none";
                document.getElementById("guitarra1").style.display="none";
                document.getElementById("guitarra2").style.display="none";
                document.getElementById("guitarra3").style.display="none";
                document.getElementById("teclado1").style.display="none";
                document.getElementById("teclado2").style.display="none";
                document.getElementById("teclado3").style.display="none";  
        }
    }
        </script>
<script type="text/javascript" language="javascript">
function agregarOpciones1(form)
{
   // let opcion = document.getElementById("agencia").value;
   //    if (opcion=="GARZON") {
      
var selec = form.modalidad.options;
var combo = form.categoria.options;
combo.length = null;

    if (selec[0].selected == true)
    {
    document.getElementById("2001").style.display="block";
                document.getElementById("2002").style.display="block";
                document.getElementById("2003").style.display="block";
                document.getElementById("2004").style.display="block";
                document.getElementById("2005").style.display="block";
                document.getElementById("2006").style.display="block";
                document.getElementById("2007").style.display="block";
                document.getElementById("2008").style.display="block";
                document.getElementById("2009").style.display="block";
                document.getElementById("2010").style.display="block";
                document.getElementById("2011").style.display="block";
                document.getElementById("2012").style.display="block";
                document.getElementById("2013").style.display="block";
    document.getElementById("categoria1").style.display="none";             
    document.getElementById("cat").style.display="none";
    var seleccionar = new Option("","","","");
    combo[0] = seleccionar;
    }
    
        if (selec[3].selected == true)
    {
    document.getElementById("2001").style.display="block";
                document.getElementById("2002").style.display="block";
                document.getElementById("2003").style.display="block";
                document.getElementById("2004").style.display="block";
                document.getElementById("2005").style.display="block";
                document.getElementById("2006").style.display="block";
                document.getElementById("2007").style.display="block";
                document.getElementById("2008").style.display="block";
                document.getElementById("2009").style.display="block";
                document.getElementById("2010").style.display="block";
                document.getElementById("2011").style.display="block";
                document.getElementById("2012").style.display="block";
                document.getElementById("2013").style.display="block";
    document.getElementById("cupos").style.display="none";             document.getElementById("cupos1").style.display="none";
    document.getElementById("categoria1").style.display="none";             
    document.getElementById("cat").style.display="none";
    var seleccionar = new Option("","","","");
    combo[0] = seleccionar;
    }
    
        if (selec[1].selected == true)
    {
    document.getElementById("2001").style.display="block";
                document.getElementById("2002").style.display="block";
                document.getElementById("2003").style.display="block";
                document.getElementById("2004").style.display="block";
                document.getElementById("2005").style.display="block";
                document.getElementById("2006").style.display="block";
                document.getElementById("2007").style.display="block";
                document.getElementById("2008").style.display="block";
                document.getElementById("2009").style.display="block";
                document.getElementById("2010").style.display="none";
                document.getElementById("2011").style.display="none";
                document.getElementById("2012").style.display="block";
                document.getElementById("2013").style.display="block";
    document.getElementById("2014").style.display="none";             
    document.getElementById("cupos").style.display="inline";             document.getElementById("cupos1").style.display="none";
    document.getElementById("categoria1").style.display="inline";             
    document.getElementById("cat").style.display="none";
    var seleccionar = new Option("","","","");
    combo[0] = seleccionar;
    }



    if (selec[2].selected == true)
    {
    document.getElementById("2014").style.display="block";
    document.getElementById("categoria1").style.display="none";             
    document.getElementById("cupos").style.display="none";             document.getElementById("cupos1").style.display="inline";
    document.getElementById("cat").style.display="block";
    var popular1 = new Option("CATEGORIA"," ","","","");
    var popular2 = new Option("ESTIMULACION NUEVOS   (5 y 6 AÑOS)","ESTIMULACION_NUEVOS","","");
    var popular3 = new Option("ESTIMULACION ANTIGUOS (5 y 6 AÑOS)","ESTIMULACION_ANTIGUOS","","");
    var popular4 = new Option("GUITARRA (GRUPO NUEVOS - MAÑANA - DESDE 7 AÑOS)","GUITARRA_NUEVO_MANANA","","");
    var popular5 = new Option("GUITARRA (GRUPO NUEVOS - TARDE  - DESDE 7 AÑOS)","GUITARRA_NUEVO_TARDE","","");
    var popular6 = new Option("GUITARRA (GRUPO ANTIGUOS - DESDE 7 AÑOS)","GUITARRA_ANTIGUO","","");
    var popular7 = new Option("TECLADO (GRUPO NUEVOS - MAÑANA - DESDE 7 AÑOS)","TECLADO_NUEVO_MANANA","","");
    var popular8 = new Option("TECLADO (GRUPO NUEVOS - TARDE  - DESDE 7 AÑOS)","TECLADO_NUEVO_TARDE","","");
    var popular9 = new Option("TECLADO (GRUPO ANTIGUOS - DESDE 7 AÑOS)","TECLADO_ANTIGUO","","");        
    
    combo[0] = popular1;
    combo[1] = popular2;
    combo[2] = popular3;
    combo[3] = popular4;
    combo[4] = popular5;
    combo[5] = popular6;
    combo[6] = popular7;
    combo[7] = popular8;
    combo[8] = popular9;
    
    
    } 

}
</script>
<script language="JavaScript">
function CambiarFormulario(){
	switch(document.forms[0].anio.selectedIndex){
		case 0: 
			document.forms[0].categoria1.value="";
			break;
		case 1: 
			document.forms[0].categoria1.value="PREJUVENIL";
			break;
		case 2: 
			document.forms[0].categoria1.value="PREJUVENIL";
            break;
		case 3: 
			document.forms[0].categoria1.value="PREJUVENIL";
            break;
		case 4: 
			document.forms[0].categoria1.value="INFANTIL";
            break;
		case 5: 
			document.forms[0].categoria1.value="INFANTIL";
            break;
		case 6: 
			document.forms[0].categoria1.value="PREINFANTIL";
            break;
		case 7: 
			document.forms[0].categoria1.value="PREINFANTIL";
            break;
		case 8: 
			document.forms[0].categoria1.value="GORRION";
            break;
		case 9: 
			document.forms[0].categoria1.value="GORRION";
            break;
		case 10: 
			document.forms[0].categoria1.value="SAMI";
            break;
		case 11: 
			document.forms[0].categoria1.value="SAMI";
            break;
		case 12: 
			document.forms[0].categoria1.value="PRESAMI";
            break;
        case 13: 
			document.forms[0].categoria1.value="PRESAMI";
            break;
		
          
	}
}

</script>
    </head>
    <body>
        
         
      <!--  <img src="img/logo.png" class="imagen"> -->
        <div class="banner"></div>
        <h1 class="form-title">Formulario de Inscripción</h1>
        <form name="globe" action="pruebaregistro.php" method="post" class="form-register" enctype="multipart/form-data" onLoad="CambiarFormulario();">
            
            
            <h2>Datos Generales</h2>
       
        
        
        
            <div class="contenedor">
                <label for="agencia" class="mitad" >SELECCIONE AGENCIA</label>            
<select name="agencia" id="agencia" onChange="agregarOpciones(this.form)"  class="mitad" required>

<option value="">AGENCIA</option>

<option value="GARZON">GARZON</option>

<option value="GUADALUPE">GUADALUPE</option>

<option value="AGRADO">EL AGRADO</option>

<option value="PITAL">EL PITAL</option>

<option value="PITALITO">PITALITO</option>

<option value="TARQUI">TARQUI</option>

<option value="SUAZA">SUAZA</option>

<option value="ARGENTINA">LA ARGENTINA</option>
    
<option value="RIVERA">RIVERA</option>
    
<option value="PLATA">LA PLATA</option>

</select>


                
<label for="modalidad" class="mitad"> MODALIDAD </label>
<select name="modalidad" id="modalidad" onChange="agregarOpciones1(this.form)"  required class="mitad">


<option value=""> MODALIDAD </option>

</select>
<div id="cat" style="display:none;">
<select name="categoria" id="categoria"  OnChange="estimulacion()" class="total">
    
<option value="" > CATEGORIA </option>

</select>    
</div>
<br>       

<div class="ESTIMULACIÓN" id="estimulacion" style="display:none;" >    
    <h2>HORARIOS DISPONIBLES PARA ESTIMULACIÓN MUSICAL-NUEVOS:</h2> <br>
        <p>   
        <ul>GRUPO 1:</ul>
        <ul>Martes:  5 p.m. a 6 p.m. </ul>
        <ul>Viernes: 2 p.m. a 3 p.m.</ul>
        <br>
        *CUPO MÁXIMO POR GRUPO : 8
    </p>
</div>
            
<div class="ESTIMULACIÓN" id="estimulacion1" style="display:none;" >    
    <h2>HORARIOS DISPONIBLES PARA ESTIMULACIÓN MUSICAL-ANTIGUOS:</h2> <br>
    <p>
        <ul>GRUPO 1:</ul>
        <ul>Miércoles y Viernes: 2 p.m. a 3 p.m.</ul> 
        <br>
    *CUPO MÁXIMO POR GRUPO : 8.
</div>

<!-- guitarra -->
<div class="ESTIMULACIÓN" id="guitarra1" style="display:none;" >    
    <h2>HORARIOS DISPONIBLES PARA GUITARRA NUEVOS MAÑANA:</h2> <br>
        <p>   
        <ul>GRUPO 1:</ul>
        <ul>Miércoles y Viernes  8:30 a.m. A 9:30 a.m.</ul>
        <br>
        *CUPO MÁXIMO POR GRUPO : 8
    </p>
</div>


<div class="ESTIMULACIÓN" id="guitarra2" style="display:none;" >  
    <h2>HORARIOS DISPONIBLES PARA GUITARRA NUEVOS TARDE:</h2> <br>
        <p>   
        <ul>GRUPO 1:</ul>
        <ul>Miércoles y Viernes  4 p.m. a 5 p.m. </ul> <br>
        <ul>GRUPO 2:</ul>
        <ul>Martes y Jueves  3 p.m. a 4 p.m. </ul> <br>
        <ul>GRUPO 3:</ul>
        <ul>Lunes y Miércoles  2 p.m. a 3 p.m. </ul> <br>
        <ul>GRUPO 4:</ul>
        <ul>Martes y Jueves  2 p.m. a 3 p.m. </ul> <br>
        <br>
    </p>
    <p>
        Verificar disponibilidad de horario con: <br> <br>
       
        Instructor Camilo Andrés Reyes Bonelo: 312 439 0750<br>
        Instructor Lorena María Álvarez: 312 316 7225
    </p>
</div>
        

<div class="ESTIMULACIÓN" id="guitarra3" style="display:none;" >  
    <h2>HORARIOS DISPONIBLES PARA GUITARRA ANTIGUOS:</h2> <br>
    <p>
        Verificar disponibilidad de horario con: <br> <br>
       
        Instructor Camilo Andrés Reyes Bonelo: 312 439 0750<br>
        Instructor Lorena María Álvarez: 312 316 7225
    </p>
</div>
    
<!--//teclado-->
<div class="ESTIMULACIÓN" id="teclado1" style="display:none;" >    
    <h2>HORARIOS DISPONIBLES PARA TECLADOS NUEVOS MAÑANA:</h2> <br>
    <p>   
        <ul>GRUPO 1:</ul>
        <ul>Miércoles y Viernes  8:30 a.m. A 9:30 a.m. </ul>
        <ul>Sábados  8 a.m. A 10:00 a.m. </ul>
        <br>
        *CUPO MÁXIMO POR GRUPO : 8
    </p>
</div>


<div class="ESTIMULACIÓN" id="teclado2" style="display:none;" >       
    <h2>HORARIOS DISPONIBLES PARA TECLADO NUEVOS TARDE:</h2> <br>
    <p>
        Verificar disponibilidad de horario con: <br> <br>
       
        Instructor Camilo Andrés Reyes Bonelo: 312 439 0750<br>
        Instructor Lorena María Álvarez: 312 316 7225
    </p>
</div>


<div class="ESTIMULACIÓN" id="teclado3" style="display:none;" >    
    <h2>HORARIOS DISPONIBLES PARA TECLADO ANTIGUOS:</h2> <br>
    <p>
        Verificar disponibilidad de horario con: <br> <br>
       
        Instructor Camilo Andrés Reyes Bonelo: 312 439 0750<br>
        Instructor Lorena María Álvarez: 312 316 7225
    </p>
</div>
    
    </p>
    
</div>  


            </div>
   
            <h2> Datos del Menor Asociado </h2>
            <div class="contenedor">
            <input type="text" name="nombre" id="nombre" placeholder="Nombre completo" class="mitad" required maxlength="30" minlength="5" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
            <input type="text" name="apellido" id="apellido" placeholder="Apellidos" class="mitad" required  maxlength="30" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
            
             <select name="tipo_id"  class="mitad" maxlength="30" required> 
            <option  class="documento" value="">TIPO DE DOCUMENTO</option> 
                <option value="REGISTRO CIVIL"      >REGISTRO CIVIL      </option>
                <option value="TARJETA DE IDENTIDAD">TARJETA DE IDENTIDAD</option>
            </select>     

            <input type="number" name="ide"  id="ide" placeholder="N° de identificación" class="mitad" maxlength="20" required>
            
                
           
           
            <label for="adjunto_ide"> Adjuntar  Doc.  de  Identidad  &nbsp; &nbsp; &nbsp; &nbsp;  <input type="file"  id="btn_enviar" name="adjunto_ide" accept=".pdf"  required  class="adjuntar"></label>
                
            <br> <br>
            <select class="m_30" name="sexo" id="sexo" required>
                <option  selected disable value=""> SEXO</option>    
                <option>FEMENINO</option>
                <option>MASCULINO</option>
            </select>
                
                
            <input type="text" name="IE" id="IE" placeholder="INSTITUCIÓN EDUCATIVA" class="m_70" required maxlength="30" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
            <input type="text" name="EPS" id="EPS" placeholder="E.P.S." class="m_70" required maxlength="30" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                
           <label for="adjunto_eps"> Adjuntar Certificación de E.P.S.   <input type="file"  id="btn_enviar" name="adjunto_eps" accept=".pdf"  required  ></label>
                
                
                
            <label> FECHA DE NACIMIENTO  (MM/DD/AAAA)              
              <!--  <input type="date" name="fecha_nac" required> -->
            
            <label for="mes"></label>
            <select name="mes" required >Mes	
            <option value="">    MES    </option>
            <option>	1	</option>
            <option>	2	</option>
            <option>	3	</option>
            <option>	4	</option>
            <option>	5	</option>
            <option>	6	</option>
            <option>	7	</option>
            <option>	8	</option>
            <option>	9	</option>
            <option>	10	</option>
            <option>	11	</option>
            <option>	12	</option>
              </select > 
            <select name="dia" required > Día 
            <option value="">  DIA </option>
            <option>	1	</option>
            <option>	2	</option>
            <option>	3	</option>
            <option>	4	</option>
            <option>	5	</option>
            <option>	6	</option>
            <option>	7	</option>
            <option>	8	</option>
            <option>	9	</option>
            <option>	10	</option>
            <option>	11	</option>
            <option>	12	</option>
            <option>	13	</option>
            <option>	14	</option>
            <option>	15	</option>
            <option>	16	</option>
            <option>	17	</option>
            <option>	18	</option>
            <option>	19	</option>
            <option>	20	</option>
            <option>	21	</option>
            <option>	22	</option>
            <option>	23	</option>
            <option>	24	</option>
            <option>	25	</option>
            <option>	26	</option>
            <option>	27	</option>
            <option>	28	</option>
            <option>	29	</option>
            <option>	30	</option>
            <option>	31	</option>
            </select>
                <select name="anio" onChange="CambiarFormulario()" required>
            <option id=""   value=""  name="">           AÑO        </option>
            <option id="2001" name="2001">	2001	</option>
            <option id="2002" name="2002">	2002	</option>
            <option id="2003" name="2003">	2003	</option>
            <option id="2004" name="2004">	2004	</option>
            <option id="2005" name="2005">	2005	</option>
            <option id="2006" name="2006">	2006	</option>
            <option id="2007" name="2007">	2007	</option>
            <option id="2008" name="2008">	2008	</option>
            <option id="2009" name="2009">	2009	</option>
            <option id="2010" name="2010">	2010	</option>
            <option id="2011" name="2011">	2011	</option>
            <option id="2012" name="2012">	2012	</option>
            <option id="2013" name="2013">	2013	</option>
            <option id="2014" name="2014" style="display:none;">	2014	</option>
            

            </select>
            </label>
            <br>
                <div style="display:none;" id="categoria1">
                <label for="categoria1">CATEGORÍA *Asignada por fecha de nacimiento</label>
                <input type="text" readonly="readonly"  selected  name="categoria1"     >
                </div>
            </div>
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
        $CU_PREJ="SELECT COUNT(*)AS NUM FROM usuarios WHERE categoria='PREJUVENIL'";
        $EJ1=mysqli_query($conexion, $CU_PREJ);     
             
        $row1=mysqli_fetch_array($EJ1);
        $N1 = $row1['NUM'];
             
             
        $CT_PREJ ="SELECT * FROM categoria WHERE variante='PREJUVENIL'";
        $EJ2=mysqli_query($conexion, $CT_PREJ);    
             
        $row2=mysqli_fetch_array($EJ2);
        $N2 = $row2[3];
             
        $PREJ_DIS = $N2 - $N1;     
             
        $PREJUVENIL="UPDATE categoria SET cupos_disponibles='$PREJ_DIS'                                  WHERE variante='PREJUVENIL'";     
        mysqli_query($conexion,$PREJUVENIL);
         /**/    
        
        // INFANTIL
        $CU_INFA="SELECT COUNT(*)AS NUM FROM usuarios WHERE categoria='INFANTIL'";
        $EJ3=mysqli_query($conexion, $CU_INFA);     
             
        $row3=mysqli_fetch_array($EJ3);
        $N3 = $row3['NUM'];
             
             
        $CT_PREJ ="SELECT * FROM categoria WHERE variante='PREJUVENIL'";
        $EJ4=mysqli_query($conexion, $CT_PREJ);    
             
        $row4=mysqli_fetch_array($EJ4);
        $N4 = $row4[3];
             
        $INFA_DIS = $N4 - $N3;     
             
        $INFANTIL="UPDATE categoria SET cupos_disponibles='$INFA_DIS'                                  WHERE variante='INFANTIL'";     
        mysqli_query($conexion,$INFANTIL);             
        /**/
             
             
             
        // PREINFANTIL
        $CU_PREI="SELECT COUNT(*)AS NUM FROM usuarios WHERE categoria='PREINFANTIL'";
        $EJ5=mysqli_query($conexion, $CU_PREI);     
             
        $row5=mysqli_fetch_array($EJ5);
        $N5 = $row5['NUM'];
             
             
        $CT_PREI ="SELECT * FROM categoria WHERE variante='PREINFANTIL'";
        $EJ3=mysqli_query($conexion, $CT_PREI);    
             
        $row6=mysqli_fetch_array($EJ3);
        $N6 = $row6[3];
             
        $PREI_DIS = $N6 - $N5;     
             
        $PREINFANTIL="UPDATE categoria SET cupos_disponibles='$PREI_DIS'                                  WHERE variante='PREINFANTIL'";     
        mysqli_query($conexion,$PREINFANTIL);               
        /**/

        // GORRION
        
        $CU_GORR="SELECT COUNT(*)AS NUM FROM usuarios WHERE categoria='GORRION'";
        $EJ7=mysqli_query($conexion, $CU_GORR);     
             
        $row7=mysqli_fetch_array($EJ7);
        $N7 = $row7['NUM'];
             
             
        $CT_GORR ="SELECT * FROM categoria WHERE variante='GORRION'";
        $EJ4=mysqli_query($conexion, $CT_GORR);    
             
        $row8=mysqli_fetch_array($EJ4);
        $N6 = $row8[3];
             
        $GORR_DIS = $N6 - $N5;     
             
        $GORRION="UPDATE categoria SET cupos_disponibles='$GORR_DIS'                                  WHERE variante='GORRION'";     
        mysqli_query($conexion,$GORRION);               

             
        // SAMI
        $CU_SAMI="SELECT COUNT(*)AS NUM FROM usuarios WHERE categoria='SAMI'";
        $EJ8=mysqli_query($conexion, $CU_SAMI);     
             
        $row9=mysqli_fetch_array($EJ8);
        $N9 = $row9['NUM'];
             
             
        $CT_SAMI ="SELECT * FROM categoria WHERE variante='SAMI'";
        $EJ9=mysqli_query($conexion, $CT_SAMI);    
             
        $row6=mysqli_fetch_array($EJ9);
        $N10 = $row6[3];
             
        $SAMI_DIS = $N10 - $N9;     
             
        $SAMI="UPDATE categoria SET cupos_disponibles='$SAMI_DIS'                                  WHERE variante='SAMI'";     
        mysqli_query($conexion,$SAMI);       
        /**/
             
        // PRESAMI
        $CU_PRES="SELECT COUNT(*)AS NUM FROM usuarios WHERE categoria='PRESAMI'";
        $EJ9=mysqli_query($conexion, $CU_PRES);     
             
        $row11=mysqli_fetch_array($EJ9);
        $N11 = $row11['NUM'];
             
             
        $CT_PRES ="SELECT * FROM categoria WHERE variante='PRESAMI'";
        $EJ9=mysqli_query($conexion, $CT_PRES);    
             
        $row6=mysqli_fetch_array($EJ9);
        $N12 = $row6[3];
             
        $PRES_DIS = $N12 - $N11;     
             
        $PRES="UPDATE categoria SET cupos_disponibles='$PRES_DIS'                                  WHERE variante='PRESAMI'";     
        mysqli_query($conexion,$PRES);                    
        /**/             
             
        // GUITARRA
        // PRESAMI
        $CU_PRES="SELECT COUNT(*)AS NUM FROM usuarios WHERE categoria='GUITARRA'";
        $EJ9=mysqli_query($conexion, $CU_PRES);     
             
        $row11=mysqli_fetch_array($EJ9);
        $N11 = $row11['NUM'];
             
             
        $CT_PRES ="SELECT * FROM cat_musica WHERE variante='GUITARRA'";
        $EJ9=mysqli_query($conexion, $CT_PRES);    
             
        $row6=mysqli_fetch_array($EJ9);
        $N12 = $row6[3];
             
        $PRES_DIS = $N12 - $N11;     
             
        $PRES="UPDATE cat_musica SET cupos_disponibles='$PRES_DIS'                                  WHERE variante='GUITARRA'";     
        mysqli_query($conexion,$PRES);    
        
                     
                     //GUTIARRA
        $CU_PRES="SELECT COUNT(*)AS NUM FROM usuarios WHERE categoria='GUTIARRA_NUEVO_MANANA'";
        $EJ9=mysqli_query($conexion, $CU_PRES);     
             
        $row11=mysqli_fetch_array($EJ9);
        $N11 = $row11['NUM'];
             
             
        $CT_PRES ="SELECT * FROM cat_musica WHERE variante='GUTIARRA_NUEVO_MANANA'";
        $EJ9=mysqli_query($conexion, $CT_PRES);    
             
        $row6=mysqli_fetch_array($EJ9);
        $N12 = $row6[3];
             
        $PRES_DIS = $N12 - $N11;     
             
        $PRES="UPDATE cat_musica SET cupos_disponibles='$PRES_DIS'                                  WHERE variante='GUTIARRA_NUEVO_MANANA'";     
        mysqli_query($conexion,$PRES);                      
             
                     //GUTIARRA
        $CU_PRES="SELECT COUNT(*)AS NUM FROM usuarios WHERE categoria='GUTIARRA_NUEVO_TARDE'";
        $EJ9=mysqli_query($conexion, $CU_PRES);     
             
        $row11=mysqli_fetch_array($EJ9);
        $N11 = $row11['NUM'];
             
             
        $CT_PRES ="SELECT * FROM cat_musica WHERE variante='GUTIARRA_NUEVO_TARDE'";
        $EJ9=mysqli_query($conexion, $CT_PRES);    
             
        $row6=mysqli_fetch_array($EJ9);
        $N12 = $row6[3];
             
        $PRES_DIS = $N12 - $N11;     
             
        $PRES="UPDATE cat_musica SET cupos_disponibles='$PRES_DIS'                                  WHERE variante='GUTIARRA_NUEVO_TARDE'";     
        mysqli_query($conexion,$PRES);     
                     
                     
                     
                     //GUTIARRA
        $CU_PRES="SELECT COUNT(*)AS NUM FROM usuarios WHERE categoria='GUTIARRA_ANTIGUO'";
        $EJ9=mysqli_query($conexion, $CU_PRES);     
             
        $row11=mysqli_fetch_array($EJ9);
        $N11 = $row11['NUM'];
             
             
        $CT_PRES ="SELECT * FROM cat_musica WHERE variante='GUTIARRA_ANTIGUO'";
        $EJ9=mysqli_query($conexion, $CT_PRES);    
             
        $row6=mysqli_fetch_array($EJ9);
        $N12 = $row6[3];
             
        $PRES_DIS = $N12 - $N11;     
             
        $PRES="UPDATE cat_musica SET cupos_disponibles='$PRES_DIS'                                  WHERE variante='GUTIARRA_ANTIGUO'";     
        mysqli_query($conexion,$PRES);   
                     
                     //TECLADO
        $CU_PRES="SELECT COUNT(*)AS NUM FROM usuarios WHERE categoria='TECLADO_NUEVO_MANANA'";
        $EJ9=mysqli_query($conexion, $CU_PRES);     
             
        $row11=mysqli_fetch_array($EJ9);
        $N11 = $row11['NUM'];
             
             
        $CT_PRES ="SELECT * FROM cat_musica WHERE variante='TECLADO_NUEVO_MANANA'";
        $EJ9=mysqli_query($conexion, $CT_PRES);    
             
        $row6=mysqli_fetch_array($EJ9);
        $N12 = $row6[3];
             
        $PRES_DIS = $N12 - $N11;     
             
        $PRES="UPDATE cat_musica SET cupos_disponibles='$PRES_DIS'                                  WHERE variante='TECLADO_NUEVO_MANANA'";     
        mysqli_query($conexion,$PRES);                      
             
                     //TECLADO
        $CU_PRES="SELECT COUNT(*)AS NUM FROM usuarios WHERE categoria='TECLADO_NUEVO_TARDE'";
        $EJ9=mysqli_query($conexion, $CU_PRES);     
             
        $row11=mysqli_fetch_array($EJ9);
        $N11 = $row11['NUM'];
             
             
        $CT_PRES ="SELECT * FROM cat_musica WHERE variante='TECLADO_NUEVO_TARDE'";
        $EJ9=mysqli_query($conexion, $CT_PRES);    
             
        $row6=mysqli_fetch_array($EJ9);
        $N12 = $row6[3];
             
        $PRES_DIS = $N12 - $N11;     
             
        $PRES="UPDATE cat_musica SET cupos_disponibles='$PRES_DIS'                                  WHERE variante='TECLADO_NUEVO_TARDE'";     
        mysqli_query($conexion,$PRES);     
                     
                     
                     
                     //TECLADO
        $CU_PRES="SELECT COUNT(*)AS NUM FROM usuarios WHERE categoria='TECLADO_ANTIGUO'";
        $EJ9=mysqli_query($conexion, $CU_PRES);     
             
        $row11=mysqli_fetch_array($EJ9);
        $N11 = $row11['NUM'];
             
             
        $CT_PRES ="SELECT * FROM cat_musica WHERE variante='TECLADO_ANTIGUO'";
        $EJ9=mysqli_query($conexion, $CT_PRES);    
             
        $row6=mysqli_fetch_array($EJ9);
        $N12 = $row6[3];
             
        $PRES_DIS = $N12 - $N11;     
             
        $PRES="UPDATE cat_musica SET cupos_disponibles='$PRES_DIS'                                  WHERE variante='TECLADO_ANTIGUO'";     
        mysqli_query($conexion,$PRES);                       
        // ESTIMULACION
        $CU_PRES="SELECT COUNT(*)AS NUM FROM usuarios WHERE categoria='ESTIM_ANTIGU'";
        $EJ9=mysqli_query($conexion, $CU_PRES);     
             
        $row11=mysqli_fetch_array($EJ9);
        $N11 = $row11['NUM'];
             
             
        $CT_PRES ="SELECT * FROM cat_musica WHERE variante='ESTIM_ANTIGU'";
        $EJ9=mysqli_query($conexion, $CT_PRES);    
             
        $row6=mysqli_fetch_array($EJ9);
        $N12 = $row6[3];
             
        $PRES_DIS = $N12 - $N11;     
             
        $PRES="UPDATE cat_musica SET cupos_disponibles='$PRES_DIS'                                  WHERE variante='ESTIM_ANTIGU'";     
                     
        // ESTIMULACION
                $CU_PRES="SELECT COUNT(*)AS NUM FROM usuarios WHERE categoria='ESTIM_NUEVOS'";
        $EJ9=mysqli_query($conexion, $CU_PRES);     
             
        $row11=mysqli_fetch_array($EJ9);
        $N11 = $row11['NUM'];
             
             
        $CT_PRES ="SELECT * FROM cat_musica WHERE variante='ESTIM_NUEVOS'";
        $EJ9=mysqli_query($conexion, $CT_PRES);    
             
        $row6=mysqli_fetch_array($EJ9);
        $N12 = $row6[3];
             
        $PRES_DIS = $N12 - $N11;     
             
        $PRES="UPDATE cat_musica SET cupos_disponibles='$PRES_DIS'                                  WHERE variante='ESTIM_NUEVOS'";     
                     
        mysqli_query($conexion,$PRES);                 
        $TABLA_G="SELECT * FROM categoria ";
        $ejecuta=mysqli_query($conexion,$TABLA_G);
        ?>
        
        <table class="tabla_cupos"  id="cupos" name="cupos" style="display:none;">
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
<?php mysqli_query($conexion,$PRES);                 
        $TABLA_G="SELECT * FROM cat_musica ";
        $ejecuta=mysqli_query($conexion,$TABLA_G);
        ?>
        
        <table class="tabla_cupos"  id="cupos1" name="cupos1" style="display:none;">
                <thead>
                    <tr >
                        <th colspan="5" style="text-align:center; " class="form-title"><span align="center">Cupos Disponibles Garzón</span></th>
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
            
            <h2> Datos del Representante Legal</h2>
            <div class="contenedor">
                <input type="text" name="nombre_rep" id="nombre_rep" placeholder="Nombre completo" class="mitad" required maxlength="30" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                <input type="text" name="apellido_rep" id="apellido_rep" placeholder="Apellidos" class="mitad" required maxlength="30" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                
            <select class="mitad" name="parentesco" id="parentesco" required >
                <option value=""  selected disable> PARENTESCO </option>    
                <option>PADRE</option>
                <option>MADRE</option>
            </select>
                
                <input type="number" name="id_rep" id="id_rep" placeholder="N° identificación" class="mitad" required maxlength="20">
                <input type="number" name="tel"  id="tel" placeholder="Teléfono - Celular" class="mitad" required maxlength="15">
                <input type="text" name="direccion" id="direccion" placeholder="Dirección" class="mitad" maxlength="30" required style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                <input type="text" name="municipio" id="municipio" placeholder="Municipio" class="mitad" required maxlength="30" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                <input type="text" name="email" id="email" placeholder="Correo electrónico" class="m_70"  maxlength="40" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
            
                <p class="total"> Leer Autorización para Explotación de Derechos de Imagen <a href="pdf/AUTORIZACION_PARA_EXPLOTACION_DE_DERECHOS_DE_IMAGEN.pdf">aquí</a>.</p>
                <br>
                
                    <p><input type="checkbox" required> Declaro que la información referenciada en el presente Formulario de Inscripción corresponde a la realidad.</p>
                
                <p>
                    <input type="checkbox" required> Acepto Autorización para Explotación de Derechos de Imagen.</p>
            </div>
            
          
          
            
            <div class="contenedor">
               
            <input type="submit" value="Registrar" class="boton"/>
<!--<p>Si ya estás registrado, pulsa <a href=buscar.html>aquí</a> para descargar la factura </p> -->
            </div>
        </form>
    </body>
</html>
