<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
include_once "DivideByZeroException.php";

function divide($numerator, $denominator): float|int
{
    if ($denominator === 0) {
        throw new DivideByZeroException();
    }
    return $numerator / $denominator;
}

try {
    $result = divide(123, 32);
    echo $result;
    $result = divide(123, 0);
    echo $result;
} catch (DivideByZeroException $e) {
    echo "Co loi: " . $e;
}
