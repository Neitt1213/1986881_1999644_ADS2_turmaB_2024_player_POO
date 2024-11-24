<?php

require_once('Item.php');

class Ataque extends Item {
    public function construct(string $name) {
        parent::construct($name);
        $this->setTamanho(7);
        $this->setClasse("Ataque");
    }
}

?>