<?php 
class NumerosComplejos {
    public $real;
    public $imag;

    public function __construct($real, $imag) {
        $this->real = $real;
        $this->imag = $imag;
    }
    public function __destruct()
    {
        // echo "Destructor";
    }

    public function __call($name, $arguments)
    {
        echo "Metodo no existe";
    }

    public function __get($name)
    {
        echo "Variable no existe";
    }

    public function __set($name, $value)
    {
        echo "Variable no existe";
    }

    public function getParteReal(){
        return $this->real;
    }

    public function getParteImaginaria(){
        return $this->imag;
    }

    public function mostrarNumero () {
        echo "El numero es: " . $this->real . " + " . $this->imag . "i";
    }
    

}


?>