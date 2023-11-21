<?php
class Triangulo {
    private $base;
    private $altura;

    public function setBase(float $base) : void {
        $this->base = $base;
    }
    public function setAltura(float $altura) : void {
        $this->altura = $altura;
    }
    public function calcularArea(): float {
        return 0.5 * $this->base * $this->altura;
    }
}

?>