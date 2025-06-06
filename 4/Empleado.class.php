<?php

class Empleado
{
    private $nombre;
    private $salario;
    private $antiguedad;

    public function __construct($nombre, $salario, $antiguedad)
    {
        $this->nombre = $nombre;
        $this->salario = $salario;
        $this->antiguedad = $antiguedad;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getSalario()
    {
        return $this->salario;
    }

    public function getAntiguedad()
    {
        return $this->antiguedad;
    }

    public function setSalario($salario)
    {
        $this->salario = $salario;
    }

    public function mostrarEmpleado()
    {
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Salario: " . $this->salario . "<br>";
        echo "Antiguedad: " . $this->antiguedad . "<br>";
        echo "<hr>";
    }
}