<?php

echo PHP_EOL;

echo '>>> Default iterator mode: IT_MODE_LIFO'.PHP_EOL;
$foo = new \SplStack();

for ($i = 0; $i < 10; $i++) {
    $foo->push('Element '.$i);
}

foreach($foo as $element){
    var_dump($element);
}

for ($i = 0; $i < 10; $i++) {
    $foo->pop();
}

var_dump($foo->count().' Elements in the stack.');


echo PHP_EOL;

sleep(2);


echo '>>> Iterator mode: IT_MODE_FIFO'.PHP_EOL;
$foo = new \SplStack();
$foo->setIteratorMode($foo::IT_MODE_FIFO);

