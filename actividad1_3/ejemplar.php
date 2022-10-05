<?php
class Ejemplar
{   
    private $numEjemplar;
    private $precio;

    public function __construct($numEjemplar, $precio)
    {
        $this->numEjemplar = $numEjemplar;
        $this->precio = $precio;
    }

    public function addLibro()
    {
    }
}
