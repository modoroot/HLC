<?php
class Cuadrado extends Figura implements Dibujable, Rotable{
    private $lado;
    public function __construct($lado)
    {
        $this->lado = $lado;
    }
    public function area(){
        echo $this->lado*$this->lado."\n";
    }
    public function rotable()
    {
        echo "cuadrado rotado\n";
    }
    public function dibujable()
    {
        echo "cuadrado dibujado\n";
    }
}