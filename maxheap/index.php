<?php

echo PHP_EOL;

echo '>>> Numeric example'.PHP_EOL;
$data = range(0, 10);
shuffle($data);
var_dump($data);

$heap = new \SplMaxHeap();

foreach($data as $value) {
    $heap->insert($value);
}

foreach($heap as $node) {
    var_dump('Node '.$node);
};

