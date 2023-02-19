<?php

class Player
{
    private int|float $score;

    public function setScore(int|float $score)
    {
        $this->score = $score;
    }

    public function getScore()
    {
        return $this->score;
    }
}

$player = new Player();
$player->setScore(15);
echo $player->getScore() . PHP_EOL;

$player->setScore(12.5);
echo $player->getScore() . PHP_EOL;