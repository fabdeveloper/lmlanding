<?php


class ItemSocialObject{
	private $hrefItemSocial;
	private $iconItemSocial;
	
	
	
	public function set($hrefItemSocial, $iconItemSocial){		
		
		$this->hrefItemSocial = $hrefItemSocial;
		$this->iconItemSocial = $iconItemSocial;
	}
	
	
	public function printItem(){
		$texto = "" .
            "<li><a href=\"" . $this->hrefItemSocial . "\"><i class=\"" . $this->iconItemSocial . "\"></i></a></li>" .
				"";
	
		return $texto;
	}
	
	
	
	
	
}

?>