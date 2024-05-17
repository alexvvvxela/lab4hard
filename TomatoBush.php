<?php

require_once 'tomato.php';

class TomatoBush {
    private $tomatoes = [];

    public function __construct($numTomatoes) {
        for ($i = 0; $i < $numTomatoes; $i++) {
            $this->tomatoes[] = new Tomato($i);
        }
    }

    public function growAll() {
        foreach ($this->tomatoes as $tomato) {
            $tomato->grow();
        }
    }

    public function allAreRipe() {
        foreach ($this->tomatoes as $tomato) {
            if (!$tomato->isRipe()) {
                return false;
            }
        }
        return true;
    }

    public function giveAwayAll() {
        $this->tomatoes = [];
    }
}

?>