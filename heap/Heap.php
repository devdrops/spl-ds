<?php

class Heap extends \SplHeap
{
    protected function compare($value1, $value2)
    {
        if ($value1 > $value2) {
            return 1;
        }
        
        if ($value1 < $value2) {
            return -1;
        }
        
        if ($value1 == $value2) {
            return 0;
        }        
    }
}
