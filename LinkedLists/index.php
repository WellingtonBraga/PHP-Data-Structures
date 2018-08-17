<?php

$linkedList = new LinkedList(new Node(1));

// Inserting new elements to the list
$linkedList->push(2);
$linkedList->push(3);
$linkedList->push(4);

$linkedList->insertAfter(2,5);
$linkedList->insertAtTheEnd(6);

echo '[PRINTING LINKED LIST ELEMENTS]<br>';
$linkedList->printList();
echo '<br><br>';

echo '[COUNTING HOW MANY ELEMENTS THE LIST HAS]<br>';
echo $linkedList->countNodesInLinkedList();