<?php

require_once('classes/Item.php');
require_once('classes/Ataque.php');
require_once('classes/Defesa.php');
require_once('classes/Magia.php');
require_once('classes/Inventario.php');
require_once('classes/Player.php');

$player1 = new Player("Steve");
$player2 = new Player("Alex");

$ataque1 = new Ataque("Espada de Diamante");
$ataque2 = new Ataque("Espada de Netherita");
$ataque3 = new Ataque("Machado de Ferro");

$defesa1 = new Defesa("Escudo");
$defesa2 = new Defesa("Peitoral de Diamante");
$defesa3 = new Defesa("Elmo de Ouro");

$magia1 = new Magia("Varinha de Blaze");
$magia2 = new Magia("Pó de Redstone");
$magia3 = new Magia("Totem da Imortalidade");

$player1->coletarItem($ataque1);
$player1->coletarItem($ataque2);
$player1->coletarItem($defesa1);
$player1->coletarItem($magia1);
$player1->coletarItem($magia2);

$player2->coletarItem($defesa2);
$player2->coletarItem($magia3);
$player2->soltarItem($defesa2);

$player2->subirNivel();

?>
