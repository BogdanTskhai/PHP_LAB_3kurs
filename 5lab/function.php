<?php
function which_is_larger(int | float $n1, int | float $n2): int | float | NULL{
    if ($n1 == $n2) {
         return NULL;
    }
    elseif ($n1 < $n2){
    return $n2;
    }
    else{
    return $n1;
    }
}
