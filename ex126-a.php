<?php
class Quadrado {
    private $lado;

    public function setLado(float $lado) : void {
        $this->lado = $lado;
    }
    public function calculaArea(): float {
        return $this->lado * $this->lado;
    }
}
?>
