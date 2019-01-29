<?php

class ItemCaracteristicasObject{
	private $itemCaracteristicasIcon;
	private $itemCaracteristicasTitle;
	private $itemCaracteristicasDescription;

	
	
	public function set($itemCaracteristicasIcon, $itemCaracteristicasTitle, $itemCaracteristicasDescription){
		$this->itemCaracteristicasIcon = $itemCaracteristicasIcon;
		$this->itemCaracteristicasTitle = $itemCaracteristicasTitle;
		$this->itemCaracteristicasDescription = $itemCaracteristicasDescription;
		
	}
	
	public function printItem(){
		$texto = "" .
      "<div class=\"col-xs-6 col-md-3\"> <i class=\"" . $this->itemCaracteristicasIcon . "\"></i>" .
        "<h3>" . $this->itemCaracteristicasTitle . "</h3>" .
        "<p>" . $this->itemCaracteristicasDescription . "</p>" .
      "</div>";
		
		return $texto;
	}
	
	
}

?>
