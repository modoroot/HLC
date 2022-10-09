<?php
class Cuadrado extends Figura implements Dibujable, Rotable{
    private $lado;
    public function area($lado){
        return $this->lado*$this->lado."\n";
    }
    public function rotable()
    {
        return "cuadrado rotado\n";
    }
    public function dibujable()
    {
        return "cuadrado dibujado\n";
    }
}