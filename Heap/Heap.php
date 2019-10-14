<?php


namespace PHPDataStructures\Heap;


class Heap
{

    /**
     * @var array
     */
    private $heap = [];

    /**
     * @var int
     */
    private $size = 0;

    /**
     * @param int $parent
     * @return int
     */
    private function getLeftChildIndex(int $parent): int
    {
        return ($parent * 2) + 1;
    }

    /**
     * @param int $parent
     * @return int
     */
    private function getRightChildIndex(int $parent): int
    {
        return ($parent * 2) + 2;
    }

    /**
     * @param int $childIndex
     * @return int
     */
    private function getParentIndex(int $childIndex): int
    {
        return ($childIndex - 1) / 2;
    }

    /**
     * @param int $childIndex
     * @return bool
     */
    private function hasParent(int $childIndex): bool
    {
        return isset($this->heap[$this->getParentIndex($childIndex)]);
    }

    /**
     * @param int $parent
     * @return bool
     */
    private function hasLeftChild(int $parent): bool
    {
        return isset($this->heap[$this->getLeftChildIndex($parent)]);
    }

    /**
     * @param int $parent
     * @return bool
     */
    private function hasRightChild(int $parent): bool
    {
        return isset($this->heap[$this->getRightChildIndex($parent)]);
    }

    /**
     * @param int $child
     * @param int $parent
     */
    private function swap(int $child, int $parent)
    {
        $temp = $this->heap[$parent];
        $this->heap[$parent] = $this->heap[$child];
        $this->heap[$child] = $temp;
    }

    /**
     * @param int $value
     */
    public function add(int $value)
    {
        $newIndex = $this->size;
        $this->heap[$newIndex] = $value;

        while($this->hasParent($newIndex) &&
            $this->heap[$this->getParentIndex($newIndex)] > $this->heap[$newIndex]) {
            $parentIndex = $this->getParentIndex($newIndex);
            $this->swap($parentIndex, $newIndex);
            $newIndex = $parentIndex;
        }

        $this->size++;
    }

    public function print()
    {
        foreach ($this->heap as $el) {
            echo $el . " - ";
        }
    }
}