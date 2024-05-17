<?php

require_once 'gardener.php';

Gardener::KnowledgeBase();

$tomatoBush = new TomatoBush(3);
$gardener = new Gardener('Садовник Иван', $tomatoBush);

$gardener->work();
$gardener->harvest();
$gardener->work();
$gardener->harvest();
$gardener->work();
$gardener->harvest();

?>