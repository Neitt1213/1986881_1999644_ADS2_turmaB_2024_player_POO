<?php

require_once('Inventario.php');

class Player {
    private string $nome;
    private int $nivel;
    private Inventario $inventario;

    public function __construct(string $nome) {
        $this->nome = $nome;
        $this->nivel = 1;  // Aqui eu fiz o nível inicial do jogador
        $this->inventario = new Inventario(20);  // aqui fiz o inventário começar com 20
    }

    public function subirNivel(): void {
        $this->nivel++;
        $novaCapacidade = 20 + (3 * $this->nivel);  // aqui eu fiz pra ele aumentar a capacidade em 3x por nivel
        $this->inventario->setCapacidadeMaxima($novaCapacidade);  // aqui eu fiz pra ele atualizar a capacidade maxima do inventário 
    }

    public function coletarItem(Item $item): bool {
        return $this->inventario->adicionar($item);
    }

    public function soltarItem(Item $item): bool {
        return $this->inventario->remover($item);
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getNivel(): int {
        return $this->nivel;
    }

    public function getInventario(): Inventario {
        return $this->inventario;
    }

    public function getCapacidadeLivre(): float {
        return $this->inventario->capacidadeLivre();
    }
}

?>
