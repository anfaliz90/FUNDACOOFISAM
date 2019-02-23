<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset  = "utf-8" >
        <title>
            REGISTRO DE INSTRUCTORES
        </title>
        <link rel="stylesheet" href="registro.css">
        <script type="text/javascript" language="javascript">
            function agregarOpciones(form) // funcion para seleccionar opciones segun la agencia escogida =>modalidad
            {
                var selec = form.agencia.options;
                var combo = form.modalidad.options;
                combo.length = null;
                if (selec[0].selected == true)
                {
                    document.getElementById("label_jornada").style.display="none";
                    document.getElementById("jornada").style.display="none";   
                    
                    var seleccionar = new Option("AGENCIA","","","");
                    combo[0] = seleccionar;
                }
                if (selec[1].selected == true)
                {
                    document.getElementById("label_jornada").style.display="none";
                    document.getElementById("jornada").style.display="none";   

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
                    document.getElementById("label_jornada").style.display="none";
                    document.getElementById("jornada").style.display="none";   
                    var popular1 = new Option("MODALIDAD","","","");
                    var popular2 = new Option("FUTBOL","FUTBOL","","");
                    combo[0] = popular1;
                    combo[1] = popular2;
                }
                if (selec[3].selected == true)
                {
                    document.getElementById("label_jornada").style.display="none";
                    document.getElementById("jornada").style.display="none";   

                    var popular1 = new Option("MODALIDAD","","","");
                    var popular2 = new Option("FUTBOL","FUTBOL","","");
                    combo[0] = popular1;
                    combo[1] = popular2;
                }
                if (selec[4].selected == true)
                {
                    document.getElementById("label_jornada").style.display="none";
                    document.getElementById("jornada").style.display="none";   
                    var popular1 = new Option("MODALIDAD","","","");    
                    var popular2 = new Option("FUTBOL","FUTBOL","","");
                    var popular3 = new Option("BALONCESTO","BALONCESTO","","");
                    combo[0] = popular1;
                    combo[1] = popular2;
                    combo[2] = popular3;
                }
                if (selec[5].selected == true)
                {
                    document.getElementById("label_jornada").style.display="none";
                    document.getElementById("jornada").style.display="none";   
                    var popular1 = new Option("MODALIDAD","","","");    
                    var popular2 = new Option("FUTBOL","FUTBOL","","");
                    combo[0] = popular1;
                    combo[1] = popular2;
                }
                if (selec[6].selected == true)
                {
                    document.getElementById("label_jornada").style.display="none";
                    document.getElementById("jornada").style.display="none";   
                    var popular1 = new Option("MODALIDAD","","","");    
                    var popular2 = new Option("FUTBOL","FUTBOL","","");
                    combo[0] = popular1;
                    combo[1] = popular2;
                }
                if (selec[7].selected == true)
                {
                    document.getElementById("label_jornada").style.display="none";
                    document.getElementById("jornada").style.display="none";   
                    var popular1 = new Option("MODALIDAD","","","");    
                    var popular2 = new Option("FUTBOL","FUTBOL","","");
                    combo[0] = popular1;
                    combo[1] = popular2;
                }
                if (selec[8].selected == true)
                {
                    document.getElementById("label_jornada").style.display="none";
                    document.getElementById("jornada").style.display="none";   
           
                    var popular1 = new Option("MODALIDAD","","","");    
                    var popular2 = new Option("FUTBOL","FUTBOL","","");
                    combo[0] = popular1;
                    combo[1] = popular2;
                }
                if (selec[9].selected == true)
                {
                    document.getElementById("label_jornada").style.display="none";
                    document.getElementById("jornada").style.display="none";   
              
                    var popular1 = new Option("MODALIDAD","","","");    
                    var popular2 = new Option("FUTBOL","FUTBOL","","");
                    combo[0] = popular1;
                    combo[1] = popular2;
                }
                if (selec[10].selected == true)
                {
                    
                    var popular1 = new Option("MODALIDAD","","","");    
                    var popular2 = new Option("FUTBOL","FUTBOL","","");
                    combo[0] = popular1;
                    combo[1] = popular2;
                }    
            }
        </script>
        <script type="text/javascript" language="javascript">
            function agregarOpciones1(form) // funcion para seleccionar opciones segun la agencia escogida =>modalidad
            {
                var selec = form.modalidad.options;
                var combo = form.categoria.options;
                combo.length = null;
                if (selec[0].selected == true)
                {
                    
                    document.getElementById("label_jornada").style.display="none";
                    document.getElementById("jornada").style.display="none";                    
                    var seleccionar = new Option("CATEGORIA","","","");
                    combo[0] = seleccionar;
                }
                if (selec[1].selected == true)
                {
                    if(document.getElementById("agencia").value=="GARZON")
                        {
                            document.getElementById("label_jornada").style.display="block";
                            document.getElementById("jornada").style.display="block";
                        }
                    var popular1 = new Option("CATEGORIA","","","");
                    var popular2 = new Option("PRESAMI","PRESAMI","","");
                    var popular3 = new Option("SAMI","SAMI","","");
                    var popular4 = new Option("GORRION","GORRION","","");
                    var popular5 = new Option("PREINFANTIL","PREINFANTIL","","");
                    var popular6 = new Option("INFANTIL","INFANTIL","","");
                    var popular7 = new Option("PREJUVENIL","PREJUVENIL","","");
                    var popular8 = new Option("TODOS","TODOS","","");
                    
                    combo[0] = popular1;
                    combo[1] = popular2;
                    combo[2] = popular3;
                    combo[3] = popular4;
                    combo[4] = popular5;
                    combo[5] = popular6;
                    combo[6] = popular7;
                    combo[7] = popular8;
                }
                if (selec[2].selected == true)
                {
                    document.getElementById("label_jornada").style.display="none";
                    document.getElementById("jornada").style.display="none";   
                    var popular1 = new Option("MODALIDAD","","","");
                    var popular2 = new Option("FUTBOL","FUTBOL","","");
                    combo[0] = popular1;
                    combo[1] = popular2;
                }
                if (selec[3].selected == true)
                {
                    document.getElementById("label_jornada").style.display="none";
                    document.getElementById("jornada").style.display="none";   
                    var popular1 = new Option("MODALIDAD","","","");
                    var popular2 = new Option("FUTBOL","FUTBOL","","");
                    combo[0] = popular1;
                    combo[1] = popular2;
                }
                if (selec[4].selected == true)
                {
                    document.getElementById("label_jornada").style.display="none";
                    document.getElementById("jornada").style.display="none";   
                    var popular1 = new Option("MODALIDAD","","","");    
                    var popular2 = new Option("FUTBOL","FUTBOL","","");
                    var popular3 = new Option("BALONCESTO","BALONCESTO","","");
                    combo[0] = popular1;
                    combo[1] = popular2;
                    combo[2] = popular3;
                }
                if (selec[5].selected == true)
                {
                    document.getElementById("label_jornada").style.display="none";
                    document.getElementById("jornada").style.display="none";   
                    var popular1 = new Option("MODALIDAD","","","");    
                    var popular2 = new Option("FUTBOL","FUTBOL","","");
                    combo[0] = popular1;
                    combo[1] = popular2;
                }
                if (selec[6].selected == true)
                {
                    document.getElementById("label_jornada").style.display="none";
                    document.getElementById("jornada").style.display="none";   
                    var popular1 = new Option("MODALIDAD","","","");    
                    var popular2 = new Option("FUTBOL","FUTBOL","","");
                    combo[0] = popular1;
                    combo[1] = popular2;
                }
                if (selec[7].selected == true)
                {
                    document.getElementById("label_jornada").style.display="none";
                    document.getElementById("jornada").style.display="none";   
                    var popular1 = new Option("MODALIDAD","","","");    
                    var popular2 = new Option("FUTBOL","FUTBOL","","");
                    combo[0] = popular1;
                    combo[1] = popular2;
                }
                if (selec[8].selected == true)
                {
                    document.getElementById("label_jornada").style.display="none";
                    document.getElementById("jornada").style.display="none";   
           
                    var popular1 = new Option("MODALIDAD","","","");    
                    var popular2 = new Option("FUTBOL","FUTBOL","","");
                    combo[0] = popular1;
                    combo[1] = popular2;
                }
                if (selec[9].selected == true)
                {
                    document.getElementById("label_jornada").style.display="none";
                    document.getElementById("jornada").style.display="none";   
              
                    var popular1 = new Option("MODALIDAD","","","");    
                    var popular2 = new Option("FUTBOL","FUTBOL","","");
                    combo[0] = popular1;
                    combo[1] = popular2;
                }
                if (selec[10].selected == true)
                {
                    document.getElementById("label_jornada").style.display="none";
                    document.getElementById("jornada").style.display="none";   
                    
                    var popular1 = new Option("MODALIDAD","","","");    
                    var popular2 = new Option("FUTBOL","FUTBOL","","");
                    combo[0] = popular1;
                    combo[1] = popular2;
                }    
            }
        </script>
    </head>
    <body>
        <div class="banner"></div>
        <h1 class="form-title">REGISTRO DE INSTRUCTORES</h1>
        <form name="globe" action="validar_registro_ins.php" method="post" class="form-register" enctype="multipart/form-data" onLoad="CambiarFormulario();">
            
            
        <h2>Datos Personales</h2>    
        <div class="contenedor">
             <input type="text" name="nombre" id="nombre" placeholder="Nombre completo" class="mitad"  maxlength="30" minlength="5" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                &nbsp;&nbsp;
            
            <input type="text" name="apellido" id="apellido" placeholder="Apellidos" class="mitad"   maxlength="30" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                
            <select name="tipo_id"  class="mitad" maxlength="30" > 
                <option  class="documento" value="">TIPO DE DOCUMENTO</option> 
                <option value="CEDULA"      >CEDULA DE CIUDADANIA      </option>
                <option value="OTRO">OTRO</option>
            </select>  
            <input type="number" name="ide"  id="ide" placeholder="N° DE IDENTIFICACION" class="mitad" maxlength="20" >       
            <label for="fecha_nac" class="mitad">FECHA DE NACIMIENTO</label>
            <input type="date" name="fecha_nac" id="fecha_nac" class="mitad">
            
            
            <label for="tel"  class="mitad">TELÉFONO</label>
            <input type="number" name="tel" id="tel" placeholder="TELEFONO"   class="mitad" maxlength="30"  style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" >
            
            <label for="email_p"  class="mitad"> EMAIL PERSONAL</label>
            <input type="email" name="email_p" id="email_p" placeholder="EMAIL PERSONAL" class="mitad" maxlength="30"  style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
            
            <label form="email_c"  class="mitad">EMAIL COORPORATIVO</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="email" name="email_c" id="email_c" placeholder="EMAIL COORPORATIVO" class="mitad" maxlength="30"  style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
            
                
            
        </div>
            
            
        <h2>Datos Generales</h2>
        <div class="contenedor">
            <label for="agencia" class="mitad" >SELECCIONE AGENCIA</label>            
            <select name="agencia" id="agencia" onChange="agregarOpciones(this.form)"  class="mitad" >
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
            
            
            <label for="modalidad" class="mitad">SELECCIONE MODALIDAD </label>
            <select name="modalidad" id="modalidad" onChange="agregarOpciones1(this.form)"   class="mitad">
                <option value=""> MODALIDAD </option>
            </select>
            
            
            <label for="categoria" class="mitad">SELECCIONE CATEGORÍA</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select name="categoria" id="categoria"  OnChange="agregarOpciones2(this.form)" class="mitad">
                <option value="" > CATEGORIA </option>
            </select>    
            
            <label for="jornada" class="mitad" id="label_jornada" style="display:none;"> SELECCIONE JORNADA </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select name="jornada" id="jornada" class="mitad" style="display:none;">
                <option value="">      JORNADA</option>
                <option value="MANANA">MAÑANA</option>
                <option value="TARDE"> TARDE</option>
            </select>
        </div>
            
        <h2> Datos Laborales</h2>
        <div class="contenedor">
            <label for="fecha_i" class="mitad" >FECHA DE INICIO DE CONTRATO</label>
            <input type="date" class="mitad" name="fecha_i" id="fecha_i">
            <label for="fecha_f" class="mitad">FECHA DE FIN DE CONTRATO</label>
            <input type="date" class="mitad" name="fecha_f" id="fecha_f">
            <label for="lug_en" class="mitad">LUGAR DE ENTRENAMIENTO            </label>
            <input type="text" name="lug_en" id="lug_en" class="mitad" placeholder="LUGAR DE ENTRENAMIENTO" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
           
            
        </div>
            

            <div class="contenedor">
               
            <input type="submit" value="Registrar Instructor" class="boton"/>

            </div>
        </form>
    </body>
</html>
