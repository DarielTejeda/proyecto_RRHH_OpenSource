<section id="content">
    <div class="container content">    
     <p> <?php check_message();?></p>      
		<form class="row form-horizontal span6  wow fadeInDown" action="process.php?action=register" method="POST">
		<h2 class=" ">Personal Info</h2>
		<div class="row"> 
			<div class="form-group">
				<div class="col-md-8">
				<label class="col-md-4 control-label" for=
					"FNAME">Primer Nombre:</label>

					<div class="col-md-8">
					  <input name="JOBID" type="hidden" value="<?php echo $_GET['job'];?>">
					   <input class="form-control input-sm" id="FNAME" name="FNAME" placeholder=
					      "Primer Nombre" type="text" value=""  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-8">
					<label class="col-md-4 control-label" for=
					"LNAME">Apellidos:</label>

					<div class="col-md-8">
					  <input name="deptid" type="hidden" value="">
					  <input  class="form-control input-sm" id="LNAME" name="LNAME" placeholder=
					      "Apellidos"    onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
					  </div>
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-8">
					<label class="col-md-4 control-label" for=
					"MNAME">Segundo nombre:</label>

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
				<div class="col-md-8">
					<label class="col-md-4 control-label" for=
					"ADDRESS">Dirección:</label>

					<div class="col-md-8">

					 <textarea class="form-control input-sm" id="ADDRESS" name="ADDRESS" placeholder=
					    "Dirección" type="text" value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off"></textarea>
					</div>
				</div>
			</div> 

			<div class="form-group">
				<div class="col-md-8">
					<label class="col-md-4 control-label" for=
					"Gender">Sexo:</label>

					<div class="col-md-8">
					 <div class="col-lg-5">
					    <div class="radio">
					      <label><input checked id="optionsRadios1" checked="True" name="optionsRadios" type="radio" value="Female">Femenimo</label>
					    </div>
					  </div>

					  <div class="col-lg-4">
					    <div class="radio">
					      <label><input id="optionsRadios2"   name="optionsRadios" type="radio" value="Male"> Masculino</label>
					    </div>
					  </div> 
					 
					</div>
				</div>
			</div>

			<div class="form-group">
			  <div class="rows">
			    <div class="col-md-8"> 
			      <div class="col-md-4">
			        <label class="col-lg-12 control-label">Fecha de Nacimiento :</label>
			      </div>

			      <div class="col-lg-3">
			        <select class="form-control input-sm" name="month">
			          <option>Mes</option>
			          <?php

			             $mon = array('Jan' => 1 ,'Feb'=> 2,'Mar' => 3 ,'Apr'=> 4,'May' => 5 ,'Jun'=> 6,'Jul' => 7 ,'Aug'=> 8,'Sep' => 9 ,'Oct'=> 10,'Nov' => 11 ,'Dec'=> 8 );    
			          
			        
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
			    <div class="col-md-8">
			      <label class="col-md-4 control-label" for=
			      "BIRTHPLACE">Lugar de Nacimiento:</label>

			      <div class="col-md-8">
			        
			         <textarea class="form-control input-sm" id="BIRTHPLACE" name="BIRTHPLACE" placeholder=
			            "Place of Birth" type="text" value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off"></textarea>
			      </div>
			    </div>
			  </div> 


			 <div class="form-group">
			  <div class="col-md-8">
			    <label class="col-md-4 control-label" for=
			    "TELNO">No. de Contacto:</label>

			    <div class="col-md-8">
			      
			       <input class="form-control input-sm" id="TELNO" name="TELNO" placeholder=
			          "Contact No." type="text" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
			    </div>
			  </div>
			</div> 

			 <div class="form-group">
			  <div class="col-md-8">
			    <label class="col-md-4 control-label" for=
			    "CIVILSTATUS">Estado Civil:</label>

			    <div class="col-md-8">
			      <select class="form-control input-sm" name="CIVILSTATUS" id="CIVILSTATUS">
			          <option value="none" >Seleccionar</option>
			          <option value="Single">Soltero</option>
			          <option value="Married">Casasdo</option>
			          <option value="Widow" >Viuda</option>
			          <!-- <option value="Fourth" >Fourth</option> -->
			      </select> 
			    </div>
			  </div>
			</div>  

			 <div class="form-group">
			  <div class="col-md-8">
			    <label class="col-md-4 control-label" for=
			    "EMAILADDRESS">Dirección
				 de Email:</label> 
			    <div class="col-md-8">
			       <input type="Email" class="form-control input-sm" id="EMAILADDRESS" name="EMAILADDRESS" placeholder="Dirección de Email"   autocomplete="false"/> 
			    </div>
			  </div>
			</div>  
			<div class="form-group">
			  <div class="col-md-8">
			    <label class="col-md-4 control-label" for=
			    "USERNAME">Nombre de Usuario:</label>

			    <div class="col-md-8">
			      <input name="deptid" type="hidden" value="">
			      <input  class="form-control input-sm" id="USERNAME" name="USERNAME" placeholder=
			          "Nombre de Usuario"    onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
			      </div>
			  </div>
			</div>

			<div class="form-group">
			  <div class="col-md-8">
			    <label class="col-md-4 control-label" for=
			    "PASS">Contraseña:</label>

			    <div class="col-md-8">
			      <input name="deptid" type="hidden" value="">
			      <input  class="form-control input-sm" id="PASS" name="PASS" placeholder=
			          "Contraseña" type="password"   onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
			       <!-- <input class="form-control input-sm" id="DEPARTMENT_DESC" name="DEPARTMENT_DESC" placeholder=
			          "Description" type="text" value=""> -->
			    </div>
			  </div>
			</div> 
			<div class="form-group">
			  <div class="col-md-8">
			    <label class="col-md-4 control-label" for=
			    "DEGREE">Logros Educativos:</label>

			    <div class="col-md-8">
			      <input name="deptid" type="hidden" value="">
			      <input  class="form-control input-sm" id="DEGREE" name="DEGREE" placeholder=
			          "Logros Educativos"    onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
			      </div>
			  </div>
			</div>  
			<div class="form-group">
			    <div class="col-md-8">
			      <label class="col-md-4 control-label" for=
			      ""></label>  

			      <div class="col-md-8"> 
			      		<label><input type="checkbox"> Al registrarte, estas de acuerdo con nuestros <a href="#">terminos y condiciones</a></label>
			     </div>
			    </div>
			</div>    
			<div class="form-group">
			    <div class="col-md-8">
			      <label class="col-md-4 control-label" for=
			      "idno"></label>  

			      <div class="col-md-8">
			         <button class="btn btn-primary btn-sm" name="btnRegister" type="submit" ><span class="fa fa-save fw-fa"></span> Enviar</button> 
			     
			     </div>
			    </div>
			</div>    
		</form>
	</div>
</section>