<?php
class Autor
{
    private $apellidos;
    private $nombre;
    private $nacionalidad;

    public function __construct($apellidos, $nombre, $nacionalidad)
    {
        $this->apellidos = $apellidos;
        $this->nombre = $nombre;
        $this->nacionalidad = $nacionalidad;
    }
}
$autor = new Autor($this->apellidos, $this->nombre, $this->nacionalidad);
$arrayAutor = (array) $autor;