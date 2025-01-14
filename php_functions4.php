<?php
function createArray() {
    $arr = range(1, 10); // Creates an array of numbers from 1 to 10
    return $arr;
}
?>

<?php
function listArray($arr) {
    foreach ($arr as $number) {
        echo $number . "\n"; // Print each number in the array
    }
}
?>
