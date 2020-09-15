<?php 
// Ejercicio 1
    class libro {

        public $autor='pepe';
        public $año_publicacion='2070';
        public $editorial='Anaya';
        public $titulo='Como no ser gilipollas';
        public $num_pag='12000';

        public function mostrar()
        {
            return $this->autor." ".$this->año_publicacion." ".$this->editorial." ".$this->titulo." ".$this->num_pag;
        }
    }
    $var = new libro();
    echo $var->mostrar();
    echo "<br>";
// Ejercicio 2

    class ciudad {

        public $nombre;
        public $provincia;

        public function __construct($nombre,$provincia)
        {
            $this->nombre = $nombre;
            $this->provincia = $provincia;
        }

        public function mostrar()
        {

            return "La ciudad de ". $this->nombre . " esta en la provincia de " . $this->provincia;
        }
    }

    $var2 = new ciudad('Valencia', 'Valencia');
    echo $var2->mostrar();
    echo "<br>";
    $var2 = new ciudad('Barcelona', 'Cataluña');
    echo $var2->mostrar();
    echo "<br>";
    $var2 = new ciudad('Paris', 'Francia');
    echo $var2->mostrar();
    echo "<br>";
// Ejercicio 3

    class CuentaBancaria{

        public $titular;
        public $cantidad;

        public function __construct($titular, $cantidad)
        {
            $this->titular = $titular;
            $this->cantidad = $cantidad;
        }

        // Metodos

        public function getCantidad()
        {
            return $this->cantidad;
        }

        public function setCantidad($cantidad)
        {
            if ($cantidad <= '0') {
                $this->cantidad = $cantidad;
                echo '<script type="text/javascript">';
                echo ' alert("Su cuenta ha llegado a cero")';  //not showing an alert box.
                echo '</script>';
            }
        }

        public function retirada($cantidad)
        {
            if($cantidad - $cantidad < 0){
                $cantidad = 0;
            } else {
                $cantidad -= $cantidad;
            }
        }

        public function ingreso($cantidad)
        {
            if($cantidad > 0){
                $cantidad += $cantidad;
            }
        }

        public function mostrar()
        {

            return $this->titular . " tiene un total de " . $this->cantidad . "€";
        }
    }

    $cuenta1 = new CuentaBancaria('Jose', '100');
    echo $cuenta1->mostrar();

    $cuenta2 = new CuentaBancaria('Pepe', '500');
    $cuenta2.ingreso(600);
    echo $cuenta2->mostrar();




?>