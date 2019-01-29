<?php

class ItemTeamObject{
	private $pathImageItemTeam;
	private $titleItemTeam;
	private $descriptionItemTeam;
	
	
	public function set($pathImageItemTeam, $titleItemTeam, $descriptionItemTeam){
		$this->pathImageItemTeam = $pathImageItemTeam;
		$this->titleItemTeam = $titleItemTeam;
		$this->descriptionItemTeam = $descriptionItemTeam;
		
	}
	
	
	public function printItem(){
		$texto = "" .
      "<div class=\"col-md-3 col-sm-6 team\">" .
        "<div class=\"thumbnail\"> <img src=\"" . $this->pathImageItemTeam . "\" alt=\"...\" class=\"team-img\">" .
          "<div class=\"caption\">" .
            "<h4>" . $this->titleItemTeam . "</h4>" .
            "<p>" . $this->descriptionItemTeam . "</p>" .
          "</div>" .
        "</div>" .
      "</div>" .
      				"";
	
		return $texto;
	}
	
	
	
}



?>