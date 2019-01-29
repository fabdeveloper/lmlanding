<?php

// cargar configuracion excel
//echo "cargando IOFactory.php...";
include_once('../Excel/Classes/PHPExcel/IOFactory.php');
//echo "cargado IOFactory.php.";


$inputFileName = '../conf/confweb.xls';

$inputFileType = PHPExcel_IOFactory::identify($inputFileName);
$objReader = PHPExcel_IOFactory::createReader($inputFileType);
$objPHPExcel = $objReader->load($inputFileName);



/*************************************************************/
// HEADER

$objPHPExcel->setActiveSheetIndexByName('header');

$headTitle = $objPHPExcel->getActiveSheet()->getCell('B2')->getValue();
$metaDescription = $objPHPExcel->getActiveSheet()->getCell('B3')->getValue();
$metaAuthor = $objPHPExcel->getActiveSheet()->getCell('B4')->getValue();


/*************************************************************/
// INTRO

$objPHPExcel->setActiveSheetIndexByName('intro');

$introTitle = $objPHPExcel->getActiveSheet()->getCell('B2')->getValue();
$introDescription = $objPHPExcel->getActiveSheet()->getCell('B3')->getValue();
$textoButtonIntro = $objPHPExcel->getActiveSheet()->getCell('B4')->getValue();



/*************************************************************/
// CONTACT

$objPHPExcel->setActiveSheetIndexByName('contact');

$titleContact = $objPHPExcel->getActiveSheet()->getCell('B2')->getValue();
$descriptionContact = $objPHPExcel->getActiveSheet()->getCell('B3')->getValue();
$titleContactInfo = $objPHPExcel->getActiveSheet()->getCell('B4')->getValue();
$numItemsContactInfo = $objPHPExcel->getActiveSheet()->getCell('B5')->getValue();
$iconItemContactInfo1 = $objPHPExcel->getActiveSheet()->getCell('B6')->getValue();
$nameItemContactInfo1 = $objPHPExcel->getActiveSheet()->getCell('B7')->getValue();
$valueItemContactInfo1 = $objPHPExcel->getActiveSheet()->getCell('B8')->getValue();
$iconItemContactInfo2 = $objPHPExcel->getActiveSheet()->getCell('B9')->getValue();
$nameItemContactInfo2 = $objPHPExcel->getActiveSheet()->getCell('B10')->getValue();
$valueItemContactInfo2 = $objPHPExcel->getActiveSheet()->getCell('B11')->getValue();
$iconItemContactInfo3 = $objPHPExcel->getActiveSheet()->getCell('B12')->getValue();
$nameItemContactInfo3 = $objPHPExcel->getActiveSheet()->getCell('B13')->getValue();
$valueItemContactInfo3 = $objPHPExcel->getActiveSheet()->getCell('B14')->getValue();
$iconItemContactInfo4 = $objPHPExcel->getActiveSheet()->getCell('B15')->getValue();
$nameItemContactInfo4 = $objPHPExcel->getActiveSheet()->getCell('B16')->getValue();
$valueItemContactInfo4 = $objPHPExcel->getActiveSheet()->getCell('B17')->getValue();


require '../conf/ItemContactinfoObject.php';

$itemContactinfoObject1 = new ItemContactinfoObject();
$itemContactinfoObject2 = new ItemContactinfoObject();
$itemContactinfoObject3 = new ItemContactinfoObject();
$itemContactinfoObject4 = new ItemContactinfoObject();

$itemContactinfoObject1->set($iconItemContactInfo1, $nameItemContactInfo1, $valueItemContactInfo1);
$itemContactinfoObject2->set($iconItemContactInfo2, $nameItemContactInfo2, $valueItemContactInfo2);
$itemContactinfoObject3->set($iconItemContactInfo3, $nameItemContactInfo3, $valueItemContactInfo3);
$itemContactinfoObject4->set($iconItemContactInfo4, $nameItemContactInfo4, $valueItemContactInfo4);


$arrayItemsContactInfo = array($itemContactinfoObject1, $itemContactinfoObject2, $itemContactinfoObject3, $itemContactinfoObject4);



/*************************************************************/
// SOCIAL

$objPHPExcel->setActiveSheetIndexByName('social');

$numItemsSocial = $objPHPExcel->getActiveSheet()->getCell('B2')->getValue();
$hrefItemSocial1 = $objPHPExcel->getActiveSheet()->getCell('B3')->getValue();
$iconItemSocial1 = $objPHPExcel->getActiveSheet()->getCell('B4')->getValue();
$hrefItemSocial2 = $objPHPExcel->getActiveSheet()->getCell('B5')->getValue();
$iconItemSocial2 = $objPHPExcel->getActiveSheet()->getCell('B6')->getValue();
$hrefItemSocial3 = $objPHPExcel->getActiveSheet()->getCell('B7')->getValue();
$iconItemSocial3 = $objPHPExcel->getActiveSheet()->getCell('B8')->getValue();
$hrefItemSocial4 = $objPHPExcel->getActiveSheet()->getCell('B9')->getValue();
$iconItemSocial4 = $objPHPExcel->getActiveSheet()->getCell('B10')->getValue();
$hrefItemSocial5 = $objPHPExcel->getActiveSheet()->getCell('B11')->getValue();
$iconItemSocial5 = $objPHPExcel->getActiveSheet()->getCell('B12')->getValue();
$hrefItemSocial6 = $objPHPExcel->getActiveSheet()->getCell('B13')->getValue();
$iconItemSocial6 = $objPHPExcel->getActiveSheet()->getCell('B14')->getValue();


require '../conf/ItemSocialObject.php';

$itemSocialObject1 = new ItemSocialObject();
$itemSocialObject2 = new ItemSocialObject();
$itemSocialObject3 = new ItemSocialObject();
$itemSocialObject4 = new ItemSocialObject();
$itemSocialObject5 = new ItemSocialObject();
$itemSocialObject6 = new ItemSocialObject();


$itemSocialObject1->set($hrefItemSocial1, $iconItemSocial1);
$itemSocialObject2->set($hrefItemSocial2, $iconItemSocial2);
$itemSocialObject3->set($hrefItemSocial3, $iconItemSocial3);
$itemSocialObject4->set($hrefItemSocial4, $iconItemSocial4);
$itemSocialObject5->set($hrefItemSocial5, $iconItemSocial5);
$itemSocialObject6->set($hrefItemSocial6, $iconItemSocial6);



$arrayItemsSocial = array($itemSocialObject1, $itemSocialObject2, $itemSocialObject3, $itemSocialObject4, $itemSocialObject5, $itemSocialObject6);

/*************************************************************/
// NAVBAR

$objPHPExcel->setActiveSheetIndexByName('navbar');

$navbarTitle = $objPHPExcel->getActiveSheet()->getCell('B2')->getValue();
$navbarTexto1 = $objPHPExcel->getActiveSheet()->getCell('B3')->getValue();
$navbarTexto2 = $objPHPExcel->getActiveSheet()->getCell('B4')->getValue();
$navbarTexto3 = $objPHPExcel->getActiveSheet()->getCell('B5')->getValue();
$navbarTexto4 = $objPHPExcel->getActiveSheet()->getCell('B6')->getValue();
$navbarTexto5 = $objPHPExcel->getActiveSheet()->getCell('B7')->getValue();
$navbarTexto6 = $objPHPExcel->getActiveSheet()->getCell('B8')->getValue();
$navbarTexto7 = $objPHPExcel->getActiveSheet()->getCell('B9')->getValue();



/*************************************************************/
// FOOTER

$objPHPExcel->setActiveSheetIndexByName('footer');

$textFooter = $objPHPExcel->getActiveSheet()->getCell('B2')->getValue();





/*************************************************************/
// SHOW

$objPHPExcel->setActiveSheetIndexByName('show');

$caracteristicas = $objPHPExcel->getActiveSheet()->getCell('B2')->getValue();
$about = $objPHPExcel->getActiveSheet()->getCell('B3')->getValue();
$infoblue = $objPHPExcel->getActiveSheet()->getCell('B4')->getValue();
$gallery = $objPHPExcel->getActiveSheet()->getCell('B5')->getValue();
$testimonial = $objPHPExcel->getActiveSheet()->getCell('B6')->getValue();
$team = $objPHPExcel->getActiveSheet()->getCell('B7')->getValue();
//$contact = $objPHPExcel->getActiveSheet()->getCell('B8')->getValue();





/*************************************************************/
// EMAILCONF

$objPHPExcel->setActiveSheetIndexByName('emailconf');

$diremail = $objPHPExcel->getActiveSheet()->getCell('B2')->getValue();



?>