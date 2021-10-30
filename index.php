<?php
require __DIR__.'/vendor/autoload.php';

use RPS\Game;
use App\Debug;
use App\MyGame;

$game = new Game();
$myGame = new MyGame();

Debug::dump($game->play('scissors'));
Debug::dump($myGame->play('head'));