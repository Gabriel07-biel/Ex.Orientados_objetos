<?php
class retangulo {
    private $ladoMaior;
    private $ladoMenor;

    public function setLadoMaior(float $maior): void{
        $this->ladoMaior = $maior;
    }
    public function setLadoMenor(float $menor): void {
        $this->ladoMenor = $menor;
    }
    public function calculaArea(): float {
        return $this->ladoMaior * $this->ladoMenor;
    }
}