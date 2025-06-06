<?php
class Calculadora 
{ //variables
    private $numeroComplejo;
    private $numeroComplejo2; 

    public function __construct($numeroComplejo, $numeroComplejo2)
    {
        $this->numeroComplejo = $numeroComplejo;
        $this->numeroComplejo2 = $numeroComplejo2;


    }

    public function __destruct()
    {
        // destructor
    }

    public function __call($name, $arguments)
    {
        // metodo para metodos que no existen
    }

    public function __get($name)
    {
        // metodos para obtener variables que no existen
    }

    public function __set($name, $value)
    {
        // metodos para establecer variables que no existen
    }

    public function mostrarNumeros (){
        $this->numeroComplejo->mostrarNumero();
        echo "<br>";
        $this->numeroComplejo2->mostrarNumero();
    }

    public function modulo (){

        echo "Modulo de los numeros complejos: <br>";
        echo sqrt(($this->numeroComplejo->getParteReal())**2 + ($this->numeroComplejo->getParteImaginaria())**2);
        echo "<br>";
        echo sqrt(($this->numeroComplejo2->getParteReal())**2 + ($this->numeroComplejo2->getParteImaginaria())**2);
    }

    public function conjugado (){
        $conjugado = new NumerosComplejos($this->numeroComplejo->getParteReal(), -$this->numeroComplejo->getParteImaginaria());
        $conjugado2 = new NumerosComplejos($this->numeroComplejo2->getParteReal(), -$this->numeroComplejo2->getParteImaginaria());
        
        $conjugado->mostrarNumero();
        echo "<br>";
        $conjugado2->mostrarNumero();

        // TENDRIA QUE MOSTRARLO MEJOR 
    }

    public function suma (){
        $suma = new NumerosComplejos($this->numeroComplejo->getParteReal() + $this->numeroComplejo2->getParteReal(), $this->numeroComplejo->getParteImaginaria() + $this->numeroComplejo2->getParteImaginaria());
        $suma->mostrarNumero();
    }

    public function resta (){
        $resta = new NumerosComplejos($this->numeroComplejo->getParteReal() - $this->numeroComplejo2->getParteReal(), $this->numeroComplejo->getParteImaginaria() - $this->numeroComplejo2->getParteImaginaria());
        $resta->mostrarNumero();
    }
}

?>