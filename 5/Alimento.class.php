<?php
class Alimento
{

    public $cantidad;
    public $bolsa;

    // public function __construct($cantidad, $bolsa, $dias)
    // {
    //     $this->cantidad = $cantidad;
    //     $this->bolsa = $bolsa;
    // }

    public function calcularBolsas($cantidad, $tipoBolsa, $dias)
    {
        $total = $cantidad * $dias;
        $bolsas = $total / ($tipoBolsa * 1000);
        return $bolsas;
    }
}