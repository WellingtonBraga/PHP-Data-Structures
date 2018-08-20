<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use PHPDataStructures\LinkedLists\LinkedList;
use PHPDataStructures\LinkedLists\Node;

$linkedList = new LinkedList(new Node(1));

$linkedList->insertAtTheBeginning(2);
$linkedList->insertAtTheBeginning(3);
$linkedList->insertAtTheBeginning(4);

// Prints the list
$linkedList->printList();