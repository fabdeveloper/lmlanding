<?php

require_once '../conf/ISectionManager.php';


class SectionAboutManager implements ISectionManager{
	
	private $objPHPExcel;
	private $sheetName = "about";
	
	private $pathImageAbout;
	private $titleAbout;
	private $descriptionAbout;
	private $titleListAbout;
	private $numItemsAbout;
	
	private $arrayItemsAbout;
	
	
	
	
	
	public function init() {
		
		$objPHPExcel = $this->objPHPExcel;

		$objPHPExcel->setActiveSheetIndexByName($this->sheetName);
		
		$this->pathImageAbout = $objPHPExcel->getActiveSheet()->getCell('B2')->getValue();
		$this->titleAbout = $objPHPExcel->getActiveSheet()->getCell('B3')->getValue();
		$this->descriptionAbout = $objPHPExcel->getActiveSheet()->getCell('B4')->getValue();
		$this->titleListAbout = $objPHPExcel->getActiveSheet()->getCell('B5')->getValue();
		$this->numItemsAbout = $objPHPExcel->getActiveSheet()->getCell('B6')->getValue();
		
		$itemListAbout1 = $objPHPExcel->getActiveSheet()->getCell('B7')->getValue();
		$itemListAbout2 = $objPHPExcel->getActiveSheet()->getCell('B8')->getValue();
		$itemListAbout3 = $objPHPExcel->getActiveSheet()->getCell('B9')->getValue();
		$itemListAbout4 = $objPHPExcel->getActiveSheet()->getCell('B10')->getValue();
		$itemListAbout5 = $objPHPExcel->getActiveSheet()->getCell('B11')->getValue();
		$itemListAbout6 = $objPHPExcel->getActiveSheet()->getCell('B12')->getValue();
		$itemListAbout7 = $objPHPExcel->getActiveSheet()->getCell('B13')->getValue();
		$itemListAbout8 = $objPHPExcel->getActiveSheet()->getCell('B14')->getValue();
		
		
		require_once '../conf/ItemAboutObject.php';
		
		$itemAboutObject1 = new ItemAboutObject();
		$itemAboutObject2 = new ItemAboutObject();
		$itemAboutObject3 = new ItemAboutObject();
		$itemAboutObject4 = new ItemAboutObject();
		$itemAboutObject5 = new ItemAboutObject();
		$itemAboutObject6 = new ItemAboutObject();
		$itemAboutObject7 = new ItemAboutObject();
		$itemAboutObject8 = new ItemAboutObject();
		
		$itemAboutObject1->set($itemListAbout1);
		$itemAboutObject2->set($itemListAbout2);
		$itemAboutObject3->set($itemListAbout3);
		$itemAboutObject4->set($itemListAbout4);
		$itemAboutObject5->set($itemListAbout5);
		$itemAboutObject6->set($itemListAbout6);
		$itemAboutObject7->set($itemListAbout7);
		$itemAboutObject8->set($itemListAbout8);
		
		
		$this->arrayItemsAbout = array($itemAboutObject1, $itemAboutObject2, $itemAboutObject3, $itemAboutObject4, $itemAboutObject5, $itemAboutObject6, $itemAboutObject7, $itemAboutObject8);
		
		
	}
	
	public function printSection() {
		
		$cadena1 = "" .		
		"<div id=\"about\">" .
		"<div class=\"container\">" .
		"<div class=\"row\">" .
		"<div class=\"col-xs-12 col-md-6\"> <img src=\"" . $this->pathImageAbout . "\" class=\"img-responsive\" alt=\"\"> </div>" .
		"<div class=\"col-xs-12 col-md-6\">" .
		"<div class=\"about-text\">" .
		"<h2>" . $this->titleAbout . "</h2>" .
		          "<p>" . $this->descriptionAbout . "</p>" .
		          "<h3>" . $this->titleListAbout . "</h3>" .
		          "<div class=\"list-style\">";
		
		$cadena2 = $this->getStringItems();
		
		$cadena3 = "" .     		            
		          "</div>" .
		        "</div>" .
		      "</div>" .
		    "</div>" .
		  "</div>" .
		"</div>";
		
		return $cadena1 . $cadena2 . $cadena3;
		
	}
	
	public function setXlsReader($objPHPExcel) {
		$this->objPHPExcel = $objPHPExcel;
	}
	
	public function getStringItems() {
		
		$cadena = "";
					        					 
		for ($i = 0; $i < $this->numItemsAbout; $i++) {
			$modulo = $i % 4;
			if($modulo == 0){ $cadena .= "<div class=\"col-lg-12 col-sm-6 col-xs-12\"><ul>"; }
		   $cadena .= $this->arrayItemsAbout[$i]->printItem() . "<br>";	
		   if($modulo == 3){ $cadena .= "</ul></div>";}
		   	
		}	
		return $cadena;				
	}
	
	public function setSheetName($sheetName){
		$this->sheetName = $sheetName;
	}
	
	
	
	
	
	
}



?>