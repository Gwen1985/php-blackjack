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

        $dealerFirstCard = $deck->drawCard();
        $dealerSecondCard = $deck->drawCard();
        $this->cards = [$dealerFirstCard, $dealerSecondCard];
    }


    //public methods
    public function hit(Deck $deck)
    {
        if (isset($_POST['hitBtn'])) {
            $deck->drawCard();

//        if ($_POST['click']) {
//            $playerNextCard = $deck->drawCard();
//            $this->cards = [$playerNextCard];
//            echo "<span style='font-size:120px'>" . $card->getUnicodeCharacter(true) . "</span>";
        }
    }


    public function surrender()
    {
    }

    public function getScore()
    {
    }

    public function hasLost()
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