<?php
class Ejemplar
{
    private $numEjemplar;
    private $precio;
    private $libros;

    public function __construct($numEjemplar, $precio)
    {
        $this->numEjemplar = $numEjemplar;
        $this->precio = $precio;
        $this->libros = array();
    }

    public function add_libro($libro)
    {
        array_push($this->libros, $libro);
    }
    public function remove_libros()
    {
        $this->libros = NULL;
    }
    public function get_nombre()
    {
        return $this->nombre;
    }
}
