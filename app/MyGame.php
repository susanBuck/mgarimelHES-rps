<?php

namespace App;

use RPS\Game;

class MyGame extends Game
{
    protected $moves = ['head', 'tails'];

    /**
     * Compares $playerMove against $computerMove and
     * determines whether player won, or lost
     */
    protected function determineOutcome($playerMove, $computerMove)
    {
        /*
        if ($computerMove == $playerMove) {
            return 'won';
        } else {
            return 'lost';
        }
        */
        return ($computerMove == $playerMove) ? 'won': 'lost';
    }
}