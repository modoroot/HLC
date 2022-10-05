<?php
class Autor
{
    public $idioma;
    public $numEjemplar;
    public $precio;

    public function __construct($idioma, $numEjemplar, $precio)
    {
        $this->idioma = $idioma;
        $this->numEjemplar = $numEjemplar;
        $this->precio = $precio;
    }
}
