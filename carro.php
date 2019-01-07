<?php 
class Carro {
    
    private $cor;
    private $cor_tipo;
    
    public function __construct() {
        $this->cor = 'preto';
        $this->cor_tipo = 'fosco';
    }
    
   
    public function setCor($c){
        $this->cor = $c;
    }

   
    public function setCorTipo($t){
        $this->cor_tipo == $t;
    }

    public function getCorCompleta(){
        echo "COR: ".$this->cor;
        exit;
        
        return $this->cor.' '.$this->cor_tipo;
    }
    
    
}
