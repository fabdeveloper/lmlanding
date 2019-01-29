<?php

class ItemInfoblueObject{
	
	private $iconItemInfoBlue;
	private $titleItemInfoBlue;
	private $descriptionItemInfoBlue;
	
	
	
	
	public function set($iconItemInfoBlue, $titleItemInfoBlue, $descriptionItemInfoBlue){
		$this->iconItemInfoBlue = $iconItemInfoBlue;
		$this->titleItemInfoBlue = $titleItemInfoBlue;
		$this->descriptionItemInfoBlue = $descriptionItemInfoBlue;		
	}
	
	public function printItem(){
		$texto = "" .				
      "<div class=\"col-md-4\"> <i class=\"" . $this->iconItemInfoBlue . "\"></i>" .
        "<div class=\"service-desc\">" .
          "<h3>" . $this->titleItemInfoBlue . "</h3>" .
          "<p>" . $this->descriptionItemInfoBlue . "</p>" .
        "</div>" .
      "</div>" .
      "";
		
		return $texto;
	}
	
	
}



?>