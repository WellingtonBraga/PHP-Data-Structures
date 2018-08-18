<?php

namespace PHPDataStructures\LinkedLists;

/**
 * Class LinkedList
 *
 * Class which handles the list
 */
class LinkedList
{

    /**
     * First element of the list
     * @var Node $head
     */
    private $head;

    /**
     * LinkedList constructor.
     *
     * @param Node $head
     */
    public function __construct(Node $head)
    {
        $this->head = $head;
    }

    /**
     * Prints the list
     *
     */
    public function printList() {
        $node  = $this->head;

        while($node !== null) {
            echo $node->data . ' ';
            $node = $node->next;
        }
    }

    /**
     * Counts how many elements are in the list
     *
     * @return int
     */
    public function countNodes() {
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
    public function push(int $data): void {
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