<?php  
  if (!isset($_SESSION['ADMIN_USERID'])){
      redirect(web_root."admin/index.php");
     }
  
// $autonum = New Autonumber();
// $res = $autonum->single_autonumber(2);
 @$empid = $_GET['id'];
    if($empid==''){
  redirect("index.php");
}
 

  $employee = New Employee();
  $emp = $employee->single_employee($empid);
 

  if ($emp->SEX == 'Male') {
    # code...
   $radio =  '<div class="col-md-8">
             <div class="col-lg-5">
                <div class="radio">
                  <label><input   id="optionsRadios1" name="optionsRadios" type="radio" value="Female">Femenino</label>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="radio">
                  <label><input id="optionsRadios2"  checked="True" name="optionsRadios" type="radio" value="Male">Masculino</label>
                </div>
              </div> 
             
          </div>';
  }else{
       $radio =  '<div class="col-md-8">
             <div class="col-lg-5">
                <div class="radio">
                  <label><input   id="optionsRadios1"  checked="True" name="optionsRadios" type="radio" value="Female">Femenino</label>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="radio">
                  <label><input id="optionsRadios2"  name="optionsRadios" type="radio" value="Male"> Masculino</label>
                </div>
              </div> 
             
          </div>';

  }

   switch ($emp->CIVILSTATUS) {

     case 'Single':
       # code...
        $civilstatus =' <select class="form-control input-sm" name="CIVILSTATUS" id="CIVILSTATUS">
                                      <option value="none" >Seleccionar</option>
                                      <option SELECTED value="Single">Soltero</option>
                                      <option value="Married">Casado</option>
                                      <option value="Widow" >Viuda</option>
                                      <!-- <option value="Fourth" >Fourth</option> -->
                                  </select> ';
       break;
     case 'Married':
       # code...
         $civilstatus=' <select class="form-control input-sm" name="CIVILSTATUS" id="CIVILSTATUS">
                                      <option value="none" >Seleccionar</option>
                                      <option  value="Single">Soltero</option>
                                      <option SELECTED value="Married">Casado</option>
                                      <option value="Widow" >Viuda</option>
                                      <!-- <option value="Fourth" >Fourth</option> -->
                                  </select> ';

       break;
     case 'Widow':
       # code...
       $civilstatus=' <select class="form-control input-sm" name="CIVILSTATUS" id="CIVILSTATUS">
                                      <option value="none" >Seleccionar</option>
                                      <option  value="Single">Soltero</option>
                                      <option  value="Married">Casado</option>
                                      <option SELECTED value="Widow" >Viuda</option>
                                      <!-- <option value="Fourth" >Fourth</option> -->
                                  </select> ';
       break;
     default:
         $civilstatus=' <select class="form-control input-sm" name="CIVILSTATUS" id="CIVILSTATUS">
                                      <option SELECTED value="none" >Seleccionar</option>
                                      <option  value="Single">Soltero</option>
                                      <option  value="Married">Casado</option>
                                      <option  value="Widow" >Viuda</option> 
                                  </select> ';
         break;     
       
   }

   switch ($emp->WORKSTATS) {

     case 'Regular':
       # code...
        $workstatus ='
        <select class="form-control input-sm" name="WORKSTATS" id="WORKSTATS">
                                      <option value="none" >Seleccionar</option>
                                      <option value="Temporary">Temporal</option>
                                      <option SELECTED  value="Regular"Regular</option>
                                      <option value="Probationary">De prueba</option> 
                                  </select> ';
       break;

     case 'Regular':
       # code...
        $workstatus ='
        <select class="form-control input-sm" name="WORKSTATS" id="WORKSTATS">
                                      <option value="none" >Seleccionar</option>
                                      <option value="Temporary">Temporal</option>
                                      <option SELECTED value="Regular">Regular</option>
                                      <option value="Probationary">De prueba</option> 
                                  </select> ';
       break;
     case 'Probationary':
       # code...
         $workstatus='
         <select class="form-control input-sm" name="WORKSTATS" id="WORKSTATS">
                                      <option value="none" >Seleccionar</option>
                                      <option value="Temporary">Temporal</option>
                                      <option value="Regular">Regular</option>
                                      <option SELECTED value="Probationary">De prueba</option> 
                                  </select> ';

       break; 
	   
     default:
        $workstatus='
       <select class="form-control input-sm" name="WORKSTATS" id="WORKSTATS">
                                      <option SELECTED value="none" >Seleccionar</option>
                                      <option value="Temporary">Temporal</option>
                                      <option value="Regular">Regular</option>
                                      <option value="Probationary">De prueba</option> 
                                  </select> ';
        break;
       
   }

  
 ?> 
 
       <div class="center wow fadeInDown">
             <h2 class="page-header">Actualizar Empleado</h2>
            <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
        </div>
 

                 <form class="form-horizontal span6" action="controller.php?action=edit" method="POST"> 
              

                <input  id="EMPLOYEEID" name="EMPLOYEEID" type="hidden" value="<?php echo $emp->EMPLOYEEID;?>"  >
                   
                
                 <div class="form-group">
                      <div class="col-md-8">
                        <label class="col-md-4 control-label" for=
                        "FNAME">Primer Nombre:</label>

                        <div class="col-md-8"> 
                           <input class="form-control input-sm" id="FNAME" name="FNAME" placeholder=
                              "Primer Nombre" type="text" value="<?php echo $emp->FNAME;?>"   autocomplete="off">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-md-8">
                        <label class="col-md-4 control-label" for=
                        "LNAME">Apellido:</label>

                        <div class="col-md-8"> 
                          <input  class="form-control input-sm" id="LNAME" name="LNAME" placeholder=
                              "Apellido"   value="<?php echo $emp->LNAME;?>"    autocomplete="off">
                          </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-md-8">
                        <label class="col-md-4 control-label" for=
                        "MNAME">Segundo Nombre:</label>

                        <div class="col-md-8"> 
                          <input  class="form-control input-sm" id="MNAME" name="MNAME" placeholder=
                              "Segundo Nombre"   value="<?php echo $emp->MNAME;?>"     autocomplete="off">
                           <!-- <input class="form-control input-sm" id="DEPARTMENT_DESC" name="DEPARTMENT_DESC" placeholder=
                              "Description" type="text" value=""> -->
                        </div>
                      </div>
                    </div> 

                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "ADDRESS">Direcci??n:</label>

                      <div class="col-md-8">
                        
                         <textarea class="form-control input-sm" id="ADDRESS" name="ADDRESS" placeholder=
                            "Direcci??n" type="text" value="" required   autocomplete="off"><?php echo $emp->ADDRESS;?></textarea>
                      </div>
                    </div>
                  </div> 


                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "Gender">Sexo:</label>

                      <?php
                        echo $radio;
                      ?>
 
                    </div>
                  </div>  

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "BIRTHDATE">Fecha de Nacimiento:</label>

                      <div class="col-md-8">
                        <div class="input-group">
                            <span class="input-group-addon"> 
                             <i class="fa fa-calendar"></i> 
                            </span>  
                             <input class="form-control input-sm date_picker" id="BIRTHDATE" name="BIRTHDATE" placeholder="Fecha de Nacimiento" type="text"    value="<?php echo date_format(date_create($emp->BIRTHDATE),'m/d/Y');?>" required  autocomplete="off">
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
                                        "Lugar de Nacimiento" type="text" value="" required   
                                        autocomplete="off"><?php echo $emp->BIRTHPLACE;?></textarea>
                                  </div>
                                </div>
                              </div> 


                             <div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "TELNO">No. de Contacto:</label>

                                <div class="col-md-8">
                                  
                                   <input class="form-control input-sm" id="TELNO" name="TELNO" placeholder=
                                      "No. de Contacto" type="text" any value="<?php echo $emp->TELNO;?>" required   autocomplete="off">
                                </div>
                              </div>
                            </div> 

                             <div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "CIVILSTATUS">Estado Civil:</label>

                                <div class="col-md-8">
                                  <?php echo $civilstatus; ?>
                                </div>
                              </div>
                            </div> 

                            <div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "POSITION">Posici??n:</label>

                                <div class="col-md-8">
                                  
                                   <input class="form-control input-sm" id="POSITION" name="POSITION" placeholder=
                                      "Posici??n" type="text" any value="<?php echo $emp->POSITION;?>" required   autocomplete="off">
                                </div>
                              </div>
                            </div>


                             
                            <div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "EMP_HIREDDATE">Fecha de Contrataci??n:</label> 
                                <div class="col-md-8">
                                    <div class="input-group date  " data-provide="datepicker" data-date="2012-12-21T15:25:00Z">
                                   <input type="input" class="form-control input-sm date_picker" id="HIREDDATE" name="EMP_HIREDDATE" placeholder="mm/dd/yyyy"   autocomplete="false" value="<?php echo date_format(date_create($emp->DATEHIRED),'m/d/Y'); ?>"/> 
                                     <span class="input-group-addon"><i class="fa fa-th"></i></span>
                                 </div>
                                </div>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "EMP_EMAILADDRESS">Direcci??n de Email:</label> 
                                <div class="col-md-8">
                                   <input type="Email" class="form-control input-sm" id="EMP_EMAILADDRESS" name="EMP_EMAILADDRESS" placeholder="Direcci??n de Email"   autocomplete="false" value="<?php echo  $emp->EMP_EMAILADDRESS; ?>"/> 
                                </div>
                              </div>
                            </div>  


                         <div class="form-group">
                            <div class="col-md-8">
                              <label class="col-md-4 control-label" for=
                              "COMPANYNAME">Nombre de la Compa??ia:</label>

                              <div class="col-md-8"> 
                                <select class="form-control input-sm" id="COMPANYID" name="COMPANYID">
                                  <option value="None">Seleccionar</option>
                                  <?php 
                                    $sql ="Select * From tblcompany WHERE COMPANYID=".$emp->COMPANYID;
                                    $mydb->setQuery($sql);
                                    $result  = $mydb->loadResultList();
                                    foreach ($result as $row) {
                                      # code...
                                      echo '<option SELECTED value='.$row->COMPANYID.'>'.$row->COMPANYNAME.'</option>';
                                    }
                                    $sql ="Select * From tblcompany WHERE COMPANYID!=".$emp->COMPANYID;
                                    $mydb->setQuery($sql);
                                    $result  = $mydb->loadResultList();
                                    foreach ($result as $row) {
                                      # code...
                                      echo '<option value='.$row->COMPANYID.'>'.$row->COMPANYNAME.'</option>';
                                    }

                                  ?>
                                </select>
                              </div>
                            </div>
                          </div>  
 
               
                  
             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                       <button class="btn btn-primary btn-sm" name="save" type="submit" ><span class="fa fa-save fw-fa"></span>  Guardar</button> 
                          <!-- <a href="index.php" class="btn btn-info"><span class="fa fa-arrow-circle-left fw-fa"></span></span>&nbsp;<strong>List of Users</strong></a> -->
                       </div>
                    </div>
                  </div> 
        </form>


             