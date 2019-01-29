<?php

require_once '../conf/ISectionManager.php';

class SectionTeamManager implements ISectionManager {
	
	private $titleTeam;
	private $descriptionTeam;
	private $numItemsTeam;
	private $pathImageItemTeam1;
	private $titleItemTeam1;
	private $descriptionItemTeam1;
	private $pathImageItemTeam2;
	private $titleItemTeam2;
	private $descriptionItemTeam2;
	private $pathImageItemTeam3;
	private $titleItemTeam3;
	private $descriptionItemTeam3;
	private $pathImageItemTeam4;
	private $titleItemTeam4;
	private $descriptionItemTeam4;
	private $pathImageItemTeam5;
	private $titleItemTeam5;
	private $descriptionItemTeam5;
	private $pathImageItemTeam6;
	private $titleItemTeam6;
	private $descriptionItemTeam6;
	private $pathImageItemTeam7;
	private $titleItemTeam7;
	private $descriptionItemTeam7;
	private $pathImageItemTeam8;
	private $titleItemTeam8;
	private $descriptionItemTeam8;
	
	private $arrayItemsTeam;
	private $objPHPExcel;
	

	
	public function printSection() {		
		
		$cadena1 = "" .		
		"<div id=\"team\" class=\"text-center\">" .
		"<div class=\"container\">" .
		"<div class=\"col-md-8 col-md-offset-2 section-title\">" .
		"<h2>" . $this->titleTeam . "</h2>" .
		      "<p>" . $this->descriptionTeam . "</p>" .
		    "</div>" .
		    "<div id=\"row\">";
		    
		$cadena2 = $this->getStringItems();
		 
		$cadena3 = "" .		      
		    "</div>" .
		  "</div>" .
		"</div>";		
		
		return $cadena1 . $cadena2 . $cadena3;		
	}

	
	
	
	public function getStringItems(){
		
		$cadena = "";
		
		for ($i = 0; $i < $this->numItemsTeam; $i++) {
			$cadena .= $this->arrayItemsTeam[$i]->printItem();
		}
		
		return $cadena;		
	}
	
	public function init() {
		
		$objPHPExcel = $this->objPHPExcel;
		

		//include_once '../conf/xlsReader.php';
		
		$objPHPExcel->setActiveSheetIndexByName('team');
		
		$this->titleTeam = $objPHPExcel->getActiveSheet()->getCell('B2')->getValue();
		$this->descriptionTeam = $objPHPExcel->getActiveSheet()->getCell('B3')->getValue();
		$this->numItemsTeam = $objPHPExcel->getActiveSheet()->getCell('B4')->getValue();
		
		
		
		$this->pathImageItemTeam1 = $objPHPExcel->getActiveSheet()->getCell('B5')->getValue();
		$this->titleItemTeam1 = $objPHPExcel->getActiveSheet()->getCell('B6')->getValue();
		$this->descriptionItemTeam1 = $objPHPExcel->getActiveSheet()->getCell('B7')->getValue();
		$this->pathImageItemTeam2 = $objPHPExcel->getActiveSheet()->getCell('B8')->getValue();
		$this->titleItemTeam2 = $objPHPExcel->getActiveSheet()->getCell('B9')->getValue();
		$this->descriptionItemTeam2 = $objPHPExcel->getActiveSheet()->getCell('B10')->getValue();
		$this->pathImageItemTeam3 = $objPHPExcel->getActiveSheet()->getCell('B11')->getValue();
		$this->titleItemTeam3 = $objPHPExcel->getActiveSheet()->getCell('B12')->getValue();
		$this->descriptionItemTeam3 = $objPHPExcel->getActiveSheet()->getCell('B13')->getValue();
		$this->pathImageItemTeam4 = $objPHPExcel->getActiveSheet()->getCell('B14')->getValue();
		$this->titleItemTeam4 = $objPHPExcel->getActiveSheet()->getCell('B15')->getValue();
		$this->descriptionItemTeam4 = $objPHPExcel->getActiveSheet()->getCell('B16')->getValue();
		$this->pathImageItemTeam5 = $objPHPExcel->getActiveSheet()->getCell('B17')->getValue();
		$this->titleItemTeam5 = $objPHPExcel->getActiveSheet()->getCell('B18')->getValue();
		$this->descriptionItemTeam5 = $objPHPExcel->getActiveSheet()->getCell('B19')->getValue();
		$this->pathImageItemTeam6 = $objPHPExcel->getActiveSheet()->getCell('B20')->getValue();
		$this->titleItemTeam6 = $objPHPExcel->getActiveSheet()->getCell('B21')->getValue();
		$this->descriptionItemTeam6 = $objPHPExcel->getActiveSheet()->getCell('B22')->getValue();
		$this->pathImageItemTeam7 = $objPHPExcel->getActiveSheet()->getCell('B23')->getValue();
		$this->titleItemTeam7 = $objPHPExcel->getActiveSheet()->getCell('B24')->getValue();
		$this->descriptionItemTeam7 = $objPHPExcel->getActiveSheet()->getCell('B25')->getValue();
		$this->pathImageItemTeam8 = $objPHPExcel->getActiveSheet()->getCell('B26')->getValue();
		$this->titleItemTeam8 = $objPHPExcel->getActiveSheet()->getCell('B27')->getValue();
		$this->descriptionItemTeam8 = $objPHPExcel->getActiveSheet()->getCell('B28')->getValue();
		
		
		require_once '../conf/ItemTeamObject.php';
		
		$itemTeamObject1 = new ItemTeamObject();
		$itemTeamObject2 = new ItemTeamObject();
		$itemTeamObject3 = new ItemTeamObject();
		$itemTeamObject4 = new ItemTeamObject();
		$itemTeamObject5 = new ItemTeamObject();
		$itemTeamObject6 = new ItemTeamObject();
		$itemTeamObject7 = new ItemTeamObject();
		$itemTeamObject8 = new ItemTeamObject();
		
		
		$itemTeamObject1->set($this->pathImageItemTeam1, $this->titleItemTeam1, $this->descriptionItemTeam1);
		$itemTeamObject2->set($this->pathImageItemTeam2, $this->titleItemTeam2, $this->descriptionItemTeam2);
		$itemTeamObject3->set($this->pathImageItemTeam3, $this->titleItemTeam3, $this->descriptionItemTeam3);
		$itemTeamObject4->set($this->pathImageItemTeam4, $this->titleItemTeam4, $this->descriptionItemTeam4);
		$itemTeamObject5->set($this->pathImageItemTeam5, $this->titleItemTeam5, $this->descriptionItemTeam5);
		$itemTeamObject6->set($this->pathImageItemTeam6, $this->titleItemTeam6, $this->descriptionItemTeam6);
		$itemTeamObject7->set($this->pathImageItemTeam7, $this->titleItemTeam7, $this->descriptionItemTeam7);
		$itemTeamObject8->set($this->pathImageItemTeam8, $this->titleItemTeam8, $this->descriptionItemTeam8);
		
		$this->arrayItemsTeam = array($itemTeamObject1, $itemTeamObject2, $itemTeamObject3, $itemTeamObject4, $itemTeamObject5, $itemTeamObject6, $itemTeamObject7, $itemTeamObject8);
		
		
		
	}
	
	public function setXlsReader($xlsReader){
		
		$this->objPHPExcel = $xlsReader;
	}
	
	
	
	
	
}



?>