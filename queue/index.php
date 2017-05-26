<?php

echo PHP_EOL;

echo '>>> Default iterator mode: IT_MODE_FIFO'.PHP_EOL;
$foo = new \SplQueue();

for ($i = 0; $i < 10; $i++) {
    $foo->enqueue('Element '.$i);
}

foreach($foo as $element){
    var_dump($element);
}

for ($i = 0; $i < 10; $i++) {
    $foo->dequeue();
}

var_dump($foo->count().' Elements in the queue.');


echo PHP_EOL;

sleep(2);


echo '>>> Iterator mode: IT_MODE_LIFO'.PHP_EOL;
$foo = new \SplQueue();
$foo->setIteratorMode($foo::IT_MODE_LIFO);

