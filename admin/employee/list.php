<?php
	 if(!isset($_SESSION['ADMIN_USERID'])){
      redirect(web_root."admin/index.php");
     }

?> 
	<div class="row">
    <div class="col-lg-12">
            <h1 class="page-header">Lista de Empleados  <a href="index.php?view=add" class="btn btn-primary btn-xs  ">  <i class="fa fa-plus-circle fw-fa"></i> Añadir Nuevo Empleado</a>  </h1>
       		</div>
        	<!-- /.col-lg-12 -->
   		 </div>
                
 
						<form class="wow fadeInDownaction" action="controller.php?action=delete" Method="POST">   		
							<table id="dash-table" class="table table-striped  table-hover table-responsive" style="font-size:12px" cellspacing="0">

							  <thead>
							  	<tr>
							  		<th width="5%">No. Empleado</th>
							  		 <th>Nombre</th>
							  		<th>Dirección</th>
							  		 <th>Sexo</th>
							  		 <th>Edad</th>
							  		 <th>No. Contacto</th>
							  		 <!-- <th>Department</th> -->
							  		 <th>Posición</th>
							  		 <!-- <th>Work Status</th> -->
							  	 	<th width="14%" >Acción</th> 
							  	</tr>	
							  </thead> 
							  <tbody>
							  	<?php   
							  		// $mydb->setQuery("SELECT * 
											// 			FROM  `tblusers` WHERE TYPE != 'Customer'");
							  		$mydb->setQuery("SELECT * 
														FROM   `tblemployees`");
							  		$cur = $mydb->loadResultList();

									foreach ($cur as $result) { 
							  		echo '<tr>';
							  		// echo '<td width="5%" align="center"></td>';
							  		echo '<td>' . $result->EMPLOYEEID.'</a></td>';
							  		echo '<td>'. $result->LNAME.', '. $result->FNAME.'</td>';
							  		echo '<td>'. $result->ADDRESS.'</td>';
							  		echo '<td>'. $result->SEX.'</td>';
							  		echo '<td>'. $result->AGE.'</td>';
							  		echo '<td>'. $result->TELNO.'</td>';
							  		// echo '<td>'. $result->DEPARTMENT.'</td>';
							  		echo '<td>'. $result->POSITION.'</td>';
							  		// echo '<td>'. $result->WORKSTATS.'</td>'; 
					  				echo '<td align="center" >    
					  		             <a title="Edit" href="index.php?view=edit&id='.$result->EMPLOYEEID.'"  class="btn btn-info btn-xs  ">
					  		             <span class="fa fa-edit fw-fa"></span></a> 
					  		             <a title="Delete" href="controller.php?action=delete&id='.$result->EMPLOYEEID.'"  class="btn btn-danger btn-xs  ">
					  		             <span class="fa fa-trash-o fw-fa"></span></a> 
					  					 </td>';
							  		echo '</tr>';
							  	} 
							  	?>
							  </tbody>
								
							</table>
 
							 
							</form>
       
                 
 