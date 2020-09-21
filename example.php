<?php
declare(strict_types=1);

require 'classes/Suit.class.php';
require 'classes/card.class.php';
require 'classes/deck.class.php';

$deck = new Deck();
$deck->shuffle();
foreach($deck->getCards() AS $card) {
    echo $card->getUnicodeCharacter(true);
    echo '<br>';
}