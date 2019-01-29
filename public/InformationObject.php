<?php

require_once 'IFormObject.php';


class InformationObject implements IFormObject{
    
    private $name;
    private $email;
    private $phone;
    private $subject;
    private $localidad;    
    private $message;
    private $fechahora;
    
    
    public function set($post) {
        $this->name = $post['name'];
        $this->email = $post['email'];
        $this->phone = $post['phone'];
        $this->subject = $post['subject'];
        $this->localidad = $post['localidad'];
        $this->message = $post['message'];
        $this->fechahora = date('m/d/Y g:ia');
       
    }
    
    public function getQuery() {
        $cadena = "";       
        
        $cadena .= "INSERT INTO consultas(nombre, email, telefono, localidad, asunto, mensaje, fechahora) VALUES('" .
            $this->name . "','" .
            $this->email . "','" .
            $this->phone . "','" .
            $this->subject . "','" .
            $this->localidad . "','" .
            $this->message . "','" .
            $this->fechahora . "'" .
            ");";
                     
        return $cadena;
    }
    

    
    
    
}

?>
