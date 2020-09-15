<?php 

class coche {

    public $color="Rojo";
    public $marca="Maserati";
    public $modelo="MC20";

    public function __construct($color,$marca,$modelo=""){
        $this->color=$color;
        $this->marca=$marca;
        $this->modelo=$modelo;
    }

    public function setColor($color){
        if ($color !== 'azul' ) {
            $this->color=$color;
        } else {
            $this->color="No Valido";
        }
    }

    public function getColor(){
       return $this->color;
    }

    public function mostrar(){
        return $this->marca." ".$this->modelo." ".$this->color;
    }
}

$var= new coche('Negro','Opel','Vectra');
$var->setColor('Naranja');

echo $var->mostrar();
echo "<br>";

$var2= new coche('Verde','Citroen','C3');
$var2->setColor('Azul');

echo $var2->mostrar();
echo "<br>";
echo $var->color;
?>