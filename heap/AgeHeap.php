<?php

class AgeHeap extends \SplHeap
{
    protected function compare($value1, $value2)
    {
        return $value1['age'] - $value2['age'];
    }
}

