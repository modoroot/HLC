<?php
class Libro
{
    private $titulo;
    private $idioma;
    private $resumen;
    private $isbn;
    private $esNovedad;

    public function __construct($titulo, $idioma, $resumen, $isbn, $esNovedad)
    {
        $this->titulo = $titulo;
        $this->idioma = $idioma;
        $this->resumen = $resumen;
        $this->isbn = $isbn;
        $this->esNovedad = $esNovedad;
    }
}

