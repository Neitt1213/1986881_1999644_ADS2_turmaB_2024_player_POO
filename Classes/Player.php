<?php

require_once('Inventario.php');

class Player {
    private string $nickname;
    private int $nivel;
    private Inventario $inventario;

    public function __construct(string $nickname) {
        $this->setNickname($nickname);
        $this->setNivel(1);
        $this->inventario = new Inventario(20);
    }

    public function getNickname(): string {
        return $this->nickname;
    }

    public function setNickname(string $nickname): void {
        if ($nickname != "") {
            $this->nickname = $nickname;
        } else {
            $this->nickname = "Digite seu nickname";
        }
    }

    public function getNivel(): int {
        return $this->nivel;
    }

    public function setNivel(int $nivel): void {
        if ($nivel >= 1) {
            $this->nivel = $nivel;
        } else {
            $this->nivel = 1;
        }
    }

    public function getInventario(): Inventario {
        return $this->inventario;
    }

    public function setInventario(Inventario $inventario): bool {
        if ($inventario->getCapacidadeMaxima() > 0) {
            $this->inventario = $inventario;
            return true;
        } return false;
    }

    public function coletarItem(Item $item): bool {
        if ($this->inventario->adicionar($item)) {
            echo "Um item foi adicionado ao seu inventário.<br>";
            return true;
        } else {
            echo "Não há espaço suficiente para coletar o item.<br><br>";
            return false;
        }
    }

    public function soltarItem(Item $item): bool {
        if ($this->inventario->remover($item)) {
            echo "Um item foi removido do seu inventário.<br>";
            return true;
        } else {
            echo "<br>Este item não foi encontrado no seu inventário.<br>";
            return false;
        }
    }

    public function subirNivel(): void {
        $this->nivel++;
        $aumento = $this->nivel * 3;
        $atualizacao = 20 + $aumento;
        $this->inventario->setCapacidadeMaxima($atualizacao);
        echo "<br>Você subiu para o nível {$this->nivel}! E a capacidade máxima do seu inventário aumentou para {$atualizacao}.<br>";
    }
}

?>
