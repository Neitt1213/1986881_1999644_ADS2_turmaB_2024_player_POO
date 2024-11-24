<?php

require_once('Item.php');

class Defesa extends Item {
    public function construct(string $name) {
        parent::construct($name);
        $this->setTamanho(4);
        $this->setClasse("Defesa");
    }
}

?>