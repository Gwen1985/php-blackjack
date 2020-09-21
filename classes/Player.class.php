<?php

class Player
{
    private array $cards;
    private bool $lost = false;

    /**
     * player constructor.
     * @param array $cards
     */
    public function __construct(array $cards)
    {
        $this->cards = $cards;
    }
    //public methods
    public function hit()
    {
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

}