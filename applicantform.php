
 <div class="form-group">
  <div class="col-md-11">
  <label class="col-md-4 control-label" for=
    "NATIONALID">Cedúla De Identidad:</label>

    <div class="col-md-8"> 
       <input class="form-control input-sm" id="NATIONALID" name="NATIONALID" placeholder=
          "000-0000000-0" type="text" value="<?php

function valida_cedula($ced)
{
    $c            = str_replace("-", "", $ced);
    $cedula       = substr($c, 0,  - 1);
    $verificador  = substr($c, - 1, 1);
    $suma         = 0;
    $cedulaValida = 0;

    if (strlen($ced) < 11) {
        return false;
    }
   
    for ($i = 0; $i < strlen($cedula); $i++) {

        $mod = "";

        if (($i % 2) == 0) {
            $mod = 1;
        } else {
            $mod = 2;
        }

        $res = substr($cedula, $i, 1) * $mod;

        if ($res > 9) {
            $res = (string) $res;
            $uno = substr($res, 0, 1);
            $dos = substr($res, 1, 1);
          
            $res = $uno + $dos;
        }

        $suma += $res;

    }
    
    $el_numero = (10 - ($suma % 10)) % 10;

    if ($el_numero == $verificador && substr($cedula, 0, 3) != "000") {
        $cedulaValida = 1;
    } else {
        $cedulaValida = 0;
    }
    
    return $cedulaValida;
}

echo valida_cedula('011-0021069-8');
?>"  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off" required>
    </div>
  </div>
</div>

<div class="form-group">
	<div class="col-md-11">
	<label class="col-md-4 control-label" for=
		"FNAME">Primer Nombre:</label>

		<div class="col-md-8">
		  <input name="JOBID" type="hidden" value="<?php echo $_GET['job'];?>">
		   <input class="form-control input-sm" id="FNAME" name="FNAME" placeholder=
		      "Primer Nombre" type="text" value=""  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off" required>
		</div>
	</div>
</div>

<div class="form-group">
	<div class="col-md-11">
		<label class="col-md-4 control-label" for=
		"LNAME">Apellidos:</label>

		<div class="col-md-8">
		  <input name="deptid" type="hidden" value="">
		  <input  class="form-control input-sm" id="LNAME" name="LNAME" placeholder=
		      "Apellidos"    onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off" required>
		  </div>
	</div>
</div>

<div class="form-group">
	<div class="col-md-11">
		<label class="col-md-4 control-label" for=
		"MNAME">Segundo Nombre:</label>

		<div class="col-md-8">
		  <input name="deptid" type="hidden" value="">
		  <input  class="form-control input-sm" id="MNAME" name="MNAME" placeholder=
		      "Segundo Nombre"    onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
		   <!-- <input class="form-control input-sm" id="DEPARTMENT_DESC" name="DEPARTMENT_DESC" placeholder=
		      "Description" type="text" value=""> -->
		</div>
	</div>
</div> 

<div class="form-group">
	<div class="col-md-11">
		<label class="col-md-4 control-label" for=
		"ADDRESS">Dirección:</label>

		<div class="col-md-8">

		 <textarea class="form-control input-sm" id="ADDRESS" name="ADDRESS" placeholder=
		    "Dirección" type="text" value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off"></textarea>
		</div>
	</div>
</div> 

<div class="form-group">
	<div class="col-md-11">
		<label class="col-md-4 control-label" for=
		"Gender">Sexo:</label>

		<div class="col-md-8">
		 <div class="col-lg-5">
		    <div class="radio">
		      <label><input checked id="optionsRadios1" checked="True" name="optionsRadios" type="radio" value="Female">Femenino</label>
		    </div>
		  </div>

		  <div class="col-lg-4">
		    <div class="radio">
		      <label><input id="optionsRadios2"   name="optionsRadios" type="radio" value="Male">Masculino</label>
		    </div>
		  </div> 
		 
		</div>
	</div>
</div>

<div class="form-group">
  <div class="rows">
    <div class="col-md-11"> 
      <div class="col-md-4">
        <label class="col-lg-11 control-label">Fecha De Nacimiento:</label>
      </div>

      <div class="col-lg-3">
        <select class="form-control input-sm" name="month">
          <option>Mes</option>
          <?php

             $mon = array('Jan' => 1 ,'Feb'=> 2,'Mar' => 3 ,'Apr'=> 4,'May' => 5 ,'Jun'=> 6,'Jul' => 7 ,'Aug'=> 8,'Sep' => 9 ,'Oct'=> 10,'Nov' => 11 ,'Dec'=> 11 );    
          
        
            foreach ($mon as $month => $value ) {
              
                  # code...
                   echo '<option value='.$value.'>'.$month.'</option>';
                } 
          ?>
        </select>
      </div>

      <div class="col-lg-2">
        <select class="form-control input-sm" name="day">
          <option>Día</option>
        <?php 
          $d = range(31, 1);
          foreach ($d as $day) {
            echo '<option value='.$day.'>'.$day.'</option>';
          }
        
        ?>
          
        </select>
      </div>

      <div class="col-lg-3">
        <select class="form-control input-sm" name="year">
          <option>Año</option>
        <?php 
          $years = range(2010, 1900);
          foreach ($years as $yr) {
            echo '<option value='.$yr.'>'.$yr.'</option>';
          }
        
        ?>
        
        </select>
      </div> 
    </div>
  </div>
</div> 

 <div class="form-group">
    <div class="col-md-11">
      <label class="col-md-4 control-label" for=
      "BIRTHPLACE">Lugar De Nacimiento:</label>

      <div class="col-md-8">
        
         <textarea class="form-control input-sm" id="BIRTHPLACE" name="BIRTHPLACE" placeholder=
            "Lugar De Nacimiento" type="text" value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off"></textarea>
      </div>
    </div>
  </div> 


 <div class="form-group">
  <div class="col-md-11">
    <label class="col-md-4 control-label" for=
    "TELNO">Número De Télefono:</label>

    <div class="col-md-8">
      
       <input class="form-control input-sm" id="TELNO" name="TELNO" placeholder=
          "(000) 000-0000" type="text" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
    </div>
  </div>
</div> 

 <div class="form-group">
  <div class="col-md-11">
    <label class="col-md-4 control-label" for=
    "CIVILSTATUS">Estado Civil:</label>

    <div class="col-md-8">
      <select class="form-control input-sm" name="CIVILSTATUS" id="CIVILSTATUS">
          <option value="none" >Seleccionar</option>
          <option value="Single">Soltero/a</option>
          <option value="Married">Casado/a</option>
          <option value="Widow" >Viuda</option>
          <!-- <option value="Fourth" >Fourth</option> -->
      </select> 
    </div>
  </div>
</div>  

<div class="form-group">
  <div class="col-md-11">
    <label class="col-md-4 control-label" for=
    "SALARIOMIN">Salario Mínimo Al Que Aspira:</label>

    <div class="col-md-8">
      
       <input class="form-control input-sm" id="SALARIOMIN" name="SALARIOMIN" placeholder=
          "Salario Mínimo" type="number" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
    </div>
  </div>
</div> 

<div class="form-group">
  <div class="col-md-11">
    <label class="col-md-4 control-label" for=
    "SALARIOMAX">Salario Máximo Al Que Aspira:</label>

    <div class="col-md-8">
      
       <input class="form-control input-sm" id="SALARIOMAX" name="SALARIOMAX" placeholder=
          "Salario Máximo" type="number" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
    </div>
  </div>
</div> 

<div class="form-group">
	<div class="col-md-11">
		<label class="col-md-4 control-label" for=
		"Gender">Idiomas Que Domina:</label>

		<div class="col-md-8">
		 <div class="col-lg-5">
		    <div class="radio">
		      <label><input id="optionsRadios1" name="optionsRadios" type="checkbox" value="Female"> Español</label>
		    </div>
		  </div>

		  <div class="col-lg-4">
		    <div class="radio">
		      <label><input id="optionsRadios2"   name="optionsRadios" type="checkbox" value="Male"> Inglés</label>
		    </div>
		  </div> 

      <div class="col-lg-4">
		    <div class="radio">
		      <label><input id="optionsRadios2"   name="optionsRadios" type="checkbox" value="Male"> Francés</label>
		    </div>
		  </div> 

      <div class="col-lg-4">
		    <div class="radio">
		      <label><input id="optionsRadios2"   name="optionsRadios" type="checkbox" value="Male"> Alemán</label>
		    </div>
		  </div> 

      <div class="col-lg-4">
		    <div class="radio">
		      <label><input id="optionsRadios2"   name="optionsRadios" type="checkbox" value="Male"> Mandarín</label>
		    </div>
		  </div> 
		 
		</div>
	</div>
</div>

<div class="form-group">
    <div class="col-md-11">
      <label class="col-md-4 control-label" for=
      "BIRTHPLACE">Competencias Que Desarrolla:</label>

      <div class="col-md-8">
        
         <textarea class="form-control input-sm" id="BIRTHPLACE" name="BIRTHPLACE" placeholder=
            "Competencias Que Desarrolla" type="text" value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off"></textarea>
      </div>
    </div>
  </div> 

 <div class="form-group">
  <div class="col-md-11">
    <label class="col-md-4 control-label" for=
    "EMAILADDRESS">Dirección de Email:</label> 
    <div class="col-md-8">
       <input type="Email" class="form-control input-sm" id="EMAILADDRESS" name="EMAILADDRESS" placeholder="Dirección de Email"   autocomplete="false" required/> 
    </div>
  </div>
</div>  
<div class="form-group">
  <div class="col-md-11">
    <label class="col-md-4 control-label" for=
    "USERNAME">Nombre de Usuario:</label>

    <div class="col-md-8">
      <input name="deptid" type="hidden" value="">
      <input  class="form-control input-sm" id="USERNAME" name="USERNAME" placeholder=
          "Nombre de Usuario"    onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off" required>
      </div>
  </div>
</div>

<div class="form-group">
  <div class="col-md-11">
    <label class="col-md-4 control-label" for=
    "PASS">Contraseña:</label>

    <div class="col-md-8">
      <input name="deptid" type="hidden" value="">
      <input  class="form-control input-sm" id="PASS" name="PASS" placeholder=
          "Contraseña" type="password"   onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off" required>
       <!-- <input class="form-control input-sm" id="DEPARTMENT_DESC" name="DEPARTMENT_DESC" placeholder=
          "Description" type="text" value=""> -->
    </div>
  </div>
</div> 
<div class="form-group">
  <div class="col-md-11">
    <label class="col-md-4 control-label" for=
    "DEGREE">Logros Educativos:</label>

    <div class="col-md-8">
      <input name="deptid" type="hidden" value="">
      <textarea  class="form-control input-sm" id="DEGREE" name="DEGREE" placeholder=
          "Logros Educativos"    onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off" required></textarea>
      </div>
  </div>
</div> 

<div class="form-group">
    <div class="col-md-11">
      <label class="col-md-4 control-label" for=
      "d"></label>  

      <div class="col-md-8">
        <label><input type="checkbox"> Al registrarte, estás de acuerdo con nuestros <a href="#">terminos y condiciones.</a></label>
     
     </div>
    </div>
</div>   
