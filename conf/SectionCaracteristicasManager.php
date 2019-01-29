<?php


require_once '../conf/ISectionManager.php';


class SectionCaracteristicasManager implements ISectionManager{
	
	private $caracteristicasTitle;
	private $numCaracteristicas;
	
	private $arrayItemsCaracteristicas;
	private $objPHPExcel;
	
	
	
	private $itemCaracteristicasIcon1;
	private $itemCaracteristicasTitle1;
	private $itemCaracteristicasDescription1;
	private $itemCaracteristicasIcon2;
	private $itemCaracteristicasTitle2;
	private $itemCaracteristicasDescription2;
	private $itemCaracteristicasIcon3;
	private $itemCaracteristicasTitle3;
	private $itemCaracteristicasDescription3;
	private $itemCaracteristicasIcon4;
	private $itemCaracteristicasTitle4;
	private $itemCaracteristicasDescription4;
	private $itemCaracteristicasIcon5;
	private $itemCaracteristicasTitle5;
	private $itemCaracteristicasDescription5;
	private $itemCaracteristicasIcon6;
	private $itemCaracteristicasTitle6;
	private $itemCaracteristicasDescription6;
	private $itemCaracteristicasIcon7;
	private $itemCaracteristicasTitle7;
	private $itemCaracteristicasDescription7;
	private $itemCaracteristicasIcon8;
	private $itemCaracteristicasTitle8;
	private $itemCaracteristicasDescription8;
	
	
	
	
	public function printSection() {		
		
		$cadena1 = "" .	
				"<div id=\"features\" class=\"text-center\">" .
		  "<div class=\"container\">" .
		    "<div class=\"col-md-10 col-md-offset-1 section-title\">" .
		      "<h2>" . $this->caracteristicasTitle . "</h2>" .
		    "</div>" .
		    "<div class=\"row\">";    
    
    	$cadena2 = $this->getStringItems();
    
    	$cadena3 = "" .       
		    "</div>" .
		  "</div>" .
		"</div>";
    	
    	return $cadena1 . $cadena2 . $cadena3;
	}
	
	
	public function init() {
		
		//require_once '../conf/xlsReader.php';
				
		$objPHPExcel = $this->objPHPExcel;
		

		$objPHPExcel->setActiveSheetIndexByName('caracteristicas');
		
		$this->caracteristicasTitle = $objPHPExcel->getActiveSheet()->getCell('B2')->getValue();
		$this->numCaracteristicas = $objPHPExcel->getActiveSheet()->getCell('B3')->getValue();
		
		$this->itemCaracteristicasIcon1 = $objPHPExcel->getActiveSheet()->getCell('B4')->getValue();
		$this->itemCaracteristicasTitle1 = $objPHPExcel->getActiveSheet()->getCell('B5')->getValue();
		$this->itemCaracteristicasDescription1 = $objPHPExcel->getActiveSheet()->getCell('B6')->getValue();
		$this->itemCaracteristicasIcon2 = $objPHPExcel->getActiveSheet()->getCell('B7')->getValue();
		$this->itemCaracteristicasTitle2 = $objPHPExcel->getActiveSheet()->getCell('B8')->getValue();
		$this->itemCaracteristicasDescription2 = $objPHPExcel->getActiveSheet()->getCell('B9')->getValue();
		$this->itemCaracteristicasIcon3 = $objPHPExcel->getActiveSheet()->getCell('B10')->getValue();
		$this->itemCaracteristicasTitle3 = $objPHPExcel->getActiveSheet()->getCell('B11')->getValue();
		$this->itemCaracteristicasDescription3 = $objPHPExcel->getActiveSheet()->getCell('B12')->getValue();
		$this->itemCaracteristicasIcon4 = $objPHPExcel->getActiveSheet()->getCell('B13')->getValue();
		$this->itemCaracteristicasTitle4 = $objPHPExcel->getActiveSheet()->getCell('B14')->getValue();
		$this->itemCaracteristicasDescription4 = $objPHPExcel->getActiveSheet()->getCell('B15')->getValue();
		$this->itemCaracteristicasIcon5 = $objPHPExcel->getActiveSheet()->getCell('B16')->getValue();
		$this->itemCaracteristicasTitle5 = $objPHPExcel->getActiveSheet()->getCell('B17')->getValue();
		$this->itemCaracteristicasDescription5 = $objPHPExcel->getActiveSheet()->getCell('B18')->getValue();
		$this->itemCaracteristicasIcon6 = $objPHPExcel->getActiveSheet()->getCell('B19')->getValue();
		$this->itemCaracteristicasTitle6 = $objPHPExcel->getActiveSheet()->getCell('B20')->getValue();
		$this->itemCaracteristicasDescription6 = $objPHPExcel->getActiveSheet()->getCell('B21')->getValue();
		$this->itemCaracteristicasIcon7 = $objPHPExcel->getActiveSheet()->getCell('B22')->getValue();
		$this->itemCaracteristicasTitle7 = $objPHPExcel->getActiveSheet()->getCell('B23')->getValue();
		$this->itemCaracteristicasDescription7 = $objPHPExcel->getActiveSheet()->getCell('B24')->getValue();
		$this->itemCaracteristicasIcon8 = $objPHPExcel->getActiveSheet()->getCell('B25')->getValue();
		$this->itemCaracteristicasTitle8 = $objPHPExcel->getActiveSheet()->getCell('B26')->getValue();
		$this->itemCaracteristicasDescription8 = $objPHPExcel->getActiveSheet()->getCell('B27')->getValue();
		
		
		require_once '../conf/ItemCaracteristicasObject.php';
		
		$itemCaracteristicasObject1 = new ItemCaracteristicasObject();
		$itemCaracteristicasObject2 = new ItemCaracteristicasObject();
		$itemCaracteristicasObject3 = new ItemCaracteristicasObject();
		$itemCaracteristicasObject4 = new ItemCaracteristicasObject();
		$itemCaracteristicasObject5 = new ItemCaracteristicasObject();
		$itemCaracteristicasObject6 = new ItemCaracteristicasObject();
		$itemCaracteristicasObject7 = new ItemCaracteristicasObject();
		$itemCaracteristicasObject8 = new ItemCaracteristicasObject();
		
		$itemCaracteristicasObject1->set($this->itemCaracteristicasIcon1, $this->itemCaracteristicasTitle1, $this->itemCaracteristicasDescription1);
		$itemCaracteristicasObject2->set($this->itemCaracteristicasIcon2, $this->itemCaracteristicasTitle2, $this->itemCaracteristicasDescription2);
		$itemCaracteristicasObject3->set($this->itemCaracteristicasIcon3, $this->itemCaracteristicasTitle3, $this->itemCaracteristicasDescription3);
		$itemCaracteristicasObject4->set($this->itemCaracteristicasIcon4, $this->itemCaracteristicasTitle4, $this->itemCaracteristicasDescription4);
		$itemCaracteristicasObject5->set($this->itemCaracteristicasIcon5, $this->itemCaracteristicasTitle5, $this->itemCaracteristicasDescription5);
		$itemCaracteristicasObject6->set($this->itemCaracteristicasIcon6, $this->itemCaracteristicasTitle6, $this->itemCaracteristicasDescription6);
		$itemCaracteristicasObject7->set($this->itemCaracteristicasIcon7, $this->itemCaracteristicasTitle7, $this->itemCaracteristicasDescription7);
		$itemCaracteristicasObject8->set($this->itemCaracteristicasIcon8, $this->itemCaracteristicasTitle8, $this->itemCaracteristicasDescription8);
		
		$this->arrayItemsCaracteristicas = array($itemCaracteristicasObject1, $itemCaracteristicasObject2, $itemCaracteristicasObject3, $itemCaracteristicasObject4, $itemCaracteristicasObject5, $itemCaracteristicasObject6, $itemCaracteristicasObject7,$itemCaracteristicasObject8);
		
		
		
	}
	
	
	public function getStringItems() {
		
		$cadena = "";	      	 	     			
        					 
		for ($i = 0; $i < $this->numCaracteristicas; $i++) {
		   $cadena .= $this->arrayItemsCaracteristicas[$i]->printItem();					    
		}	
		
		return $cadena;			  
	}
	
	public function setXlsReader($xlsReader){
		$this->objPHPExcel = $xlsReader;
	}
	
	
	
	
	
	
}