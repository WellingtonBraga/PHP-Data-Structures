<?php

namespace PHPDataStructures\LinkedLists\Tests;

use PHPUnit\Framework\TestCase;
use PHPDataStructures\LinkedLists\LinkedList;
use PHPDataStructures\LinkedLists\Node;

/**
 * Class LinkedListTest
 */
class LinkedListTest extends TestCase
{

    /**
     * Test method LinkedList::countNodes
     */
    public function testCountNodes() {
        $linkedList = new LinkedList(new Node(1));

        $linkedList->insertAtTheBeginning(2);
        $linkedList->insertAtTheBeginning(3);
        $linkedList->insertAtTheBeginning(4);

        $this->assertSame(4, $linkedList->countNodes());
    }
}