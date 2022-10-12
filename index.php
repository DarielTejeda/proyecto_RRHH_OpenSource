<?php 
require_once("include/initialize.php"); 
$content='home.php';
$view = (isset($_GET['q']) && $_GET['q'] != '') ? $_GET['q'] : '';
switch ($view) { 
	case 'apply' :
        $title="Enviar Solicitud";	
		$content='applicationform.php';		
		break;
	case 'login' : 
        $title="Ingresar Sesión";	
		$content='login.php';		
		break;
	case 'company' :
        $title="Compañias";	
		$content='company.php';		
		break;
	case 'hiring' :
		$title = isset($_GET['search']) ? 'Hiring in '.$_GET['search'] :"Vacantes"; 
		$content='hirring.php';		
		break;		
	case 'category' :
        $title='Buscar por '. $_GET['search'];	
		$content='category.php';		
		break;
	case 'viewjob' :
        $title="Detalles del Empleo";	
		$content='viewjob.php';		
		break;
	case 'success' :
        $title="Enviar";	
		$content='success.php';		
		break;
	case 'register' :
        $title="Registar Nuevo Miembro";	
		$content='register.php';		
		break;
	case 'Contact' :
        $title='Contáctanos';	
		$content='Contact.php';		
		break;	
	case 'About' :
        $title='Sobre Nosotros';	
		$content='About.php';		
		break;	
	case 'advancesearch' :
        $title='Búsqueda Avanzada';	
		$content='advancesearch.php';		
		break;	

	case 'result' :
        $title='Búsqueda Avanzada';	
		$content='advancesearchresult.php';		
		break;
	case 'search-company' :
        $title='Búsqueda Por Compañia';	
		$content='searchbycompany.php';		
		break;	
	case 'search-function' :
        $title='Búsqueda Por Función';	
		$content='searchbyfunction.php';		
		break;	
	case 'search-jobtitle' :
        $title='Búsqueda Por Título De Trabajo';	
		$content='searchbytitle.php';		
		break;						
	default :
	    $active_home='active';
	    $title="Inicio";	
		$content ='home.php';		
}
require_once("theme/templates.php");
?>