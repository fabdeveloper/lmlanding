<?php

class ItemTestimonialObject{
	private $pathImageItemTestimonial;
	private $parrafoItemTestimonial; 
	private $firmaItemTestimonial;
	
	
	
	public function set($pathImageItemTestimonial, $parrafoItemTestimonial, $firmaItemTestimonial){
		$this->pathImageItemTestimonial = $pathImageItemTestimonial;
		$this->parrafoItemTestimonial = $parrafoItemTestimonial;
		$this->firmaItemTestimonial = $firmaItemTestimonial;		
	}
	
	public function printItem(){
		$texto = "" .
      "<div class=\"col-md-4\">" .
        "<div class=\"testimonial\">" .
          "<div class=\"testimonial-image\"> <img src=\"" . $this->pathImageItemTestimonial . "\" alt=\"\"> </div>" .
          "<div class=\"testimonial-content\">" .
            "<p>\"" . $this->parrafoItemTestimonial . "\"</p>" .
            "<div class=\"testimonial-meta\">" . $this->firmaItemTestimonial . "</div>" .
          "</div>" .
        "</div>" .
      "</div>" .	
      			"";
	
		return $texto;
	}
	
}


?>