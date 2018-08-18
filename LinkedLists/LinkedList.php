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
    public function insertAtTheBeginning(int $data): void {
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

    /**
     * Remove the node which contains the first occurence of data
     *
     * @param int $data
     *
     * @return bool If the node was found and removed
     */
    public function deleteNode(int $data) {

        //First we check if head is the Node that should be deleted
        if ($this->head->data === $data) {
            $this->head = $this->head->next;
            return true;
        }

        // If it is not, we iterate over the list until find the previous Node of the
        // the one we are going to delete
        $node = $this->head;

        while($node->next !== null && $node->next->data !== $data) {
            $node = $node->next;
        }

        // Check if the next element of the node is null, if so, then we
        // achieve the end of the list without find the element that should be removed
        if ($node->next === null) {
            return false;
        }

        $node->next = $node->next->next;
        return true;

    }
}