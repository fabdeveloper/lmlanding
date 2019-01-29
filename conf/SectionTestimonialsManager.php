<?php
require_once '../conf/ISectionManager.php';

class SectionTestimonialsManager implements ISectionManager{
	
	private $objPHPExcel;
	private $titleTestimonial;
	private $numItemsTestimonial;
	private $arrayItemsTestimonial;
	
	

	public function init() {
		
		$objPHPExcel = $this->objPHPExcel;
		
		$objPHPExcel->setActiveSheetIndexByName('testimonial');		
		
		$this->titleTestimonial = $objPHPExcel->getActiveSheet()->getCell('B2')->getValue();
		$this->numItemsTestimonial = $objPHPExcel->getActiveSheet()->getCell('B3')->getValue();
		
		$pathImageItemTestimonial1 = $objPHPExcel->getActiveSheet()->getCell('B4')->getValue();
		$parrafoItemTestimonial1 = $objPHPExcel->getActiveSheet()->getCell('B5')->getValue();
		$firmaItemTestimonial1 = $objPHPExcel->getActiveSheet()->getCell('B6')->getValue();
		$pathImageItemTestimonial2 = $objPHPExcel->getActiveSheet()->getCell('B7')->getValue();
		$parrafoItemTestimonial2 = $objPHPExcel->getActiveSheet()->getCell('B8')->getValue();
		$firmaItemTestimonial2 = $objPHPExcel->getActiveSheet()->getCell('B9')->getValue();
		$pathImageItemTestimonial3 = $objPHPExcel->getActiveSheet()->getCell('B10')->getValue();
		$parrafoItemTestimonial3 = $objPHPExcel->getActiveSheet()->getCell('B11')->getValue();
		$firmaItemTestimonial3 = $objPHPExcel->getActiveSheet()->getCell('B12')->getValue();
		$pathImageItemTestimonial4 = $objPHPExcel->getActiveSheet()->getCell('B13')->getValue();
		$parrafoItemTestimonial4 = $objPHPExcel->getActiveSheet()->getCell('B14')->getValue();
		$firmaItemTestimonial4 = $objPHPExcel->getActiveSheet()->getCell('B15')->getValue();
		$pathImageItemTestimonial5 = $objPHPExcel->getActiveSheet()->getCell('B16')->getValue();
		$parrafoItemTestimonial5 = $objPHPExcel->getActiveSheet()->getCell('B17')->getValue();
		$firmaItemTestimonial5 = $objPHPExcel->getActiveSheet()->getCell('B18')->getValue();
		$pathImageItemTestimonial6 = $objPHPExcel->getActiveSheet()->getCell('B19')->getValue();
		$parrafoItemTestimonial6 = $objPHPExcel->getActiveSheet()->getCell('B20')->getValue();
		$firmaItemTestimonial6 = $objPHPExcel->getActiveSheet()->getCell('B21')->getValue();
		
		
		require_once '../conf/ItemTestimonialObject.php';
		
		$itemTestimonialObject1 = new ItemTestimonialObject();
		$itemTestimonialObject2 = new ItemTestimonialObject();
		$itemTestimonialObject3 = new ItemTestimonialObject();
		$itemTestimonialObject4 = new ItemTestimonialObject();
		$itemTestimonialObject5 = new ItemTestimonialObject();
		$itemTestimonialObject6 = new ItemTestimonialObject();		
		
		$itemTestimonialObject1->set($pathImageItemTestimonial1, $parrafoItemTestimonial1, $firmaItemTestimonial1);
		$itemTestimonialObject2->set($pathImageItemTestimonial2, $parrafoItemTestimonial2, $firmaItemTestimonial2);
		$itemTestimonialObject3->set($pathImageItemTestimonial3, $parrafoItemTestimonial3, $firmaItemTestimonial3);
		$itemTestimonialObject4->set($pathImageItemTestimonial4, $parrafoItemTestimonial4, $firmaItemTestimonial4);
		$itemTestimonialObject5->set($pathImageItemTestimonial5, $parrafoItemTestimonial5, $firmaItemTestimonial5);
		$itemTestimonialObject6->set($pathImageItemTestimonial6, $parrafoItemTestimonial6, $firmaItemTestimonial6);
		
		
		$this->arrayItemsTestimonial = array($itemTestimonialObject1, $itemTestimonialObject2, $itemTestimonialObject3, $itemTestimonialObject4, $itemTestimonialObject5, $itemTestimonialObject6);
		
	}
	
	public function setXlsReader($param) {
		$this->objPHPExcel = $param;
	}
	
	public function printSection() {
		
		$cadena1 = "" . 
		"<div id=\"testimonials\">" .
		"<div class=\"container\">" .
		"<div class=\"section-title text-center\">" .
		"<h2>" . $this->titleTestimonial . "</h2>" .
		    "</div>";  
		
		$cadena2 = $this->getStringItems();
							
		$cadena3 = "" .		
		  "</div>" .
		"</div>";	
		
		return $cadena1 . $cadena2 . $cadena3;		
	}
	
	public function getStringItems() {
		
		$cadena = ""; 
	
		for ($i = 0; $i < $this->numItemsTestimonial; $i++) {
		   $cadena .= $this->arrayItemsTestimonial[$i]->printItem();	
		}			
		return $cadena;									
	}
	
	
	
}



?>