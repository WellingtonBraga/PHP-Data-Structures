<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use PHPDataStructures\Heap\Heap;
$heap = new Heap();

$heap->add(5);
$heap->print();
echo PHP_EOL;

$heap->add(4);

$heap->print();
echo PHP_EOL;

$heap->add(3);

$heap->print();
echo PHP_EOL;

$heap->add(1);
$heap->print();