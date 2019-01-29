<?php

require_once '../conf/ISectionManager.php';


class SectionInfoblueManager implements ISectionManager{
	
	private $objPHPExcel;
	private $arrayItemsInfoblue;
	
	private $titleInfoBlue;
	private $descriptionInfoBlue;
	private $numItemsInfoBlue;
	
	
	
	
	
	
	
	public function init() {
		$objPHPExcel = $this->objPHPExcel;		
		
		$objPHPExcel->setActiveSheetIndexByName('infoblue');		
		
		$this->titleInfoBlue = $objPHPExcel->getActiveSheet()->getCell('B2')->getValue();
		$this->descriptionInfoBlue = $objPHPExcel->getActiveSheet()->getCell('B3')->getValue();
		$this->numItemsInfoBlue = $objPHPExcel->getActiveSheet()->getCell('B4')->getValue();
		
		$iconItemInfoBlue1 = $objPHPExcel->getActiveSheet()->getCell('B5')->getValue();
		$titleItemInfoBlue1 = $objPHPExcel->getActiveSheet()->getCell('B6')->getValue();
		$descriptionItemInfoBlue1 = $objPHPExcel->getActiveSheet()->getCell('B7')->getValue();
		$iconItemInfoBlue2 = $objPHPExcel->getActiveSheet()->getCell('B8')->getValue();
		$titleItemInfoBlue2 = $objPHPExcel->getActiveSheet()->getCell('B9')->getValue();
		$descriptionItemInfoBlue2 = $objPHPExcel->getActiveSheet()->getCell('B10')->getValue();
		$iconItemInfoBlue3 = $objPHPExcel->getActiveSheet()->getCell('B11')->getValue();
		$titleItemInfoBlue3 = $objPHPExcel->getActiveSheet()->getCell('B12')->getValue();
		$descriptionItemInfoBlue3 = $objPHPExcel->getActiveSheet()->getCell('B13')->getValue();
		$iconItemInfoBlue4 = $objPHPExcel->getActiveSheet()->getCell('B14')->getValue();
		$titleItemInfoBlue4 = $objPHPExcel->getActiveSheet()->getCell('B15')->getValue();
		$descriptionItemInfoBlue4 = $objPHPExcel->getActiveSheet()->getCell('B16')->getValue();
		$iconItemInfoBlue5 = $objPHPExcel->getActiveSheet()->getCell('B17')->getValue();
		$titleItemInfoBlue5 = $objPHPExcel->getActiveSheet()->getCell('B18')->getValue();
		$descriptionItemInfoBlue5 = $objPHPExcel->getActiveSheet()->getCell('B19')->getValue();
		$iconItemInfoBlue6 = $objPHPExcel->getActiveSheet()->getCell('B20')->getValue();
		$titleItemInfoBlue6 = $objPHPExcel->getActiveSheet()->getCell('B21')->getValue();
		$descriptionItemInfoBlue6 = $objPHPExcel->getActiveSheet()->getCell('B22')->getValue();
		$iconItemInfoBlue7 = $objPHPExcel->getActiveSheet()->getCell('B23')->getValue();
		$titleItemInfoBlue7 = $objPHPExcel->getActiveSheet()->getCell('B24')->getValue();
		$descriptionItemInfoBlue7 = $objPHPExcel->getActiveSheet()->getCell('B25')->getValue();
		$iconItemInfoBlue8 = $objPHPExcel->getActiveSheet()->getCell('B26')->getValue();
		$titleItemInfoBlue8 = $objPHPExcel->getActiveSheet()->getCell('B27')->getValue();
		$descriptionItemInfoBlue8 = $objPHPExcel->getActiveSheet()->getCell('B28')->getValue();
		$iconItemInfoBlue9 = $objPHPExcel->getActiveSheet()->getCell('B29')->getValue();
		$titleItemInfoBlue9 = $objPHPExcel->getActiveSheet()->getCell('B30')->getValue();
		$descriptionItemInfoBlue9 = $objPHPExcel->getActiveSheet()->getCell('B31')->getValue();
		
		
		require_once '../conf/ItemInfoblueObject.php';
		
		$itemInfoblueObject1 =  new ItemInfoblueObject();
		$itemInfoblueObject2 =  new ItemInfoblueObject();
		$itemInfoblueObject3 =  new ItemInfoblueObject();
		$itemInfoblueObject4 =  new ItemInfoblueObject();
		$itemInfoblueObject5 =  new ItemInfoblueObject();
		$itemInfoblueObject6 =  new ItemInfoblueObject();
		$itemInfoblueObject7 =  new ItemInfoblueObject();
		$itemInfoblueObject8 =  new ItemInfoblueObject();
		$itemInfoblueObject9 =  new ItemInfoblueObject();
		
		
		$itemInfoblueObject1->set($iconItemInfoBlue1, $titleItemInfoBlue1, $descriptionItemInfoBlue1);
		$itemInfoblueObject2->set($iconItemInfoBlue2, $titleItemInfoBlue2, $descriptionItemInfoBlue2);
		$itemInfoblueObject3->set($iconItemInfoBlue3, $titleItemInfoBlue3, $descriptionItemInfoBlue3);
		$itemInfoblueObject4->set($iconItemInfoBlue4, $titleItemInfoBlue4, $descriptionItemInfoBlue4);
		$itemInfoblueObject5->set($iconItemInfoBlue5, $titleItemInfoBlue5, $descriptionItemInfoBlue5);
		$itemInfoblueObject6->set($iconItemInfoBlue6, $titleItemInfoBlue6, $descriptionItemInfoBlue6);
		$itemInfoblueObject7->set($iconItemInfoBlue7, $titleItemInfoBlue7, $descriptionItemInfoBlue7);
		$itemInfoblueObject8->set($iconItemInfoBlue8, $titleItemInfoBlue8, $descriptionItemInfoBlue8);
		$itemInfoblueObject9->set($iconItemInfoBlue9, $titleItemInfoBlue9, $descriptionItemInfoBlue9);
		
		
		$this->arrayItemsInfoblue = array($itemInfoblueObject1, $itemInfoblueObject2, $itemInfoblueObject3, $itemInfoblueObject4, $itemInfoblueObject5, $itemInfoblueObject6, $itemInfoblueObject7, $itemInfoblueObject8, $itemInfoblueObject9);

		
	}
	
	public function setXlsReader($param) {
		$this->objPHPExcel = $param;
	}
	
	public function getStringItems() {
		
		$cadena = "";	
		        					 
		for ($i = 0; $i < $this->numItemsInfoBlue; $i++) {
		   $cadena .= $this->arrayItemsInfoblue[$i]->printItem();					    
		}	
		return $cadena;					 
	}
	
	public function printSection() {
		
		$cadena1 = "" . 
		"<div id=\"services\" class=\"text-center\">" .
		"<div class=\"container\">" .
		"<div class=\"section-title\">" .
		"<h2>" . $this->titleInfoBlue . "</h2>" .
		      "<p>" . $this->descriptionInfoBlue . "</p>" .
		    "</div>" .
		    "<div class=\"row\">";
		    
		$cadena2 = $this->getStringItems();		
     
		$cadena3 = "" .      
		    "</div>" .
		  "</div>" .
		"</div>";
		
		return $cadena1 . $cadena2 . $cadena3;		
	}
	
	
	
	
	
}