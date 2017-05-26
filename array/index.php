<?php

echo PHP_EOL;

echo '>>> Numeric example'.PHP_EOL;

$phpArray = [0 => 'foo'];
echo 'Regular PHP array count: '.count($phpArray).PHP_EOL;

$fixedArray = new \SplFixedArray(10);
$fixedArray[0] = 'foo';

echo 'Fixed Array count: '.$fixedArray->count().PHP_EOL;

echo PHP_EOL;
sleep(2);


echo '>>> Only numeric indexes are allowed'.PHP_EOL;

$fixedArray['eita'] = 'giovana';

