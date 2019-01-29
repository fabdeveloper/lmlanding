<?php

interface ISectionManager{
	
	public function printSection();
	public function getStringItems();
	public function init();
	public function setXlsReader($objPHPExcel);
	
	
	
}

?>