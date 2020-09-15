<?php 

class coche {

    public $color="Rojo";
    public $marca="Maserati";
    public $modelo="MC20";

    public function mostrar(){
        return $this->modelo." ".$this->marca." ".$this->color;
    }
}

$var= new coche();
echo $var->mostrar();
?>