<?php

require_once('Item.php');

class Magia extends Item {
    public function __construct(string $name, int $tamanho, string $classe) {
        parent::__construct($name);
        $this->setTamanho(2);
        $this->setClasse("Magia");
    }
}

?>