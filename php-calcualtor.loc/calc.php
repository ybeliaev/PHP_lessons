<?php

function calculate($x, $y, $op){
    switch ($op){
        case '+':
            return $x + $y;
            break;
        case '-':
            return $x - $y;
            break;
        case '*':
            return $x * $y;
            break;
        case '/':
            return $x / $y;
            break;
        default:
            return null;
    }
}
assert(4 == calculate(2,2,'*'));



?>