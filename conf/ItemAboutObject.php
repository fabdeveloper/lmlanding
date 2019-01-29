<?php

class ItemAboutObject{
	private $itemListAbout;
	
	
	public function set($itemListAbout){
		$this->itemListAbout = $itemListAbout;
	}
	
	
	public function printItem(){
		$texto = "" .
                "<li>" . $this->itemListAbout . "</li>" .				
				"";
		
		return $texto;
	}
	
	
	
	
}


?>