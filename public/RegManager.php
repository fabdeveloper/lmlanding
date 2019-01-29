<?php


$titulo = "Oh !";
$descripcion = "Como he llegado hasta aquí ?";


if(isset($_POST['email'])){

    // Objeto que implementa la interfaz IFormObject
    
	require_once '../public/InformationObject.php';
	$iformObject = new InformationObject();
		
	
	$iformObject->set($_POST);
	
	require '../db/DBManager.php';


	// Datos de conexion
	
	$servername = "localhost";
	$username = "id7665079_webserie000002";
	$password = "nomelase";
	$dbname = "id7665079_webserie000002";	
	

	$dbManager = new DBManager($servername, $username, $password, $dbname);
	$dbManager->init();

	if($dbManager->executeQuery($iformObject->getQuery())){
		//echo "<br>INSERTADO<br>";
		$titulo = "Gracias";
		$descripcion = "Estaremos en contacto.";
	}else{
		//echo "<br> ERROR : NO INSERTADO<br>";
		$titulo = "Oh no !";
		$descripcion = "Se ha producido un error durante el proceso de registro.";
		

	}

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>LIMPIO MALLORCA</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top">LIMPIO MALLORCA</a> </div>
    

  </div>
</nav>




<!-- Services Section -->
<div id="services" class="text-center">
  <div class="container">
    <div class="section-title">
      <h2><?php echo $titulo; ?></h2>
      <p><?php echo $descripcion; ?></p>
    </div>    
    
  </div>
</div>





<!-- Footer Section -->
<div id="footer">
  <div class="container text-center">
    <p>&copy; 2019 LIMPIO MALLORCA. Design by <a href="http://www.templatewire.com" rel="nofollow">TemplateWire</a></p>
  </div>
</div>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/nivo-lightbox.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script> 
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>