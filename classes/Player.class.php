<?php

declare(strict_types=1);

class Player
{
    private array $cards;
    private bool $lost = false;
    private $deck;

    /**
     * player constructor.
     * @param array $cards
     */
    public function __construct(Deck $deck)
    {
        $playerFirstCard = $deck->drawCard();
        $playerSecondCard = $deck->drawCard();
        $this->cards = [$playerFirstCard, $playerSecondCard];

//        $dealerFirstCard = $deck->drawCard();
//        $dealerSecondCard = $deck->drawCard();
//        $this->cards = [$dealerFirstCard, $dealerSecondCard];
    }


    //public methods
    public function hit(Deck $deck)
    {
          $this->cards[] = $deck->drawCard();
          return $this->cards;
    }


    public function surrender()
    {
    }

    public function getScore()
    {
        foreach ($this->cards as $card) {
            $totalscore += $card->getValue();
        }
        return $totalscore;
    }

    public function hasLost($lost)
    {

    }

    /**
     * @return array
     */
    public function getCards(): array
    {
        return $this->cards;
    }


}