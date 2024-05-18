<?php

require_once 'tomato.php';

class TomatoBush
{
    private $tomatoes = [];

    public function __construct($numTomatoes)
    {
        for ($i = 0; $i < $numTomatoes; $i++) {
            $this->tomatoes[] = new Tomato($i);
        }
    }

    public function growAll(): void
    {
        foreach ($this->tomatoes as $tomato) {
            $tomato->grow();
        }
    }

    public function allAreRipe(): bool
    {
        foreach ($this->tomatoes as $tomato) {
            if (!$tomato->isRipe()) {
                return false;
            }
        }
        return true;
    }

    public function giveAwayAll(): void
    {
        $this->tomatoes = [];
    }
}
