<?php
include 'rotable.php';
include 'dibujable.php';
include 'figura.php';
include 'cuadrado.php';
include 'circulo.php';
class Main{
    
}
$circulo = new Circulo(4);
$cuadrado = new Cuadrado(6);
$circulo -> area();
$cuadrado -> area();
$circulo -> dibujable();
$cuadrado -> rotable();
