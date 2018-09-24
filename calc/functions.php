<?php

//function calculator($x, $y, $op)
//{
//    if ($op = '+') {
//        return $x + $y;
//    } elseif ($op = '-') {
//        return $x - $y;
//    } elseif ($op = '*') {
//        return $x * $y;
//    } elseif ($op = '/') {
//        return $x / $y;
//    } else {
//        echo 'error';
//    }
//}

function calculator($x, $y, $op){
switch ( $op ) {
    case '+':
       return ($x + $y);
        break;
    case '-':
        return ($x - $y);
        break;
    case '*':
        return ($x * $y);
        break;
    case '/':
        return ($x / $y);
        break;
    default:
        echo 'error';
        break;
}
}

?>