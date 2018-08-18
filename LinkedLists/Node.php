<?php

namespace PHPDataStructures\LinkedLists;

/**
 * Class Node
 *
 * Node element of the linked list
 */
class Node {

    /**
     * Data stored in element
     *
     * @var int $data
     */
    public $data;

    /**
     * Next node of the list
     *
     * @var Node $next
     */
    public $next;

    /**
     * Node constructor.
     *
     * @param int $data
     */
    public function __construct(int $data)
    {
        $this->data = $data;
        $this->next = null;
    }
}