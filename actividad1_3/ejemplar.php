<?php
class Ejemplar extends Libro
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
$libro = new Libro($this->titulo = $titulo, $this->idioma = $idioma, $this->resumen = $resumen, $this->isbn = $isbn, $this->esNovedad = $esNovedad);
$arrayLibro = (array) $libro;
