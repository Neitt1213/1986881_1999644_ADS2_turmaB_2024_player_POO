<?php

require_once('Item.php');

class Magia extends Item {
    public function construct(string $name) {
        parent::construct($name);
        $this->setTamanho(2);
        $this->setClasse("Magia");
    }
}

?>