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
//require 'classes/card.class.php';
//require 'classes/deck.class.php';

$deck = new Deck();
$deck->shuffle();

foreach ($deck->getCards() as $card) {
    echo $card->getUnicodeCharacter(true);
    echo '<br>';
}