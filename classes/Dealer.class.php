<?php

declare(strict_types=1);

class Dealer extends Player
{


    public function getDealerScore()
    {
        $totalscore = 0;
        foreach ($this->cards as $card) {
            $totalscore += $card->getValue();
        }
        return $totalscore;
    }

    public function hasLost()
    {
        if ($this->getDealerScore() >= 22) {
            echo "YOU LOSE";
        }

    }
}