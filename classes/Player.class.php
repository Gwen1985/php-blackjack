<?php

class Player
{
    private array $cards;
    private bool $lost = false;


    /**
     * player constructor.
     * @param array $cards
     */
    public function __construct(Deck $deck)
    {
        $playerFirstCard = $deck->drawCard();
        $playerSecondCard = $deck->drawCard();
        $this->cards = [$playerFirstCard, $playerSecondCard];

        $dealerFirstCard = $deck->drawCard();
        $dealerSecondCard = $deck->drawCard();
        $this->cards = [$dealerFirstCard, $dealerSecondCard];
    }

    //public methods
    public function hit(Deck $deck)
    {
        $deck->drawCard();
        $this->cards = [];
    }

    public
    function surrender()
    {
    }

    public
    function getScore()
    {
    }

    public
    function hasLost()
    {
    }

}