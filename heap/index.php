<?php

require __DIR__.'/AgeHeap.php';
require __DIR__.'/Heap.php';

echo PHP_EOL;

echo '>>> Numeric example'.PHP_EOL;
$data = range(0, 10);
shuffle($data);
var_dump($data);

$heap = new Heap();

foreach($data as $value) {
    $heap->insert($value);
}

foreach($heap as $node) {
    var_dump('Node '.$node);
};

echo 'Node count:'.$heap->count().PHP_EOL;

echo PHP_EOL;
sleep(2);


echo '>>> Alphabetic example'.PHP_EOL;
$data = range(65, 90);
shuffle($data);

$heap = new Heap();

foreach($data as $value) {
    $heap->insert(chr($value));
}

foreach($heap as $node) {
    var_dump('Char '.$node);
};


echo PHP_EOL;
sleep(2);

echo '>>> The AgeHeap'.PHP_EOL;

$ageHeap = new AgeHeap();

$ageHeap->insert(['name' => 'John Doe', 'age' => 33]);
$ageHeap->insert(['name' => 'Joseph Potatoes', 'age' => 30]);
$ageHeap->insert(['name' => 'Ernest le Vampire', 'age' => 300]);
$ageHeap->insert(['name' => 'Conan the Barbarian', 'age' => 53]);
$ageHeap->insert(['name' => 'Eek the Cat', 'age' => 3]);

foreach ($ageHeap as $item) {
    var_dump($item['name'].' is '.$item['age'].' YO.');
}

