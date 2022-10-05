<?php
class Libro
{
    public $titulo;
    public $idioma;
    public $resumen;
    public $isbn;
    public $esNovedad;

    public function __construct($titulo, $idioma, $resumen, $isbn, $esNovedad)
    {
        $this->titulo = $titulo;
        $this->idioma = $idioma;
        $this->resumen = $resumen;
        $this->isbn = $isbn;
        $this->esNovedad = $esNovedad;
    }
}
