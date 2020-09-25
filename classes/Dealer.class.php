<?php
declare(strict_types=1);

class Dealer extends Player {


    /**
     * Dealer constructor.
     */
    public function __construct()
    {
        $dealerFirstCard = $deck->drawCard();
        $dealerSecondCard = $deck->drawCard();
        $this->cards = [$dealerFirstCard, $dealerSecondCard];
    }


if (isset($_POST['hitBtn'])) {
$blackjack->getDealer()->hit($blackjack->getDeck());
}


}








