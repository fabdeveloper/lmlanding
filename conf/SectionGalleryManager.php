<?php

require_once '../conf/ISectionManager.php';


class SectionGalleryManager implements ISectionManager{
	
	private $objPHPExcel;
	private $arrayItemsGallery;
	
	private $titleGallery;
	private $descriptionGallery;
	private $numItemsGallery;
	
	
	
	public function init() {
		
		$objPHPExcel = $this->objPHPExcel;
		
		
		$objPHPExcel->setActiveSheetIndexByName('gallery');
		
		
		$this->titleGallery = $objPHPExcel->getActiveSheet()->getCell('B2')->getValue();
		$this->descriptionGallery = $objPHPExcel->getActiveSheet()->getCell('B3')->getValue();
		$this->numItemsGallery = $objPHPExcel->getActiveSheet()->getCell('B4')->getValue();
		
		$hrefImageItemGallery1 = $objPHPExcel->getActiveSheet()->getCell('B5')->getValue();
		$textoFlotanteDestinoImageItemGallery1 = $objPHPExcel->getActiveSheet()->getCell('B6')->getValue();
		$titleItemGallery1 = $objPHPExcel->getActiveSheet()->getCell('B7')->getValue();
		$pathImageItemGallery1 = $objPHPExcel->getActiveSheet()->getCell('B8')->getValue();
		$textoFlotanteImageItemGallery1 = $objPHPExcel->getActiveSheet()->getCell('B9')->getValue();
		
		$hrefImageItemGallery2 = $objPHPExcel->getActiveSheet()->getCell('B10')->getValue();
		$textoFlotanteDestinoImageItemGallery2 = $objPHPExcel->getActiveSheet()->getCell('B11')->getValue();
		$titleItemGallery2 = $objPHPExcel->getActiveSheet()->getCell('B12')->getValue();
		$pathImageItemGallery2 = $objPHPExcel->getActiveSheet()->getCell('B13')->getValue();
		$textoFlotanteImageItemGallery2 = $objPHPExcel->getActiveSheet()->getCell('B14')->getValue();
		$hrefImageItemGallery3 = $objPHPExcel->getActiveSheet()->getCell('B15')->getValue();
		$textoFlotanteDestinoImageItemGallery3 = $objPHPExcel->getActiveSheet()->getCell('B16')->getValue();
		$titleItemGallery3 = $objPHPExcel->getActiveSheet()->getCell('B17')->getValue();
		$pathImageItemGallery3 = $objPHPExcel->getActiveSheet()->getCell('B18')->getValue();
		$textoFlotanteImageItemGallery3 = $objPHPExcel->getActiveSheet()->getCell('B19')->getValue();
		$hrefImageItemGallery4 = $objPHPExcel->getActiveSheet()->getCell('B20')->getValue();
		$textoFlotanteDestinoImageItemGallery4 = $objPHPExcel->getActiveSheet()->getCell('B21')->getValue();
		$titleItemGallery4 = $objPHPExcel->getActiveSheet()->getCell('B22')->getValue();
		$pathImageItemGallery4 = $objPHPExcel->getActiveSheet()->getCell('B23')->getValue();
		$textoFlotanteImageItemGallery4 = $objPHPExcel->getActiveSheet()->getCell('B24')->getValue();
		$hrefImageItemGallery5 = $objPHPExcel->getActiveSheet()->getCell('B25')->getValue();
		$textoFlotanteDestinoImageItemGallery5 = $objPHPExcel->getActiveSheet()->getCell('B26')->getValue();
		$titleItemGallery5 = $objPHPExcel->getActiveSheet()->getCell('B27')->getValue();
		$pathImageItemGallery5 = $objPHPExcel->getActiveSheet()->getCell('B28')->getValue();
		$textoFlotanteImageItemGallery5 = $objPHPExcel->getActiveSheet()->getCell('B29')->getValue();
		$hrefImageItemGallery6 = $objPHPExcel->getActiveSheet()->getCell('B30')->getValue();
		$textoFlotanteDestinoImageItemGallery6 = $objPHPExcel->getActiveSheet()->getCell('B31')->getValue();
		$titleItemGallery6 = $objPHPExcel->getActiveSheet()->getCell('B32')->getValue();
		$pathImageItemGallery6 = $objPHPExcel->getActiveSheet()->getCell('B33')->getValue();
		$textoFlotanteImageItemGallery6 = $objPHPExcel->getActiveSheet()->getCell('B34')->getValue();
		$hrefImageItemGallery7 = $objPHPExcel->getActiveSheet()->getCell('B35')->getValue();
		$textoFlotanteDestinoImageItemGallery7 = $objPHPExcel->getActiveSheet()->getCell('B36')->getValue();
		$titleItemGallery7 = $objPHPExcel->getActiveSheet()->getCell('B37')->getValue();
		$pathImageItemGallery7 = $objPHPExcel->getActiveSheet()->getCell('B38')->getValue();
		$textoFlotanteImageItemGallery7 = $objPHPExcel->getActiveSheet()->getCell('B39')->getValue();
		$hrefImageItemGallery8 = $objPHPExcel->getActiveSheet()->getCell('B40')->getValue();
		$textoFlotanteDestinoImageItemGallery8 = $objPHPExcel->getActiveSheet()->getCell('B41')->getValue();
		$titleItemGallery8 = $objPHPExcel->getActiveSheet()->getCell('B42')->getValue();
		$pathImageItemGallery8 = $objPHPExcel->getActiveSheet()->getCell('B43')->getValue();
		$textoFlotanteImageItemGallery8 = $objPHPExcel->getActiveSheet()->getCell('B44')->getValue();
		$hrefImageItemGallery9 = $objPHPExcel->getActiveSheet()->getCell('B45')->getValue();
		$textoFlotanteDestinoImageItemGallery9 = $objPHPExcel->getActiveSheet()->getCell('B46')->getValue();
		$titleItemGallery9 = $objPHPExcel->getActiveSheet()->getCell('B47')->getValue();
		$pathImageItemGallery9 = $objPHPExcel->getActiveSheet()->getCell('B48')->getValue();
		$textoFlotanteImageItemGallery9 = $objPHPExcel->getActiveSheet()->getCell('B49')->getValue();
		$hrefImageItemGallery10 = $objPHPExcel->getActiveSheet()->getCell('B50')->getValue();
		$textoFlotanteDestinoImageItemGallery10 = $objPHPExcel->getActiveSheet()->getCell('B51')->getValue();
		$titleItemGallery10 = $objPHPExcel->getActiveSheet()->getCell('B52')->getValue();
		$pathImageItemGallery10 = $objPHPExcel->getActiveSheet()->getCell('B53')->getValue();
		$textoFlotanteImageItemGallery10 = $objPHPExcel->getActiveSheet()->getCell('B54')->getValue();
		$hrefImageItemGallery11 = $objPHPExcel->getActiveSheet()->getCell('B55')->getValue();
		$textoFlotanteDestinoImageItemGallery11 = $objPHPExcel->getActiveSheet()->getCell('B56')->getValue();
		$titleItemGallery11 = $objPHPExcel->getActiveSheet()->getCell('B57')->getValue();
		$pathImageItemGallery11 = $objPHPExcel->getActiveSheet()->getCell('B58')->getValue();
		$textoFlotanteImageItemGallery11 = $objPHPExcel->getActiveSheet()->getCell('B59')->getValue();
		$hrefImageItemGallery12 = $objPHPExcel->getActiveSheet()->getCell('B60')->getValue();
		$textoFlotanteDestinoImageItemGallery12 = $objPHPExcel->getActiveSheet()->getCell('B61')->getValue();
		$titleItemGallery12 = $objPHPExcel->getActiveSheet()->getCell('B62')->getValue();
		$pathImageItemGallery12 = $objPHPExcel->getActiveSheet()->getCell('B63')->getValue();
		$textoFlotanteImageItemGallery12 = $objPHPExcel->getActiveSheet()->getCell('B64')->getValue();
		
		
		require_once '../conf/ItemGalleryObject.php';
		
		$itemGalleryObject1 = new ItemGalleryObject();
		$itemGalleryObject2 = new ItemGalleryObject();
		$itemGalleryObject3 = new ItemGalleryObject();
		$itemGalleryObject4 = new ItemGalleryObject();
		$itemGalleryObject5 = new ItemGalleryObject();
		$itemGalleryObject6 = new ItemGalleryObject();
		$itemGalleryObject7 = new ItemGalleryObject();
		$itemGalleryObject8 = new ItemGalleryObject();
		$itemGalleryObject9 = new ItemGalleryObject();
		$itemGalleryObject10 = new ItemGalleryObject();
		$itemGalleryObject11 = new ItemGalleryObject();
		$itemGalleryObject12 = new ItemGalleryObject();
		
		$itemGalleryObject1->set($hrefImageItemGallery1, $textoFlotanteDestinoImageItemGallery1, $titleItemGallery1, $pathImageItemGallery1, $textoFlotanteImageItemGallery1);
		$itemGalleryObject2->set($hrefImageItemGallery2, $textoFlotanteDestinoImageItemGallery2, $titleItemGallery2, $pathImageItemGallery2, $textoFlotanteImageItemGallery2);
		$itemGalleryObject3->set($hrefImageItemGallery3, $textoFlotanteDestinoImageItemGallery3, $titleItemGallery3, $pathImageItemGallery3, $textoFlotanteImageItemGallery3);
		$itemGalleryObject4->set($hrefImageItemGallery4, $textoFlotanteDestinoImageItemGallery4, $titleItemGallery4, $pathImageItemGallery4, $textoFlotanteImageItemGallery4);
		$itemGalleryObject5->set($hrefImageItemGallery5, $textoFlotanteDestinoImageItemGallery5, $titleItemGallery5, $pathImageItemGallery5, $textoFlotanteImageItemGallery5);
		$itemGalleryObject6->set($hrefImageItemGallery6, $textoFlotanteDestinoImageItemGallery6, $titleItemGallery6, $pathImageItemGallery6, $textoFlotanteImageItemGallery6);
		$itemGalleryObject7->set($hrefImageItemGallery7, $textoFlotanteDestinoImageItemGallery7, $titleItemGallery7, $pathImageItemGallery7, $textoFlotanteImageItemGallery7);
		$itemGalleryObject8->set($hrefImageItemGallery8, $textoFlotanteDestinoImageItemGallery8, $titleItemGallery8, $pathImageItemGallery8, $textoFlotanteImageItemGallery8);
		$itemGalleryObject9->set($hrefImageItemGallery9, $textoFlotanteDestinoImageItemGallery9, $titleItemGallery9, $pathImageItemGallery9, $textoFlotanteImageItemGallery9);
		$itemGalleryObject10->set($hrefImageItemGallery10, $textoFlotanteDestinoImageItemGallery10, $titleItemGallery10, $pathImageItemGallery10, $textoFlotanteImageItemGallery10);
		$itemGalleryObject11->set($hrefImageItemGallery11, $textoFlotanteDestinoImageItemGallery11, $titleItemGallery11, $pathImageItemGallery11, $textoFlotanteImageItemGallery11);
		$itemGalleryObject12->set($hrefImageItemGallery12, $textoFlotanteDestinoImageItemGallery12, $titleItemGallery12, $pathImageItemGallery12, $textoFlotanteImageItemGallery12);
		
		
		$this->arrayItemsGallery = array($itemGalleryObject1, $itemGalleryObject2, $itemGalleryObject3, $itemGalleryObject4, $itemGalleryObject5, $itemGalleryObject6, $itemGalleryObject7, $itemGalleryObject8, $itemGalleryObject9, $itemGalleryObject10, $itemGalleryObject11, $itemGalleryObject12);

		
	}
	
	public function setXlsReader($param) {
		$this->objPHPExcel = $param;
	}
	
	public function getStringItems() {
		
		$cadena = "";
						        			
		for ($i = 0; $i < $this->numItemsGallery; $i++) {
		   $cadena .= $this->arrayItemsGallery[$i]->printItemGallery();					    
		}	
		
		return $cadena;									
	}
	
	public function printSection() {
		
		$cadena1 = "" .				
				"<div id=\"portfolio\" class=\"text-center\">" .
				"<div class=\"container\">" .
				"<div class=\"section-title\">" .
				"<h2>" . $this->titleGallery . "</h2>" .
				      "<p>" . $this->descriptionGallery . "</p>" .
				    "</div>" .
				    "<div class=\"row\">" .
				      "<div class=\"portfolio-items\">";     
		
		$cadena2 = $this->getStringItems();				     
		 
		$cadena3 = "" .		        
				      "</div>" .
				    "</div>" .
				  "</div>" .
				"</div>";
		
		return $cadena1 . $cadena2 . $cadena3;
	}
	
}



?>