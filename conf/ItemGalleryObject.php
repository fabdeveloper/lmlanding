<?php

class ItemGalleryObject{
	
	private $hrefImageItemGallery;
	private $textoFlotanteDestinoImageItemGallery;
	private $titleItemGallery;
	private $pathImageItemGallery;
	private $textoFlotanteImageItemGallery;
	
	//private $pathDirImagen = "images/";
	
	
	public function set($hrefImageItemGallery, $textoFlotanteDestinoImageItemGallery, $titleItemGallery, $pathImageItemGallery, $textoFlotanteImageItemGallery){
		$this->hrefImageItemGallery = $hrefImageItemGallery;
		$this->textoFlotanteDestinoImageItemGallery = $textoFlotanteDestinoImageItemGallery;
		$this->titleItemGallery = $titleItemGallery;
		$this->pathImageItemGallery = $pathImageItemGallery;
		$this->textoFlotanteImageItemGallery = $textoFlotanteImageItemGallery;			
	}
	
	public function printItemGallery(){

		$texto = "" .		
        "<div class=\"col-sm-6 col-md-4 col-lg-4\">" .
          "<div class=\"portfolio-item\">" .
            "<div class=\"hover-bg\"> <a href=\"" . $this->hrefImageItemGallery . "\" title=\"" . $this->textoFlotanteDestinoImageItemGallery . "\" data-lightbox-gallery=\"gallery1\">" .
              "<div class=\"hover-text\">" .
                "<h4>" . $this->titleItemGallery . "</h4>" .
              "</div>" .
              "<img src=\"" . $this->pathImageItemGallery . "\" class=\"img-responsive\" alt=\"" . $this->textoFlotanteImageItemGallery . "\"> </a> </div>" .
          "</div>" .
        "</div>";

 		return $texto;
	}	
	
}


?>