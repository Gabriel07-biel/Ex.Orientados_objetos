<?php
class Sequencia {
    private $inicio; // int
    private $fim;    // int

    public function setInicio(int $inicio): void {
        $this->inicio = $inicio;
    }

    public function setFim(int $fim): void {
        $this->fim = $fim;
    }

    public function exibirTodosNumeros(): void {
        for ($i = $this->inicio; $i <= $this->fim; $i++) {
            echo $i . " ";
        }
    }

    public function exibirPares(): void {
        for ($i = $this->inicio; $i <= $this->fim; $i++) {
            if ($i % 2 === 0) {
                echo $i . " ";
            }
        }
    }

    public function exibirImpares(): void {
        for ($i = $this->inicio; $i <= $this->fim; $i++) {
            if ($i % 2 !== 0) {
                echo $i . " ";
            }
        }
    }
}
?>