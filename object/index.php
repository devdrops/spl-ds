<?php

echo PHP_EOL;

echo '>>> Store unique elements'.PHP_EOL;

$object1 = new \stdClass();
$object2 = new \stdClass();
$object3 = $object1;

$storage = new \SplObjectStorage();

$storage->attach($object1);
$storage->attach($object2);
$storage->attach($object3);

echo 'Storage count: '.$storage->count().PHP_EOL;

echo PHP_EOL;
sleep(2);


echo '>>> Store unique elements, even if we try to change them'.PHP_EOL;

$object1->foo = 1;
$object3->foo = 'bar';

$storage->attach($object3);

echo 'Storage count: '.$storage->count().', no changes'.PHP_EOL;

echo PHP_EOL;
sleep(2);


echo '>>> Store unique elements, now using a clone'.PHP_EOL;

$object3 = clone $object1;

$storage->attach($object3);

echo 'Storage count: '.$storage->count().PHP_EOL;


