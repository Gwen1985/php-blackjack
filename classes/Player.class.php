<?php

declare(strict_types=1);

class Player
{
    protected array $cards;
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

    public function getPlayerScore()
    {
        $totalscore = 0;
        foreach ($this->cards as $card) {
            $totalscore += $card->getValue();
        }
        return $totalscore;
    }

    public function hasLost($lost)
    {
//        $this->lost->$this->getPlayerScore();
//        if ($this->getPlayerScore() >= 22) {
//            $this->lost = true;
//        }
    }

    /**
     * @return array
     */
    public function getCards(): array
    {
        return $this->cards;
    }


}