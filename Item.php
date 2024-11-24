<?php

class Item {
    private string $name;
    private int $tamanho;
    private string $classe;

    public function __construct(string $name, int $tamanho, string $classe) {
        $this->setName($name);
        $this->setTamanho($tamanho);
        $this->setClasse($classe);
    }

    public function getNome(): string {
        return $this->name;
    }

    public function setName(string $name): void {
        if ($name != "") {
            $this->name = $name;
        } else {
            $this->name = "Informe o nome do item";
        }
    }

    public function getTamanho(): int {
        return $this->tamanho;
    }

    public function setTamanho(int $tamanho): void {
        if ($tamanho > 0) {
            $this->tamanho = $tamanho;
        } else {
            $this->tamanho = 0;
        }
    }

    public function getClasse(): string {
        return $this->classe;
    }

    public function setClasse(string $classe): void {
        if ($classe != "") {
            $this->classe = $classe;
        } else {
            $this->classe = "Informe a classe do item";
        }
    }
}

?>