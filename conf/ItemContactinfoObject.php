<?php


class ItemContactinfoObject{
	
	private $iconItemContactInfo;
	private $nameItemContactInfo;
	private $valueItemContactInfo;
	
	
	
	public function set($iconItemContactInfo, $nameItemContactInfo, $valueItemContactInfo){
		
		$this->iconItemContactInfo = $iconItemContactInfo;
		$this->nameItemContactInfo = $nameItemContactInfo;
		$this->valueItemContactInfo = $valueItemContactInfo;
		
	}
	
	
	public function printItem(){
		$texto = "" .
      "<div class=\"contact-item\">" .
        "<p><span><i class=\"" . $this->iconItemContactInfo . "\"></i>" . $this->nameItemContactInfo . "</span>" . $this->valueItemContactInfo . "</p>" .
      "</div>" .
      				"";
	
		return $texto;
	}
	
	
}


?>