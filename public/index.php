<?php


require_once '../conf/confwebReader.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $headTitle; ?></title>
<meta name="description" content="<?php echo $metaDescription; ?>">
<meta name="author" content="<?php echo $metaAuthor; ?>">

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

	<?php 
	
		require_once '../conf/NavbarObject.php';
		
		$navbarObject = new NavbarObject();
		$navbarObject->set($navbarTitle, $navbarTexto1, $navbarTexto2, $navbarTexto3, $navbarTexto4, $navbarTexto5, $navbarTexto6, $navbarTexto7, $caracteristicas, $about, $infoblue, $gallery, $testimonial, $team);
		echo $navbarObject->printObject();	
	
	?>




<!-- Header -->
<header id="header">
  <div class="intro" >
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 intro-text">
            <h1><?php echo $introTitle; ?><span></span></h1>
            <p><?php echo $introDescription; ?></p>
            <a href="#one" class="btn btn-custom btn-lg page-scroll"><?php echo $textoButtonIntro; ?></a> </div>
        </div>
      </div>
    </div>
  </div>
</header>

<div id="one" ></div>



<!-- Features Section -->
<?php 
if ($caracteristicas) {
	require_once '../conf/SectionCaracteristicasManager.php';	
	
	$sectionCaracteristicasManager = new SectionCaracteristicasManager();
	$sectionCaracteristicasManager->setXlsReader($objPHPExcel);
	$sectionCaracteristicasManager->init();
	echo $sectionCaracteristicasManager->printSection();
}
?>


<!-- Services Section -->
<?php 
if ($infoblue) {
	require_once '../conf/SectionInfoblueManager.php';
	
	$sectionInfoblueManager = new SectionInfoblueManager();	
	$sectionInfoblueManager->setXlsReader($objPHPExcel);
	$sectionInfoblueManager->init();
	echo $sectionInfoblueManager->printSection();
}
?>

<!-- Gallery Section -->

<?php 
if ($gallery) {
	require_once '../conf/SectionGalleryManager.php';
	
	$sectionGalleryManager = new SectionGalleryManager();
	$sectionGalleryManager->setXlsReader($objPHPExcel);
	$sectionGalleryManager->init();
	echo $sectionGalleryManager->printSection();	
}
?>

<!-- About Section -->
<?php 
if ($about) {
	require_once '../conf/SectionAboutManager.php';
	
	$sectionAboutManager = new SectionAboutManager();	
	$sectionAboutManager->setXlsReader($objPHPExcel);
	$sectionAboutManager->init();
	echo $sectionAboutManager->printSection();	
}
?>


<!-- Testimonials Section -->

<?php 

if ($testimonial) {
	require_once '../conf/SectionTestimonialsManager.php';
	
	$sectionTestimonialsManager = new SectionTestimonialsManager();
	$sectionTestimonialsManager->setXlsReader($objPHPExcel);
	$sectionTestimonialsManager->init();
	echo $sectionTestimonialsManager->printSection();
}

?>

<!-- Team Section -->

<?php 

if ($team) {
	require_once '../conf/SectionTeamManager.php';
	
	$sectionTeamManager = new SectionTeamManager();
	$sectionTeamManager->setXlsReader($objPHPExcel);
	$sectionTeamManager->init();
	echo $sectionTeamManager->printSection();		
}

?>

<!-- Contact Section -->
<div id="contact">
  <div class="container">
    <div class="col-md-8">
      <div class="row">
        <div class="section-title">
          <h2><?php echo $titleContact; ?></h2>
          <p><?php echo $descriptionContact; ?></p>
        </div>
        
        
        
        
        <form action="RegManager.php" method="post" sentMessage" id="contactForm" novalidate>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" name="name" id="name" class="form-control" placeholder="Nombre" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" name="email" id="email" class="form-control" placeholder="Email" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          
                    <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" name="phone" id="name" class="form-control" placeholder="Telefono" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" name="localidad" id="localidad" class="form-control" placeholder="Localidad" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          

          
          
              <div class="form-group">
                <input type="text" name="subject" id="subject" class="form-control" placeholder="Asunto" required="required">
                <p class="help-block text-danger"></p>
              </div>
              
          <div class="form-group">
            <textarea name="message" id="message" class="form-control" rows="4" placeholder="Mensaje" required></textarea>
            <p class="help-block text-danger"></p>
          </div>
          <div id="success"></div>
          <button type="submit" class="btn btn-custom btn-lg">Enviar</button>
        </form>
        
        
        
        
        
      </div>
    </div>
    <div class="col-md-3 col-md-offset-1 contact-info">
      <div class="contact-item">
        <h3><?php echo $titleContactInfo; ?></h3>
      </div>         
                  	<?php 	        					
        					 
						for ($i = 0; $i < $numItemsContactInfo; $i++) {
						   echo $arrayItemsContactInfo[$i]->printItem();					    
						}	
						
					?>	      
    </div>
    <div class="col-md-12">
      <div class="row">
        <div class="social">
          <ul>
                   <?php 	        					
        					 
						for ($i = 0; $i < $numItemsSocial; $i++) {
						   echo $arrayItemsSocial[$i]->printItem();					    
						}	
						
					?>	
         
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- Footer Section -->
<div id="footer">
  <div class="container text-center">
    <p>&copy;<?php echo $textFooter; ?>. Design by <a href="http://www.templatewire.com" rel="nofollow">TemplateWire</a></p>
  </div>
</div>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/nivo-lightbox.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 

<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
