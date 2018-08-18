<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use PHPDataStructures\LinkedLists\LinkedList;
use PHPDataStructures\LinkedLists\Node;

$linkedList = new LinkedList(new Node(1));

$linkedList->push(2);
$linkedList->push(3);
$linkedList->push(4);

$linkedList->insertAfter(2,5);
$linkedList->insertAtTheEnd(6);

$linkedList->printList();