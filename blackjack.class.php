<?php

class blackjack {

    private $player;
    private $dealer;
    private $deck;

    /**
     * Blackjack constructor.
     * @param $player
     * @param $dealer
     * @param $deck
     */

    public function __construct($player, $dealer, $deck)
    {
        $this->player = $player;
        $this->dealer = $dealer;
        $this->deck = $deck;
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
    public function getPlayer()
    {
        return $this->player;
    }


}