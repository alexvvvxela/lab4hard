<?php

class Tomato
{
    const NOTHING = 0;
    const FLOWER = 1;
    const GREEN_TOMATO = 2;
    const RED_TOMATO = 3;

    private $index;
    private $state;

    public function __construct($index)
    {
        $this->index = $index;

        $this->state = self::NOTHING;
    }

    public function grow(): void
    {
        if ($this->state < self::RED_TOMATO) {
            $this->state++;
        }
    }

    public function isRipe(): bool
    {

        return $this->state === self::RED_TOMATO;
    }
}
