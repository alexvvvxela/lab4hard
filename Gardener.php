<?php

require_once 'tomatoBush.php';

class Gardener
{
    public $name;
    private $plant;

    public function __construct($name, $plant)
    {
        $this->name = $name;
        $this->plant = $plant;
    }

    public function work(): void
    {
        $this->plant->growAll();
    }

    public function harvest(): void
    {
        if ($this->plant->allAreRipe()) {
            echo 'Урожай собран!' . PHP_EOL;

            $this->plant->giveAwayAll();
        } else {
            echo 'Помидорки еще не все созрели.' . PHP_EOL;
        }
    }

    public static function KnowledgeBase(): void
    {

        echo 'Справка по садоводству' . PHP_EOL;
        echo 'Ухаживайте за помидорками пока они не созрели' . PHP_EOL;
    }
}
