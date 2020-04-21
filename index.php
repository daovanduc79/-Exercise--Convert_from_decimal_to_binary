<?php
include_once 'class/StackBinary.php';


$convert = new StackBinary(100);
$number = 13;

while ($number != 0 ){

    try {
        $convert->push($number % 2);
    } catch (Exception $e) {
    }
    $number = floor($number / 2);
}
echo "Binary Number : ";
while (!$convert->isEmpty()){
    try {
        echo $convert->pop() . " ";
    } catch (Exception $e) {
    }
}