<?php
/**
 * Clase donde se calcula el área de un círculo
 */
class Circulo extends Figura implements Dibujable{
    private $radio;
    public function __construct($radio)
    {
        $this->radio=$radio;
    }
    public function area(){
        echo M_PI*($this->radio*$this->radio)."\n";
    }
    public function dibujable()
    {
        echo "Círculo dibujado\n";
    }
}