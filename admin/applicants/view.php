<?php 
global $mydb;
	$red_id = isset($_GET['id']) ? $_GET['id'] : '';

	$jobregistration = New JobRegistration();
	$jobreg = $jobregistration->single_jobregistration($red_id);
	 // `COMPANYID`, `JOBID`, `APPLICANTID`, `APPLICANT`, `REGISTRATIONDATE`, `REMARKS`, `FILEID`, `PENDINGAPPLICATION`


	$applicant = new Applicants();
	$appl = $applicant->single_applicant($jobreg->APPLICANTID);
 // `FNAME`, `LNAME`, `MNAME`, `ADDRESS`, `SEX`, `CIVILSTATUS`, `BIRTHDATE`, `BIRTHPLACE`, `AGE`, `USERNAME`, `PASS`, `EMAILADDRESS`,CONTACTNO

	$jobvacancy = New Jobs();
	$job = $jobvacancy->single_job($jobreg->JOBID);
 // `COMPANYID`, `CATEGORY`, `OCCUPATIONTITLE`, `REQ_NO_EMPLOYEES`, `SALARIES`, `DURATION_EMPLOYEMENT`, `QUALIFICATION_WORKEXPERIENCE`, `JOBDESCRIPTION`, `PREFEREDSEX`, `SECTOR_VACANCY`, `JOBSTATUS`, `DATEPOSTED`

	$company = new Company();
	$comp = $company->single_company($jobreg->COMPANYID);
	 // `COMPANYNAME`, `COMPANYADDRESS`, `COMPANYCONTACTNO`

	$sql = "SELECT * FROM `tblattachmentfile` WHERE `FILEID`=" .$jobreg->FILEID;
	$mydb->setQuery($sql);
	$attachmentfile = $mydb->loadSingleResult();


?> 
<style type="text/css">
.content-header {
	min-height: 50px;
	border-bottom: 1px solid #ddd;
	font-size: 15px;
	font-weight: bold;
}
.content-body {
	min-height: 350px;
	/*border-bottom: 1px solid #ddd;*/
}
.content-body >p {
	padding:10px;
	font-size: 12px;
	font-weight: bold;
	border-bottom: 1px solid #ddd;
}
.content-footer {
	min-height: 100px;
	border-top: 1px solid #ddd;

}
.content-footer > p {
	padding:5px;
	font-size: 15px;
	font-weight: bold; 
}
 
.content-footer textarea {
	width: 100%;
	height: 200px;
}
.content-footer  .submitbutton{  
	margin-top: 20px;
	/*padding: 0;*/

}
</style>
<form action="controller.php?action=approve" method="POST">
<div class="col-sm-12 content-header" style="">Ver Detalles</div>
<div class="col-sm-6 content-body" > 
	<p>Detalles del Empleo</p> 
	<h3><?php echo $job->OCCUPATIONTITLE; ?></h3>
	<input type="hidden" name="JOBREGID" value="<?php echo $jobreg->REGISTRATIONID;?>">
	<input type="hidden" name="APPLICANTID" value="<?php echo $appl->APPLICANTID;?>">

	<div class="col-sm-6">
		<ul>
            <li><i class="fp-ht-bed"></i>Número De Empleados Requeridos: <?php echo $job->REQ_NO_EMPLOYEES; ?></li>
            <li><i class="fp-ht-food"></i>Salario: <?php echo number_format($job->SALARIES,2);  ?></li>
            <li><i class="fa fa-sun-"></i>Duración del Empleo: <?php echo $job->DURATION_EMPLOYEMENT; ?></li>
        </ul>
	</div> 
	<div class="col-sm-6">
		<ul> 
            <li><i class="fp-ht-tv"></i>Sexo Preferido: <?php echo $job->PREFEREDSEX; ?></li>
            <li><i class="fp-ht-computer"></i>Sector de la vacante: <?php echo $job->SECTOR_VACANCY; ?></li>
        </ul>
	</div>
	<div class="col-sm-12">
		<p>Descripción del Empleo: </p>   
		<p style="margin-left: 15px;"><?php echo $job->JOBDESCRIPTION;?></p>
	</div>
	<div class="col-sm-12"> 
		<p>Calificación/Experiencia Laboral: </p>
		<p style="margin-left: 15px;"><?php echo $job->QUALIFICATION_WORKEXPERIENCE; ?></p>
	</div>
	<div class="col-sm-12"> 
		<p>Empleado: </p>
		<p style="margin-left: 15px;"><?php echo $comp->COMPANYNAME ; ?></p> 
		<p style="margin-left: 15px;">@ <?php echo $comp->COMPANYADDRESS ; ?></p>
	</div>
</div>
<div class="col-sm-6 content-body" >
	<p>Información del Solicitante</p> 
	<h3> <?php echo $appl->LNAME. ', ' .$appl->FNAME . ' ' . $appl->MNAME;?></h3>
	<ul> 
		<li>Dirección: <?php echo $appl->ADDRESS; ?></li>
		<li>No. de Contacto: <?php echo $appl->CONTACTNO;?></li>
		<li>Dirección de Email: <?php echo $appl->EMAILADDRESS;?></li>
		<li>Sexo: <?php echo $appl->SEX;?></li>
		<li>Edad: <?php echo $appl->AGE;?></li> 
	</ul>
	<div class="col-sm-12"> 
		<p>Logros Educativos: </p>
		<p style="margin-left: 15px;"><?php echo $appl->DEGREE;?></p>
	</div>


</div> 
<div class="col-sm-12 content-footer">
<p><i class="fa fa-paperclip"></i>  Archivos adjuntos</p>
	<div class="col-sm-12 slider">
		 <h3>Descargar CV <a href="<?php echo web_root.'applicant/'.$attachmentfile->FILE_LOCATION; ?>">Aquí</a></h3>
	</div> 

	<div class="col-sm-12">
		<p>Feedback</p>
		<textarea class="input-group" name="REMARKS"><?php echo isset($jobreg->REMARKS) ? $jobreg->REMARKS : ""; ?></textarea>
	</div>
	<div class="col-sm-12  submitbutton "> 
		<button type="submit" name="submit" class="btn btn-primary">Enviar</button>
	</div> 
</div>
</form>