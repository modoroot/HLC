<?php
include_once 'especialidad.php';
include_once 'ejemplar.php';
class Libro
{
    private Especialidad $especialidad;
    private Ejemplar $ejemplar;
    private $titulo;
    private $idioma;

    public function __construct(Especialidad &$especialidad,Ejemplar &$ejemplar, $titulo, $idioma)
    {
        $this->especialidad = $especialidad;
        $this->ejemplar = $ejemplar;
        $this->titulo = $titulo;
        $this->idioma = $idioma;

        if (isset($especialidad)) {
            $this->especialidad->add_libro($this);
        }
        if(isset($ejemplar)){
            $this->ejemplar->add_libro($this);
        }
    }
    public function get_especialidad()
    {
        return $this->especialidad;
    }
    public function get_titulo()
    {
        return $this->titulo;
    }
    public function get_idioma()
    {
        return $this->idioma;
    }
}
