<?php

/**
 * Class Node
 *
 * Declares the linked list node structure
 */
class Node {

    public $data;

    public $next;

    public function __construct(int $data)
    {
        $this->data = $data;
        $this->next = null;
    }
}

/**
 * Class LinkedList
 *
 * Contains useful methods for handling the linked list
 */
class LinkedList {

    /**
     * @var Node $head List's head
     */
    private $head;

    /**
     * LinkedList constructor.
     *
     * @param Node $head Linked list head element
     */
    public function __construct(Node $head)
    {
        $this->head = $head;
    }

    /**
     * Prints the list
     *
     */
    public function printLinkedList() {
        $node  = $this->head;

        while($node !== null) {
            echo $node->data . ' -> ';
            $node = $node->next;
        }
    }

    /**
     * Counts how many elements are in the list
     *
     * @return int
     */
    public function countNodesInLinkedList() {
        $node  = $this->head;

        $count = 0;

        while($node !== null) {
            $count++;
            $node = $node->next;
        }

        return $count;
    }

    /**
     * Inserts a new element at the beginning of the list
     *
     * @param int $data
     */
    public function push(int $data) {
        $newNode = new Node($data);
        $newNode->next = $this->head;
        $this->head = $newNode;
    }

    /**
     * Given a value, find the element which holds this value
     * and insert a new element after it
     *
     * @param int $prevValue
     * @param int $data
     *
     * @throws Exception
     */
    public function insertAfter(int $prevValue, int $data) {

        $node = $this->head;

        while ($node->data !== $prevValue && $node !== null) {
            $node = $node->next;
        }

        if ($node === null) {
            throw new Exception('Specified element does not exist in the current list.');
        }

        $newNode = new Node($data);
        $newNode->next = $node->next;
        $node->next = $newNode;
    }

    /**
     * Insert a new element at the end of the list
     *
     * @param int $data
     *
     * @return void
     */
    public function insertAtTheEnd(int $data) {

        if ($this->head === null) {
            $this->head = new Node($data);
            return;
        }

        $node = $this->head;

        while($node->next !== null) {
            $node = $node->next;
        }

        $newNode = new Node($data);
        $node->next = $newNode;
    }

}

$linkedList = new LinkedList(new Node(1));

// Inserting new elements to the list
$linkedList->push(2);
$linkedList->push(3);
$linkedList->push(4);

$linkedList->insertAfter(2,5);
$linkedList->insertAtTheEnd(6);

echo '[PRINTING LINKED LIST ELEMENTS]<br>';
$linkedList->printLinkedList();
echo '<br><br>';

echo '[COUNTING HOW MANY ELEMENTS THE LIST HAS]<br>';
echo $linkedList->countNodesInLinkedList();