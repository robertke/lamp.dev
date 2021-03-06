<?php
namespace Src;

class AscAgeNumericComparator implements ComparatorInterface
{
    public function compare($a, $b)
    {
        if ($a->getAge() === $b->getAge()) {
            return 0;
        }
        return $a->getAge() < $b->getAge() ? -1 : 1;
    }
}