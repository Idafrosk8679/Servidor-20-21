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

        public function __construct($titular, $cantidad=0)
        {
            $this->titular = $titular;
            $this->cantidad = $cantidad;
        }

        public function retirada($cantidad)
        {
            if($cantidad - $this->cantidad)
            {
                $this->cantidad = 0;
                
            } else if ($this->cantidad - $cantidad < 0) {
                $this->cantidad = 0;
            }
        }

        public function ingreso($cantidad)
        {
            if( $cantidad < 0)
            {

            echo $this->cantidad . " No se puede ingresar un valor negativo";;

            } else if ($cantidad < 0) {
                return $this->cantidad . " No se puede ingresar un valor negativo";
            }
        }

        // public function notifica()
        // {
        //     if ($this->cantidad > $cantidad) {
        //     return " Se han ingresado " . $cantidad;
        //     }
        // }

        public function mostrar($message)
        {

            echo "Cuenta de" . $this->titular . " : " . $message . ";
   
        }
    }

    $cuenta1 = new CuentaBancaria('Jose', '100');
    echo $cuenta1->mostrar();
    // echo $cuenta1->notifica();
    
    echo "<br>";

    $cuenta2 = new CuentaBancaria('Pepe', '1600');
    $cuenta2->retirada(2600);
    echo $cuenta2->mostrar();
    // echo $cuenta2->notifica();

    echo "<br>";

    $cuenta3 = new CuentaBancaria('Anna', '7600');
    $cuenta3->ingreso(-9300);
    echo $cuenta3->mostrar();
    // echo $cuenta3->notifica();


?>