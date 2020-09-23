<?php

declare(strict_types=1);

class Blackjack
{
    // create properties
    private Player $player;
    private $dealer;
    private Deck $deck;

    /**
     * Blackjack constructor.
     * @param $player
     * @param $dealer
     * @param $deck
     */

    //constructor for every start of a new game
    public function __construct()
    {
        //create a new deck of 52 cards
        $this->deck = new Deck();
        // shuffle the 52 cards
        $this->deck->shuffle();
        // create a new player
        $this->player = new Player($this->deck);
        // create a new dealer
        $this->dealer = new Player($this->deck);
    }

    /**
     * @return mixed
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * @return mixed
     */
    public function getDealer()
    {
        return $this->dealer;
    }

}