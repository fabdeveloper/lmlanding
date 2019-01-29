<?php

$sheet = $_GET["supporting"];
$sheetname = "index";

switch($sheet){
	case 1:
		$sheetname = "supporting1";
		break;
	case 2:
		$sheetname = "supporting2";
		break;
	case 3:
		$sheetname = "supporting3";
		break;
	case 4:
		$sheetname = "supporting4";
		break;
	case 5:
		$sheetname = "supporting5";
		break;
	case 6:
		$sheetname = "supporting6";
		break;
	default:
		break;

}

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


<?php

require_once '../conf/xlsReader.php';
require_once '../conf/SectionAboutManager.php';

$sectionAboutManager = new SectionAboutManager();
$sectionAboutManager->setSheetName($sheetname);
$sectionAboutManager->setXlsReader($objPHPExcel);
$sectionAboutManager->init();
echo $sectionAboutManager->printSection();



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
        <form name="sentMessage" id="contactForm" novalidate>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" id="name" class="form-control" placeholder="Name" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" id="email" class="form-control" placeholder="Email" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="form-group">
            <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
            <p class="help-block text-danger"></p>
          </div>
          <div id="success"></div>
          <button type="submit" class="btn btn-custom btn-lg">Send Message</button>
        </form>
      </div>
    </div>
    <div class="col-md-3 col-md-offset-1 contact-info">
      <div class="contact-item">
        <h3><?php echo $titleContactInfo; ?></h3>
        <p><span><i class="<?php echo $iconItemContactInfo1; ?>"></i><?php echo $nameItemContactInfo1; ?></span><?php echo $valueItemContactInfo1; ?></p>
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
<script type="text/javascript" src="js/contact_me.js"></script> 
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
