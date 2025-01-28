<?php
ini_set("display_errors",1);
function createArray() {
    $arr = range(1, 10); // Creates an array of numbers from 1 to 10
    return $arr;
}
function listArray($arr) {
    foreach ($arr as $number) {
        echo $number . "<br>"; // Print each number in the array
    }
}
$array = createArray();
listArray($array);
?>
