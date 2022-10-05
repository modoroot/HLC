<?php
class Autor
{
    public $apellidos;
    public $nombre;
    public $nacionalidad;

    public function __construct($apellidos, $nombre, $nacionalidad)
    {
        $this->apellidos = $apellidos;
        $this->nombre = $nombre;
        $this->nacionalidad = $nacionalidad;
    }
}
