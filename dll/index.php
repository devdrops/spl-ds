<?php

echo PHP_EOL;

echo '>>> Default iterator mode: IT_MODE_FIFO'.PHP_EOL;
$foo = new \SplDoublyLinkedList();

for ($i = 0; $i < 10; $i++) {
    $foo->add($i, 'Element '.$i);
}

foreach($foo as $element){
    var_dump($element);
}

var_dump('TOP ELEMENT: '.$foo->top());
var_dump('BOTTOM ELEMENT: '.$foo->bottom());

echo PHP_EOL;

sleep(2);


echo '>>> Iterator mode: IT_MODE_LIFO'.PHP_EOL;
$foo = new \SplDoublyLinkedList();
$foo->setIteratorMode($foo::IT_MODE_LIFO);

for ($i = 0; $i < 10; $i++) {
    $foo->add($i, 'Element '.$i);
}

foreach($foo as $element){
    var_dump($element);
}

var_dump('TOP ELEMENT: '.$foo->top());
var_dump('BOTTOM ELEMENT: '.$foo->bottom());

echo PHP_EOL;

sleep(2);


echo '>>> Iterator mode: IT_MODE_DELETE'.PHP_EOL;
$foo = new \SplDoublyLinkedList();
$foo->setIteratorMode($foo::IT_MODE_DELETE);

for ($i = 0; $i < 10; $i++) {
    $foo->add($i, 'Element '.$i);
}

foreach($foo as $element){
    var_dump($element);
}

var_dump('TOP ELEMENT: '.$foo->top());
var_dump('BOTTOM ELEMENT: '.$foo->bottom());

