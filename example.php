<?php

declare(strict_types=1);

//create autoloader for class files
spl_autoload_register('autoLoader');

function autoLoader($className): void
{
    $path = 'classes/';
    $extension = ".class.php";
    $fullpath = $path . $className . $extension;

    include_once $fullpath;
}

//require 'classes/Suit.class.php';
//require 'classes/Card.class.php';
//require 'classes/Deck.class.php';
//
//$deck = new Deck();
//$deck->shuffle();
//
//foreach ($deck->getCards() as $card) {
//    echo $card->getUnicodeCharacter(true);
//    echo '<br>';
//}

$blackjack = new Blackjack();

echo "<pre>";
print_r($blackjack->getPlayer());
echo "</pre>";

echo "<pre>";
print_r($blackjack->getDealer());
echo "</pre>";