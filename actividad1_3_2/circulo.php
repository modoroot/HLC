<?php
class Circulo extends Figura implements Dibujable{
    private $radio;
    public function area($radio){
        return M_PI*$this->radio;
    }
    public function dibujable()
    {
        return "círculo dibujado\n";
    }
}