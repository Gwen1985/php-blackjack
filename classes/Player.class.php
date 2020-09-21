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
    }

    //public methods
    public function hit(Deck $deck)
    {
        return $playerNextCard = $deck->drawCard();

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