<?php

require_once('Item.php');

class Inventario {
    private int $capacidadeMaxima;
    private array $itens = [];

    public function __construct(int $capacidadeMaxima) {
        $this->capacidadeMaxima = $capacidadeMaxima;
        $this->itens = [];
    }

    public function getCapacidadeMaxima(): int {
        return $this->capacidadeMaxima;
    }

    public function setCapacidadeMaxima(int $capacidadeMaxima): void {
        if ($capacidadeMaxima >= 20) {
            $this->capacidadeMaxima = $capacidadeMaxima;
        } else {
            $this->capacidadeMaxima = 0;
        }
    }

    public function getItens(): array {
        return $this->itens;
    }

    public function setItens($itens): void {
        if (empty($itens)) {
            $this->itens = [];
        } else {
            $this->itens = $itens;
        }
    }

    public function adicionar(Item $item): bool {
        $totalOcupado = 0;
        foreach ($this->itens as $i) {
            $totalOcupado += $i->getTamanho();
        } if ($totalOcupado + $item->getTamanho() <= $this->capacidadeMaxima) {
            $this->itens[] = $item;
            return true;
        } return false;
    }

    public function remover(Item $item): bool {
        foreach ($this->itens as $chave => $i) {
            if ($i === $item) {
                unset($this->itens[$chave]);
                return true;
            }
        } return false;
    }

    public function capacidadeLivre(): int {
        $totalOcupado = 0;
        foreach ($this->itens as $i) {
            $totalOcupado += $i->getTamanho();
        } return $this->capacidadeMaxima - $totalOcupado;
    }
}

?>