<?php
require 'Character.php';

$akali = new Character();
$akali->setName('Akali');
$akali->setAttack(20);
$akali->setLife(100);

$garen = new Character();
$garen->setName('Garen');
$garen->setAttack(40);
$garen->setLife(100);

var_dump($akali, $garen);