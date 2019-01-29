<?php


class NavbarObject{
	
	private $navbarTitle;
	private $navbarTexto1;
	private $navbarTexto2;
	private $navbarTexto3;
	private $navbarTexto4;
	private $navbarTexto5;
	private $navbarTexto6;
	private $navbarTexto7;
	
	private $caracteristicas;
	private $about;
	private $infoblue;
	private $gallery;
	private $testimonial;
	private $team;
	
	
	
	
	
	
	public function set($navbarTitle, $navbarTexto1, $navbarTexto2, $navbarTexto3, $navbarTexto4, $navbarTexto5, $navbarTexto6, $navbarTexto7,
						$caracteristicas, $about, $infoblue, $gallery, $testimonial, $team){
		
							
		$this->navbarTitle = $navbarTitle;
		$this->navbarTexto1 = $navbarTexto1;
		$this->navbarTexto2 = $navbarTexto2;
		$this->navbarTexto3 = $navbarTexto3;
		$this->navbarTexto4 = $navbarTexto4;
		$this->navbarTexto5 = $navbarTexto5;
		$this->navbarTexto6 = $navbarTexto6;
		$this->navbarTexto7 = $navbarTexto7;
		
		$this->caracteristicas = $caracteristicas;
		$this->about = $about;
		$this->infoblue = $infoblue;
		$this->gallery = $gallery;
		$this->testimonial = $testimonial;
		$this->team = $team;		
	}
	
	public function printObject(){
		
		$cadena1 = "" .
		"<nav id=\"menu\" class=\"navbar navbar-default navbar-fixed-top\">" .
		"<div class=\"container\">" .
		"<div class=\"navbar-header\">" .
		"<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\"> <span class=\"sr-only\">Toggle navigation</span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> </button>" .
		"<a class=\"navbar-brand page-scroll\" href=\"#page-top\">" . $this->navbarTitle . "</a> </div>" .		    
		    "<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">" .
		      "<ul class=\"nav navbar-nav navbar-right\">";
		
		
		
		$cadena2 = "";		      
		if($this->caracteristicas){ $cadena2 .= "<li><a href=\"#features\" class=\"page-scroll\">" . $this->navbarTexto1 . "</a></li>"; }
		if($this->infoblue){ $cadena2 .= "<li><a href=\"#services\" class=\"page-scroll\">" . $this->navbarTexto3 . "</a></li>"; }
		if($this->gallery){ $cadena2 .= "<li><a href=\"#portfolio\" class=\"page-scroll\">" . $this->navbarTexto4 . "</a></li>"; }
		if($this->about){ $cadena2 .= "<li><a href=\"#about\" class=\"page-scroll\">" . $this->navbarTexto2 . "</a></li>"; }
		
		if($this->testimonial){ $cadena2 .= "<li><a href=\"#testimonials\" class=\"page-scroll\">" . $this->navbarTexto5 . "</a></li>"; }
		if($this->team){ $cadena2 .= "<li><a href=\"#team\" class=\"page-scroll\">" . $this->navbarTexto6 . "</a></li>"; }
		$cadena2 .= "<li><a href=\"#contact\" class=\"page-scroll\">" . $this->navbarTexto7 . "</a></li>"; 		        
		        
		
		
		
		$cadena3 = "" .  		        
		      "</ul>" .
		    "</div>" .
		    "<!-- /.navbar-collapse --> " .
		  "</div>" .
		"</nav>";		
		
		
		return $cadena1 . $cadena2 . $cadena3;				
		
	}	
	
}


?>