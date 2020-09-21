<?php

class Blackjack
{

    private Player $player;
    private $dealer;
    private Deck $deck;

    /**
     * Blackjack constructor.
     * @param $player
     * @param $dealer
     * @param $deck
     */

    public function __construct()
    {
        $this->deck = new Deck();
        $this->deck->shuffle();

        $this->player = new Player($this->deck);
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

    /**
     * @return mixed
     */
//    public function getPlayer()
//    {
//        return $this->player;
//    }


}