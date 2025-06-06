<?php

class Usuario
{
    private $usuario;
    private $listaTareas;

    public function __construct($usuario)
    {
        $this->usuario = $usuario;
        $this->listaTareas = array();
    }

    public function __destruct()
    {
        // destructor
    }

    // public function __call()
    // {
    //     echo "metodo no existe";
    //     // metodo para metodos que no existen
    // }

    // public function __get()
    // {
    //     echo "variable no existe";
    //     // metodos para obtener variables que no existen
    // }

    // public function __set()
    // {
    //     echo "variable no existe";
    //     // metodos para establecer variables que no existen
    // }

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function agregarTarea($tarea)
    {
        $this->listaTareas[] = $tarea;
    }

    public function eliminarTarea($indice)
    {
        if ($indice >= 0 && $indice < count($this->listaTareas)) {
            unset($this->listaTareas[$indice]);
        }
    }

    public function getListaTareas()
    {
        return $this->listaTareas;
    }
}